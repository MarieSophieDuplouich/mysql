<?php
session_start();


if(  isset($_POST["name"]) && 
    isset($_POST["email"]) && 
    isset($_POST["password"]) 
){
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database","root","root");
    $request = $database->prepare("SELECT * FROM user_sept WHERE email=?");
    $request->execute([
        $_POST["email"]
    ]);
    $user = $request->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="inscription.php">S'inscrire</a>
    <a href="seconnecter.php">Se connecter</a>
    <h1>Se connecterrrrrr</h1>
    <form action="voustestconnecte.php" method="post">
        <input type="name" name="name" placeholder="votre nom...">
        <input type="email" name="email" placeholder="votre email...">
        <input type="password" name="password" placeholder="votre mot de passe...">
        <button>Se connecter</button>
    </form>
</body>
</html>
