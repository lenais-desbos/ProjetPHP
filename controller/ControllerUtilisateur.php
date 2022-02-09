<?php

require_once (File::build_path(array("model","ModelUtilisateur.php")));
require_once (File::build_path(array("lib","Security.php")));

class ControllerUtilisateur {

    public static function create() {
        $controller='Utilisateur';
        $view='inscription';
        $pagetitle='Inscription';
        require (File::build_path(array("view","view.php")));
    }

    public static function created(){
       
        $mdp = $_POST['mdp'];
        if ($mdp!=$_POST['mdpv']) {
            $errorMsg = "Les mots de passes doivent être identiques.";
            $controller='Utilisateur';
            $view='inscription';
            $pagetitle='Inscription';
            require (File::build_path(array("view","view.php")));
        }
        else{
            $mdph=Security::hacher($mdp);
            ModelUtilisateur::saveNewUtilisateur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['pays'],$_POST['adresse'],$_POST['code_postal'],$_POST['telephone']);
            $controller='Utilisateur';
            $view='inscris';
            $pagetitle='Utilisateur ajouté';
            require (File::build_path(array("view","view.php")));
        }
    }

    public static function connexion() {
        $controller='Utilisateur';
        $view='connexion';
        $pagetitle='Connexion';
        require (File::build_path(array("view","view.php")));
    }

    public static function connecté(){
        $u = ModelUtilisateur::getUserByMail($_POST['mail_client']);
        if ($u==false){
            $errorMsg = "Cette adresse mail ne correspond à aucun compte";
            $controller='Utilisateur';
            $view='connexion';
            $pagetitle='Connexion';
            require (File::build_path(array("view","view.php")));
        }
        else{
            $mdpu = ModelUtilisateur::checkMDP($u);
            if ($mdpu == false){
                $errorMsg = "Mot de passe incorrect";
                $controller='Utilisateur';
                $view='connexion';
                $pagetitle='Connexion';
                require (File::build_path(array("view","view.php")));
            }
            else if($mdpu!=$_POST['mdp']) {
                $errorMsg = "Mot de passe incorrect";
                $controller='Utilisateur';
                $view='connexion';
                $pagetitle='Connexion';
                require (File::build_path(array("view","view.php")));
            }
            else{
                $controller='Utilisateur';
                $view='connecté';
                $pagetitle='Utilisateur connecté';
                require (File::build_path(array("view","view.php")));
            }
        }
    }

    public static function error(){
        $controller='Utilisateur';
        $view='error';
        $pagetitle='erreur';
        require (File::build_path(array("view","view.php")));
    }

    public static function read(){
        $u = ModelUtilisateur::getUserByMail($_GET['mail_client']);
        if ($u==false){
            require (File::build_path(array("view","view.php")));
        }
        else {
            $controller='Utilisateur';
            $view='detail';
            $pagetitle='Mon compte';
            require (File::build_path(array("view","view.php")));
        }
    }

    public static function admin(){
        $controller='Utilisateur';
        $view='administration';
        $pagetitle='Administration';
        require (File::build_path(array("view","view.php")));
    }



/*

    public static function read(){
        $p = ModelProduit::getProduitById($_POST['id']);
        if ($p==false){
            require (File::build_path(array("view","view.php")));
        }
        else {
            $controller='produit';
            $view='detail';
            $pagetitle='Détails produit';
            require (File::build_path(array("view","view.php")));
        }
    }

    

    

    public static function delete(){
        $id = $_POST['idProd'];
        ModelProduit::deleteById($id);
        $tab_p = ModelProduit::getAllProduits();
        $controller = 'produit';
        $view = 'deleted';
        $pagetitle = 'Supprimée';
        require (File::build_path(array("view","view.php")));
    }
    commentaire pour le pull de lélé 
*/
}

?>