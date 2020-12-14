<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Sweetkins - extras</title>
</head>
<body>
    <header class="main-header">

        <a id="main-header-logo" href="index.php" class="main-header__logo">
            <img src="./assets/img/logo_sweetkins.svg" alt="Logo de la marque de bonbons Sweetkins" />
        </a>

        <img id="main-nav-burger" class="hamburger-menu" src="./assets/img/menu-hamburger.svg" alt="Menu du site Sweet'kins" aria-controls="main-nav" aria-expanded="false"/>

        <nav id="main-nav" class="main-header__nav">
            <a class="main-header__nav__item" href="index.php">Les bonbons</a>
            <a class="main-header__nav__item" href="creation.php">Créer mon paquet</a>
            <a class="main-header__nav__item--active" href="extras.php">Extras</a>
            <a class="main-header__nav__item" href="commande.php">
                <?php 
                session_start();
                if(isset($_SESSION['total']) && $_SESSION['total'] != 0.00){
                    echo '<img src="./assets/img/panier.svg" alt="Panier de commande Sweetkins">';
                }else{
                    echo '<img src="./assets/img/paniervide.svg" alt="Panier de commande Sweetkins">';
                }
                ?>
            </a>
            <div class="main-header__nav__reseaux">
                <a class="main-header__nav__item"><img src="./assets/img/logo-facebook.svg" alt="Facebook de la marque de bonbons Sweet'kins" /></a>
                <a class="main-header__nav__item"><img src="./assets/img/logo-twitter.svg" alt="Twitter de la marque de bonbons Sweet'kins" /></a>
                <a class="main-header__nav__item"><img src="./assets/img/logo-instagram.svg" alt="Instagram de la marque de bonbons Sweet'kins" /></a>
            </div>
        </nav>

    </header>

    <div class="extras">
        <img class="extras__illua" src="./assets/img/toile_fond.png" alt="Illustration toile" />
        <img class="extras__illub" src="./assets/img/araignee-fond.svg" alt="Illustration araignée" />
        <img class="extras__illuc" src="./assets/img/toile_fond.png" alt="Illustration toile" />

        <h1>Retrouvez sur cette page des éléments permettant de faire découvrir Sweet’kins autour de vous et de vous amuser...</h1>
        
        <div class="extras__flyer">
            <div class="extras__flyer__content">
                <a href="./assets/img/flyer_sweetkins.png" target="_blank">
                    <img src="./assets/img/flyer_sweetkins_preview.png" alt="Flyer Sweet'kins" />
            </a>
                </div>
            <div class="extras__flyer__desc">
                <p class="title">Flyer Sweet'kins</p>
                <p class="desc">Le flyer officiel de la marque qui donne toutes les informations pratiques à notre sujet. Vous pouvez le télécharger
                    et le partager autour de vous si vous voulez faire découvrir Sweet'kins à votre entourage !
                </p>
                <a href="./assets/img/flyer_sweetkins.png" target="_blank">Je le télécharge</a>
            </div>
        </div>

        <div class="extras__coloriages">
            <h1>Les coloriages Sweet'kins</h1>
            <p>Télécharge dès maintenant les coloriages made in Sweet’kins pour montrer à tout le monde tes talents d’artiste !</p>
            
            <div class="extras__coloriages__content extras__coloriage">
                <div class="extras__coloriage__single">
                    <a class="telecharger" href="./assets/img/coloriage_logo.png" target="_blank">Télécharger</a>
                    <img src="./assets/img/coloriage_logo_preview.jpg" alt="Coloriage du logo Sweet'kins" />
                </div>
                <div class="extras__coloriage__single">
                    <a class="telecharger" href="./assets/img/coloriage_chauve-souris.png" target="_blank">Télécharger</a>
                    <img src="./assets/img/coloriage_chauve-souris_preview.jpg" alt="Coloriage du logo Sweet'kins" />
                </div>
                <div class="extras__coloriage__single">
                    <a class="telecharger" href="./assets/img/coloriage_araignee.png" target="_blank">Télécharger</a>
                    <img src="./assets/img/coloriage_araignee_preview.jpg" alt="Coloriage du logo Sweet'kins" />
                </div>
                <div class="extras__coloriage__single">
                    <a class="telecharger" href="./assets/img/coloriage_fantome.png" target="_blank">Télécharger</a>
                    <img src="./assets/img/coloriage_fantome_preview.png" alt="Coloriage du logo Sweet'kins" />
                </div>
                <div class="extras__coloriage__single">
                    <a class="telecharger" href="./assets/img/coloriage_squelette.png" target="_blank">Télécharger</a>
                    <img src="./assets/img/coloriage_squelette_preview.jpg" alt="Coloriage du logo Sweet'kins" />
                </div>
                <div class="extras__coloriage__single">
                    <a class="telecharger" href="./assets/img/coloriage_zombie.png" target="_blank">Télécharger</a>
                    <img src="./assets/img/coloriage_zombie_preview.jpg" alt="Coloriage du logo Sweet'kins" />
                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div>
            <div class="main-footer__links">
                <div class="main-footer__links__left">
                    <a href="#">A propos de nous</a>
                    <a href="#">Mentions légales</a>
                </div>
                <div class="main-footer__links__right">
                    <a href="#">Plan du site</a>
                    <a href="#">Nous contacter</a>
                </div>
            </div>
            <div class="main-footer__separation"></div>
            <div class="main-footer__reseaux">
                <p>Rejoignez-nous sur les réseaux !</p>
                <div class="main-footer__reseaux__img">
                    <img class="fb" src="./assets/img/Vector_fb.png" alt="fb">
                    <img class="tw" src="./assets/img/Vector_tw.png" alt="tw">
                    <img class="ig" src="./assets/img/Vector_ig.png" alt="ig">
                </div>
            </div>
        </div>
        <p class=main-footer__copyright>© 2020 - Sweet'kins</p>
    </footer>

    <script src="./assets/js/script.js"></script>
</body>
</html>