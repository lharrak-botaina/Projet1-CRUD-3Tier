<?php



function getConnection(){
      
      $Connection = mysqli_connect('localhost', 'root', '', 'projet-1');
     
   
 
  
  return $Connection;
  
}

?>