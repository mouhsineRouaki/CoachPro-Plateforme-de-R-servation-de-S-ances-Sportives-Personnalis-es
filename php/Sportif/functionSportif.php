<?php 
require "../../config/connexion.php";
session_start();

function getUtilisateur(){
    global $conn;
    $stmt = $conn->prepare("select * from utilisateur where id_utilisateur = ?");
    $stmt->bind_param("s",$_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
function getSportif(){
    global $conn;
    $stmt = $conn->prepare("select * from sportif where id_utilisateur = ?");
    $stmt->bind_param( "s",$_SESSION["user_id"]);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
function getNombreTotalCoach(){
    global $conn;
    $stmt = $conn->prepare("select count(*) as total from coach");
    $stmt->execute();
    $result = $stmt->get_result();
    $total=$result->fetch_assoc();
    return $total["total"];
}
function getNombreSeaneByStatus($statu){
    global $conn;
    $stmt = $conn->prepare("select count(*) as total from reservation where id_sportif = ? and status = ?");
    $sportif = getSportif();
    $stmt->bind_param("ss",$sportif["id_sportif"],$statu);
    $stmt->execute();
    $result = $stmt->get_result();
    $total=$result->fetch_assoc();
    return $total["total"];
}
function getProchaineSeance($statu){
    global $conn;
    $stmt = $conn->prepare("select count(*) from reservation where id_sportif = ? and status = s");
    $sportif = getSportif();
    $stmt->bind_param("ss",$sportif["id_sportif"],$statu);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}
function getNombreCoachParSport($sport){
    global $conn;
    $stmt = $conn->prepare("select count(*) from sport s inner join coach_sport cs on s.id_coach = cs.id_coach ");
    $sportif = getSportif();
    $stmt->bind_param("ss",$sportif["id_sportif"],$statu);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}




?>