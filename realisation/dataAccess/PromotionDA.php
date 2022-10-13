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


    public function DeletePromotion($id) {

        $sql = "DELETE FROM promotion WHERE id = $id";

        return   mysqli_query(getConnection(), $sql);
    }



    public function Edit($id){
        $SelectRowId = "SELECT * FROM promotion WHERE id=$id";
        $result = mysqli_query(getConnection(),  $SelectRowId);
        $promotion_data = mysqli_fetch_assoc($result);
        $promotion = new Promotion();
        $promotion->setId($promotion_data['id']);
        $promotion->setName($promotion_data['name']);
       
        return $promotion;
    }


    public function Update($id,$Name){
        // Requête SQL
        $RowUpdate = "UPDATE promotion  SET 
        name='$Name'
        WHERE id=$id";

        mysqli_query(getConnection(),$RowUpdate);

    }


}
?>