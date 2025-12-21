<?php
require_once "../../config/connexion.php";

$id = $_POST['id'];

$stmt = $conn->prepare("
    DELETE FROM disponibilite
    WHERE id_disponibilite=? AND isReserved=0
");
$stmt->bind_param("i", $id);
$stmt->execute();

echo json_encode(['success' => true]);
