<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pagetitle; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/commandeETcontact.css">
    <link rel="stylesheet" type="text/css" href="css/produit.css">
    <link rel="stylesheet" type="text/css" href="css/page_produits.css">
    <link rel="stylesheet" type="text/css" href="css/equipe.css">
    <link rel="stylesheet" type="text/css" href="css/metiers.css">
    <link rel="stylesheet" type="text/css" href="css/inscription.css">
    <link rel="stylesheet" type="text/css" href="css/panier.css">
    <script type="text/javascript" src="js/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="images/logo.ico">
</head>

<body>
<header>
    <div class="menuSansBurger">
        <a href="index.html"><img src="images/entrepriseLogo.png" alt="logo"></a>
        <nav>
            <div>
                <a href="index.php">Accueil</a>
            </div>
            <div>
                <a href="?controller=utilisateur&action=connexion">Connexion</a>
            </div>
            <div>
                <a href="index.php?controller=produit&action=readAll">Produits</a>
            </div>
            <div>
                <a href="?controller=accueil&action=presse">Presse</a>
            </div>
            <div>
                <a href="?controller=accueil&action=faq">F.A.Q</a>
            </div>
            <?php
            // Si l'utilisateur est un membre ou administrateur, il peut regarder les données de son compte
            if ($_SESSION['statue'] == 1 || $_SESSION['statue'] == 2)
            {
                echo "<div class=\"conteneur\">
                        <a href=\"?controller=utilisateur&action=read\">Mon compte</a>
                    </div>";
            }

            ?>

            <?php

            if ($_SESSION['statue'] == 2) {
                echo "<div>
                <a href=\"?controller=utilisateur&action=admin\">Administation</a>
            </div>";
            }

            ?>

            <div>
                <a href="?controller=produit&action=panier">Panier</a>
            </div>
        </nav>
    </div>
    <div class="burger">
        <img src="images/burger.png" alt="burger">
        <nav id="menu2">
            <div>
                <a href="index.php">Accueil</a>
            </div>
            <!-- potentielement pour enlever le bouton quand on est deja inscrit-->

            <?php
            // JE NE SAIS PAS CE QUE TU VEUX METTRE
            if ($_SESSION['statue'] == 1 ||$_SESSION['statue'] == 1)
            {
                // A MODIFIER
                echo "Mettre code bouton navigation";
            }
            ?>

            <?php
            // JE NE SAIS PAS CE QUE TU VEUX METTRE
            if ($_SESSION['statue'] == 1 ||$_SESSION['statue'] == 1)
            {
                // A MODIFIER
                echo "<div>
                    <a href=\"?controller=utilisateur&action=create\">lll</a>
                </div>";
            }
            else {

                echo "<div>
                    <!-- c'est la qu'on met le bouton de connection (peutetre)-->
                </div>";

            }
            ?>

            <div>
                <a href="index.php?controller=produit&action=readAll">Produit</a>
            </div>
            <div>
                <a href="?controller=accueil&action=presse">Presse</a>
            </div>
            <div>
                <a href="?controller=accueil&action=faq">F.A.Q</a>
            </div>
            <div class="conteneur">
                <a href="?controller=produit&action=panier">Panier</a>
            </div>
        </nav>
    </div>
</header>
<main>
    <?php
    if (isset($errorMsg)) {
        echo "<p>" . $errorMsg . "</p>";
    }
    // Si $controleur='voiture' et $view='list',
    // alors $filepath="/chemin_du_site/view/voiture/list.php"
    $filepath = File::build_path(array("view", $controller, "$view.php"));
    require $filepath;
    ?>
</main>
<a href="#" id="ancre"><img id="ballon" src="images/ancre.png" alt="ancre"></a>

<footer>
    <div id="social_block">
        <a href="https://fr-fr.facebook.com/Pokemon/" target="_blank"><img class="social_icon"
                                                                           src="../images/icon_facebook.png"
                                                                           alt="logo Facebook"></a>
        <a href="https://twitter.com/PokemonFR" target="_blank"><img class="social_icon"
                                                                     src="../images/icon_twitter.png"
                                                                     alt="logo Twitter"></a>
        <a href="https://www.instagram.com/pokemon.fra/" target="_blank"><img class="social_icon"
                                                                              src="../images/icon_instagram.png"
                                                                              alt="logo Instagram"></a>
        <a href="https://github.com/gatiendep/ProjetSiteWeb" target="_blank"><img class="social_icon"
                                                                                  src="../images/icon_github.png"
                                                                                  alt="logo GitHub"></a>
    </div>
    <span>
                Dracovente © 666-2020
            <a href="./mentionsLegales.html" class="aFooter">Mentions légales</a>
        </span>
</footer>
</body>
</html>