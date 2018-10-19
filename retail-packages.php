<!DOCTYPE html>
<html>
<?php
$active='products';
$base_path = $_SERVER['DOCUMENT_ROOT']."/";
require_once $base_path.'config.php';
?>
<head>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $retailpackages_desc; ?>">
<meta name="keywords" content="<?php echo $retailpackages_keyw; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $retailpackages_title; ?></title>
<?php
	require_once $base_path.'head.php';
	?>
	<link rel="stylesheet/less" type="text/css" href="build/css/todo-list.less" />
	<link rel="stylesheet/less" type="text/css" href="build/css/variables.less" />
	<script src="build/js/less.js"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
  	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
  	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script src="http://static.jsbin.com/js/vendor/traceur.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
	<script type="text/javascript" src="http://knockoutjs.com/downloads/knockout-1.3.0beta.debug.js"></script>
	<link rel="stylesheet" type="text/css" href="build/css/jquery-min.css">
   	<style type="text/css">

      #sortable1 li {  
      margin: 3px 30px 3px 0;
      padding: 5px;
      font-size: 1.2em;
      list-style: none;
      float: left;
      }
    
      #sortable2 li, #sortable3 li , #sortable4 li , #sortable5 li {
      margin: 3px 3px 3px 0;
      padding: 5px;
      font-size: 1.2em;
      float: left;
      list-style: none;
       }
      
      .chbox {
      margin-right:10px;
      }
      .selected {
      list-style: none;
      }
      .hidden {
      display:none;
      }
    </style>

    <?php
	
?>
</head>
<body id="page-top" class="index">

<?php
	require_once $base_path.'inc/inc.navbar.php';
	require_once $base_path.'subnav/products.php';
	require_once $base_path.'inc/inc.retail-packages.php';
	require_once $base_path.'inc/inc.footer.php';
	require_once $base_path.'script-bottom.php';
?>
</body>
</html>