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


    public function EditPromo($id){
       
        $EditData = $this->promoDA->Edit($id);
        return $EditData;  
     }
 
     public function UpdatePromo($id,$Name){
        
         $EditData = $this->promoDA->Update($id,$Name);
         return $EditData;  
      }
     
     public function DeletePromo($id) {
 
         $affectedRows = 0;
         
         if($id > 0) {
             if ($this->IsIdExists($id)) {
                 $affectedRows = (int)$this->promoDA->DeletePromo($id);
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