
    <blockquote>
        <p id="slogan">Pokémon, achetez-les tous !</p>
    </blockquote>

    <div id="entreprise_block">
        <div id="contenu_entreprise">
            <img id="logo" alt="Logo dracaufeu" src="images/entrepriseLogo2.png">
            <p>
                        L\'entreprise Dracovente vous propose des Dracaufeu de qualité avec un prix très raisonnable
                        ainsi que plusieurs options de livraison. Nous pouvons assurer cette qualité grâce aux nombreux
                        employés qui sont expérimenté dans ce domaine. Vous pouvez nous rejoindre en suivant cette page :
                        <a href="nousRejoindre.html">Nous Rejoindre</a>
            </p>
        </div>
    </div>

    <?php
    foreach ($tab_p as $p){
        $phtml = htmlspecialchars($p->getNom());
        $purl = rawurlencode($p->getId());
        echo '<p><a href="./index.php?controller=produit&action=read&id_produit='. $purl . '">'.$phtml.'</a></p>';
        //ill faut retirer le controller du lien c'est sensé le faire tout seul depuis controller Produit il me semble
    }
    ?>

 <!--  <div id="img_block">
        <div id="img_contenu">
                    <a href="https://www.pokepedia.fr/M%C3%A9ga-Dracaufeu_X" target="_blank"><img class="img_dracaufeu" id ="draco_x" src="../../images/versionx.png" alt="Dracaufeu version X"></a>
                    <a href="https://www.pokepedia.fr/Dracaufeu" target="_blank"><img class="img_dracaufeu" id="draco_o" src="../../images/versiono.png" alt="Dracaufeu version original"></a>
                    <a href="https://www.pokepedia.fr/M%C3%A9ga-Dracaufeu_Y" target="_blank"><img class="img_dracaufeu" id="draco_y" src="../../images/versiony.png" alt="Dracaufeu version Y"></a>
                    <a href="https://www.pokepedia.fr/Dracaufeu_Gigamax" target="_blank"><img class="img_dracaufeu" id="draco_g" src="../../images/versiong.png" alt="Dracaufeu version gigamax"></a>
                    <a href="https://quotetheanime.com/cursed-pokemon-images/" target="_blank"><img class="img_dracaufeu" id="draco_g" src="../../images/dracowish.jpg" alt="Dracaufeu version t\'inquiete"></a>
        </div>
    </div>
-->
    <div id="price_block">
        <div class="price_content">
            <img class="price_img" src="images/img_versiono.png" alt="Image d\'un Dracaufeu normal">
            <p>
                <span class="invisible">
                    Vous pouvez avoir un Dracaufeu basique pour
                </span>
                <span class="price_nb">600.000 ₽</span>
                <span class="invisible">
                    .
                </span>
            </p>
            <p>
                <span class="invisible">
                    Vous ne trouverez pas moins cher sur le marché !
                </span>
            </p>
        </div>
        <div class="price_content">
            <img class="price_img" src="images/img_versionx.jpg" alt="Image d\'un Dracaufeu version x">
            <p>
                <span class="invisible">Le Dracaufeu X, est une méga-évolution du Dracaufeu basique, il est disponible pour</span>
                <span class="price_nb">750.000 ₽</span>
                <span class="invisible">
                    .
                </span>
            </p>
        </div>
        <div class="price_content">
            <img class="price_img" src="images/img_versiony.jpg" alt="Image d\'un Dracaufeu version y">
            <p>
                <span class="invisible">Le Dracaufeu Y, est aussi une méga-évolution du Dracaufeu basique, c\'est l\'alternative du Dracaufeu X.</span>
            </p>
            <p>
                <span class="invisible">
                    Vous pouvez l\'acquérir à partir de
                </span>
                <span class="price_nb">750.000 ₽</span>
                <span class="invisible">
                    .
                </span>
            </p>
        </div>
        <div class="price_content" id="price_exception">
            <img class="price_img" src="images/img_versiong.png" alt="Image d\'un Dracaufeu version gigamax">
            <p>
                <span class="invisible">
                    Voici la version Gigamax de Dracaufeu. Il est disponible pour la modique somme de
                </span>
                span class="price_nb">900.000 ₽</span>
                <span class="invisible">
                    .
                </span>
            </p>
        </div>
    </div>

    <div id="egg_block">
        <div class="contenu_egg">
            <a href="https://www.pokepedia.fr/%C5%92uf"><img id="egg_img" src="images/oeuf.png" alt="Oeuf"></a>
            <p id="egg_txt">
                Nos sociétés regroupent plusieurs milliers d\'œufs de Dracaufeu provenant des terres de Kanto<span class="invisible">, l\'origine même de ce Pokémon</span>.
                Nous nous occupons des œufs pendant 3 semaines<span class="invisible">(le temps maximal avant l\'éclosion)</span> avant l\'obtention d\'un joli Salamèche.
                Ce Salamèche sera élevé en plein air avec ses congénères afin d\'apprendre à communiquer, se battre et à développer ses
                        compétences particulières<span class="invisible">, s\'il en a</span>. Nos soigneurs s\'occuperont et aideront les Salamèche à évoluer en Reptincel puis en Dracaufeu.
                Une fois arrivé au stade de Dracaufeu, nous leur apprenons à voler et à utiliser leurs nouvelles techniques. La
                        formation terminée, les Dracaufeu sont envoyés à leurs nouveaux dresseurs ayant passé commande sur notre site.
            </p>
        </div>
    </div>

    <div id="raptincel_block">
        <img id="raptincel_img" src="images/raptincel.png" alt="Reptincel rappeur">
        <p>
                    Connaissez-vous Raptincel, le célèbre Reptincel rappeur. Il
                    est l\'enfant de l\'un des Dracaufeu qu\'une dresseuse nous a commandés.
                    Peut-être que votre Dracaufeu sera aussi une étoile montante du show-business.
                    Il a récemment composé deux musiques pour Ash, célèbre rappeur de
                    Bourg-Palette : <a class="musiclink" target="_blank" href="https://www.youtube.com/watch?v=IoG1677WjLI">Quel genre de Pokémon es-tu ?</a>
                    et <a class="musiclink" target="_blank" href="https://www.youtube.com/watch?v=DK1J4Cu_TsU">Pokérap</a>.
                </p>
            </div>

            <div id="usedraco">
                <p class="txt_usedraco">
                    Un Dracaufeu peut vous simplifier la vie, avec une selle adapté que vous pouvez trouver dans plusieurs autres magasins, il pourra
                    vous transporter où vous voulez dans la région.
                </p>
                <img id="img_monture" alt="Dracaufeu avec un selle" src="../images/monture.png">
                <p class="txt_usedraco">
                    Les Dracaufeu sont utilisés par de nombreux services de livraison. Si vous commandez avec l\'option livré en 24h, un livreur à dos de
                    Dracaufeu viendra vous apporter votre pokémon en main propre.
                </p>
                <img id="img_livreur" alt="Dracaufeu livreur" src="images/livreur.jpg">
            </div>

            <div id="CommandButton">
                <a id="order_link" href="commande.html">
                    <span id="order_txt">Commandez maintenant !</span>
                </a>
            </div>