
<div id="inscription_container">
    <h1>Inscription</h1>
    <div id="inscription_content">
        <form action="index.php" method="post">

            <div class="form-lign">
                <label>Nom* : </label>
                <input type="text" name="nom" 
                <?php 
                if(isset($_POST["nom"])){
                    echo ' value="'.$_POST["nom"].'"';
                } 
                ?>required>
            </div>

            <div class="form-lign">
                <label>Prénom* : </label>
                <input type="text" name="prenom" 
                <?php 
                if(isset($_POST["prenom"])){
                    echo ' value="'.$_POST["prenom"].'"';
                } 
                ?>required>
            </div>

            <div class="form-lign">
                <label>Email* : </label>
                <input type="email" name="email" 
                <?php 
                if(isset($_POST["email"])){
                    echo ' value="'.$_POST["email"].'"';
                } 
                ?>required>
            </div>

            <div class="form-lign">
                <label>Mot de passe* :</label>
                <input type="password" name="mdp" required>
            </div>

            <div class="form-lign">
                <label>Confirmation mot de passe* :</label>
                <input type="password" name="mdpv" required>
            </div>

            <div class="form-lign">
                <label>Pays* : </label>
                <select name="pays" 
                <?php 
                if(isset($_POST["pays"])){
                    echo ' value="'.$_POST["pays"].'"';
                } 
                ?> required>
                    <option value="">--Choisissez une option--</option>
                    <option value="de">Allemagne</option>
                    <option value="au">Australie</option>
                    <option value="br">Brésil</option>
                    <option value="ca">Canada</option>
                    <option value="ch">Chine</option>
                    <option value="eg">Egypte</option>
                    <option value="es">Espagne</option>
                    <option value="fr">France</option>
                    <option value="in">Inde</option>
                    <option value="jp">Japon</option>
                    <option value="po">Portugal</option>
                    <option value="uk">Royaume-Uni</option>
                    <option value="su">Russie</option>
                    <option value="tv">Tuvalu</option>
                    <option value="us">USA</option>
                </select>
            </div>

            <div class="form-lign">
                <label>Adresse* : </label>
                <input type="text" name="adresse" 
                <?php 
                if(isset($_POST["adresse"])){
                    echo ' value="'.$_POST["adresse"].'"';
                } 
                ?>required>
            </div>

            <div class="form-lign">
                <label>Ville* : </label>
                <input type="text" name="ville" 
                <?php 
                if(isset($_POST["ville"])){
                    echo ' value="'.$_POST["ville"].'"';
                } 
                ?>required>
            </div>

            <div class="form-lign">
                <label>Code postal* : </label>
                <input type="text" name="code_postal" 
                <?php 
                if(isset($_POST["code_postal"])){
                    echo ' value="'.$_POST["code_postal"].'"';
                } 
                ?>required>
            </div>

            <div class="form-lign">
                <label>Numéro de téléphone* : </label>
                <input type="text" name="telephone" 
                <?php 
                if(isset($_POST["telephone"])){
                    echo ' value="'.$_POST["telephone"].'"';
                } 
                ?>required>
            </div>

            <div class="form-lign" id="sendButton">
                <input type="submit" value="S'inscrire" id="send">
                <input type='hidden' name='controller' value='Utilisateur'>
                <input type='hidden' name='action' value='created'>
            </div>

        </form>
    </div>
</div>
