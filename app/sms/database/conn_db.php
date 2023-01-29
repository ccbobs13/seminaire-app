<?php
//Connexion et sélection de la source de données
$login = 'root';
$pwd = 'root';
$dsn = 'mysql:host=mysql;dbname=smsdb';
try {
    $pdo = new PDO($dsn, $login, $pwd);
}
catch (PDOException $e) {
    die("Erreur de connexion\n. Veuillez contacter l'administrateur du site" . $e->getMessage());
}

?>