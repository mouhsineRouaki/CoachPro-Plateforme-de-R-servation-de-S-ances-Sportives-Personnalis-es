<?php
require_once "../../config/connexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit;
}

$id_reservation = $_POST['id_reservation'];
$date = $_POST['date_seance'];
$heure_debut = $_POST['heure_debut'];
$heure_fin = $_POST['heure_fin'];

$stmt = $conn->prepare("
    UPDATE reservation
    SET date_seance = ?, heure_debut = ?, heure_fin = ?
    WHERE id_reservation = ? AND status != 'annulée'
");

$stmt->bind_param("sssi", $date, $heure_debut, $heure_fin, $id_reservation);
$stmt->execute();

echo json_encode(["success" => true]);
