<?php
session_start();
require_once "../../config/connexion.php";
require_once "./functionSportif.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../auth/login.php");
    exit;
}

$id_utilisateur = $_SESSION["user_id"];

$niveau   = $_POST["niveau"];
$objectif = $_POST["objectif"];

$sportif = getSportif();
$id_sportif = $sportif["id_sportif"];

$update = "UPDATE sportif SET niveau = ?, objectif = ? WHERE id_sportif = ?";
$stmt2 = $conn->prepare($update);
$stmt2->bind_param("ssi", $niveau, $objectif, $id_sportif);

if ($stmt2->execute()) {
    header("Location: ../../pages/Sportif/profilSportif.php");
} else {
    echo "Erreur mise à jour sportif";
}
