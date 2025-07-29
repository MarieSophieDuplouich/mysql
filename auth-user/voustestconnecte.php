<?php require_once 'seconnecter.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <a href="inscription.php">S'inscrire</a>
    <a href="seconnecter.php">Se connecter</a>
    
   <h1> Vous êtes connecté</h1>

   <?php     var_dump($user['name']); ?>
<?php if ($user != null): ?>
    <div class="profile">
        <h2>Profil de <?php echo htmlspecialchars($user['name']); ?></h2>
        <img src="<?php echo htmlspecialchars($user['photo']); ?>" alt="Photo de profil">
    </div> 
<?php else: ?>
    <p>Aucun utilisateur connecté.</p>

<?php endif; ?>
</body>
</html>