<?php
 include ("business/promoBusiness.php");
 $promoBLL = new PromotionBLL();
 $data =$promoBLL->GetAllPromotions();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Promotion manager</title>
</head>
<body>
    <div>
        <a href="add.php">add promotion  </a>
        <table>
            <tr>
               
                <th>Name</th>
                
                <th>Action </th>
            </tr>
            <?php
                    foreach($data as $value){
            ?>

            <tr>
              
                <td><?= $value->getName() ?></td>
               
                <td>
                    <a href="edit.php?id=<?php echo $value->getId() ?>">update</a>
                    <a href="delete.php?id=<?php echo $value->getId() ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>