<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autre page</title>
</head>
<body>
    <?php
session_start();
$_SESSION['name'] = 'Billy';
$_SESSION['age'] = 25 ;
var_dump($_SESSION);
?>

<p>Bienvenue, <?=$_GET['name']?> ! Vous avez <?=$_GET['age']?> ans !</p>

<!-- Exercice 2 : Couleur préférée de l'utilisateur
Créez un formulaire dans un fichier color.php qui demande à l'utilisateur sa couleur préférée (par exemple : "red", "blue", "green", etc.).

Lorsque le formulaire est soumis, stockez la couleur dans la session avec $_SESSION["color"].
Sur la page d'accueil (index.php), affichez un texte du style :
Votre couleur préférée est : bleu
Le texte doit être affiché dans la couleur choisie par l'utilisateur (utilisez la balise <span style="color: ...">).

La couleur doit rester affichée même après un rechargement de la page ! -->


</body>
</html>