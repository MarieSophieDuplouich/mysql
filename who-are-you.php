<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>who are you</title>
</head>
<body>
    <?php
// session_start();
// Stocker des données dans la session
// $_SESSION['username'] = 'JohnDoe';
// $_SESSION['role'] = 'admin';
session_start();
$_SESSION['name'] = 'Billy';
$_SESSION['age'] = 25 ;
var_dump($_SESSION); ?>

<form action="autre-page.php" method="get">
    <input type="text" name="age" placeholder="Entrez votre âge " <?=$_GET['age']?> >
    <input type="text" name="name" placeholder="Entrez votre nom " <?=$_GET['name']?> >

    <button type="submit">Envoyer</button>
</form>
<a href="autre-page.php">Aller à une autre page</a>
</body>
</html>