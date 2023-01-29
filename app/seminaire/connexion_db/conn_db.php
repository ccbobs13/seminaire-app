<?php
//Connexion et sélection de la source de données
$login = 'root';
$pwd = 'root';
$dsn = 'mysql:host=mysql;dbname=seminaire_db';
try {
    $pdo = new PDO($dsn, $login, $pwd);
}
catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage() );
}
?>