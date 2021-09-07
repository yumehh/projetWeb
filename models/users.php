<?php 

    require_once('models/connectDB.php');

    class Users extends ConnectDB {

        private $_idUtilisateur;
        private $_idRole;
        private $_pseudo;
        private $_pwUser;
        private $_email;

        // GETTER 
        public function idUtilisateur(){
            return $this->_idUtilisateur;
        }

        public function idRole(){
            return $this->_idRole;
        }

        public function pseudo(){
            return $this->_pseudo;
        }

        public function pwUser(){
            return $this->_pwUser;
        }

        public function email(){
            return $this->_email;
        }

        // SETTER 
        public function setIdUtilisateur($_idUtilisateur){
            $this->_idUtilisateur = $_idUtilisateur;
        }

        public function setidRole($_idRole){
            $this->_idRole = $_idRole;
        }

        public function setPseudo($_pseudo){
            $this->_pseudo = $_pseudo;
        }

        public function setPwUser($_pwUser){
            $this->_pwUser = $_pwUser;
        }

        public function setEmail($_email){
            $this->_email = $_email;
        }


        function addUser($pseudo, $mdp, $email){

            $db = $this->connexionDB();
            $reponse = $db->prepare('INSERT INTO Utilisateurs(idRole, pseudo, pwUser, email, date_inscription) 
                                        VALUES (2, :pseudo, :mdp, :email, NOW())');
            if($mdp){
                $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            }else{
                echo "fail mot de passe";
            }
            $reponse->execute(array(
                'pseudo' => $pseudo,
                'mdp' => $mdp,
                'email' => $email
            ));
            $reponse->closeCursor();
        }
    
        function checkUserByPseudo($pseudo){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT * FROM Utilisateurs WHERE pseudo = :pseudo');
            $reponse->execute(array(
                'pseudo' => $pseudo
            ));
            $user = $reponse->fetch();
            $reponse->closeCursor();
            return $user;
        }

        function getIdUser($pseudo){

            $db = $this->connexionDB();
            $reponse = $db->prepare('SELECT idUtilisateur FROM Utilisateurs WHERE pseudo =:pseudo');
            $reponse->execute(array(
                'pseudo' => $pseudo
            ));
            $idUser = $reponse->fetch();
            $reponse->closeCursor();
            return $idUser;
        }

    }

?>