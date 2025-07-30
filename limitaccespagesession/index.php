<?php session_start();

if (!isset($_SESSION["username"])) {
    // Si l'utilisateur n'est pas connecté, on récupère son nom d'utilisateur
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <h1>VOD</h1>
    <a href="login.php">Se connecter</a>
        <a href="logout.php">Se déconnecter</a>
    <h2>Bienvenue <?= htmlspecialchars($username) ?> sur la page d'administration !!!!!!!!!!!!! </h2>

</body>

</html>