<?php
        if(!isset($_SESSION['panier'])){
            echo "aucun produit dans le panier";
        } else {
            echo '<div class="divTexte"> ';
            foreach ($produits as $p) {
                if (isset($_SESSION['panier'][$p->getId()])) {
                    echo "<div><p>".htmlspecialchars($p->getNom()) . " * " . $_SESSION['panier'][$p->getId()]."</p>";
/*                    echo '<a href="index.php?controller=produit&action=supprimerProduit&idProduit='.rawurlencode($p->getId()) . '"> Enlever un  produit </a>';
                    echo '<a href="index.php?controller=produit&action=ajouterProduit&idProduit='.rawurlencode($p->getId()). '"> Ajouter un  produit </a></div>';
*/
                }
            }
            echo " = ".$value;
        }

        if($value>0){

        ?>
        <form id="formulaire" method="post" action="index.php">
         <p>
                <?php

                    if ($_SESSION['statue'] == 1 || $_SESSION['statue'] == 2) {
                        echo "<input type=\"submit\" value=\"Commander\"/>";
                    }
                    else {
                        echo "Vous devez être connecté pour pouvoir commander.";
                    }

                ?>

                <input type='hidden' name='controller' value='Produit'>
                <input type='hidden' name='action' value='commander'>
                <input type='hidden' name='total' value="<?php echo $value?>">
            </p>
    </form>
    <?php } ?>