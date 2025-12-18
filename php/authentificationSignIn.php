<?php
require_once "../config/connexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id_utilisateur, email, mot_de_pass,role FROM utilisateur WHERE email = ?");

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["mot_de_pass"])) {
            session_start();
            $_SESSION["user_id"] = $user["id_utilisateur"];
            $_SESSION["email"] = $user["email"];
            if($user["role"]=="coach"){
                header("Location: ../pages/Coach/dashbordCoach.php");
            }else{
                header("Location: ../pages/Sportif/dashbordSportif.php");
            }
            
            exit;
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Email introuvable";
    }
}
