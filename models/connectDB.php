<?php 

    class ConnectDB {

        // private $host = "localhost";
        // private $db_name = "projetweb";
        // private $db_user = "root";
        // private $db_pass = "";

        // protected $table;
        // protected $_pdo;
        // public function __construct(){ // constructeur
        //     $this->table = strtolower(get_class($this));
        //     $this->_pdo = $this->connexionDB();
        // }

        // protected function connexionDB(){
        //     try{
        //         return new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //         echo "connexion OK";
        //     }catch(PDOException $exception){
        //         echo "Erreur de connexion : " . $exception->getMessage();
        //     }

        // }

        protected function connexionDB(){
            try{
                //PDO
                $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=UTF8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                return $bdd;
        
            }catch(Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
        }

    }

?>