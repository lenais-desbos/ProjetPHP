<?php
   
   require_once (File::build_path(array("model","Model.php")));
   
class ModelProduit {

   
    private $id_produit;
    private $nom_produit;
    private $prix;
    private $description;
    
   
    // un getter      
    public function getPrix() {
        return $this->prix;
    }
   
    // un setter 
    public function setPrix($p) {
        $this->prix = $p;
    }

    public function getNom(){
        return $this->nom_produit;
    }

    public function setNom($n){
        $this->nom_produit = $n;
    }

    // un getter      
    public function getDescription() {
        return $this->description;
    }
   
    // un setter 
    public function setDescription($d) {
        $this->description = $d;
    }

    // un getter      
    public function getId() {
        return $this->id_produit;
    }
   
    // un setter 
    public function setId($i) {
        if (srtlen($i)<=8) {
            $this->id_produit = $i;
        }
    }
   
    // un constructeur
    // La syntaxe ... = NULL signifie que l'argument est optionel
    // Si un argument optionnel n'est pas fourni,
    //   alors il prend la valeur par défaut, NULL dans notre cas
    public function __construct($p = NULL, $d = NULL, $i = NULL, $n = NULL) {
        if (!is_null($p) && !is_null($d) && !is_null($i) && !is_null($n)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
            $this->prix = $p;
            $this->description = $d;
            $this->id_produit = $i;
            $this->nom_produit = $n;
        }
    }

    public static function getAllProduits() {
        $PDO = Model::getPDO();
        $rep = $PDO->query("SELECT * FROM p_produit");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
        $tab_prod = $rep->fetchAll();
        return $tab_prod;
    }
 
              
    // une methode d'affichage.
/*    public function afficher() {
      echo "$this->marque, $this->couleur, $this->immatriculation.";
    }
*/

    public static function getProduitById($id) {
        $sql = "SELECT * from p_produit WHERE id_produit=:nom_tag";
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "nom_tag" => $id,
        );
        $req_prep->execute($values);

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
        $tab_prod = $req_prep->fetchAll();
        
        if (empty($tab_prod))
            return false;
        return $tab_prod[0];
    }

/*    public function save() {
        $sql = "INSERT INTO p_produit (id_produit, nom_produit, prix, description) VALUES (:id_tag, :nom_tag, :prix_tag, :desc_tag)";
    // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "id_tag" => $this->id_produit,
            "nom_tag" => $this->nomProg,
            "prix_tag" => $this->prix,
            "desc_tag" => $this->description
            //nomdutag => valeur, ...
        );
    // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    
    // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_prod))
            return false;
        return $tab_prod[0];
    }
*/

    public static function deleteById($id){
        if (getProduitsById($id)==false) {
            return false;
        }
        else{
            $sql = "DELETE FROM p_produit WHERE id_produit=:id_tag";
            $req_prep = Model::getPDO()->prepare($sql);
            $values = array(
            "id_tag" => $id
            );
            $req_prep->execute($values);
        }
    }

    public static function commander($id) {
        $sql = "INSERT INTO p_commander (id_client) VALUES (id_client=:client_tag)";
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "nom_tag" => $id,
        );
        $req_prep->execute($values);

        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
        $tab_prod = $req_prep->fetchAll();
        
        if (empty($tab_prod))
            return false;
        return $tab_prod[0];
    }

}


?>