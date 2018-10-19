<?php
include('functions/connect.php');
$query1=mysql_query("select * from zen_products_discount_quantity limit 1");
echo "<table>";

while($row = mysql_fetch_assoc($query1)) {   
        foreach ($row as $col => $val) {
            echo $col." = ".$val."<br>";
        }
    }
echo "</table>";

?>