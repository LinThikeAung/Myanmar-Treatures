<?php

class Database{

  
    public function __construct(){

        $this->connection=mysqli_connect("localhost","root","","treature");
        if(!$this->connection){
            die ("Disconnected".mysqli_error($this->connection));
        }
       

    }
    


  
}




?>