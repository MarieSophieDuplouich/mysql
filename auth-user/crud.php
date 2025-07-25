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
// 3. Stocker le user_id dans la session
session_start();
if(isset($_POST['name']) && isset($_POST['photo'])) {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=app-database", "root", "root");
    $user_id = add_user($pdo, $_POST['name'], $_POST['photo']);
    $_SESSION['user_id'] = $user_id;
}


