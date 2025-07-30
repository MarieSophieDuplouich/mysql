<?php
$password = "Boubouestgrand34000PPP!!!"; // Ton mot de passe
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "Mot de passe haché : " . $hash . PHP_EOL;
?>