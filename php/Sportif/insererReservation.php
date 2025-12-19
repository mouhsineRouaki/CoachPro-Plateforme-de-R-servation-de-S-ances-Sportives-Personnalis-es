<?php
require_once "../../config/connexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id_coach   = $_POST['id_coach'];
    $nom_sport   = $_POST['sport'];
    $id_sportif = $_POST['id_sportif'];
    $date       = $_POST['date_seance'];
    $creneaux   = $_POST['creneaux'] ?? [];

    if (empty($creneaux)) {
        die("Aucun créneau sélectionné.");
    }
    $stmt = $conn->prepare("Select id_sport from sport where nom_sport=?");
    $stmt->bind_param("s",$nom_sport);
    $stmt->execute();
    $sport = $stmt->get_result()->fetch_assoc();
    $id_sport = $sport["id_sport"];


    foreach ($creneaux as $c) {

        list($id_dispo, $heure_debut, $heure_fin) = explode('-', $c);

        $stmt = $conn->prepare("
            INSERT INTO reservation 
            (id_sportif, id_coach, id_sport ,date_seance, heure_debut, heure_fin, status, date_reservation)
            VALUES (?, ?,?, ?, ?, ?, 'en_attente', NOW())
        ");
        $stmt->bind_param("iiisss", $id_sportif, $id_coach,$id_sport, $date, $heure_debut, $heure_fin);
        $stmt->execute();

        $stmt2 = $conn->prepare("
            UPDATE disponibilite 
            SET isReserved = 1 
            WHERE id_disponibilite = ?
        ");
        $stmt2->bind_param("i", $id_dispo);
        $stmt2->execute();
    }

    header("Location: ../../pages/Sportif/detailsCoach.php?id_coach="."$id_coach");
}
?>
