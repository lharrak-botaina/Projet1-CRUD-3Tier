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
        $insertRow ="INSERT INTO promotion(nom) VALUES('$name')";
        mysqli_query(getConnection(),$insertRow);

        
    }
     
    function edit($id){
        $selectRowId="SELECT *FROM promotion where id=$id";
        $result = mysqli_query(getConnection(),$selectRowId);
        $promo_data = mysqli_fetch_assoc($result);
        $promo = new Promo();
        $promo->setId($promo_data['id']);
        $promo->setName($promo_data['nom']);

        return $promo;
    }




}