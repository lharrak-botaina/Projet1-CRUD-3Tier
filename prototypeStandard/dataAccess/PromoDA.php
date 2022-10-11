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


    public function DeletePromo($id) {

        $sql = "DELETE FROM promotion WHERE id = $id";

        return   mysqli_query(getConnection(), $sql);
    }



    public function Edit($id){
        $SelectRowId = "SELECT * FROM promotion WHERE id=$id";
        $result = mysqli_query(getConnection(),  $SelectRowId);
        $promo_data = mysqli_fetch_assoc($result);
        $promo = new Promo();
        $promo->setId($promo_data['id']);
        $promo->setName($promo_data['name']);
       
        return $promo;
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