<?php
 include 'Promotion.php';
 include 'config.php';
class PromotionDA{


    
    public function addPromotion($promotion){
        $Name = $promotion->getName();
        $insertRow="INSERT INTO promotion(name) 
                                VALUES('$Name')";
        mysqli_query(getConnection(), $insertRow);
    }

    

    public function getPromotions(){
        $SelctRow = 'SELECT * FROM promotion';
        $query = mysqli_query(getConnection() ,$SelctRow);
        $promotions_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($promotions_data as $value_Data) {
            $promotion = new Promotion();
            $promotion->setId($value_Data['id']);
            $promotion->setName($value_Data['name']);
           
            array_push($TableData, $promotion);
        }
          return $TableData;
    }

    

}
?>