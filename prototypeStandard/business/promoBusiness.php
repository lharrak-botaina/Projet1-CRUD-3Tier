<?php
include ("dataAccess/PromoDA.php");
class PromoBLL{
    private $promoDA= null;



    public function __construct(){
        $this->promoDA = new PromoDA();
    }
       
    public function AddPromo($promo){
        return $this->promoDA->addPromo($promo);
    }

    public function GetAllPromos(){
        return $this->promoDA->getAllPromos();
    }


    public function EditPromo($id){
       
        $EditData = $this->studentDA->edit($id);
        return $EditData;  
     }

}





?>