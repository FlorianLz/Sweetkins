<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Sweetkins - Commande</title>
</head>
<body>
    <?php include('loader.php');?>
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

    <div class="commande">
        <?php
        if(isset($_SESSION['total'])){?>
        <div class="commande__bonbons__infos">
            <h1>Passe ta commande !</h1>
            <div class="commande__bonbons__infos__souligne">
                <p><span data-nb='chauve-souris'><?php echo $_SESSION['nbchauvesouris']; ?></span>x bonbon chauve-souris</p>
            </div>
            <div class="commande__bonbons__infos__souligne">
                <p><span data-nb='fantome'><?php echo $_SESSION['nbfantome']; ?></span>x bonbon fantôme</p>
            </div>
            <div class="commande__bonbons__infos__souligne">
                <p><span data-nb='araignee'><?php echo $_SESSION['nbaraignee']; ?></span>x bonbon araignée</p>
            </div>
            <div class="commande__bonbons__infos__souligne">
                <p><span data-nb='zombie'><?php echo $_SESSION['nbzombie']; ?></span>x bonbon zombie</p>
            </div>
            <div class="commande__bonbons__infos__souligne last">
                <p><span data-nb='squelette'><?php echo $_SESSION['nbsquelette']; ?></span>x bonbon squelette</p>
            </div>
            <p>Total : <span data-tag="total"><?php echo $_SESSION['total']; ?></span>€</p>
        </div>
        
        <?php
        }else{?>
            <div class="commande__bonbons__infos">
                <h1>Passe ta commande !</h1>
                <div class="commande__bonbons__infos__souligne">
                    <p><span data-nb='chauve-souris'>0</span>x bonbon chauve-souris</p>
                </div>
                <div class="commande__bonbons__infos__souligne">
                    <p><span data-nb='fantome'>0</span>x bonbon fantôme</p>
                </div>
                <div class="commande__bonbons__infos__souligne">
                    <p><span data-nb='araignee'>0</span>x bonbon araignée</p>
                </div>
                <div class="commande__bonbons__infos__souligne">
                    <p><span data-nb='zombie'>0</span>x bonbon zombie</p>
                </div>
                <div class="commande__bonbons__infos__souligne last">
                    <p><span data-nb='squelette'>0</span>x bonbon squelette</p>
                </div>
                <p>Total : <span data-tag="total">0.00</span>€</p>
            </div>
            
        <?php
        }
        ?>

        <div class="commande__form">
            <h2>Tes informations :</h2>
            <form action="#">
                <div>
                    <input type="text" placeholder="Nom" name="nom">
                    <input type="text" placeholder="Prénom" name="prenom">
                </div>
                <input type="email" placeholder="Email" name="email">
                <input type="text" placeholder="Adresse" name="adresse">
                <input type="text" placeholder="Ville" name="ville">
                <input type="number" placeholder="Code postal" name="codepostal">
                <?php if(isset($_SESSION['total'])){
                        echo '<input type="submit" value="Payer '.$_SESSION['total'].'€"></input>';
                    }
                ?>
            </form>
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