<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Sweetkins - Accueil</title>
</head>
<body>
    <?php include('loader.php');?>
    <header class="main-header">

        <a id="main-header-logo" href="index.php" class="main-header__logo">
            <img src="./assets/img/logo_sweetkins.svg" alt="Logo de la marque de bonbons Sweetkins" />
        </a>

        <img id="main-nav-burger" class="hamburger-menu" src="./assets/img/menu-hamburger.svg" alt="Menu du site Sweet'kins" aria-controls="main-nav" aria-expanded="false"/>

        <nav id="main-nav" class="main-header__nav">
            <a class="main-header__nav__item--active" href="index.php">Les bonbons</a>
            <a class="main-header__nav__item" href="creation.php">Créer mon paquet</a>
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

    <div class="container">
        <div class="intro">

            <div class="intro__infos">
                <p class="intro__infos__title">Les bonbons terrifiants Sweetkins débarquent...</p>
                <a href="#decouvrir"><button class="intro__infos__button">Découvrir maintenant</button></a>
                <img src="./assets/img/toile_fond.png" alt="Illustration citrouille pour la marque de bonbons Sweet'kins" />
            </div>
    
            <div class="intro__illustration">
                <img src="./assets/img/illustration_intro.png" alt="Illustration citrouille pour la marque de bonbons Sweet'kins" />
            </div>
    
        </div>

        <div id="decouvrir" class="infos">
            <img class="infos__illua" src="./assets/img/araignee-fond.svg" alt="Illustration araignée" />
            <img class="infos__illub" src="./assets/img/toile_fond.png" alt="Illustration toile" />
            <img class="infos__illuc" src="./assets/img/araignee-fond.svg" alt="Illustration araignée" />
            <div class="infos__desc">
                <div class="infos__desc__title">
                    <h1>Sweet'kins ?</h1>
                    <div></div>    
                </div>
                <p>Sweet’kins est une marque de bonbons un peu spéciale. En effet, chaque bonbon possède une histoire et vous permet d’obtenir des pouvoirs magiques ! Découvrez ci-dessous les effets donnés par nos différents bonbons...</p>
            </div>

            <!-- Bonbon chauve souris -->
            <div class="infos__bonbons">
                <div class="infos__bonbons__single bonbon">
                    <div class="bonbon__img">
                        <img src="./assets/img/bonbon_chauve-souris.png" alt="Illustration du bonbon chauve-souris de Sweet'kins">
                    </div>
                    <div class="bonbon__infos">
                        <p class="bonbon__infos__title">
                            Bonbon Chauve-souris
                        </p>
                        <p class="bonbon__infos__desc">
                            Voler et voir dans le noir, ça fait rêver non ? 12 bonbons chauve-souris et cela devient possible...
                        </p>
                        <p class="bonbon__infos__gout">
                            Goût réglisse
                        </p>
                    </div>
                </div>

                <!-- Bonbon chauve fantôme -->
                <div class="infos__bonbons__single bonbon bonbon--reverse">
                    <div class="bonbon__img--portrait">
                        <img src="./assets/img/bonbon_fantome.png" alt="Illustration du bonbon chauve-souris de Sweet'kins">
                    </div>
                    <div class="bonbon__infos--reverse">
                        <p class="bonbon__infos__title">
                            Bonbon Fantôme
                        </p>
                        <p class="bonbon__infos__desc">
                            Tu rêves de devenir invisible aux yeux de tous ? Et bien tu n’as qu’a manger 10 de ces bonbons pour que cela se réalise...                        </p>
                        <p class="bonbon__infos__gout">
                            Goût citrouille
                        </p>
                    </div>
                </div>

                <!-- Bonbon Araignée -->
                <div class="infos__bonbons__single bonbon">
                    <div class="bonbon__img">
                        <img src="./assets/img/bonbon_araignee.png" alt="Illustration du bonbon chauve-souris de Sweet'kins">
                    </div>
                    <div class="bonbon__infos">
                        <p class="bonbon__infos__title">
                            Bonbon Araignée
                        </p>
                        <p class="bonbon__infos__desc">
                            12 bonbons mangés et hop, te voilà comme Spider-man. Les murs n’auront plus de secret pour toi...
                        </p>
                        <p class="bonbon__infos__gout">
                            Goût fraise
                        </p>
                    </div>
                </div>

                <!-- Bonbon Zombie -->
                <div class="infos__bonbons__single bonbon bonbon--reverse">
                    <div class="bonbon__img">
                        <img src="./assets/img/bonbon_zombie.png" alt="Illustration du bonbon chauve-souris de Sweet'kins">
                    </div>
                    <div class="bonbon__infos--reverse">
                        <p class="bonbon__infos__title">
                            Bonbon Zombie
                        </p>
                        <p class="bonbon__infos__desc">
                            Après avoir mangé 15 bonbons fantôme, tu deviendras invisible aux yeux de tous
                        </p>
                        <p class="bonbon__infos__gout">
                            Goût pomme
                        </p>
                    </div>
                </div>

                <div class="infos__bonbons__single bonbon">
                    <div class="bonbon__img--portrait bonbon3D">
                        <img class="vuenormale" src="./assets/img/bonbon_squelette3Dface.png" alt="Illustration du bonbon suqelette de Sweet'kins">
                        <img class="vue3D" src="./assets/img/bonbon_squelette3D.png" alt="Illustration du bonbon suqelette de Sweet'kins">
                    </div>
                    <div class="bonbon__infos">
                        <p class="bonbon__infos__title">
                            Bonbon Squelette
                        </p>
                        <p class="bonbon__infos__desc">
                            Après avoir mangé 10 bonbons squelette, tu deviendras immortel
                        </p>
                        <p class="bonbon__infos__gout">
                            Goût guimauve
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="jenveux">
            <h2> J'en veux </h2>
            
            <div class="jenveux__contenu">
                <div class="jenveux__contenu__illustration">
                    <img class="citrouille" src="./assets/img/citrouille_illustration.png" alt="Illustration citrouille" />
                </div>
                <div class="jenveux__contenu__infos">
                    <p>Compose ton propre paquet pour<br />choisir toi-même quels supers<br />pouvoirs tu veux obtenir ! </p>
                    <a href="./creation.php"><button>C'est parti</button></a>
                </div>
            </div>
            <img class= "jenveux__araignee" src="./assets/img/araignee.png" alt="Illustration araignée Sweet'kins" />
        </div>

        <div class= "lepetitplus">
            <h2>Le petit +</h2>
            <div class="lepetitplus__infos">
                <p>Viens vite découvrir les supers coloriages que nous t’avons préparés ! <br />
                    Tu pourras mettre en couleur les visuels de tes bonbons préférés !</p> 
        
                <a href="./extras.php"><button class="page-extra">Découvrir les extras</button></a>
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



    </div>
    <script src="./assets/js/script.js"></script>
</body>
</html>