<?php 

    class connectDB {
        private $host = "localhost";
        private $db_name = "cours";
        private $db_user = "root";
        private $db_pass = "";

        // protected $table;
        // protected $_pdo;
        // public function __construct(){ // constructeur
        //     $this->table = strtolower(get_class($this));
        //     $this->_pdo = $this->connexionDB();
        // }

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