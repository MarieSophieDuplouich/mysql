

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- //4. Afficher le profil de l'utilisateur
// Sur la page profil.php, on utilise la clé user_id de la session pour afficher les informations de l'utilisateur connecté : -->

 <?php
session_start();
$user = null;
if (isset($_SESSION['user_id'])) {
    $user = getUserById($pdo, $_SESSION['user_id']);
}
?> 

<?php if ($user != null): ?>
    <div class="profile">
        <h1>Profil de <?php echo htmlspecialchars($user['name']); ?></h1>
        <img src="<?php echo htmlspecialchars($user['photo']); ?>" alt="Photo de profil">
    </div>
<?php else: ?>
    <p>Aucun utilisateur connecté.</p>
<?php endif; ?>

</body>
</html>