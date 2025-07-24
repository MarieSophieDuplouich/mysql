    
<?php

// 1 connexion

$database = new PDO("mysql:host=127.0.0.1; dbname=app-database", "root", "root");


//2 requête 
$requete = $database->query("SELECT * FROM Book"); //STRING

//3 reponse (array tableau foreach)

$livres_tableau = $requete ->fetchAll();

var_dump(($livres_tableau));

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

<table id="customers">
  <tr>
    <th>Auteur</th>
    <th>Titre livre</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
  </tr>
</table>

</body>
</html>