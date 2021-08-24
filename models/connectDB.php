<?php 

    class ConnectDB {

        private $host = "localhost";
        private $db_name = "projetweb";
        private $db_user = "root";
        private $db_pass = "";

        protected function connexionDB(){
            try{
                return new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                echo "connexion OK";
            }catch(PDOException $exception){
                echo "Erreur de connexion : " . $exception->getMessage();
            }

        }
    }

?>