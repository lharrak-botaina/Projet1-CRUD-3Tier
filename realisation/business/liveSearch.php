<?php

include '../dataAccess/config.php';
if (isset($_POST['input'])){//<==value comes from jquery ajax method as data option
    $input = $_POST['input'];
    $query = "SELECT * FROM promotion WHERE name LIKE '{$input}%' OR id LIKE '{$input}%'";//if input is set then this query will run ,this percentage symgol represents zero one or multiple characters means(if we type a then any number of characters can occur after a)
    $result= mysqli_query(getConnection(),$query);

    if(mysqli_num_rows($result)>0){//number of rows in DB table
        ?>


    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php

            while ($row = mysqli_fetch_assoc($result)){

                $id = $row['id']; //DB table's fetched values stored in variables
                $name = $row['name'];


                ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                </tr>


                <?php
            }
            ?>
        </tbody>

    </table>
    
    
    
    
    <?php
    }else{
        echo "<h6 class= 'text-danger text-center mt-3'> no data found </h6>";
    }


}
?>