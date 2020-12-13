<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Sweetkins - Loader</title>
</head>
<body>

    <header class="main-header">

        <a href="index.html" class="main-header__logo">
            <img src="./assets/img/logo_sweetkins.svg" alt="Logo de la marque de bonbons Sweetkins" />
        </a>

        <nav class="main-header__nav">
            <a class="main-header__nav__item" href="index.html">Les bonbons</a>
            <a class="main-header__nav__item--active" href="creation.html">Créer mon paquet</a>
            <a class="main-header__nav__item" href="extras.html">Extras</a>
            <a class="main-header__nav__item" href="commande.html"><img src="./assets/img/panier.svg" alt="Panier de commande Sweetkins"></a>
        </nav>

    </header>

    <div id="loader" class="loader">
        <div id="loader__logo" class="loader__logo">
            <div class="loader__logo__fond"></div>
            <img id="loader__logo__image" class="loader__logo__image" src="./assets/img/logo_sweetkins.png" alt="Logo Sweet'kins">
        </div>
        <p class="loader__text"><span style="color: #333333;">Sweet'</span><span style="color:#FF7401">Kins</span></p>
    </div>
    <script src="./assets/js/script.js"></script>
</body>
</html>