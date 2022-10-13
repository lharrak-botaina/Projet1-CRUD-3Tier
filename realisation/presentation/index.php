<?php
include("../business/PromotionBusiness.php");
$promotionBLL = new PromotionBLL();
$data = $promotionBLL->GetAllPromotions();
?>


<head>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


</head>

<body>

  <section>
    <div class="container py-4 h-100">
      <div class="row d-flex justify-content-center align-items-center pb-3">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">

              <h4 class="text-center my-3 pb-3">Gestion de la promotion </h4>

              <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                <div class="col-6">
                  <div class="form-outline">
                    <input type="text" id="search" name="search" id="search" placeholder="&#xF002; Search " style="font-family:Arial, FontAwesome" class="form-control" />

                    <!-- <div id="result"></div> -->
                  </div>
                </div>

                <div class="col-4">
                  <button type="submit" class="btn btn-primary "><a id="addNew" href="add.php">Ajouter une promotion</a> </button>
                </div>

                <!-- <div class="col-12">
                <button type="submit" class="btn btn-warning">Get tasks</button>
              </div> -->
              </form>

              <div id="table">
              <table class="table mb-4">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nom de la promotion</th>

                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($data as $value) {
                  ?>
                    <tr>
                      <th scope="row"><?= $value->getId() ?></th>
                      <td><?= $value->getName() ?></td>

                      <td style="width:216px">


                        <button class="btn btn-danger"> <a href="delete.php?id=<?php echo $value->getId() ?>">Supprimer</a></button>
                        <button class="btn btn-success ms-1"><a href="edit.php?id=<?php echo $value->getId() ?>">Modifier</a> </button>
                      </td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>

              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../assets/search.js"></script>