<?php
namespace App\model;
use App\Connexion;
class Create_user extends Connexion{
    // private $connect;
    private $db_table = "users";
    public $id;
    public $username;
    public $email;
    public $pass;

    // Connexion at db
    public function __construct($db){
        parent::__construct();

    }

    public function createuser(){
        $sqlQuery = "insert into". $this->db_table ."
                    SET 
                        username =:username,
                        email= :email,
                        pass = :pass";
        $stmt = $this->conn->prepare($sqlQuery);
        
        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->username));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->pass=htmlspecialchars(strip_tags($this->pass));
                        
        // bind data
        $stmt->bindParam(":username", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":pass", $this->pass);
       
                    
        if($stmt->execute()){
            return true;
        }
            return false;
    }
}