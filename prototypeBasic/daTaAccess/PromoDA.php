<?php
 include 'Promo.php';
 include 'config.php';
class PromoDA{


    
    public function addPromo($promo){
        $Name = $promo->getName();
        $insertRow="INSERT INTO promotion(name) 
                                VALUES('$Name')";
        mysqli_query(getConnection(), $insertRow);
    }

    

    public function getPromos(){
        $SelctRow = 'SELECT * FROM promotion';
        $query = mysqli_query(getConnection() ,$SelctRow);
        $promos_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($promos_data as $value_Data) {
            $promo = new Promo();
            $promo->setId($value_Data['id']);
            $promo->setName($value_Data['name']);
           
            array_push($TableData, $promo);
        }
          return $TableData;
    }

    

}
?>