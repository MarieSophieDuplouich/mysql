<?php session_start();


function connect_database(): PDO
{
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database", "root", "root");
    return $database;
}


session_destroy();

 header("Location: index.php");
?>