<?php
session_start();
require_once "../../config/connexion.php";

$id_utilisateur = $_SESSION['user_id'] ?? null;
if (!$id_utilisateur) {
    http_response_code(401);
    exit;
}

$stmt = $conn->prepare("
    SELECT id_coach 
    FROM coach 
    WHERE id_utilisateur = ?
");
$stmt->bind_param("i", $id_utilisateur);
$stmt->execute();
$coach = $stmt->get_result()->fetch_assoc();

$id_coach = $coach['id_coach'];

$stmt = $conn->prepare("
    SELECT r.id_reservation,r.date_seance,r.heure_debut,r.heure_fin,s.nom_sport,u.nom,u.prenom,sp.sportif_img , r.status,u.telephone FROM reservation r
    JOIN sportif sp ON r.id_sportif = sp.id_sportif
    JOIN utilisateur u ON sp.id_utilisateur = u.id_utilisateur
    JOIN sport s ON r.id_sport = s.id_sport
    WHERE r.id_coach = ?
    ORDER BY r.date_seance ASC
");

$stmt->bind_param("i", $id_coach);
$stmt->execute();

echo json_encode($stmt->get_result()->fetch_all(MYSQLI_ASSOC));
