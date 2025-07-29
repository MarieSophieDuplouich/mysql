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
        $request = $database->prepare("INSERT INTO Userss (email,password) VALUES (?,?)");
        $isSuccess = $request->execute([
            $_POST["email"],
            $_POST["password"]
        ]);
        var_dump($isSuccess);
    } catch (\Throwable $th) {
        //throw $th;
    }
}

// if (isset($_POST["username"]) && isset($_POST["password"])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // sécuriser un mot de passe?
//      $jeton = password_hash($password, PASSWORD_DEFAULT);

//     if ($password === 'Boubouestgrand34000PPP!!!') {
//         // Authentification réussie, stocker l'utilisateur dans la session
//         $_SESSION['username'] = $username;
//         header('Location: admin-page.php'); // Rediriger vers le tableau de bord
//         exit();
//     }

//     else {
//         echo "incorrect password";
//     }
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscription</h1>
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

