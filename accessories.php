<!DOCTYPE html>
<html>
<?php
$active='products';
$base_path = $_SERVER['DOCUMENT_ROOT']."/";
require_once $base_path.'config.php';
?>
<head>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $accessories_desc; ?>">
<meta name="keywords" content="<?php echo $accessories_keyw; ?>">
<meta name="author" content="<?php echo $author; ?>">
<link rel="canonical" href="http://ctrtags.com/products.php" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $accessories_title; ?></title>
<?php
	require_once $base_path.'head.php';
	require_once $base_path.'script-top.php';
?>
</head>
<body id="page-top" class="index">

<?php
	require_once $base_path.'inc/inc.navbar.php';
	require_once $base_path.'subnav/products.php';
	require_once $base_path.'inc/inc.accessories.php';
	require_once $base_path.'inc/inc.footer.php';
	require_once $base_path.'script-bottom.php';
?>
</body>
</html>