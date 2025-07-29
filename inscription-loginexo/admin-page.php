<?php 
session_start();
$email = "admin";
if(isset($_SESSION["email"])){
    // Si l'utilisateur est connecté, on récupère son nom d'utilisateur
    $email = $_SESSION["email"];
}else{
    // Sinon on le redirige vers la page de connexion
    header("Location: login.php");
}
?>

<h1>Bienvenue <?= $email?> sur la page d'administration ! </h1>