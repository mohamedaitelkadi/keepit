<?php

  class connection{

    public function connect(){
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='keepit';

        $conn = new mysqli($servername,$username, $password,$dbname); 

        return $conn;
    }



}

?>