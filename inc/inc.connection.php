<?php
// $servername = "localhost";//local
// $username = "root";
// $password = "";
// $dbname = "boostpr1_boostpromotions";

 $servername = "50.87.226.168"; //remote
 // $servername = "localhost"; //live
 $username = "boostpr1_boostpr";
 $password = "Draper24@";
 $dbname = "boostpr1_boostpromotions";

 $link = mysql_connect($servername, $username, $password) or die ('oops something went wrong');
 mysql_select_db($dbname, $link) or die ('oops something went weong');
 ?>