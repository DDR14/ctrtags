<!DOCTYPE html>
<html>
<?php
$active='products';
$base_path = $_SERVER['DOCUMENT_ROOT']."/";
require_once 'inc/inc.connection.php';
require_once 'inc/inc.session.php';
$cPath=$_GET['cPath'];
$products=$_GET['product'];
$query1=mysql_query("SELECT * FROM zen_categories_description WHERE categories_id = '$cPath'");
    $row1=mysql_fetch_array($query1);               
    $categories_name = $row1['categories_name'];
    
$query2=mysql_query("SELECT * FROM zen_categories WHERE categories_id='$cPath'");
    $row2=mysql_fetch_array($query2);
    $categories_image = $row2['categories_image'];
require_once $base_path.'config.php';

//cPaths

?>
<head>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $specificproducts_desc; ?>">
<meta name="keywords" content="<?php echo $specificproducts_keyw; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="canonical" href="http://ctrtags.com/products.php" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $specificproducts_title; ?></title>
<?php
	require_once $base_path.'head.php';
	require_once $base_path.'script-top.php';
?>

</head>
<body id="page-top" class="index">

<?php
	require_once $base_path.'inc/inc.navbar.php';
	require_once $base_path.'subnav/none.php';
	require_once $base_path.'inc/inc.specificproducts.php';
	require_once $base_path.'inc/inc.footer.php';
	require_once $base_path.'script-bottom.php';
?>
</body>
</html>