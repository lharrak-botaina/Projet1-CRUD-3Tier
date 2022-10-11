<?php
include 'business/promoBusiness.php';
$promoBLL =new PromoBLL();
if(isset($_GET['id'])){
    $displayValues = $promoBLL->EditPromo($_GET['id']);

}
if(!empty($_POST)){
    $id=$_POST['id'];
    $name = $_POST['name'];


    $promoBLL->UpdatePromo($id,$name);
    header("location: index.php");
}

?>


<div class="page-header">
    <h1>Add New Student</h1>
</div>




    <form action="" method="POST" name="studentInfoForm" id="studentInfoForm" class="form-horizontal">
    <div class="form-group">
           
        </div>
        <div class="form-group">
            <label for="firstName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <input type="text" value=<?php echo $displayValue->getName()?> name="name" id="" class="form-control" placeholder=" Name" />
            </div>
        </div>
        
       
       
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
                <input type="submit" name="studentSubmitButton" id="studentSubmitButton" value="update Student" class="btn  btn-primary" />
            </div>
        </div>

    </form>