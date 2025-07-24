<?php
require_once 'crud-aliment.php';

// Ajout d'un aliment via le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $type = $_POST['type'];
    $calories = $_POST['calories'];
    add($nom, $type, $calories);
}

$aliments = getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Aliments</title>
</head>
<body>
    <h1>CRUD Aliments</h1>

    <!-- Formulaire pour ajouter un aliment -->
    <form action=""  method="POST">
        <input type="text" name="nom" placeholder="Nom de l'aliment" required>
        <input type="text" name="type" placeholder="Type de l'aliment" required>
        <input type="number" name="calories" placeholder="Calories" required>
        <button type="submit">Ajouter</button>
    </form>

    <!-- Liste des aliments -->
    <h2>Liste des aliments</h2>
    <ul>
        <?php foreach ($aliments as $aliment): ?>
            <li>
                <?= $aliment['nom'] ?> (<?= $aliment['type'] ?>) - <?= $aliment['calories'] ?> calories
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>