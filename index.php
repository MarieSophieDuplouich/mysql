<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php

    // $_GET['nom']  

    $colorMap = [
        'vert' => 'green',
        'bleu' => 'blue',
        'rouge' => 'red'
    ];
   $css = $colorMap [$_GET['couleur']];

    // This will evaluate to TRUE so the text will be printed.
    if (isset($_GET['couleur']) && isset($colorMap)) {

        echo '<a href="index.php?couleur=vert" style="background-color:' .   $css . ';text-align : center; padding-top: 50px;">Vert</a>';
        echo '<a href="index.php?couleur=bleu" style="background-color:' .    $css . ';text-align : center; padding-top: 50px;">bleu</a>';
        echo '<a href="index.php?couleur=rouge" style="background-color:' .   $css . ';text-align : center; padding-top: 50px;">rouge</a>';
    }

    // var_dump($bgColor);
    ?>

<body style="background-color: <?=$css ?>; text-align : center; padding-top: 50px;">

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


    <!-- //<body style="background-color: <?= $couleur ?>; text-align : center; padding-top: 50px;">. C'est mon code. Il faut que tu créés bien tes variables couleurs au préalable
// si user touche r le background color devient rouge
// si user touche b le background color devient blue
// si user touch v le background color devient vert -->




    <?php
    // $prenom=$_GET["name"];

    ?>

    <!-- <p> Hello <?= $prenom ?> ! </p> -->
</body>

</html>
<!-- 
Résumé : Ce qu'il ne faut PAS faire ❌
1. Ne jamais écraser $_GET
php$_GET['couleur'] = $monTableau;  // ❌ JAMAIS !
$_GET contient les données de l'URL. Si vous l'écrasez, vous perdez ce que l'utilisateur a envoyé !
2. Ne pas utiliser des variables avant de les définir
php$var = [$R, $B, $V];  // ❌ $R, $B, $V n'existent pas encore
$R = 'red';           // Trop tard !
3. Ne pas utiliser un tableau comme une couleur CSS
php$couleur = ['red', 'blue'];
echo "background-color: $couleur";  // ❌ Affiche "Array"
4. Ne pas mélanger les noms de paramètres
php// Vos liens : ?couleur=vert
// Votre code : $_GET['color']  // ❌ Incohérent !
5. Ne pas oublier la logique de base

Vous recevez des données → $_GET['param']
Vous les transformez si besoin → mapping
Vous les utilisez → dans votre HTML/CSS

La bonne façon de réfléchir :

"Qu'est-ce que je reçois de l'URL ?"
"Qu'est-ce que j'en ai besoin ?"
"Comment transformer l'un vers l'autre ?"

Gardez $_GET intact ! C'est votre boîte aux lettres, ne la cassez pas ! 📬 -->