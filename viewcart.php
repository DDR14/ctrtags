<!DOCTYPE html>
<html>
<?php
$active='none';
$base_path = $_SERVER['DOCUMENT_ROOT']."/";
require_once $base_path.'config.php';

//cPath
if (isset($_SESSION['ses_key'])=='' || isset($_SESSION['email'])=='') {
    $customers_id = '';
    $email = '';
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
}
?>
<head>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $index_desc; ?>">
<meta name="keywords" content="<?php echo $index_keyw; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $index_title; ?></title>
<?php
	require_once $base_path.'head.php';
	require_once $base_path.'script-top.php';
?>
</head>
<body id="page-top" class="index">

<?php
	require_once $base_path.'inc/inc.navbar.php';
	require_once $base_path.'subnav/none.php';
	require_once $base_path.'inc/inc.viewcart.php';
	require_once $base_path.'inc/inc.footer.php';
	require_once $base_path.'script-bottom.php';
?>
</body>
</html>