<?php session_start();

if (!isset($_SESSION["email"])) {
    // Si l'utilisateur n'est pas connecté, on récupère son nom d'utilisateur
    header("Location: login.php");
    exit();
}

$email = $_SESSION["email"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <h1>Accueil 31 Juillet 2025</h1>
    <a href="login.php">Se connecter</a>
        <a href="logout.php">Se déconnecter</a>
    <h2>Bienvenue <?= htmlspecialchars($email) ?> sur la page d'administration !!!!!!!!!!!!! </h2>

</body>

</html>