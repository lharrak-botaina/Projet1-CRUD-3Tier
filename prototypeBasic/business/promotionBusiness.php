<?php


include("dataAccess/PromotionDA.php");
class PromotionBLL{
    private $promotionDA= null;

  

    public function __construct(){
        $this->promotionDA = new PromotionDA();

      
    } 
    

    public function GetAllPromotions(){
       
        return $this->promotionDA->getPromotions();
    }
    public function AddPromotion($promotionDA){
       
        return $this->promotionDA->addPromotion($promotionDA);
    }
    
    

}



?>