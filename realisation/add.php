<?php
 

include 'business/PromoBusiness.php';
$errorMessage = '';

 $promoBLL = new PromoBLL();
if( !empty($_POST) ) {

    $newPromo = new Promo();
    $newPromo ->setName($_POST['name']) ;
    

   
    $addPromoResult = $promoBLL->AddPromo($newPromo);
    header("Location: index.php");

    
}


?>

<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<div class="login-page ">
  <div class="form">
    
    <form  action="" class="login-form" method="POST">
      <input type="text" name="name" placeholder="Name"/>
      <button type="submit"  class="btn btn-primary">Save</button>
      
    </form>
  </div>
</div>