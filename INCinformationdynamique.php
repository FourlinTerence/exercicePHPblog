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

<link rel="stylesheet" href="css/style.css">

<main>
    <h1>INFORMATION</h1>
    <section class="pageinfo">
        <div class="infobox">
            <h3>Nos articles</h3>

            <?php
            foreach($pdo->query("SELECT * from article")as $article){
        echo '<div class="infoarticle">
                <a href="index.php?page=article"><img src="'. $article["Image"] .'" alt=""></a><br>
                <div class="infos">
                    <p class="bold">' . $article["Titre"] . '</p>
                    <p>' . $article["Description"] . '<span class="italic"><a href="index.php?page=article">Lire l article</a></span></p>
                    <p>' . $article["Categorie"] . '</p>
                    <p class="italic">'. $article["Date"] .'</p>
                </div>
            </div>';
            }
            ?>
        </div>

        <div class="infobox">
            <h3>Nos cartes</h3>


            <?php
            foreach($pdo->query("SELECT * from carte")as $carte){
        echo '<div class="infoarticle">
                <a href="index.php?page=article"><img src="'. $carte["Carte"] .'" alt=""></a><br>
                <div class="infos">
                    <p class="bold">' . $carte["Titre"] . '</p>
                    <p>' . $carte["Description"] . '<span class="italic"><a href="index.php?page=article">Lire l article</a></span></p>
                    <p>' . $carte["Categorie"] . '</p>
                    <p class="italic">'. $carte["Date"] .'</p>
                </div>
            </div>';
            }
            ?>
    
    </section>
    <img class="infologocoqlakour" src="image/coqlakour-removebg-preview.png" alt="logo coqlakour">
</main>