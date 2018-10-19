<?php session_start(); 
$servername = "localhost"; //live
 $username = "boostpr1_boostpr";
 $password = "Draper24@";
 $dbname = "boostpr1_boostpromotions";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die('connection error: ' .mysqli_connect_error());
}else{


if (isset($_POST['submit'])) {
        $customers_gender = mysqli_real_escape_string($conn, $_POST['sex']);
        $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
        $validate = mysqli_real_escape_string($conn, $_POST['validate']);
        $corespondent = mysqli_real_escape_string($conn, $_POST['corespondent']);
        $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
        $fax = mysqli_real_escape_string($conn, $_POST['fax']);
        $company = mysqli_real_escape_string($conn, $_POST['company_name']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $plain = mysqli_real_escape_string($conn, $_POST['pass']);
        $password2 = mysqli_real_escape_string($conn, $_POST['confirm_password']);
        $st_address = mysqli_real_escape_string($conn, $_POST['st_address']);
        $state_province = ucfirst(strtolower(mysqli_real_escape_string($conn, $_POST['state_province'])));
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $post_zip = mysqli_real_escape_string($conn, $_POST['post_zip']);
        $support = 'michael.r@meristone.com';
        $boost = 'michelle@boostpromotions.com';

        $sql = "SELECT * FROM zen_customers WHERE customers_email_address = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($result);
        if ($rowcount>0) {
            if($corespondent=='youthbowlingawards'){
                  echo "<script>
                  window.history.back();
                  alert('Incorrect Email Address Already Exist');</script>";
            }
            else{
                echo "<script>
                window.history.back();
                alert('Incorrect Email Address Already Exist');</script>";
          }
        }elseif ($plain !== $password2) {
            echo "<script>
              window.history.back();
              alert('Password do not match')</script>";
            // $_SESSION['err'] = " * Password do not match";
        }
        else{
            $plain;
            $password2;

            // validate country and state
            // country code
            $sql_country = "SELECT countries_id FROM zen_countries WHERE countries_name = '$country'";
            $result = mysqli_query($conn, $sql_country);
            if (mysqli_num_rows($result)>0) {
                $row= mysqli_fetch_assoc($result);
                 $country = $row['countries_id'];
            }else{
                 $country = $country;
            }

            // zone_id code

            $sql_state = "SELECT zone_id FROM zen_zones WHERE zone_name = '$state_province'";
            $result = mysqli_query($conn, $sql_state);
            if (mysqli_num_rows($result)>0) {
                $row= mysqli_fetch_assoc($result);
                 $zone_id = $row['zone_id'];
            }else{
                 $zone_id = '';
            }

            $salt = substr(md5($plain), 0, 2);
            $pass = md5($salt . $plain) . ':' . $salt;
            $sql = "INSERT INTO zen_customers ( `customers_gender`, `customers_firstname`, `customers_lastname`, `customers_dob`, `customers_email_address`, `customers_nick`, `customers_default_address_id`, `customers_telephone`, `customers_fax`, `customers_country`, `customers_state`, `customers_password`, `customers_newsletter`, `customers_group_pricing`, `customers_email_format`, `customers_authorization`, `customers_referral`, `customers_paypal_payerid`, `customers_paypal_ec`) 
            VALUES ( '$customers_gender', '$f_name', '$l_name', '', '$email', '', '', '$telephone', '$fax', '$country', '$state_province', '$pass', '', '1', 'TEXT', '0', '', '', '0')";
            if (mysqli_query($conn, $sql)) {
                $last_id = mysqli_insert_id($conn);
            }

            $sql = "INSERT INTO zen_address_book (customers_id, entry_gender, entry_company, entry_firstname, entry_lastname, entry_street_address, entry_suburb, entry_postcode, entry_city, entry_state, entry_country_id, entry_zone_id)
            VALUES ('$last_id', '$customers_gender', '$company', '$f_name', '$l_name', '$st_address', '', '$post_zip', '$city', '$state_province', '$country', '$zone_id')";
            if (mysqli_query($conn, $sql)) {
                $lastinsert_id = mysqli_insert_id($conn);
            }

            $sql = "INSERT INTO `zen_customers_info`(`customers_info_id`, `customers_info_date_of_last_logon`, `customers_info_number_of_logons`, `customers_info_date_account_created`, `customers_info_date_account_last_modified`, `customers_info_source_id`, `global_product_notifications`) 
                VALUES ('$last_id', now(), '1', now(), '', '', '')";
            if (mysqli_query($conn, $sql)) {
            }    

            $sql = "UPDATE zen_customers 
            SET customers_default_address_id = '$lastinsert_id'
            WHERE customers_id = '$last_id'";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['customers_id'] = $last_id;
                $_SESSION['customers_name'] = $f_name;
                $_SESSION['customers_lastname'] = $l_name;
                $_SESSION['email'] = $email;
                $message = file_get_contents('http://'.$corespondent.'.com/email/email_template_welcome.html');
                $str = str_replace("CUSTOMERS_NAME", $f_name, $message);
                $subject = "Welcome to ".$corespondent.".com";
                $message2 = $_SESSION['email'] . $_SESSION['customers_lastname'] . $_SESSION['customers_id'];
                $to = $email;
                $headers = "From: support@boostpromotions.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                mail($to, $subject, $str, $headers);
                mail($support, $subject, $message2, $headers);
                 echo "<script>
                 alert('Thank You For registering To ctrtags.com you will receive an email confirmation!')
                 window.location = 'http://ctrtags.com';
                 </script>"; 
                 // header('location:http://ctrtags.com');
             

            } else {
                $_SESSION['err'] = " * FAILED TO CREATE ACCOUNT";
                header('location:../createacct.php');
            }

        }   
    }
}
?>