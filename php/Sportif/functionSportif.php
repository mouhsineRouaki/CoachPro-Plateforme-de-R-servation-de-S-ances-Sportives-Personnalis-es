<?php 
require "../../config/connexion.php";
session_start();

function getUtilisateur(){
    global $conn;
    $stmt = $conn->prepare("SELECT *,YEAR(date_creation) as dateU FROM utilisateur WHERE id_utilisateur = ?");
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function getSportif(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM sportif WHERE id_utilisateur = ?");
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}


function getNombreTotalCoach(){
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM coach");
    $stmt->execute();
    $result = $stmt->get_result();
    $total = $result->fetch_assoc();
    return $total["total"];
}


function getNombreReservationsByStatus($status){
    global $conn;
    $sportif = getSportif();
    if (!$sportif) return 0;
    
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM reservation WHERE id_sportif = ? AND status = ?");
    $stmt->bind_param("is", $sportif["id_sportif"], $status);
    $stmt->execute();
    $result = $stmt->get_result();
    $total = $result->fetch_assoc();
    return $total["total"];
}


function getStatistiquesReservations(){
    return [
        'total' => getNombreReservationsByStatus('confirmee') + getNombreReservationsByStatus('en_attente') + getNombreReservationsByStatus('annulee'),
        'confirmees' => getNombreReservationsByStatus('confirmee'),
        'en_attente' => getNombreReservationsByStatus('en_attente'),
        'annulees' => getNombreReservationsByStatus('annulee')
    ];
}
function filterCoach($recherche, $sport, $annee_experience, $date) {
    global $conn;

    $sql = "
        SELECT 
            u.nom,
            u.prenom,
            c.annee_experience,
            s.nom_sport,
            d.date
        FROM utilisateur u
        INNER JOIN coach c ON c.id_utilisateur = u.id_utilisateur
        INNER JOIN coach_sport cs ON cs.id_coach = c.id_coach
        INNER JOIN sport s ON s.id_sport = cs.id_sport
        INNER JOIN disponibilite d ON d.id_coach = c.id_coach
        WHERE 
            (u.nom LIKE ? OR u.prenom LIKE ?)
            AND (? = '' OR s.nom_sport = ?)
            AND (? = '' OR d.date = ?)
            AND (? = '' OR c.annee_experience >= ?)
    ";

    $stmt = $conn->prepare($sql);

    $like = "%$recherche%";

    $stmt->bind_param(
        "ssssssss",
        $like,
        $like,
        $sport,
        $sport,
        $date,
        $date,
        $annee_experience,
        $annee_experience
    );

    $stmt->execute();
    return $stmt->get_result();
}


function getProchaineSeance(){
    global $conn;
    $sportif = getSportif();
    if (!$sportif) return null;
    
    $stmt = $conn->prepare("
        SELECT r.*, c.biographie, u.nom, u.prenom, s.nom_sport,
               r.date_seance, r.heure_debut, r.heure_fin
        FROM reservation r
        INNER JOIN coach c ON r.id_coach = c.id_coach
        INNER JOIN utilisateur u ON c.id_utilisateur = u.id_utilisateur
        INNER JOIN sport s ON r.id_sport = s.id_sport
        WHERE r.id_sportif = ? 
        AND r.status = 'confirmee'
        AND r.date_seance >= CURDATE()
        ORDER BY r.date_seance ASC, r.heure_debut ASC
        LIMIT 1
    ");
    $stmt->bind_param("i", $sportif["id_sportif"]);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
function confirmeProchaineSeance(){
    if(getProchaineSeance()){
        return true;
    }
    return false ;
}
function createCoachCard($coach) {
    $img = !empty($coach['coach_img']) ? $coach['coach_img'] : 'https://placehold.net/avatar.svg';

    $disciplinesHtml = '';
    if (!empty($coach['disciplines']) && is_array($coach['disciplines'])) {
        foreach ($coach['disciplines'] as $d) {
            $disciplinesHtml .= '<span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">'.$d.'</span>';
        }
    }

    return '
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 p-6 transform hover:-translate-y-1">
        <img src="'.$img.'" 
             alt="'.$coach['nom'].' '.$coach['prenom'].'" 
             class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 class="text-xl font-bold text-gray-800">'.$coach['nom'].' '.$coach['prenom'].'</h3>
        <p class="text-purple-600 font-semibold text-sm mb-2">'.$coach['annee_experience'].' ans d\'expérience</p>
        <div class="flex flex-wrap gap-2 mb-4">'.$disciplinesHtml.'</div>
        <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
            <a href="../../pages/Sportif/detailsCoach.php?id_coach="'.$coach['id_coach'].'">Voir le profil</a>
        </button>
    </div>';
}




function getToutesReservations($limit = null){
    global $conn;
    $sportif = getSportif();
    if (!$sportif) return [];
    
    $query = "
        SELECT r.*, c.biographie, u.nom, u.prenom, s.nom_sport,
               r.date_seance, r.heure_debut, r.heure_fin, r.status
        FROM reservation r
        INNER JOIN coach c ON r.id_coach = c.id_coach
        INNER JOIN utilisateur u ON c.id_utilisateur = u.id_utilisateur
        INNER JOIN sport s ON r.id_sport = s.id_sport
        WHERE r.id_sportif = ?
        ORDER BY r.date_reservation DESC
    ";
    
    if ($limit) {
        $query .= " LIMIT ?";
    }
    
    $stmt = $conn->prepare($query);
    if ($limit) {
        $stmt->bind_param("ii", $sportif["id_sportif"], $limit);
    } else {
        $stmt->bind_param("i", $sportif["id_sportif"]);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    
    $reservations = [];
    while ($row = $result->fetch_assoc()) {
        $reservations[] = $row;
    }
    return $reservations;
}

function getReservationsAVenir(){
    global $conn;
    $sportif = getSportif();
    if (!$sportif) return [];
    
    $stmt = $conn->prepare("
        SELECT r.*, c.biographie, u.nom, u.prenom, s.nom_sport
        FROM reservation r
        INNER JOIN coach c ON r.id_coach = c.id_coach
        INNER JOIN utilisateur u ON c.id_utilisateur = u.id_utilisateur
        INNER JOIN sport s ON r.id_sport = s.id_sport
        WHERE r.id_sportif = ? 
        AND r.status = 'confirmee'
        AND r.date_seance >= CURDATE()
        ORDER BY r.date_seance ASC, r.heure_debut ASC
    ");
    $stmt->bind_param("i", $sportif["id_sportif"]);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $reservations = [];
    while ($row = $result->fetch_assoc()) {
        $reservations[] = $row;
    }
    return $reservations;
}

function getTousLesCoaches(){
    global $conn;
    
    $query = "
        SELECT c.*, u.nom, u.prenom, u.email, u.telephone, c.biographie, c.niveau,
               GROUP_CONCAT(DISTINCT s.nom_sport SEPARATOR ', ') as sports
        FROM coach c
        INNER JOIN utilisateur u ON c.id_utilisateur = u.id_utilisateur
        LEFT JOIN coach_sport cs ON c.id_coach = cs.id_coach
        LEFT JOIN sport s ON cs.id_sport = s.id_sport
        GROUP BY c.id_coach
        ORDER BY u.nom ASC
    ";
    
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
       echo createCoachCard($row);
    }
}

function getNombreCoachParSport($nom_sport){
    global $conn;
    $stmt = $conn->prepare("
        SELECT COUNT(DISTINCT cs.id_coach) as total from sport s
        INNER JOIN coach_sport cs on cs.id_sport = s.id_sport
        WHERE s.nom_sport = ?
    ");
    $stmt->bind_param("s", $nom_sport);
    $stmt->execute();
    $result = $stmt->get_result();
    $total = $result->fetch_assoc();
    return $total["total"];
}


function getCoachesParSport($nom_sport){
    global $conn;
    $stmt = $conn->prepare("
        SELECT c.*, u.nom, u.prenom, u.email, c.biographie, c.niveau
        FROM coach c
        INNER JOIN utilisateur u ON c.id_utilisateur = u.id_utilisateur
        INNER JOIN coach_sport cs ON c.id_coach = cs.id_coach
        INNER JOIN sport s ON s.id_sport = cs.id_sport
        WHERE s.nom_sport = ?
        ORDER BY u.nom ASC
    ");
    $stmt->bind_param("s", $nom_sport);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $coaches = [];
    while ($row = $result->fetch_assoc()) {
        $coaches[] = $row;
    }
    return $coaches;
}


function getCoachDetails($id_coach){
    global $conn;
    

    $stmt = $conn->prepare("
        SELECT c.*, u.nom, u.prenom, u.email, u.telephone
        FROM coach c
        INNER JOIN utilisateur u ON c.id_utilisateur = u.id_utilisateur
        WHERE c.id_coach = ?
    ");
    $stmt->bind_param("i", $id_coach);
    $stmt->execute();
    $coach = $stmt->get_result()->fetch_assoc();
    
    if (!$coach) return null;
    
    $stmt = $conn->prepare("
        SELECT s.id_sport, s.nom_sport
        FROM sport s
        INNER JOIN coach_sport cs ON s.id_sport = cs.id_sport
        WHERE cs.id_coach = ?
    ");
    $stmt->bind_param("i", $id_coach);
    $stmt->execute();
    $result = $stmt->get_result();
    $coach['sports'] = [];
    while ($row = $result->fetch_assoc()) {
        $coach['sports'][] = $row;
    }
    
    $stmt = $conn->prepare("
        SELECT * FROM experiences WHERE id_coach = ? ORDER BY date_debut DESC
    ");
    $stmt->bind_param("i", $id_coach);
    $stmt->execute();
    $result = $stmt->get_result();
    $coach['experiences'] = [];
    while ($row = $result->fetch_assoc()) {
        $coach['experiences'][] = $row;
    }
    
    $stmt = $conn->prepare("
        SELECT * FROM certification WHERE id_coach = ? ORDER BY annee DESC
    ");
    $stmt->bind_param("i", $id_coach);
    $stmt->execute();
    $result = $stmt->get_result();
    $coach['certifications'] = [];
    while ($row = $result->fetch_assoc()) {
        $coach['certifications'][] = $row;
    }
    
    return $coach;
}

function getTousLesSports(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM sport ORDER BY nom_sport ASC");
    $stmt->execute();
    $result = $stmt->get_result();
    
    $sports = [];
    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }
    return $sports;
}


function getDisponibilitesCoach($id_coach, $date = null){
    global $conn;
    
    if ($date) {
        $stmt = $conn->prepare("
            SELECT * FROM disponibilite 
            WHERE id_coach = ? AND date = ? AND isReserved = 0
            ORDER BY heure_debut ASC
        ");
        $stmt->bind_param("is", $id_coach, $date);
    } else {
        $stmt = $conn->prepare("
            SELECT * FROM disponibilite 
            WHERE id_coach = ? AND date >= CURDATE() AND isReserved = 0
            ORDER BY date ASC, heure_debut ASC
        ");
        $stmt->bind_param("i", $id_coach);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
    
    $disponibilites = [];
    while ($row = $result->fetch_assoc()) {
        $disponibilites[] = $row;
    }
    return $disponibilites;
}

function creerReservation($id_coach, $id_sport, $date_seance, $heure_debut, $heure_fin){
    global $conn;
    $sportif = getSportif();
    if (!$sportif) return false;
    
    $conn->begin_transaction();
    
    try {
        // Insérer la réservation
        $stmt = $conn->prepare("
            INSERT INTO reservation (id_sportif, id_coach, id_sport, date_seance, heure_debut, heure_fin, status, date_reservation)
            VALUES (?, ?, ?, ?, ?, ?, 'en_attente', NOW())
        ");
        $stmt->bind_param("iiisss", $sportif["id_sportif"], $id_coach, $id_sport, $date_seance, $heure_debut, $heure_fin);
        $stmt->execute();
        
        $conn->commit();
        return true;
    } catch (Exception $e) {
        $conn->rollback();
        return false;
    }
}


function annulerReservation($id_reservation){
    global $conn;
    $sportif = getSportif();
    if (!$sportif) return false;
    
    $stmt = $conn->prepare("
        UPDATE reservation 
        SET status = 'annulee' 
        WHERE id_reservation = ? AND id_sportif = ?
    ");
    $stmt->bind_param("ii", $id_reservation, $sportif["id_sportif"]);
    
    return $stmt->execute();
}


function modifierReservation($id_reservation, $date_seance, $heure_debut, $heure_fin){
    global $conn;
    $sportif = getSportif();
    if (!$sportif) return false;
    
    $stmt = $conn->prepare("
        UPDATE reservation 
        SET date_seance = ?, heure_debut = ?, heure_fin = ?, status = 'en_attente'
        WHERE id_reservation = ? AND id_sportif = ?
    ");
    $stmt->bind_param("sssii", $date_seance, $heure_debut, $heure_fin, $id_reservation, $sportif["id_sportif"]);
    
    return $stmt->execute();
}

?>
