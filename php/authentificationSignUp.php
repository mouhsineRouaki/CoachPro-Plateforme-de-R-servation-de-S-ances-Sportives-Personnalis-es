<?php
require_once "../config/connexion.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $role = $_POST["role"];
    $password = $_POST["password"];

    $passwordHashe = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO utilisateur (nom, prenom, email, mot_de_pass, telephone, role) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss",$nom,$prenom,$email,$passwordHashe,$telephone,$role);

    if ($stmt->execute()) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Erreur inscription : " . $stmt->error;
    }
}

