<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color</title>
</head>
<body>
    <form action="autre-page.php" method="get">
    <input type="text" name="age" placeholder="Entrez votre âge " <?=$_GET['age']?> >
    <input type="text" name="name" placeholder="Entrez votre nom " <?=$_GET['name']?> >

    <button type="submit">Envoyer</button>
</form>
<a href="autre-pagecolor.php">Aller à une autre page</a>
</body>
</html>