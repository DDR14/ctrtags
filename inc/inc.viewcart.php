<header class="success">
      <div class="container">
            <div class="col-lg-12">
                <?php echo '<img class="img-responsive" src="../build/img/shopping-cart.png" width="300px" height="300px" alt="'.$brand.' Shopping Cart">';?>
                <div class="intro-text">
                    <span class="name"><h1>CTR Tags Your Shopping Cart</h1></span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </header>
<section id="contact">
    <div class="container">
         <div class="demo-row">
       
        <div class="demo-content-wide">
          <table class="table table-striped">
            <tr>
              <th>Item</th>
              <th>Customs</th>
              <th>Quantity</th>
              <th>Unit</th>
              <th>Total Price</th>
              <th>Action</th>
              <th></th>
            </tr>
            <?php $check=0;

$query1=mysql_query("SELECT SUM(b.customers_basket_quantity) AS allstock, GROUP_CONCAT(b.products_id SEPARATOR ',') AS stocktags, IF(c.parent_id IN(48,261), c.parent_id, a.master_categories_id) AS shape FROM zen_customers_basket b INNER JOIN zen_products a ON a.products_id = b.products_id INNER JOIN zen_categories c ON a.master_categories_id = c.categories_id WHERE b.customers_id = '$customers_id' AND a.require_artwork = 1  AND b.title = '' AND b.background = '' AND b.footer = '' AND b.customs = '' AND b.upload = '' AND (a.master_categories_id = 71 OR c.parent_id IN (48, 49, 261)) GROUP BY shape");
while($row1=mysql_fetch_array($query1)){
$allstock=$row1['allstock'];
$stocktags=$row1['stocktags'];
$shape=$row1['shape'];
$query2=mysql_query("SELECT * FROM products_discount_quantity_template WHERE template_name = 'stock' and '$allstock' >= discount_qty ORDER BY discount_id DESC LIMIT 1;");
$row2=mysql_fetch_array($query2);
$price=$row2['discount_price'];
if($stocktags!=''){
  $tags = explode(',', $stocktags);
    foreach ($tags as $products_id){
    $query3=mysql_query("SELECT * FROM zen_customers_basket WHERE customers_id='$customers_id' and products_id='$products_id'");
    $row3=mysql_fetch_array($query3);
    $query4=mysql_query("SELECT * FROM zen_products WHERE products_id='$products_id'");
    $row4=mysql_fetch_array($query4);
    echo "<form action='functions/updatecart.php' method='post'>";
      echo "<tr>";
        echo '<td><CENTER><img src="http://50.87.226.168/images/'.$row4['products_image'].'" class="img-responsive" alt="'.$brand.' '.$products_name.' Tag"><BR><a href="http://ctrtags.com/single.php?cPath='.$products_name.'"><span>'.$row4["products_model"].'</span></a></td>';
        echo "<td><span>N/A</span>";
        echo "<td><span><h5 style='color:red;width:bold;'>" . " * <input type='text' name='quantity' value='$row3[customers_basket_quantity]' size='5'>" . "</h5></span>";
        $price = number_format($price, 2);
        echo '<td><span>$'.$price.'</span></td>';
        echo '<td><span>$'.number_format($row3['customers_basket_quantity']*$price, 2).'</span></td>';
        echo "<input type='hidden' name='products_id' value='".$products_id."'></td>";
        echo '<td><button type="submit" class="btn btn-success btn-sm">Update</button></td>';
       $final_price=$row3['customers_basket_quantity']*$price;
       $customers_basket_id=$row3['customers_basket_id'];
         mysql_query("UPDATE zen_customers_basket set final_price='$final_price' where customers_basket_id='$customers_basket_id'");
    echo "</form>";
    echo "<form action='functions/deleteitemcart.php' method='post'>";
          echo "<input type='hidden' name='products_id' value='".$products_id."'></td>";
          echo '<td><button type="submit" name="delete" class="btn btn-warning btn-sm">Remove</button></td>';
      echo "</tr>";
    echo "</form>";
  }
}
}
$query5=mysql_query("SELECT a.customers_basket_id,
                      a.customers_basket_quantity, 
                     b.products_id, 
                     b.products_model, 
                     b.products_image,
                     b.products_quantity_order_min,
                     d.products_name,
                     a.title,
                     a.background,
                     a.footer,
                     a.upload,
                     a.customs,
                     IF(ISNULL(c.discount_price),b.products_price,c.discount_price) AS products_price
                    FROM zen_customers_basket a 
                    INNER JOIN zen_products b 
                    ON a.products_id = b.products_id 
                    INNER JOIN zen_products_description d
                    ON d.products_id = a.products_id
                    LEFT JOIN (SELECT MIN(x.discount_price) AS discount_price, 
                    x.products_id FROM zen_products_discount_quantity x
                    INNER JOIN zen_customers_basket y 
                    ON x.products_id = y.products_id
                    WHERE y.customers_id =  '$customers_id'
                    AND y.customers_basket_quantity >= discount_qty 
                    GROUP BY x.products_id) c
                    ON c.products_id = a.products_id
                    WHERE a.customers_id = '$customers_id'");
while($row5=mysql_fetch_array($query5)){
  $upload=$row5['upload'];
  $title=$row5['title'];
  $footer=$row5['footer'];
  $background=$row5['background'];
  $customs=$row5['customs'];
  $customers_basket_quantity=$row5['customers_basket_quantity'];
if($upload!='' or $title!='' or $footer!='' or $background!='' or $customs!=''){
  $products_id=$row5['products_id'];
$query6=mysql_query("select * from zen_products where products_id='$products_id'");
  $row6=mysql_fetch_array($query6);
  echo "<form action='functions/updatecart.php' method='post'>";
      echo "<tr>";
          echo '<td><CENTER><img src="http://50.87.226.168/images/'.$row6['products_image'].'" class="img-responsive" alt="'.$brand.' '.$products_name.' Tag"><BR><a href="http://ctrtags.com/single.php?cPath='.$products_name.'"><span>'.$row6["products_model"].'</span></a></td>';
          echo "<td><span>" . "Title: " . "$title" . "<br>" . "Background: " . "$background" . "<br>" . "Footer: " . "$footer" . "<br><br></span>";
          if (empty($upload)) {
            echo "Customs: " . "$customs" . "</td>";
          }else{
              echo "Image: <a href='https://www.boostpromotions.com/images/uploads/{$row5["upload"]}' target ='blank'>{$row5["upload"]}</a> " . "</td>";                                                       
          }
           echo "<td><span><h5 style='color:red;width:bold;'>" . " * <input type='text' name='quantity' value='$row5[customers_basket_quantity]' size='5'>" . "</h5></span>";
          echo '<td><span>$'.$row5['products_price'].'</span></td>';
         echo '<td><span>$'.$row5['customers_basket_quantity']*$row5['products_price'].'</span></td>';

          echo "<input type='hidden' name='products_id' value='$row5[products_id]'></td>";
          echo '<td><button type="submit" class="btn btn-success btn-sm">Update</button></td>';
          $final_price=$row5['customers_basket_quantity']*$row5['products_price'];
       echo $customers_basket_id=$row5['customers_basket_id'];
         mysql_query("UPDATE zen_customers_basket set final_price='$final_price' where customers_basket_id='$customers_basket_id'");
      echo "</form>";
      echo "<form action='functions/deleteitemcart.php' method='post'>";
          echo "<input type='hidden' name='products_id' value='$row5[products_id]'></td>";
          echo '<td><button type="submit" name="delete" class="btn btn-warning btn-sm">Remove</button></td>';
      echo "</form>";
      echo "</tr>";
}
}
echo '</table>';
 $email=$_SESSION['email'];
                                      echo "<form method='post' id='submit_this' name='boost_connect' action='../checkout-step1.php'>
                                              <input type='hidden' name='email_addr' value='$email'>
                                              <input type='hidden' name='site' value='ctrtags'>
                                  
                                              <button class='btn btn-success btn-lg' type='submit' name='checkout'>checkout</button>
                                              <a href='index.php'><button type='button' class='btn btn-primary btn-lg' value='back'>Shop more</button></a>

                                            </form>";
?>

        </div>
      </div>
    </div>
</section>
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>