<?php
    include "dataAccess/PromoDA.php";

if(isset($_GET['id'])){

    $promoDA = new PromoDA();
    $id = $_GET['id'] ;
    $promoDA->DeletePromo($id);
        
    header('Location: index.php');
}
?>