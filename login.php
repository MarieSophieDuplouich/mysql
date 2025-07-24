<?php
session_start();

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // sécuriser un mot de passe?
     $jeton = password_hash($password, PASSWORD_DEFAULT);

    if ($password === 'Boubouestgrand34000PPP!!!') {
        // Authentification réussie, stocker l'utilisateur dans la session
        $_SESSION['username'] = $username;
        header('Location: admin-page.php'); // Rediriger vers le tableau de bord
        exit();
    }

    else {
        echo "incorrect password";
    }
}
?>
<a href="admin-page.php">Si vous etes déjà connecté rendez-vous sur la page admin</a>
<form method="POST" action="">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>