<?php 
$host = "localhost";
$db="coaching_platform";
$user = "root";
$password= "mouhsinerouaki";

$conn = new mysqli($host,$user,$password,$db);


if($conn->connect_error){
    die("Connexion échouée : " . $conn->connect_error);
}

?>