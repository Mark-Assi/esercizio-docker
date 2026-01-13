<?php
$host = getenv("DB_HOST");
$db   = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASSWORD");

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "<h1>Connessione al database riuscita!</h1>";
} catch (PDOException $e) {
    echo "<h1>Errore di connessione</h1>";
    echo $e->getMessage();
}