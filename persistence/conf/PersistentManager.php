<?php

class PersistentManager {

    private static $instance = null;
    private static $connection = null;
    private $userBD = "root";
    private $psswdBD = "";
    private $nameBD = "rolegame";
    private $hostBD = "localhost";

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {
        $this->establishCredentials();

        PersistentManager::$connection = mysqli_connect($this->hostBD, $this->userBD, $this->psswdBD, $this->nameBD);

        if (mysqli_connect_errno()) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        mysqli_query(PersistentManager::$connection, "SET NAMES 'utf8'");
    }
    
    private function establishCredentials() {
        $dir = __DIR__;
        // Lectura de parametros de configuración desde archivo externo
        if (file_exists( $dir.'\credentials.json')) {
            $credentialsJSON = file_get_contents($dir.'\credentials.json');
            $credentials = json_decode($credentialsJSON, true);

            $this->userBD = $credentials["user"];
            $this->psswdBD = $credentials["password"];
            $this->nameBD = $credentials["name"];
            $this->hostBD = $credentials["host"];
        }
    }
    
    //Cierra la conexión.
    public function close_connection($connection) {
        mysqli_close($connection);
    }

    //Retorna la instancia de la conexión
    function get_connection() {
        return PersistentManager::$connection;
    }

    //Getters y Setters de los parámetros de configuración de BD.
    function get_hostBD() {
        return $this->hostBd;
    }

    function get_usuarioBD() {
        return $this->userBD;
    }

    function get_psswdBD() {
        return $this->psswdBD;
    }

    function get_nombreBD() {
        return $this->nameBD;
    }

}

?>
