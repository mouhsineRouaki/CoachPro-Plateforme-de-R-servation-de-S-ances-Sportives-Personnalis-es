<?php
require_once "../../config/connexion.php";
require_once "./functionCoach.php";


header('Content-Type: application/json');
$coach = getCoach();
$id_coach = $coach['id_coach'] ?? null;
$action = $_POST['action'] ?? null;

if (!$id_coach || !$action) {
    echo json_encode(response(false, "Accès refusé"));
    exit;
}

$data = $_POST; 

switch ($action) {
    case 'get':
        echo json_encode(getCoachProfile($id_coach, $conn));
        break;

    case 'updateInfo':
        echo json_encode(updatePersonalInfo($id_coach, $data, $conn));
        break;

    case 'updateBio':
        echo json_encode(updateBiographie($id_coach, $data['biographie'], $conn));
        break;

    case 'addSport':
        echo json_encode(addSportToCoach($data));
        break;

    case 'addExperience':
        echo json_encode(addExperience($data));
        break;

    case 'deleteSport':
        echo json_encode(deleteSport($id_coach, $data['id_sport'], $conn));
        break;

    case 'deleteExperience':
        echo json_encode(deleteExperience($id_coach, $data['id_experience'], $conn));
        break;

    case 'getSportsCoach':
        echo json_encode(getCoachSports());
        break;

    case 'getExperiences':
        echo json_encode(getCoachExperiences());
        break;

    default:
        echo json_encode(response(false, "Action inconnue"));
}
