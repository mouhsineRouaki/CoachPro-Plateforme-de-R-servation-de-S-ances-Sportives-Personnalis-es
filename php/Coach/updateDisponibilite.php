<?php
require_once "../../config/connexion.php";
require_once "./functionCoach.php";
$coach = getCoach();
$id_coach = $coach["id_coach"];

$id    = $_POST['id'] ?? null;
$date  = $_POST['date'] ?? null;
$start = $_POST['startTime'] ?? null;
$end   = $_POST['endTime'] ?? null;

if (!$id || !$id_coach || !$date || !$start || !$end) {
    echo json_encode([
        'success' => false,
        'message' => 'Données manquantes'
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

$heure_debut = $date . " " . $start;
$heure_fin   = $date . " " . $end;

$check = $conn->prepare("
    SELECT id_disponibilite
    FROM disponibilite
    WHERE id_coach = ?
      AND date = ?
      AND id_disponibilite != ?
      AND isReserved = 0
      AND (? < heure_fin AND ? > heure_debut)
");
$check->bind_param(
    "issss",
    $id_coach,
    $date,
    $id,
    $heure_debut,
    $heure_fin
);
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
    UPDATE disponibilite 
    SET date = ?, heure_debut = ?, heure_fin = ?
    WHERE id_disponibilite = ? AND id_coach = ? AND isReserved = 0
");
$stmt->bind_param(
    "sssii",
    $date,
    $heure_debut,
    $heure_fin,
    $id,
    $id_coach
);

if ($stmt->execute()) {
    echo json_encode([
        'success' => true,
        'message' => 'Disponibilité modifiée avec succès'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Erreur lors de la modification'
    ]);
}
