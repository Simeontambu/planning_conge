<?php
namespace App; 
// connection to bdd
class Connexion{
    private $DB_SERVER ="localhost";
    private $DB_USERNAME ="root";
    private $DB_PASSWORD= "";
    private $DB_NAME="conge_agent";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = mysqli_connect($this->DB_SERVER, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_NAME);
            return $this->conn;
        }catch(Exception $e){
            echo "erreur de connexion:", $e.getMessage();
        }
                       
    }
}
 
?>