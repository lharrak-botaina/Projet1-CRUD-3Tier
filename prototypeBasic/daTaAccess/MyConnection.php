<?php
class MyConnection{
    private $host;
    private $user;
    private $passWord;
    private $dataBase;



    protected function getConnection(){

        $this->host="localhost";
        $this->user="root";
        $this->passWord = "";
        $this->dataBase= "projet-1";


        $connection = new mysqli($this->host,$this->user,$this->passWord,$this->dataBase);
        return $connection;
    }


}


?>
