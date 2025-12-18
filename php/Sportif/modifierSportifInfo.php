<?php
session_start();
require_once "../../config/connexion.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../auth/login.php");
    exit;
}

$id = $_SESSION["user_id"];

$nom       = $_POST["nom"];
$prenom    = $_POST["prenom"];
$email     = $_POST["email"];
$telephone = $_POST["telephone"];
$img = $_POST["url_image"];

$sql = "UPDATE utilisateur 
        SET nom = ?, prenom = ?, email = ?, telephone = ?
        WHERE id_utilisateur = ?";
$sql2 = "UPDATE sportif 
        SET sportif_img = ?
        WHERE id_utilisateur = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $nom, $prenom, $email, $telephone, $id);
$stmt2 = $conn->prepare($sql2);
$stmt2->bind_param("si",  $img,$id);

if ($stmt->execute() && $stmt2->execute()) {
    header("Location: ../../pages/Sportif/profilSportif.php?success=1");
} else {
    echo "Erreur lors de la mise à jour";
}
