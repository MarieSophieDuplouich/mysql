<?php
session_start();

// if( $_SESSION['user_id'])
// {
//  $_SESSION['user_id'] = 1;
// }
   

$isSuccess = false;

if( isset($_POST["name"]) && 
    isset($_POST["email"]) && 
    isset($_POST["password"])
    
){
    // Essaye de s'inscrire !
    try {
        
        $database = new PDO("mysql:host=127.0.0.1;dbname=app-database","root","root");
        var_dump($database);
        $userId = $_SESSION['user_id'];
        $request = $database->prepare("INSERT INTO user_sept(name,email,password,user_id) VALUES (?,?,?,?)");
        $isSuccess = $request->execute([
            $_POST["name"],
            $_POST["email"],
            $_POST["password"],
            $userId
        ]);
        var_dump($isSuccess);
    } catch (\Throwable $th) {
        //throw $th;
        echo "Erreur :".$th ->GetMessage();
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
    <h1>Inscriptionnnnnn</h1>
       <a href="inscription.php">S'inscrire</a>
    <a href="seconnecter.php">Se connecter</a>
    <form action="" method="post">
        <input type="text" name="name" placeholder="votre nom...">
        <input type="email" name="email" placeholder="votre email...">
        <input type="password" name="password" placeholder="votre mot de passe...">
        <button>S'inscrire</button>
    </form>
    <?php if($isSuccess == true): ?>
        <p>Utilisateur ajouté !</p>
        <?php var_dump($_POST["password"]);?>
    <?php endif; ?>

</body>
</html>
