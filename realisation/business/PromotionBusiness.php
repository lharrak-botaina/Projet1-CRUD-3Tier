<?php


include("../dataAccess/PromotionDA.php");
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


    public function EditPromotion($id){
       
        $EditData = $this->promotionDA->Edit($id);
        return $EditData;  
     }
 
     public function UpdatePromotion($id,$Name){
        
         $EditData = $this->promotionDA->Update($id,$Name);
         return $EditData;  
      }
     
     public function DeletePromotion($id) {
 
         $affectedRows = 0;
         
         if($id > 0) {
             if ($this->IsIdExists($id)) {
                 $affectedRows = (int)$this->promotionDA->DeletePromotion($id);
             } else {
                 $this->errorMessage = 'Record not found.';
             }
         } else {
             $this->errorMessage = 'Invalid Id.';
         }
 
         return $affectedRows;
     }
 
 
 }
    
    





?>