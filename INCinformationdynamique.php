
<main>
    <h1>INFORMATION</h1>
    <section class="pageinfo">
        <div class="infobox">
            <h3>Nos articles</h3>

            <?php
            foreach($pdo->query("SELECT * from article")as $article){
        echo '<div class="infoarticle">
                <a href="index.php?page=article"><img src="'. $article["Img"] .'" alt=""></a><br>
                <div class="infos">
                    <p class="bold">' . $article["Titre"] . '</p>
                    <p>' . $article["Descriptions"] . '<span class="italic"><a href="index.php?page=article">Lire l article</a></span></p>
                    <p>' . $article["Categorie"] . '</p>
                    <p class="italic">'. $article["date_de_publication"] .'</p>
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