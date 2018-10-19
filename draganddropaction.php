<?php  
session_start();
include('functions/connect.php');
$customers_id = $_SESSION['customers_id'];
include('include/connect.php');
include('functions/array_column.php');
if($_POST["action"] == "add"){  
  $item_array = array(  
    'item_id'=>$_POST["id"],
    'item_quantity'=>$_POST["item_quantity"]
  );  
  $_SESSION["shopping_cart"][0] = $item_array;
}  
if($_POST["action"] == "delete"){  
 $id = $_POST["id"];
 mysql_query("DELETE FROM tmp WHERE customers_basket_id='$id'");
}  

 
    
  
     
 ?>      
