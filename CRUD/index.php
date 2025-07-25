<?php
require_once 'crud-aliment.php';

// Ajout d'un aliment via le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['nom']) && isset($_POST['type'])) {
        $nom = $_POST['nom'];
        $type = $_POST['type'];
        $calories = $_POST['calories'];
        add($nom, $type, $calories);
    }

    // Suppression d'un aliment via le formulaire D
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        deleteById($id);
    }

    // mettre à jour les données update U

     if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['type'])&& isset($_POST['calories'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $type = $_POST['type'];
        $calories = $_POST['calories'];
         update($id, $nom, $type, $calories);
    }
}


$aliments = getAll(); // c'est ça le read mdr
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD Aliments</title>
</head>

<body>
    <h1>CRUD Aliments</h1>

    <!-- Formulaire pour ajouter un aliment -->
    <form action="" method="POST">
        <input type="text" name="nom" placeholder="Nom de l'aliment" required>
        <input type="text" name="type" placeholder="Type de l'aliment" required>
        <input type="number" name="calories" placeholder="Calories" required>
        <button type="submit">Ajouter</button>
      
    </form>

    <!-- Liste des aliments ne pas oublier les formulaires por soumettre supprimer etc... nos données -->
    <h2>Liste des aliments</h2>
    <ul>
        <?php foreach ($aliments as $aliment): ?>
            <li>
                <?= $aliment['nom'] ?> (<?= $aliment['type'] ?>) - <?= $aliment['calories'] ?> calories
            </li> 
            <!-- read ci dessus -->
             <!-- Formulaire pour supprimer un aliment -->

            <form action="" method="POST" style="display: inline;">
                <input type="hidden" name="id" value="<?= $aliment['id'] ?>">
                <button type="submit" value="<?= $aliment['id'] ?>">Supprimer</button>
            </form>
           <!-- Formulaire pour modifier (update mise à jour) un aliment -->

        <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $aliment['id'] ?>" required>
        <input type="text" name="nom" value="<?= $aliment['nom'] ?>" required>
        <input type="text" name="type"  value="<?= $aliment['type'] ?>" required>
        <input type="number" name="calories"  value="<?= $aliment['calories'] ?>" required>
        <button type="submit">Modifier</button>
      
    </form>

        <?php endforeach; ?>

    </ul>
</body>

</html>