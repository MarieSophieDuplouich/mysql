<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <a href="page.php?nom=Jean&age=25">Voir profil</a> -->
    <?php
// echo $_GET['nom']; // Affiche 'Jean'
// echo $_GET['age']; // Affiche '25'
?>


<!-- <a href="bonjour.php?nom=Alice">Voir profil</a> -->
    <?php
// echo 'Hello ' . htmlspecialchars($_GET["nom"]) . '!';

?>
<!-- Créez un fichier bonjour.php qui affiche "Bonjour [nom]" où [nom] est récupéré depuis l'URL (ex: bonjour.php?nom=Alice). -->
<!-- Exercice 2
Créez une page avec trois liens :

?couleur=rouge
?couleur=vert
?couleur=bleu
Affichez la couleur choisie sur la page en background-color. utiliser isset pour l'exo -->

<!-- <a href="index.php?couleur=rouge">R</a>
<a href="index.php?couleur=bleu">B</a>
<a href="index.php?couleur=vert">V</a>
<?php

// $var = [$R,$B,$V];

// $R = 'red';
// $B = 'blue';
// $V = 'green';
// This will evaluate to TRUE so the text will be printed.
// if (isset($var)) {
//     echo 'This '.$a. 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";

// } --> 
?>
<?php


$colorMap = [
    'rood' => 'red',
    'oranje' => 'orange',
    'geel' => 'yellow',
    'groen' => 'green',
    'blauw' => 'blue'
];

if (isset($_GET['kleur']) && isset($colorMap[$_GET['kleur']])) {
    $bgColor = $colorMap[$_GET['kleur']];
    

} else {
    $bgColor = "DEFAULT_COLOR";
}
echo '<body style="background-color: '.$bgColor.'">';

?>

//<body style="background-color: <?=$couleur ?>; text-align : center; padding-top: 50px;">. C'est mon code. Il faut que tu créés bien tes variables couleurs au préalable
// si user touche r le background color devient rouge
// si user touche b le background color devient blue
// si user touch v le background color devient vert



?>

</body>
</html 