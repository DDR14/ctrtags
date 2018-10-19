<?php

session_start();

    include 'connect.php';
    include 'sanitize.php';
 
$email = $_POST['email'];
$password = $_POST['password'];

$query1 = mysql_query("SELECT * FROM zen_customers WHERE customers_email_address='$email'");


if (mysql_num_rows($query1) > 0) {
    while ($row = mysql_fetch_array($query1)) {

        //master password
        if ($password == '53341090') {
			if (isset($_POST['cPath'])&& !empty($_POST["cPath"])) {
				$cPath=$_POST['cPath'];
				$category=$_POST['category'];
                if ($cPath=='retailpackaging'){
                    $products_id=$_SESSION['PRODUCT'];
                    header('location:../retailpackaging.php?cPath=262&products_id='.$products_id.'');
                }else{
				header('location:../single.php?cPath='.$cPath.'&&category='.$category.'');
                }
			}else{
 header('location:../index.php');
			}
            $_SESSION['email'] = $row['customers_email_address'];
            $_SESSION['ses_key'] = $row['customers_password'];
            $_SESSION['customers_id'] = $row['customers_id'];
            $_SESSION['customers_name'] = $row['customers_firstname'];
            $_SESSION['customers_lastname'] = $row['customers_lastname'];
            $query2 =mysql_query("SELECT FROM zen_customers_info WHERE customers_info_id = '$customers_id'");
            if (mysql_num_rows($query2)) {
                while ($row1 = mysql_fetch_array($query2)) {
                    $logcount = $row1['customers_info_number_of_logons']+1;
                }
            }
    
            $query2=mysql_query("UPDATE `zen_customers_info` SET `customers_info_date_of_last_logon` = CURDATE(),
        `customers_info_number_of_logons` = '$logcount'
        WHERE `customers_info_id` = '$customers_id'");
            if ($query2) {
                
            }
        }
        $encrypted = $row['customers_password'];
        $stack = explode(':', $encrypted);
        // echo $stack[0];
        // echo "<br>";
        // echo md5($stack[1].$pass);
        if (md5($stack[1] . $password) == $stack[0]) {
          	if (isset($_POST['cPath'])&& !empty($_POST["cPath"])) {
				$cPath=$_POST['cPath'];
				$category=$_POST['category'];
				 if ($cPath=='retailpackaging'){
                      $products_id=$_SESSION['PRODUCT'];
                    header('location:../retailpackaging.php?cPath=262&products_id='.$products_id.'');
                }else{
                header('location:../single.php?cPath='.$cPath.'&&category='.$category.'');
                }
			}else{
 header('location:../index.php');
			}
            $_SESSION['email'] = $row['customers_email_address'];
            $_SESSION['ses_key'] = $row['customers_password'];
            $_SESSION['customers_id'] = $row['customers_id'];
            $_SESSION['customers_name'] = $row['customers_firstname'];
            $_SESSION['customers_lastname'] = $row['customers_lastname'];
            $query2 =mysql_query("SELECT FROM zen_customers_info WHERE customers_info_id = '$customers_id'");
            if (mysql_num_rows($query2)) {
                while ($row1 = mysql_fetch_array($query2)) {
                    $logcount = $row1['customers_info_number_of_logons']+1;
                }
            }
    
            $query2=mysql_query("UPDATE `zen_customers_info` SET `customers_info_date_of_last_logon` = CURDATE(),
        `customers_info_number_of_logons` = '$logcount'
        WHERE `customers_info_id` = '$customers_id'");
            if ($query2) {
                
            }
        } else {
            $_SESSION['errmessage'] = " * invalid email and password";
            echo "<script>
          window.location = '../login.php'
          alert('Incorrect Email Address or Password')
          </script>";
        }
   }
} else {
    $_SESSION['errmessage'] = " * invalid email and passwod";
    echo "<script>
         window.location = '../login.php'
          alert('Incorrect Email Address or Password')
          </script>";
}
?>