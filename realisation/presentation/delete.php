<?php
    include "../dataAccess/PromotionDA.php";

if(isset($_GET['id'])){

    $promotionDA = new PromotionDA();
    $id = $_GET['id'] ;
    $promotionDA->DeletePromotion($id);
        
    header('Location: index.php');
}
?>