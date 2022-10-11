<?php
include 'config.php';
include 'Promo.php';
class PromoDA{



    function addPromo($promo){
        $name =$promo->getName();
        $insertRow ="INSERT INTO promotion(name) VALUES($name)";
        mysqli_query(getConnection(),$insertRow);

        
    }




}