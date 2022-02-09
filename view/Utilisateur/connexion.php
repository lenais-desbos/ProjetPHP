<div id = "connexion_container">
    <h1>Connexion</h1>
    <div id="connextion_content">
        <form action="index.php" method = "post">
            <div class="form-lign">
                <label>Email* : </label>
                <input type="text" name="email" 
                <?php 
                if(isset($_POST["email"])){
                    echo ' value="'.$_POST["email"].'"';
                } 
                ?>>
            </div>

            <div class="form-lign">
                <label>Mot de passe* :</label>
                <input type="password" name="mdp">
                <?php 
                if(isset($_POST["email"])){
                    echo ' value="'.$_POST["email"].'"';
                } 
                ?>
            </div>

            <div class="form-lign" id="sendButton">
                <input type="submit" value="Se connecter" id="send">
                <input type='hidden' name='controller' value='Utilisateur'>
                <input type='hidden' name='action' value='connecté'>
            </div>
<!-- connecté renvoie sur la page inscription jsp pourquoi -->
            <div>
                <p>Vous n'avez pas encore de compte ?</p>
                <form id="formulaire" method="post" action="index.php">
                    <p>
                        <input type="submit" value="Inscrivez-vous"/>
                        <input type='hidden' name='controller' value='Utilisateur'>
                        <input type='hidden' name='action' value='create'>
                    </p>
                </form>
            </div>

        </form>
    </div>
</div>
