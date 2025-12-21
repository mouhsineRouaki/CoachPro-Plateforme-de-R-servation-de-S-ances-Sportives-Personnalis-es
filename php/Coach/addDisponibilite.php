<?php
require_once "../../config/connexion.php";
require_once "./functionCoach.php";
session_start();
$coach = getCoach();
$id_coach = $coach["id_coach"];

$date = $_POST['date'];
$start = $_POST['startTime'];
$end = $_POST['endTime'];

$heure_debut = $date." ".$start;
$heure_fin = $date." ".$end;

if (!$date || !$start || !$end) {
    echo json_encode([
        'success' => false,
        'message' => 'Donnees manquantes'
    ]);
    exit;
}
if ($start < "08:00" || $end > "18:00" || $start >= $end) {
    echo json_encode([
        'success' => false,
        'message' => 'Heures hors du temps de travail (08:00 - 18:00)'
    ]);
    exit;
}
$check = $conn->prepare("SELECT id_disponibilite FROM disponibilite  WHERE id_coach = ? AND date = ?
    AND (
        (? < heure_fin AND ? > heure_debut)
    )
");
$check->bind_param("isss", $id_coach, $date, $heure_debut, $heure_fin);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo json_encode([
        'success' => false,
        'message' => 'Créneau déjà existant ou chevauchement détecté'
    ]);
    exit;
}

$stmt = $conn->prepare("
    INSERT INTO disponibilite (id_coach, date, heure_debut, heure_fin, isReserved)
    VALUES (?, ?, ?, ?, 0)
");
$stmt->bind_param("isss", $id_coach, $date, $heure_debut, $heure_fin);
if($stmt->execute()){
   echo json_encode([
        'success' => true,
        'message' => 'disponobilte est bien ajouter'
    ]);
};


