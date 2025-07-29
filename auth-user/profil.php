<?php
// 3. Stocker le user_id dans la session
session_start();

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
function add_user($pdo, $name, $photo) {
    $stmt = $pdo->prepare("INSERT INTO user_sept (name, photo) VALUES (?, ?)");
    $stmt->execute([$name, $photo]);
    return $pdo->lastInsertId();

    
}


// Récupérer un utilisateur par son ID
function getUserById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM user_sept  WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

if(isset($_POST['name']) && isset($_POST['photo'])) {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=app-database", "root", "root");
    $user_id = add_user($pdo, $_POST['name'], $_POST['photo']);
    $_SESSION['user_id'] = $user_id;
}



// je récupère mon utilisatueur
$user = null;
if(isset($_SESSION['user_id'])){
  $pdo = connect();
  $user =  getUserById($pdo, $_SESSION['user_id']);

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
        <h1>Profil de <?php echo htmlspecialchars($user['name']); ?></h1>
        <img src="<?php echo htmlspecialchars($user['photo']); ?>" alt="Photo de profil">
    </div>
<?php else: ?>
    <p>Aucun utilisateur connecté.</p>
<?php endif; ?>

</body>
</html>