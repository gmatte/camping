<?php
class Camping{                         

   private $_host = "localhost";
   private $_login = "root";
   private $_mdp = "";
   
   public function __construct(){      
      echo "Bonjour. Ceci est un constructeur<br />\n";
      $this->connect();
   }
   
   public function connect(){
      try{
         echo ($connect = mysql_connect($this->_host, $this->_login, $this->_mdp))?"Connection réussite !<br />\n":"";
            
      }
      catch(Exception $e){
         echo "Erreur : ".$e->getMessage()."<br />\n";
      }
   }
   
}

$camp = new Camping();
?>