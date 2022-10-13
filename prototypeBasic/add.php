<?php
 

include 'business/PromotionBusiness.php';
$errorMessage = '';

 $promotionBLL = new PromotionBLL();
if( !empty($_POST) ) {

    $newPromotion = new Promotion();
    $newPromotion ->setName($_POST['name']) ;
    

   
    $addPromoResult = $promotionBLL->AddPromotion($newPromotion);
    header("Location: index.php");

    
}




?>
<div class="page-header">
    <h1>Add New Promotion</h1>
</div>




    <form action="" method="post" name="studentInfoForm" id="studentInfoForm" class="form-horizontal">
        
        <div class="form-group">
            <label for="lastName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <input type="text" value="" name="name" id="lastName" class="form-control" placeholder=" name" />
            </div>
        </div>
        
       
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <input type="submit" name="studentSubmitButton" id="studentSubmitButton" value="Add Student" class="btn  btn-primary" />
            </div>
        </div>

    </form>



