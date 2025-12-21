<?php 
require "../../config/connexion.php";
session_start();
function getNombreTotalCoach(){
    global $conn;
    $stmt = $conn->prepare("select count(*) from coach");
    $stmt->execute();
    $result = $stmt->get_result();
    echo $result;
}
function getCoach(){
    global $conn;
    $stmt = $conn->prepare("select * from coach where id_utilisateur = ?");
    $stmt->bind_param("i",$_SESSION["user_id"]);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
    
}
function getUtilisateur(){
    global $conn;
    $stmt = $conn->prepare("SELECT *,YEAR(date_creation) as dateU FROM utilisateur WHERE id_utilisateur = ?");
    $stmt->bind_param("i", $_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}


function response($success, $message, $data = null) {
    return [
        'success' => $success,
        'message' => $message,
        'data' => $data
    ];
}

function getCoachProfile($id_coach, $conn) {
    $sql = "
        SELECT u.nom, u.prenom, u.email, u.telephone,
               c.biographie, c.niveau
        FROM coach c
        JOIN utilisateur u ON u.id_utilisateur = c.id_utilisateur
        WHERE c.id_coach = ?
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_coach);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        return response(false, "Profil introuvable");
    }

    return response(true, "Profil récupéré", $result->fetch_assoc());
}


function updatePersonalInfo($id_coach, $data, $conn) {
    if (empty($data['nom']) || empty($data['prenom']) || empty($data['email'])) {
        return response(false, "Champs obligatoires manquants");
    }

    $sql = "
        UPDATE utilisateur u
        JOIN coach c ON c.id_utilisateur = u.id_utilisateur
        SET u.nom=?, u.prenom=?, u.email=?, u.telephone=?, c.niveau=?
        WHERE c.id_coach=?
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssi",
        $data['nom'],
        $data['prenom'],
        $data['email'],
        $data['telephone'],
        $data['niveau'],
        $id_coach
    );

    if ($stmt->execute()) {
        return response(true, "Informations mises à jour");
    }

    return response(false, "Erreur lors de la modification");
}

function updateBiographie($id_coach, $biographie, $conn) {
    if (empty($biographie)) {
        return response(false, "Biographie vide");
    }

    $stmt = $conn->prepare(
        "UPDATE coach SET biographie=? WHERE id_coach=?"
    );
    $stmt->bind_param("si", $biographie, $id_coach);

    if ($stmt->execute()) {
        return response(true, "Biographie mise à jour");
    }

    return response(false, "Erreur lors de la mise à jour");
}


function deleteSport($id_coach, $id_sport, $conn) {
    $stmt = $conn->prepare(
        "DELETE FROM coach_sport WHERE id_coach=? AND id_sport=?"
    );
    $stmt->bind_param("ii", $id_coach, $id_sport);

    if ($stmt->execute()) {
        return response(true, "Sport supprimé");
    }

    return response(false, "Impossible de supprimer le sport");
}


function deleteExperience($id_coach, $id_experience, $conn) {
    $stmt = $conn->prepare(
        "DELETE FROM experiences WHERE id_experience=? AND id_coach=?"
    );
    $stmt->bind_param("ii", $id_experience, $id_coach);

    if ($stmt->execute()) {
        return response(true, "Expérience supprimée");
    }

    return response(false, "Suppression impossible");
}



function getCoachSports()
{
    global $conn;
    $coach = getCoach();
    $id_coach =$coach["id_coach"];

    $stmt = $conn->prepare("
        SELECT  s.id_sport,s.nom_sport
        FROM coach_sport cs
        JOIN sport s ON s.id_sport = cs.id_sport
        WHERE cs.id_coach = ?
    ");
    $stmt->bind_param("i", $id_coach);
    $stmt->execute();

    $result = $stmt->get_result();
    $sports = [];

    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }

    return [
        'success' => true,
        'message' => 'Sports récupérés',
        'data' => $sports
    ];
}
function getSports()
{
    global $conn;

    $stmt = $conn->prepare("
        SELECT * from sport 
    ");
    $stmt->execute();

    $result = $stmt->get_result();
    $sports = [];

    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }
    return $sports;
}



function getCoachExperiences()
{
    global $conn;
    $coach = getCoach();
    $id_coach =$coach["id_coach"];

    $stmt = $conn->prepare("
        SELECT 
            id_experience AS id,
            domaine,
            date_debut AS dateDebut,
            date_fin AS dateFin,
            duree
        FROM experiences
        WHERE id_coach = ?
        ORDER BY date_debut DESC
    ");
    $stmt->bind_param("i", $id_coach);
    $stmt->execute();

    $result = $stmt->get_result();
    $experiences = [];

    while ($row = $result->fetch_assoc()) {
        $experiences[] = $row;
    }

    return [
        'success' => true,
        'message' => 'Expériences récupérées',
        'data' => $experiences
    ];
}

function addSportToCoach($data)
{
    global $conn;
    $coach = getCoach();
    $id_coach =$coach["id_coach"];
    if (!$id_coach) {
        return ['success'=>false, 'message'=>'Accès refusé'];
    }

    $id_sport = $data['id_sport'] ?? null;
    if (!$id_sport) {
        return ['success'=>false, 'message'=>'Sport manquant'];
    }

    $check = $conn->prepare("
        SELECT * FROM coach_sport 
        WHERE id_coach=? AND id_sport=?
    ");
    $check->bind_param("ii", $id_coach, $id_sport);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        return ['success'=>false, 'message'=>'Sport déjà ajouté'];
    }

    $stmt = $conn->prepare("
        INSERT INTO coach_sport (id_coach, id_sport)
        VALUES (?,?)
    ");
    $stmt->bind_param("ii", $id_coach, $id_sport);

    if ($stmt->execute()) {
        return ['success'=>true, 'message'=>'Sport ajouté avec succès'];
    }

    return ['success'=>false, 'message'=>'Erreur lors de l’ajout'];
}

function addExperience($data)
{
    global $conn;
    $coach = getCoach();
    $id_coach =$coach["id_coach"];

    if (!$id_coach) {
        return ['success'=>false, 'message'=>'Accès refusé'];
    }

    $date_debut = $data['date_debut'] ?? null;
    $date_fin   = $data['date_fin'] ?? null;
    $duree      = $data['duree'] ?? null;
    $domaine    = $data['domaine'] ?? null;

    if (!$date_debut || !$date_fin || !$domaine) {
        return ['success'=>false, 'message'=>'Données incomplètes'];
    }

    if ($date_fin < $date_debut) {
        return ['success'=>false, 'message'=>'Dates invalides'];
    }

    $stmt = $conn->prepare("
        INSERT INTO experiences
        (id_coach, date_debut, date_fin, duree, domaine)
        VALUES (?,?,?,?,?)
    ");
    $stmt->bind_param(
        "issis",
        $id_coach,
        $date_debut,
        $date_fin,
        $duree,
        $domaine
    );

    if ($stmt->execute()) {
        return ['success'=>true, 'message'=>'Expérience ajoutée avec succès'];
    }

    return ['success'=>false, 'message'=>'Erreur lors de l’ajout'];
}




?>