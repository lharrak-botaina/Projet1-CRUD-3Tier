<?php
 

 include 'business/PromotionBusiness.php';

 $promotionBLL = new PromotionBLL();

 if(isset($_GET['id'])){
    $displayValue = $promotionBLL->EditPromotion($_GET['id']);
} 

if( !empty($_POST) ) {

    $id =$_POST["id"];
    $Name =$_POST["name"];
     $promotionBLL->UpdatePromotion($id,$Name);
    header("Location: index.php");

}




?>
<div class="page-header">
    <h1>Add New promo</h1>
</div>




    <form action="" method="POST" name="studentInfoForm" id="studentInfoForm" class="form-horizontal">
    <div class="form-group">
        <input type="hidden" value=<?php echo $displayValue->getId()?>  name="id" >     
        </div>
        <div class="form-group">

            <label for="firstName" class="col-sm-2 control-label"> name</label>
            <div class="col-sm-4">
                <input type="text" value=<?php echo $displayValue->getName()?> name="name" id="" class="form-control" placeholder="first Name" />
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <input type="submit" name="promoSubmitButton" id="promoSubmitButton" value="update promo" class="btn  btn-primary" />
            </div>
        </div>

    </form>



