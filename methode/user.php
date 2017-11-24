<?php 
class User{
    private $id_client;
    private $nom;
    private $prenom;
    private $sexe;
    private $email;
    private $password;
    private $date;

    public function __construct($donnees){
        $this->id_client = $donnees['id_client'];
        $this->nom = $donnees['nom'];
        $this->prenom = $donnees['prenom'];
        $this->sexe = $donnees['sexe'];
        $this->email = $donnees['email'];
        $this->password = $donnees['password'];
        $this->date = $donnees['date'];
    }

    public function getIdClient(){
        return $this->id_client;
    }

    public function setIdClient($id_client){
        $this->id_client = $id_client;

        return $this;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(){
        return $this->sexe;
    }

    public function setSexe($sexe){
        $this->sexe = $sexe;

        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;

        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;

        return $this;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;

        return $this;
    }
}
?>