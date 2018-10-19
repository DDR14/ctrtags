<!DOCTYPE html>
<html>
<?php
$active='products';
$base_path = $_SERVER['DOCUMENT_ROOT']."/";
require_once 'inc/inc.connection.php';
require_once 'inc/inc.session.php';
//cPath
$cPath=$_GET['cPath'];
$products=$_GET['product'];
$query0=mysql_query("SELECT * FROM zen_products WHERE  products_model='$cPath'");
    $row0=mysql_fetch_array($query0); 
    $master_categories_id = $row0['master_categories_id'];
$query1=mysql_query("SELECT * FROM zen_categories_description WHERE categories_id = '$master_categories_id'");
    $row1=mysql_fetch_array($query1);               
    $categories_name = $row1['categories_name'];
$query2=mysql_query("SELECT * FROM zen_categories WHERE categories_id='$master_categories_id'");
    $row2=mysql_fetch_array($query2);
    $categories_image = $row2['categories_image'];
$query4=mysql_query("SELECT * FROM zen_products WHERE products_model= '$cPath'");
    $row4=mysql_fetch_array($query4);
    $products_id = $row4['products_id'];
    $products_qty = $row4['products_quantity'];
$query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
    $row5=mysql_fetch_array($query5);
    $products_model = $row4['products_model'];
    $products_image = $row4['products_image'];
    $products_name = $row5['products_name'];
    $products_description = $row5['products_description'];
    $products_quantity_order_min = $row4['products_quantity_order_min'];
    $products_price = $row4['products_price'];
    $minqty = $row4['products_quantity_order_min'];

require_once $base_path.'config.php';
?>

<head>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $single_desc; ?>">
<meta name="keywords" content="<?php echo $single_keyw; ?>">
<meta name="author" content="<?php echo $author; ?>">
<link rel="canonical" href="http://ctrtags.com/products.php" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $single_title; ?></title>
<?php
	require_once $base_path.'head.php';
	require_once $base_path.'script-top.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body id="page-top" class="index">
<div class="se-pre-con"></div>
<?php
	require_once $base_path.'inc/inc.navbar.php';
	require_once $base_path.'subnav/none.php';
	require_once $base_path.'inc/inc.single.php';
	require_once $base_path.'inc/inc.footer.php';
    echo '<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>';
    echo '<script src="build/js/index.js"></script>';
	require_once $base_path.'script-bottom.php';
?>
   
</body>
</html>