
<!-- <?php //require_once 'crud.php';?> -->
<?php

// Connexion à la base de données
function connect() {
    // Remplacez les valeurs ci-dessous par celles de votre base de données
    $host = '127.0.0.1';
    $dbname = 'app-database';
    $user = 'root';
    $password = 'root';
    return new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}



// Ajouter un utilisateur
function add_user($pdo, $email, $password) {
    $stmt = $pdo->prepare("INSERT INTO user (email, password VALUES (?, ?)");
    $stmt->execute([$email, $password]);
    return $pdo->lastInsertId();
}
// Récupérer un utilisateur par son ID
function getUserById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM user  WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
// 3. Stocker le user_id dans la session
session_start();
if(isset($_POST['email']) && isset($_POST['password'])) {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=app-database", "root", "root");
    $user_id = add_user($pdo, $_POST['email'], $_POST['password']);
    $_SESSION['user_id'] = $user_id;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <!-- //4. Afficher le profil de l'utilisateur
// Sur la page profil.php, on utilise la clé user_id de la session pour afficher les informations de l'utilisateur connecté : -->


<?php if ($user != null): ?>
    <div class="profile">
        <h1>Profil de <?php echo htmlspecialchars($user['email']); ?></h1>
        <img src="<?php echo htmlspecialchars($user['password']); ?>">
    </div>
<?php else: ?>
    <p>Aucun utilisateur connecté.</p>
<?php endif; ?>

</body>
</html>