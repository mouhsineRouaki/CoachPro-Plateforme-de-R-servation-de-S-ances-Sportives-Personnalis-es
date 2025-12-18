<?php
require_once "../../config/connexion.php"; 


$recherche = isset($_GET['recherche']) ? $_GET['recherche'] : '';
$sport = isset($_GET['sport']) ? $_GET['sport'] : '';
$experience = isset($_GET['experience']) ? $_GET['experience'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';

function filterCoach($recherche, $sport, $annee_experience, $date) {
    global $conn;
    $sql = "
        SELECT 
            u.nom,
            u.prenom,
            c.annee_experience,
            c.coach_img,
            c.id_coach,
            s.nom_sport,
            d.date
        FROM utilisateur u
        INNER JOIN coach c ON c.id_utilisateur = u.id_utilisateur
        INNER JOIN coach_sport cs ON cs.id_coach = c.id_coach
        INNER JOIN sport s ON s.id_sport = cs.id_sport
        INNER JOIN disponibilite d ON d.id_coach = c.id_coach
        WHERE  (u.nom LIKE ? OR u.prenom LIKE ?) AND (? = '' OR s.nom_sport = ?) AND (? = '' OR d.date = ?) AND (? = '' OR c.annee_experience >= ?)
    ";

    $stmt = $conn->prepare($sql);
    $like = "%$recherche%";

    $stmt->bind_param("ssssssss",$like,$like,$sport,$sport,$date,$date,$annee_experience,$annee_experience);

    $stmt->execute();
    return $stmt->get_result();
}

$result = filterCoach($recherche, $sport, $experience, $date);

$html = "";
if ($result->num_rows > 0) {
    while ($coach = $result->fetch_assoc()) {
        $disciplines = [$coach['nom_sport']]; 
        $html .= '
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 p-6  transform hover:-translate-y-1">
            <img src="https://placehold.net/avatar.svg" alt="'.$coach['nom'].'" class="w-full h-48 object-cover rounded-lg mb-4">
            <h3 class="text-xl font-bold text-gray-800">'.$coach['nom'].' '.$coach['prenom'].'</h3>
            <p class="text-purple-600 font-semibold text-sm mb-2">'.$coach['annee_experience'].' ans d\'expérience</p>
            <div class="flex flex-wrap gap-2 mb-4">';
            foreach ($disciplines as $d) {
                $html .= '<span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">'.$d.'</span>';
            }
        $html .= '</div>
            <button class="w-full py-2 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition" >
                <a href="../../pages/Sportif/detailsCoach.php?id_coach='.$coach['id_coach'].'">Voir le profil</a>
            </button>
        </div>';
    }
} else {
    $html = '<div class="text-center py-12 text-gray-600">Aucun coach trouvé</div>';
}

echo $html;
