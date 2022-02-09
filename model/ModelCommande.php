<?php
   
   require_once (File::build_path(array("model","Model.php")));
   
class ModelCommande {

   
    private $id_commande;
    private $id_produit;
    private $quantite_produit;
    
       
    public function getidC() {
        return $this->id_commande;
    }
   
    public function setidC($c) {
        $this->id_commande = $c;
    }

    public function getidP(){
        return $this->id_produit;
    }

    public function setidP($p){
        $this->id_produit = $p;
    }

    // un getter      
    public function getQuantite() {
        return $this->quantite_produit;
    }
   
    // un setter 
    public function setQuantite($q) {
        $this->quantite_produit = $q;
    }
   
    // un constructeur
    // La syntaxe ... = NULL signifie que l'argument est optionel
    // Si un argument optionnel n'est pas fourni,
    //   alors il prend la valeur par défaut, NULL dans notre cas
    public function __construct($c = NULL, $p = NULL, $q = NULL) {
        if (!is_null($c) && !is_null($p) && !is_null($q)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
            $this->id_commande = $c;
            $this->id_produit = $p;
            $this->quantite_produit = $q;
        }
    }

 
              
    // une methode d'affichage.
/*    public function afficher() {
      echo "$this->marque, $this->couleur, $this->immatriculation.";
    }
*/

}


?>