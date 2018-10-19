<?php
include('functions/connect.php');
$check=0;
$query1=mysql_query("select * from zen_customers_basket where customers_id='3731'");
while($row1=mysql_fetch_array($query1)){
	$products_id=$row1['products_id'];
	$title=$row1['title'];
	$footer=$row1['footer'];
	$background=$row1['background'];
	$upload=$row1['upload'];
	$customs=$row1['customs'];
	$customers_basket_quantity=$row1['customers_basket_quantity'];
	$query2=mysql_query("select * from zen_products where products_id='$products_id'");
	$row2=mysql_fetch_array($query2);
	$master_categories_id=$row2['master_categories_id'];
	$manufacturers_id=$row2['manufacturers_id'];
	if($manufacturers_id=='10' and $title=='' and $footer=='' and $background=='' and $upload=='' and $customs==''){
		if($row1['customers_basket_quantity'] % 25 == 0){
		$query4=mysql_query("SELECT SUM(customers_basket_quantity) as total FROM zen_customers_basket WHERE customers_basket_quantity % 25 != 1 and customers_id='3731' and title='' and footer='' and background='' and upload='' and customs=''");
		$row4=mysql_fetch_array($query4);
		$check=$row4['total'];
		$query3=mysql_query("SELECT * FROM products_discount_quantity_template WHERE template_name = 'stock' and '$check' >= discount_qty ORDER BY discount_id DESC LIMIT 1;");
		$row3=mysql_fetch_array($query3);
	$discount_price=$row3['discount_price'];
	if($discount_price==''){
	$query4=mysql_query("select * from zen_products where products_id='$products_id'");
	$row4=mysql_fetch_array($query4);
	echo 'master id: '.$master_categories_id.'<BR>';
	echo 'basket id: '.$row1['customers_basket_id'].'<BR>';
	echo 'product id: '.$row1['products_id'].'<BR>';
	echo 'discount qty: '.$row4['products_quantity_order_min'].'<BR>';
	echo 'discount price: '.$row4['products_price'].'<BR>';
	echo 'manufacturers_id: '.$manufacturers_id.'<BR>';
	echo 'customers basket: '.$customers_basket_quantity.'<BR>';
	echo 'customize: false<BR><BR>';
	}else{
	echo 'master id: '.$master_categories_id.'<BR>';
	echo 'basket id: '.$row1['customers_basket_id'].'<BR>';
	echo 'product id: '.$row1['products_id'].'<BR>';
	echo 'discount id: '.$row3['discount_id'].'<BR>';
	echo 'discount qty: '.$row3['discount_qty'].'<BR>';
	echo 'discount price: '.$row3['discount_price'].'<BR>';
	echo 'customers basket: '.$customers_basket_quantity.'<BR>';
	echo 'customize: false<BR><BR>';
	}
	}
	}else{
		$check=$row1['customers_basket_quantity'];
	$query3=mysql_query("select * from zen_products_discount_quantity where products_id='$products_id' and '$check' >= discount_qty ORDER BY discount_id DESC LIMIT 1;");
	$row3=mysql_fetch_array($query3);
	$discount_price=$row3['discount_price'];
	if($discount_price==''){
	$query4=mysql_query("select * from zen_products where products_id='$products_id'");
	$row4=mysql_fetch_array($query4);
	echo 'master id: '.$master_categories_id.'<BR>';
	echo 'basket id: '.$row1['customers_basket_id'].'<BR>';
	echo 'product id: '.$row1['products_id'].'<BR>';
	echo 'discount qty: '.$row4['products_quantity_order_min'].'<BR>';
	echo 'discount price: '.$row4['products_price'].'<BR>';
	echo 'customers basket: '.$customers_basket_quantity.'<BR>';
	echo 'customize: true<BR><BR>';
	}else{
	echo 'master id: '.$master_categories_id.'<BR>';
	echo 'basket id: '.$row1['customers_basket_id'].'<BR>';
	echo 'product id: '.$row1['products_id'].'<BR>';
	echo 'discount id: '.$row3['discount_id'].'<BR>';
	echo 'discount qty: '.$row3['discount_qty'].'<BR>';
	echo 'discount price: '.$row3['discount_price'].'<BR>';
	echo 'customers basket: '.$customers_basket_quantity.'<BR>';
	echo 'customize: true<BR><BR>';
	}
}
}
echo '<BR>';
?>