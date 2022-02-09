<?php
   
   require_once (File::build_path(array("model","Model.php")));
   
class ModelUtilisateur {

   
    private $id_client;
    private $mdp;
    private $nom_client;
    private $prenom_client;
    private $pays_client;
    private $adresse_client;
    private $code_postal;
    private $mail_client;
    private $telephone_client;
    private $genre;
    private $statue;
    
   
    public function setMDP($mdp) {
        $this->mdp = $mdp;
    }

    public function getNom() {
        return $this->nom_client;
    }
   
    public function setNom($n) {
        $this->nom_client = $n;
    }

    public function getPrenom(){
        return $this->prenom_client;
    }

    public function setPrenom($p){
        $this->prenom_client = $p;
    }
    
    public function getPays() {
        return $this->pays_client;
    }
   
    public function setPays($y) {
        $this->pays_client = $y;
    }
    
    public function getAdresse() {
        return $this->adresse_client;
    }
   
    public function setAdresse($a) {
        $this->adresse_client = $a;
    }

    public function getCodePostal() {
        return $this->code_postal;
    }
   
    public function setCodePostal($c) {
        $this->code_postal = $c;
    }

    public function getMail() {
        return $this->mail_client;
    }
   
    public function setMail($m) {
        $this->mail_client = $m;
    }

    public function getTelephone() {
        return $this->telephone_client;
    }
   
    public function setTelephone($t) {
        $this->telephone_client = $t;
    }

    public function getGenre() {
        return $this->genre;
    }
   
    public function setGenre($a) {
        $this->genre = $a;
    }

    public function getStatut() {
        return $this->statut;
    }
   
    public function setStatut($s) {
        $this->statut = $s;
    }
   
    // un constructeur
    // La syntaxe ... = NULL signifie que l'argument est optionel
    // Si un argument optionnel n'est pas fourni,
    //   alors il prend la valeur par défaut, NULL dans notre cas
    public function __construct($mdp = NULL, $n = NULL, $p = NULL, $y = NULL, $a = NULL, $c = NULL, $m = NULL, $g = NULL, $s = NULL) {
        if (!is_null($n) && !is_null($p) && !is_null($y) && !is_null($a) && !is_null($c) && !is_null($m) && !is_null($g) && !is_null($s)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
            $this->mdp = $mdp;
            $this->nom_client = $n;
            $this->prenom_client = $p;
            $this->pays_client = $y;
            $this->adresse_client = $a;
            $this->code_postal = $c;
            $this->mail_client = $m;
            $this->genre = $g;
            $this->statue = $s;
        }
    }
 
    public static function saveNewUtilisateur($nom,$prenom,$email,$mdp,$pays,$adresse, $code,$telephone) {
        $sql = "INSERT INTO p_client (nom_client, prenom_client, pays_client, adresse_client, code_postal, mail_client, telephone_client, mdp) VALUES (:nom_tag, :prenom_tag, :pays_tag, :adresse_tag, :code_tag, :email_tag, :telephone_tag, :mdp_tag)";

    // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "nom_tag" => $nom,
            "prenom_tag" => $prenom,
            "pays_tag" => $pays,
            "adresse_tag" => $adresse,
            "code_tag" => $code,
            "email_tag" => $email,
            "telephone_tag" => $telephone,
            "mdp_tag" => $mdp
        );

        $req_prep->execute($values);
    }

    public static function checkMDP($email){
        $sql = "SELECT mdp from p_client WHERE mail_client=:mail_tag";
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "mail_tag" => $mail,
        );
        $req_prep->execute($values);

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
        $tab_ut = $req_prep->fetchAll();
        
        if (empty($tab_ut))
            return false;
        return $tab_ut[0];
    }

/*    public static function checkMDP($email , $mdp){
        $email_secure = mysqli_real_escape_string($db,htmlspecialchars($email)); // pour éviter les injections 
        $mdp_secure = mysqli_real_escape_string($db,htmlspecialchars($mdp));
        
        if($email_secure !== "" && $mdp_secure !== ""){
            $sql = "SELECT count(*) FROM p_clients where mail_client = :email_secure and mdp =mdp_secure";
            $req_prep = Model::getPDO()->prepare($sql);

            $exec_requete = mysqli_query($db,$req_prep);
            $reponse = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if($count!=0) { 
           
    }
*/

    public static function getUserByMail($mail) {
        $sql = "SELECT mail_client from p_client WHERE mail_client=:mail_tag";
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "mail_tag" => $mail,
        );
        $req_prep->execute($values);

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
        $tab_ut = $req_prep->fetchAll();
        
        if (empty($tab_ut))
            return false;
        return $tab_ut[0];
    }

    public static function getIdUser($mail) {
        $sql = "SELECT id_client from p_client WHERE mail_client=:mail_tag";
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "mail_tag" => $mail,
        );
        $req_prep->execute($values);

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
        $tab_ut = $req_prep->fetchAll();
        
        if (empty($tab_ut))
            return false;
        return $tab_ut[0];
    }


 /*
    

    public static function getProduitById($id) {
        $sql = "SELECT * from p_produit WHERE idProd=:nom_tag";
    // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "nom_tag" => $id,
        //nomdutag => valeur, ...
        );
    // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);

    // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
        $tab_prod = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_prod))
            return false;
        return $tab_prod[0];
    }

    

    public static function deleteById($id){
        if (getProduitsById($id)==false) {
            return false;
        }
        else{
            $sql = "DELETE FROM p_produit WHERE idProd=:id_tag";
            $req_prep = Model::getPDO()->prepare($sql);
            $values = array(
            "id_tag" => $id
            );
            $req_prep->execute($values);
        }
    }

    */

}


?>