<?php 
require "../../config/connexion.php";
function getNombreTotalCoach(){
    global $conn;
    $stmt = $conn->prepare("select count(*) from coach");
    $stmt->execute();
    $result = $stmt->get_result();
    echo $result;
}
function getNombreSeaneConfirme();




?>