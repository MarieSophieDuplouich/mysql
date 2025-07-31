<?php
session_start();

$isSuccess = false;
if(
    isset($_POST["email"]) && 
    isset($_POST["password"])
){
    // Essaye de s'inscrire !
    try {
        
        $database = new PDO("mysql:host=127.0.0.1;dbname=app-database","root","root");
        var_dump($database);
        $request = $database->prepare("INSERT INTO Userrr (email,password) VALUES (:email,password)");
        $isSuccess = $request->execute([
            $_POST["email"],
            $_POST["password"]
        ]);
        var_dump($isSuccess);
    } catch (\Throwable $th) {
        //throw $th;
    }
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
    <h1>Inscription of Userrr</h1>
    <form action="" method="post">
        <input type="email" name="email" placeholder="votre email...">
        <input type="password" name="password" placeholder="votre mot de passe...">
        <button>S'inscrire</button>
    </form>
    <?php if($isSuccess == true): ?>
        <p>Utilisateur ajouté !</p>
    <?php endif; ?>

</body>
</html>

