<?php
require_once "../../config/connexion.php";
require_once "./functionCoach.php";
$coach = getCoach();
$id_coach = $coach["id_coach"];

$stmt = $conn->prepare("
    SELECT 
        id_disponibilite AS id,
        date,
        TIME(heure_debut) AS startTime,
        TIME(heure_fin) AS endTime,
        isReserved
    FROM disponibilite
    WHERE id_coach = ?
    ORDER BY date, heure_debut
");
$stmt->bind_param("i", $id_coach);
$stmt->execute();

echo json_encode($stmt->get_result()->fetch_all(MYSQLI_ASSOC));
