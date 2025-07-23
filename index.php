<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Il faut toujours démarrer une session avant de pouvoir utiliser le tableau $_SESSION, utilisez la session_start() au début de votre fichier PHP :
index.php

<?php
// Démarrer la session
// session_start(); -->

// Vous pouvez ensuite stocker des données dans la session en utilisant le tableau $_SESSION :
// index.php

// <?php
// session_start();
// // Stocker des données dans la session
// $_SESSION['username'] = 'JohnDoe';
// $_SESSION['role'] = 'admin';
// var_dump($_SESSION);

// Ces données sont maintenant accessibles dans le tableau $_SESSION et peuvent être utilisées sur TOUTES LES pages du site.

// Créez un fichier autre-page.php et démmarrez la session de la même manière :
// autre-page.php

// <?php
// session_start();

// Affichez les données de session dans ce fichier : autre-page.php
// <?php
// session_start();
// // Afficher les données de session
// var_dump($_SESSION);
// ?>

Rajoutez un lien vers autre-page.php et accédez à autre-page.php dans votre navigateur. Vous devriez voir les données de session affichées, confirmant que les données sont partagées entre les pages. index.php
 <?php
// session_start();
// // Stocker des données dans la session
// $_SESSION['username'] = 'JohnDoe';
// $_SESSION['role'] = 'admin';
// var_dump($_SESSION);
?>

<a href="autre-page.php">Aller à une autre page</a> -->

<!-- 
Exercice 1 : Stocker le prénom de l'utilisateur
Créez un formulaire dans un fichier who-are-you.php qui demande à l'utilisateur de saisir son prénom et son age.
Lorsque le formulaire est soumis, stockez le prénom et l'âge dans la session.
Affichez un message de bienvenue avec le prénom et l'âge sur la page d'accueil (index.php), du style :
Bienvenue, Billy ! Vous avez 25 ans !
Exercice 2 : Couleur préférée de l'utilisateur
Créez un formulaire dans un fichier color.php qui demande à l'utilisateur sa couleur préférée (par exemple : "red", "blue", "green", etc.).

Lorsque le formulaire est soumis, stockez la couleur dans la session avec $_SESSION["color"].
Sur la page d'accueil (index.php), affichez un texte du style :
Votre couleur préférée est : bleu
Le texte doit être affiché dans la couleur choisie par l'utilisateur (utilisez la balise <span style="color: ...">).

La couleur doit rester affichée même après un rechargement de la page ! -->

<?php 
session_start();
$_SESSION['couleur'] = 'Billy';

var_dump($_SESSION); ?>

<form action="autre-page.php" method="get">
    <input type="text" name="age" placeholder="Entrez votre âge " <?=$_GET['age']?> >
    <input type="text" name="name" placeholder="Entrez votre nom " <?=$_GET['name']?> >

    <button type="submit">Envoyer</button>
</form>



</body>
</html>

<!-- Session PHP -->
<!-- Introduction
Dans le développement web, une session est un mécanisme qui permet de conserver des données spécifiques à un utilisateur tout au long de sa navigation sur un site. Les sessions utilisateurs sont des fichiers PHP stockés côté serveur, offrant une solution sécurisée pour la gestion des informations sensibles.

PHP crée automatiquement un identifiant de session unique pour chaque utilisateur et un fichier caché lui est associé. Les sessions permettent donc une persistance de données sans avoir à créer soi-même des fichiers de sauvegarde pour chaque utilisateur.

Cas d'utilisations des Sessions
Gérer les données utilisateurs : Vous pouvez conserver des informations telles que l'identifiant utilisateur.
C'est ainsi que l'on peut afficher le nom de l'utilisateur connecté sur toutes les page du site.

Simplifier la persistance des données : Les sessions évitent de devoir écrire soi-même des mécanismes complexes de sauvegarde de données (comme des fichiers ou des bases de données temporaires).
On peut par exemple se souvenir d'où en est l'utilisateur dans la lecture d'un article ou dans les questions d'un quizz ;)

Fonctionnement des sessions
Les sessions sont un tableau global appelé $_SESSION qui est accessible partout dans le code PHP.

Lorsqu'une session est démarrée, PHP crée un fichier temporaire sur le serveur pour stocker les données de session. Chaque utilisateur a son propre fichier de session, identifié par un identifiant unique.

L'identifiant unique est transmis par le client (navigateur) à chaque requête HTTP dans un cookie nommé PHPSESSID. Vous pouvez voir dans l'onglet réseau de l'inspecteur du navigateur.

Voici les étapes principales d'utilisation d'une session :

Initialisation : Une session est démarrée à l'aide de la fonction session_start().
Stockage des données : Les informations sont stockées dans un tableau associatif global appelé $_SESSION(similaire a $_POST sauf que c'est a vous de gerer ses valeurs).
Accès aux données : Les données de session peuvent être consultées ou modifiées à tout moment tant que la session est active.
Destruction : Une session peut être détruite pour effacer les données utilisateur. (Utilisez session_destroy() pour cela.) -->