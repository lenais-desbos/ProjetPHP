
            <?php
            echo '<div><p>'.htmlspecialchars($p->getNom()).'</p><p><img class="image" src = "images/'.htmlspecialchars($p->getNom()).'.png"/>
        </p></div>';
            echo '<div> <p>'.htmlspecialchars($p->getPrix()).'</p><p>'.htmlspecialchars($p->getDescription()).'</p></div>';
            ?>

        
    <form action="index.php" method="post">
        
        <input type = "submit" value = "ajouter au panier">
        <input type="hidden" name="idProduit" value="<?php echo htmlspecialchars($p->getId());?>">
        <input type='hidden' name='controller' value='produit'>
        <input type='hidden' name='action' value='ajouterProduit'>
    </form>