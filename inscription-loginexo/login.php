<?php
session_start();


if(
    isset($_POST["email"]) && 
    isset($_POST["password"])
){
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database","root","root");
    $request = $database->prepare("SELECT * FROM Userss WHERE email=?");
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
    <h1>Se connecter</h1>
    <form action="" method="post">
        <input type="email" name="email" placeholder="votre email...">
        <input type="password" name="password" placeholder="votre mot de passe...">
        <button>Se connecter</button>
    </form>
</body>
</html>

