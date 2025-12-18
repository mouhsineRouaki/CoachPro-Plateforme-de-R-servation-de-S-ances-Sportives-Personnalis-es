<?php
session_start();
require_once "../../config/connexion.php";

if (!isset($_SESSION["user_id"])) {
    exit("Accès refusé");
}

$id = $_SESSION["user_id"];

$current = $_POST["currentPassword"];
$new     = $_POST["newPassword"];
$confirm = $_POST["confirmPassword"];

if ($new !== $confirm) {
    exit("Les mots de passe ne correspondent pas");
}

$sql = "SELECT mot_de_pass FROM utilisateur WHERE id_utilisateur = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!password_verify($current, $user["mot_de_pass"])) {
    exit("Mot de passe actuel incorrect");
}

$newHash = password_hash($new, PASSWORD_DEFAULT);

$update = "UPDATE utilisateur SET mot_de_pass = ? WHERE id_utilisateur = ?";
$stmt2 = $conn->prepare($update);
$stmt2->bind_param("si", $newHash, $id);

if ($stmt2->execute()) {
    echo "success";
} else {
    echo "Erreur changement mot de passe";
}
