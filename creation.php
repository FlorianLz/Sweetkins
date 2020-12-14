<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Sweetkins - Créer son paquet</title>
</head>
<body>
    <header class="main-header">

        <a id="main-header-logo" href="index.php" class="main-header__logo">
            <img src="./assets/img/logo_sweetkins.svg" alt="Logo de la marque de bonbons Sweetkins" />
        </a>

        <img id="main-nav-burger" class="hamburger-menu" src="./assets/img/menu-hamburger.svg" alt="Menu du site Sweet'kins" aria-controls="main-nav" aria-expanded="false"/>

        <nav id="main-nav" class="main-header__nav">
            <a class="main-header__nav__item" href="index.php">Les bonbons</a>
            <a class="main-header__nav__item--active" href="creation.php">Créer mon paquet</a>
            <a class="main-header__nav__item" href="extras.php">Extras</a>
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

    <div class="composer">
        <img class="composer__illua" src="./assets/img/toile_fond.png" alt="Illustration toile" />
        <img class="composer__illub" src="./assets/img/araignee-fond.svg" alt="Illustration araignée" />
        <h1>Compose ton propre paquet de bonbons Sweetkins</h1>
        <div class="composer__content">
            <div class="composer__content__left bonbons__composer">
                <div class="bonbons__composer__single">
                    <div><img src="./assets/img/bonbon_chauve-souris.png" alt="Bonbon chauve-souris Sweetkins"></div>
                    <p>0.05€</p>
                    <div class=composer__btn>
                        <button class="composer__btn__dec" data-tag="chauve-souris" onclick="dec('chauve-souris')">-</button>
                        <input type="number" name="chauve-souris" value=0 readonly>
                        <button class="composer__btn__inc" onclick="inc('chauve-souris')">+</button>
                    </div>
                </div>
                <div class="bonbons__composer__single haut">
                    <div><img src="./assets/img/bonbon_fantome.png" alt="Bonbon fantome Sweetkins"></div>
                    <p>0.07€</p>
                    <div class=composer__btn>
                        <button class="composer__btn__dec" data-tag="fantome" onclick="dec('fantome')">-</button>
                        <input type="number" name="fantome" value=0 readonly>
                        <button class="composer__btn__inc" onclick="inc('fantome')">+</button>
                    </div>
                </div>
                <div class="bonbons__composer__single">
                    <div><img src="./assets/img/bonbon_araignee.png" alt="Bonbon araignee Sweetkins"></div>
                    <p>0.06€</p>
                    <div class=composer__btn>
                        <button class="composer__btn__dec" data-tag="araignee" onclick="dec('araignee')">-</button>
                        <input type="number" name="araignee" value=0 readonly>
                        <button class="composer__btn__inc" onclick="inc('araignee')">+</button>
                    </div>
                </div>
                <div class="bonbons__composer__single">
                    <div><img src="./assets/img/bonbon_zombie.png" alt="Bonbon zombie Sweetkins"></div>
                    <p>0.05€</p>
                    <div class=composer__btn>
                        <button class="composer__btn__dec" data-tag="zombie" onclick="dec('zombie')">-</button>
                        <input type="number" name="zombie" value=0 readonly>
                        <button class="composer__btn__inc" onclick="inc('zombie')">+</button>
                    </div>
                </div>
                <div class="bonbons__composer__single haut">
                    <div class="bonbon3D"><img class="vuenormale" src="./assets/img/bonbon_squelette3Dface.png" alt="Illustration du bonbon suqelette de Sweet'kins">
                        <img class="vue3D" src="./assets/img/bonbon_squelette3D.png" alt="Illustration du bonbon suqelette de Sweet'kins"></div>
                    <p>0.12€</p>
                    <div class=composer__btn>
                        <button class="composer__btn__dec" data-tag="squelette" onclick="dec('squelette')">-</button>
                        <input type="number" name="squelette" value=0 readonly>
                        <button class="composer__btn__inc" onclick="inc('squelette')">+</button>
                    </div>
                </div>
            </div>
            <div class="composer__content__right bonbons__infos">
                <p>Détails de votre paquet :</p>
                <div class="bonbons__infos__souligne">
                    <p><span data-nb='chauve-souris'>0</span>x bonbon chauve-souris</p>
                </div>
                <div class="bonbons__infos__souligne">
                    <p><span data-nb='fantome'>0</span>x bonbon fantôme</p>
                </div>
                <div class="bonbons__infos__souligne">
                    <p><span data-nb='araignee'>0</span>x bonbon araignée</p>
                </div>
                <div class="bonbons__infos__souligne">
                    <p><span data-nb='zombie'>0</span>x bonbon zombie</p>
                </div>
                <div class="bonbons__infos__souligne last">
                    <p><span data-nb='squelette'>0</span>x bonbon squelette</p>
                </div>
                <p>Total : <span data-tag="total">0.00</span>€</p>
                <button id="ajoutpanier" onclick="ajoutpanier();">Ajouter au panier</button>
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