<?php
require "./config/connexion.php";
class User{

    /*********************
        ATTRIBUTS
    **********************/
    private $id_user;
    private $name;
    private $first_name;
    private $mail;
    private $password;
    private $image;
    private $id_role;

 

    /**********************
        CONSTRUCTEUR
    ***********************/
    public function __construct(){

    }
   
    /***********************
        GETTER & SETTER
    ************************/

    public function getId(){
		return $this->id_user;
	}

	public function setId($id_user){
		$this->id_user = $id_user;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

    public function getFirstName(){
		return $this->first_name;
	}

	public function setFirstName($first_name){
		$this->first_name = $first_name;
	}
	public function getMail(){
		return $this->mail;
	}

	public function setMail($mail){
		$this->mail = $mail;
	}

    public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

    public function getIdRole(){
		return $this->id_role;
	}

	public function setIdRole($id_role){
		$this->id_role = $id_role;
	}


    /***********************
            CRUD
    ************************/
     //Création d'un utilisateur (insert)
    public function createUtilisateur($bdd){
        $name = $this->name;
        $first_name = $this->first_name;
        $mail = $this->mail;
        $password = $this->password;
        $image = $this->image;
        $id_role = $this->id_role;
        try
        {   
            //requête ajout d'un utilisateur
            $req = $bdd->prepare('INSERT INTO users (name, first_name, mail, password, image, id_role) 
            VALUES (:name, :first_name, :mail, :password, :image, :id_role)');
            $req->bindValue(":name", $name);
            $req->bindValue(":first_name", $first_name);
            $req->bindValue(":mail", $mail);
            $req->bindValue(":password", $password);
            $req->bindValue(":image", $image);
            $req->bindValue(":id_role", $id_role);
            $req->execute();
            $req->closeCursor();
           
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }        
    }

    public function getUser($bdd){
        $mail = $this->mail; 
       
        $req= $bdd->prepare("SELECT * FROM users WHERE mail = $mail");
        $req->execute();
        return $req;
    }

}
?>