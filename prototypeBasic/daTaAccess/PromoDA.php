<?php
include 'config.php';
include 'Promo.php';
class PromoDA{

    public function getAllPromos(){
        $selectRow ="SELECT * FROM promotion";
        $query = mysqli_query(getConnection(),$selectRow);
        $promo_data = mysqli_fetch_all($query,MYSQLI_ASSOC);

        $TableData = array();
        foreach($promo_data as $value_data){
            $promo =new Promo();
            $promo->setName($value_data['name']);
            array_push($TableData, $promo);
        }
        return $TableData;

    }

    function addPromo($promo){
        $name =$promo->getName();
        $insertRow ="INSERT INTO promotion(name) VALUES($name)";
        mysqli_query(getConnection(),$insertRow);

        
    }




}