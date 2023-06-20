<?php
//Exemple de connexion Coach
$host = 'localhost';
$dbname = 'coqlakour';
$user = 'root';
$password = '';

try {
    // Création d'une instance de la classe PDO pour établir la connexion
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

?>