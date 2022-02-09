<?php

require_once (File::build_path(array("controller","ControllerAccueil.php")));
require_once (File::build_path(array("controller","ControllerProduit.php")));
require_once (File::build_path(array("controller","ControllerUtilisateur.php")));
// On recupère l'action passée dans l'URL
if (isset($_GET['controller'])){
	$controller = "Controller".ucfirst($_GET['controller']);
}else if (isset($_POST['controller'])) {
    $controller = 'Controller' .$_POST['controller'];
}else{
	$controller ="ControllerAccueil";
}


if (isset($_GET['action'])){
	$action = $_GET['action'];
}else if (isset($_POST['action'])) {
    $action = $_POST['action'];
}else{
	$action="read";
}


if (in_array($action, get_class_methods($controller), false)) {
	$controller::$action();
}
?>