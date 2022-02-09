<?php

class ControllerAccueil {

    public static function read() {
        $controller='Accueil';
        $view='accueil';
        $pagetitle='Accueil';
        require (File::build_path(array("view","view.php")));  
    }

    public static function showTeam(){
        $controller='Accueil';
        $view='equipe';
        $pagetitle='Equipe';
        require (File::build_path(array("view","view.php")));
    }

    public static function faq(){
        $controller='Accueil';
        $view='faq';
        $pagetitle='FAQ';
        require (File::build_path(array("view","view.php")));
    }

    public static function presse(){
        $controller='Accueil';
        $view='presse';
        $pagetitle='Presse';
        require (File::build_path(array("view","view.php")));
    }

    public static function rejoindre(){
        $controller='Accueil';
        $view='nousRejoindre';
        $pagetitle='Nous Rejoindre';
        require (File::build_path(array("view","view.php")));
    }

}

?>