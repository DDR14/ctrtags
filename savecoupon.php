<?php
$servername = "localhost"; //live
 $username = "boostpr1_boostpr";
 $password = "Draper24@";
 $dbname = "boostpr1_boostpromotions";

 $link = mysql_connect($servername, $username, $password) or die ('oops something went wrong');
 mysql_select_db($dbname, $link) or die ('oops something went weong');
$datetoday = date('Y-m-d H:i:s');
mysql_query("INSERT INTO `zen_coupons`(`coupon_type`, `coupon_code`, `coupon_amount`, `coupon_minimum_order`, `coupon_start_date`, `coupon_expire_date`, `uses_per_coupon`, `uses_per_user`, `restrict_to_products`, `restrict_to_categories`, `restrict_to_customers`, `coupon_active`, `date_created`, `date_modified`, `coupon_zone_restriction`) VALUES ('P', 'CTR10OFF', '10.0000', '0', '$datetoday', '2030-07-27 00:00:00', '1', '0', '', '', '','Y', '$datetoday', '$datetoday', '0' )");
$last_inserted_id=mysql_insert_id();
echo $last_inserted_id;

?>