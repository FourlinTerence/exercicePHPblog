<?php require_once "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //On peut mettre la config a l interieur
    $titre = $_POST['Titre'];
    $description = $_POST['Descriptions'];
    $categorie = $_POST['Categorie'];
    $dateDePublication = $_POST['date_de_publication'];
    $image = $_POST['img'];
    print_r($_POST);
    
    //echo "<br>";
   // echo $nom . $prenom . $mail . $dateDeNaissance;
   
    $sql = 'INSERT INTO article (Titre,Descriptions,Categorie,date_de_publication,img) VALUES (?,?,?,?,?)';
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$titre, $description, $categorie , $dateDePublication, $image]);
    $stmt=null;
   }
    ?>

<body>
    <?php include "header.php"; ?>
    
    <main>
        <div class="commentaire">
            <form method="POST" action="formulaireinfo.php">
                <label for="Titre">Titre :</label>
                <input type="text" name="Titre" id="Titre" required><br><br>
                
                <label  for="Descriptions">Description :</label><br>
                <textarea class="description" name="Descriptions" id="Descriptions" required></textarea><br><br>

                <label for="Categorie">Categorie :</label>
                <input type="text" name="Categorie" id="Categorie" required><br><br>

                <label for="date_de_publication">Date de publication :</label>
                <input type="text" name="date_de_publication" id="date_de_publication" required><br><br>

                <label for="img">Image :</label>
                <input type="text" name="img" id="img" required><br><br>

                <!-- <label for="contenu">Contenu :</label><br>
        <textarea name="contenu" id="contenu" required></textarea><br><br> -->

                <button type="submit">Ajouter</button>
                <a href="validation.php"><img src="image/coqlakour.png" alt=""></a>
            </form>
        </div>
    </main>


    <?php include "footer.php"; ?>
</body>

</html>