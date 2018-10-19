<?php
session_start();
if (isset($_SESSION['ses_key'])=='' || isset($_SESSION['email'])=='') {
    $customers_id = '';
    $email = '';
    $quantity='0';
}else{ 
    $email= $_SESSION['email'];
    $customers_id = $_SESSION['customers_id'];
    $sql_basket = "SELECT SUM(a.customers_basket_quantity) AS quantity, 
                    SUM(IF(ISNULL(c.discount_price),b.products_price,c.discount_price) * a.customers_basket_quantity) AS ptotal
                    FROM zen_customers_basket a 
                    INNER JOIN zen_products b 
                    ON a.products_id = b.products_id 
                    LEFT JOIN (SELECT MIN(x.discount_price) AS discount_price, 
                    x.products_id FROM zen_products_discount_quantity x
                    INNER JOIN zen_customers_basket y 
                    ON x.products_id = y.products_id
                    WHERE y.customers_id =  '$customers_id'
                    AND y.customers_basket_quantity >= discount_qty 
                    GROUP BY x.products_id) c
                    ON c.products_id = a.products_id
                    WHERE a.customers_id =   '$customers_id'";
    $sql_basket=mysql_query($sql_basket);
    $row_basket = mysql_fetch_array($sql_basket);
    $quantity = $row_basket['quantity'];
    if($quantity==''){
      $quantity='0';
    }
}
$year=date('Y');
function keepHistory()
{
    $history=$_SESSION["history"];
    $history[]=$_SERVER["PHP_SELF"];
    $_SESSION["history"]=$history;
}

?>