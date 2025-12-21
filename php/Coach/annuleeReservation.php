<?php
require_once "../../config/connexion.php";

$id_reservation = $_POST['id_reservation'];

$stmt = $conn->prepare("
    UPDATE reservation
    SET status = 'annulee'
    WHERE id_reservation = ?
");
$stmt->bind_param("i", $id_reservation);
$stmt->execute();

echo json_encode(["success" => true]);
