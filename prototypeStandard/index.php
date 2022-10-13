<?php
    include ("business/PromotionBusiness.php");
    $promotionBLL= new PromotionBLL();
    $data = $promotionBLL->GetAllPromotions();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>promotion manager</title>
</head>
<body>
    <div>
        <a href="add.php">add Promotion </a>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>action </th>
            </tr>
            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value->getId() ?></td>
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