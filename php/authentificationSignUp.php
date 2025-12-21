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
        $stmt1 = $conn->prepare("select * from utilisateur where email = ?");
        $stmt1->bind_param("s" , $email);
        $stmt1->execute();
        $user = $stmt1->get_result()->fetch_assoc();
        if($role === "coach"){
            $stmt2 = $conn->prepare("insert into coach (id_utilisateur) values (?)");
            $stmt2->bind_param("i" , $user["id_utilisateur"]);
            if($stmt2->execute()){
                header("Location: ../index.php");
                exit;
            }
        }else{
            $stmt3 = $conn->prepare("insert into sportif (id_utilisateur) values (?)");
            $stmt3->bind_param("i" , $user["id_utilisateur"]);
            if($stmt3->execute()){
                header("Location: ../index.php");
                exit;
            }
        }
    } else {
        echo "Erreur inscription : " . $stmt->error;
    }
}

