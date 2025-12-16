<?php

/* ===================== INSCRIPTION ===================== */
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["sinscrire"])) {

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

/* ===================== CONNEXION ===================== */
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["se_connecter"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id_utilisateur, email, mot_de_pass FROM utilisateur WHERE email = ?");

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["mot_de_pass"])) {
            session_start();
            $_SESSION["user_id"] = $user["id_utilisateur"];
            $_SESSION["email"] = $user["email"];

            header("Location: ../pages/home.php");
            exit;
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Email introuvable";
    }
}
