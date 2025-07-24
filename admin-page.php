<?php 
session_start();
$username = "admin";
if(isset($_SESSION["username"])){
    // Si l'utilisateur est connecté, on récupère son nom d'utilisateur
    $username = $_SESSION["username"];
}else{
    // Sinon on le redirige vers la page de connexion
    header("Location: login.php");
}
?>

<h1>Bienvenue <?= $username ?> sur la page d'administration ! </h1>