<?php  
 //action.php  

 session_start();
 include('functions/connect.php');
  include('fucntions/array_column.php');
$tab_id = $_POST['txt'];
$product=$_SESSION['PRODUCT'];

foreach($_SESSION["shopping_cart"] as $keys => $values){  
  $customers_id = $_SESSION['customers_id'];
  $products_id=$values["item_id"];
  $itmquantity=$values["item_quantity"];
  $query1=mysql_query("SELECT * FROM zen_products WHERE products_id='$products_id'");
  $row1=mysql_fetch_array($query1);
  $products_model=$row1['products_model'];
  $products_model=$products_model.' x'.$itmquantity;           
 
  if (strpos($products_id, '-') !== false) {
    list($products_id, $customers_basket_id) = explode('-', $products_id);
    $sql = "DELETE FROM  tmp WHERE products_id='$products_id' and customers_basket_id='$customers_basket_id' and customers_id='$customers_id'";
    if (mysql_query($sql)) {
        
        echo '<script>alert("added to database")</script>'; 
      }
    $sql = "INSERT INTO tmp (customers_id, products_id, products_model, customers_basket_quantity, final_price, customers_basket_date_added, title, footer, background, upload, customs, website)
    VALUES ('$customers_id', '$products_id', '$products_model', '$itmquantity', '', CURDATE()+0, '$tab_id', '', '', '', '$product', '$tab_id')";
      if (mysql_query($sql)) {
        $_SESSION['tab_id']=$tab_id;
        unset($_SESSION["shopping_cart"]);
        echo '<script>alert("added to database")</script>'; 
      } 
  }else{
    $sql = "INSERT INTO tmp (customers_id, products_id, products_model, customers_basket_quantity, final_price, customers_basket_date_added, title, footer, background, upload, customs, website)
    VALUES ('$customers_id', '$products_id', '$products_model', '$itmquantity', '', CURDATE()+0, '$tab_id', '', '', '', '$product', '$tab_id')";
      if (mysql_query($sql)) {
        $_SESSION['tab_id']=$tab_id;
        unset($_SESSION["shopping_cart"]);
        echo '<script>alert("added to database")</script>'; 
    }
  }
}

 ?> 
 