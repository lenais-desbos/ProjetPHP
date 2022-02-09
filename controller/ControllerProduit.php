<?php
require_once (File::build_path(array("model","ModelProduit.php"))); // chargement du modèle
class ControllerProduit {

    public static function readAll() {
        $controller='Produit';
        $view='produit';
        $pagetitle='Produits';
        $tab_p = ModelProduit::getAllProduits();     //appel au modèle pour gerer la BD
        require (File::build_path(array("view","view.php")));  //"redirige" vers la vue
    }

    public static function read(){
        $p = ModelProduit::getProduitById($_GET['id_produit']);
        if ($p==false){
            require (File::build_path(array("view","view.php")));
        }
        else {
            $controller='Produit';
            $view='detail';
            $pagetitle='Détails produit';
            require (File::build_path(array("view","view.php")));
        }
    }

    public static function create(){
        $controller='Produit';
        $view='create';
        $pagetitle='Formulaire création produit';
        require (File::build_path(array("view","view.php")));
    }

    public static function created(){
        $produit = new ModelVoiture($_POST['prix'],$_POST['description'],$_POST['id_produit']);
        $produit->save();
        $controller='Produit';
        $view='created';
        $pagetitle='Produit créé';
        $tab_p = ModelProduit::getAllProduits();
        require (File::build_path(array("view","view.php")));
    }

    public static function error(){
        $controller='Produit';
        $view='error';
        $pagetitle='erreur';
        require (File::build_path(array("view","view.php")));
    }

    public static function delete(){
        $id = $_GET['id_produit'];
        ModelProduit::deleteById($id);
        $tab_p = ModelProduit::getAllProduits();
        $controller = 'Produit';
        $view = 'deleted';
        $pagetitle = 'Supprimée';
        require (File::build_path(array("view","view.php")));
    }

    public static function ajouterProduit()
    {

        if (isset($_SESSION['panier'])) $tabPanier = $_SESSION['panier'];
        else $tabPanier = array();

        if (!isset($tabPanier[$_POST['idProduit']])) $tabPanier[$_POST['idProduit']] = 1;
        else $tabPanier[$_POST['idProduit']]++;

        $_SESSION['panier'] = $tabPanier;


        $p = ModelProduit::getProduitById($_POST["idProduit"]);

        $view = 'produit';
        $pagetitle = 'Produits' ;
        $message = 'ajouté';

        require File::build_path(array("view", "view.php"));
    }

    public static function panier(){
        $value=0;
        $produits = ModelProduit::getAllProduits();
        var_dump($_SESSION['panier']);
        if(isset($_SESSION['panier'])) {
            foreach ($_SESSION['panier'] as $idProduit=> $quantite){
                $p = ModelProduit::getProduitById($idProduit);
                $value+=$quantite*($p->getPrix());
            }
        }
        $controller='Produit';
        $view='panierBis';
        $pagetitle='Votre panier';
        require (File::build_path(array("view","view.php")));
    }

    public static function commander()
    {
        $controller = 'Produit';
        $view = 'commande';
        $pagetitle = 'Commande';
        require (File::build_path(array("view","view.php")));
    }


}
?>