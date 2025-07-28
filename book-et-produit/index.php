    <?php

    //exercice Massy 28 JUillet 2025 table produit

    // 1 connexion

    $database = new PDO("mysql:host=127.0.0.1; dbname=app-database", "root", "root");


    //2 requête 
    $requete = $database->query("SELECT * FROM Produit"); //STRING

    //3 reponse (array tableau foreach)

    $produits = $requete->fetchAll();
    var_dump(($produits));


    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Book</title>
    </head>

    <body>

        <!-- le remplacer par foreach -->
        <h1>A Fancy Table</h1>



        <!-- // foreach
// La boucle foreach est une autre façon de parcourir les éléments d'un tableau. Elle est plus simple et plus lisible que la boucle for pour ce type de tâche. -->
        <table id="customers">
            <tr>
                <th>Id</th>
                <th>Auteur</th>
                <th>Titre livre</th>
            </tr>
            <?php foreach ($produits as $produit): ?>
                <tr>
                     <td><?= $produit['id'] ?></td>
                    <td><?= $produit['name'] ?></td>
                    <td><?= $produit['price'] ?></td>
                <tr>
                  <?php endforeach ?>      
        </table>

    </body>

    </html>