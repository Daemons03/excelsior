<?php
class UserManager{
    private $_bdd;
    public function __construct($_bdd)
    {
        $this->_bdd = $_bdd;
    }
    public function getUser($email,$password){
        $passwordmd5 = MD5($password);
            $req = $this->_bdd->prepare('SELECT * FROM client WHERE email = :email AND password = :password');
            $req->execute(array(
                'email' => $email,
                'password' => $passwordmd5));
            $donnees = $req->fetch();
            $user = new User($donnees);
            return $user;
    }
    
        public function getUserById($id){
        $req = $this->_bdd->prepare('SELECT * FROM client WHERE id_client = :id_client;');
            $req->execute(array(
                'id_client' => $id));
            $donnees = $req->fetch();
            $user = new User($donnees);
            return $user;
    }


    public function userExists($email) {
        $req = $this->_bdd->prepare('SELECT * FROM client WHERE email= :email');
            $req->execute(array(
                'email' => $email
            ));
            $donnees = $req->fetch();
            if ($donnees != false) {
             $user = new User($donnees);
            return $user;
            }else{
                return false;
            }

    }
    
    public function createUser($user1, $userPrenom, $password, $email, $sexe){
        $req = $this->_bdd->prepare('INSERT INTO client(nom, prenom, sexe, email, password) VALUES(:nom, :prenom, :sexe, :email, :password)');
            $req->execute(array(
            'nom' => $user1,
            'prenom' => $userPrenom,
            'sexe' => $sexe,
            'email' => $email,
            'password' => $password));
    }

    public function getBdd(){
        return $this->_bdd;
    }

    public function setBdd($_bdd){
        $this->_bdd = $_bdd;
        return $this;
    }
}



?>