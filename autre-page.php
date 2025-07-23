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
</body>
</html>