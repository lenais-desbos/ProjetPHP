<?php
class Conf
{

    static private $debug =True;

    static private $databases = array(
        // Le nom d'hote est webinfo a l'IUT
        // ou localhost sur votre machine
        'hostname' => 'webinfo',
        // A l'IUT, vous avez une BDD nommee comme votre login
        // Sur votre machine, vous devrez creer une BDD
        'database' => 'viguiere',
        // A l'IUT, c'est votre login
        // Sur votre machine, vous avez surement un compte 'root'
        'login' => 'viguiere',
        // A l'IUT, c'est votre mdp (INE par defaut)
        // Sur votre machine personelle, vous avez creez ce mdp a l'installation
        'password' => 'sdiVGVyGrJibWIY9'
    );

    public static function getLogin() {
        return self::$databases['login'];
    }

    public static function getHostname() {
        return self::$databases['hostname'];
    }

    public static function getDatabase() {
        return self::$databases['database'];
    }

    public static function getPassword() {
        return self::$databases['password'];
    }

    public static function getDebug()
    {
        return self::$debug;
    }


}


?>
