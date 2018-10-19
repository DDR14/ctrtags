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


        // validate email
        
        $sql = "SELECT * FROM zen_customers WHERE customers_email_address = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($result);
        if ($rowcount>0) {
            if($corespondent=='youthbowlingawards'){
              echo "<script>
              window.location = 'http://".$corespondent.".com/createacct.php'
              alert('Incorrect Email Address Already Exist')</script>";
            }
            else{
            echo "<script>
              window.location = 'http://".$corespondent.".com/createaccnt.php'
              alert('Incorrect Email Address Already Exist')</script>";
            }
        }else{
        
        // validate password

            if ($plain !== $password2) {

            header('location:../createacct.php');
            $_SESSION['err'] = " * Password do not match";

            }else{
                $plain;
                $password2;
                header('location:../abc.php');  
            }    

         }    

    }
}
?>