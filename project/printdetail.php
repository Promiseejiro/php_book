<?php

//var_dump($_REQUEST);
$firstname=$_REQUEST["firstname"];
$gender=$_REQUEST["male"];


?>

<html>
  
  <div>
    <?php 
    foreach($_REQUEST as $item=>$value){
      echo "<h1>$value</h1>";
    }
    ?>
  </div>
</html>