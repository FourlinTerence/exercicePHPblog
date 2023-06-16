<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "header.php"; ?>

    <?php
    // Verifie si le parametre "page" est present dans l'URL

    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        //Inclut la page correspondant en fonction du parametre "page"    

        switch ($page) {
            case 'acceuil':
                include 'INCacceuil.php';
                break;

            case 'article':
                include 'INCarticle.php';
                break;

            case 'carte':
                include 'INCcarte.php';
                break;

            case 'connexion':
                include 'INCconnexion.php';
                break;

            case 'contact':
                include 'INCcontact.php';
                break;

            case 'information':
                include 'INCinformation.php';
                break;
        }
    } else {
        //Page par defaut lorque aucun parametre "page" n est specifié
        include 'INCacceuil.php';
    }
    ?>

    <?php include 'footer.php'; ?>

</body>

</html>