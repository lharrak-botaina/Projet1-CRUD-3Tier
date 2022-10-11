<?php


include("dataAccess/PromoDA.php");
class PromoBLL{
    private $promoDA= null;

  

    public function __construct(){
        $this->promoDA = new PromoDA();

      
    } 
    

    public function GetAllPromos(){
       
        return $this->promoDA->getPromos();
    }
    public function AddPromo($promoDA){
       
        return $this->promoDA->addPromo($promoDA);
    }
    
    

}



?>