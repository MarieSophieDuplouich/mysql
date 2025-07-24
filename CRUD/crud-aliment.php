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

    // $database = new PDO("mysql:host=127.0.0.1; dbname=app-database", "root", "root");





//create
function add($nom, $type, $calories) {
    $db = connect();
    $sql = "INSERT INTO aliments (nom, type, calories) VALUES (:nom, :type, :calories)";
    $stmt = $db->prepare($sql);
    $stmt->execute(['nom' => $nom, 'type' => $type, 'calories' => $calories]);
}

//read
function getById($id) {
    $db = connect();
    $sql = "SELECT * FROM aliments WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

//read
function getAll() {
    $db = connect();
    $sql = "SELECT * FROM aliments";
    return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

//delete
function deleteById($id) {
    $db = connect();
    $sql = "DELETE FROM aliments WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $id]);
}

//update
function update($id, $nom, $type, $calories) {
    $db = connect();
    $sql = "UPDATE aliments SET nom = :nom, type = :type, calories = :calories WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $id, 'nom' => $nom, 'type' => $type, 'calories' => $calories]);
}
?>