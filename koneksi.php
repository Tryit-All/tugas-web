<?php 
class query {
    private $server  = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "user";
    
    function connect(){
        return mysqli_connect($this->server, $this->username, $this->password, $this->db);
    }
    
}

?>