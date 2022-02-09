<?php
    if (!isset($_SESSION)) {
        session_start();
        $_SESSION['nom'] = '';
        $_SESSION['prenom'] = '';
        $_SESSION['pays'] = '';
        $_SESSION['adresse'] = '';
        $_SESSION['code_postal'] = '';
        $_SESSION['mail'] = '';
        $_SESSION['telephone'] = '';
        $_SESSION['genre'] = '';
        $_SESSION['statue'] = '0'; // 0 = utilisateur lambda | 1 = utilisateur inscrit/connecté | 2 = administrateur


    }
    else {
        session_start();
    }


	$DS = DIRECTORY_SEPARATOR;
	require_once __DIR__ . $DS . 'lib/File.php';
	require_once (File::build_path(array("controller","routeur.php")));

?>