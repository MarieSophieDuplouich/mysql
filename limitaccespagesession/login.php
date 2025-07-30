<?php session_start();

if (isset($_SESSION["username"])) {
    // Si l'utilisateur est connecté, on récupère son nom d'utilisateur
    header("Location: index.php");
    exit();
}
function connect_database(): PDO
{
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database", "root", "root");
    return $database;
}


// Read (login)
function get_user_by_username(string $username): ?array
{
    $db = connect_database();
    $stmt = $db->prepare("SELECT id, username, password FROM Loginnn WHERE username = ?");
    $stmt->execute([$username]);
    return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}

$error = null;


if (isset($_POST['username'], $_POST['password'])) {
    $user = get_user_by_username($_POST['username']);
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

?>
<?php if ($error): ?>
    <p><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST" action="">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecterahahahahaha</button>
</form>

<form action="POST">


</form>