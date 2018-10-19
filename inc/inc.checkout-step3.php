<header class="success">
      <div class="container">
            <div class="col-lg-12">
                <?php echo '<img class="img-responsive" src="../build/img/confirm-order.png" width="300px" height="300px" alt="'.$brand.' Confirm Order">';?>
                <div class="intro-text">
                    <span class="name"><h1>CTR Tags Step 3 of 3 - Order Confirmation</h1></span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </header>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-lg-offset-1">
      <div class="col-lg-12 text-center">
      <h3>Shipping/Delivery Informations</h3>
      <hr class="star-primary">
    </div>
        <?php
            if (isset($_SESSION["shipping"]) && !empty($_SESSION["shipping"])) {
            $shipping=$_SESSION['shipping'];
            // $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_id='$customers_id'");
            // $row1=mysql_fetch_array($query1);
            // $customers_default_address_id=$row1['customers_default_address_id'];
            $customers_default_address_id=$shipping;
            $query2=mysql_query("SELECT * FROM zen_address_book WHERE address_book_id='$shipping'");
            $row2=mysql_fetch_array($query2);
            $country=$row2['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
            }
            else{
            $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_id='$customers_id'");
            $row1=mysql_fetch_array($query1);
            $shipping=$row1['customers_default_address_id'];
            $_SESSION['shipping']=$customers_default_address_id;
            $query2=mysql_query("SELECT * FROM zen_address_book WHERE address_book_id='$shipping'");
            $row2=mysql_fetch_array($query2);
            $country=$row2['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
            }
            ?>
            <h4><font color="#18bc9c">Company:</font></h4>
            <h5><?php echo $row2['entry_company'];?></h5>
            <h4><font color="#18bc9c">Name: </font></h4>
            <h5><?php echo $row2['entry_firstname'].' '.$row2['entry_lastname'];?></h5>
            <h4><font color="#18bc9c">Address: </font></h4>
            <h5><?php echo $row2['entry_street_address'];?></h5>
            <h5><?php echo $row2['entry_suburb'].', '.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
            <h5><?php echo $row2['entry_state'];?></h5>
            <h5><?php echo $country; ?></h5>
            <BR>
       
      </div>
      <div class="col-lg-5">
        <div class="col-lg-12 text-center">
      <h3>Billing/Payment Informations</h3>
      <hr class="star-primary">
    </div>
        <?php
            if (isset($_SESSION["billing"]) && !empty($_SESSION["billing"])) {
            $billing=$_SESSION['billing'];
            // $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_id='$customers_id'");
            // $row1=mysql_fetch_array($query1);
            // $customers_default_address_id=$row1['customers_default_address_id'];
            $customers_default_address_id=$billing;
            $query2=mysql_query("SELECT * FROM zen_address_book WHERE address_book_id='$billing'");
            $row2=mysql_fetch_array($query2);
            $country=$row2['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
            }
            else{
            $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_id='$customers_id'");
            $row1=mysql_fetch_array($query1);
            $billing=$row1['customers_default_address_id'];
            $_SESSION['billing']=$customers_default_address_id;
            $query2=mysql_query("SELECT * FROM zen_address_book WHERE address_book_id='$billing'");
            $row2=mysql_fetch_array($query2);
            $country=$row2['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
            }
            ?>
            <h4><font color="#18bc9c">Company:</font></h4>
            <h5><?php echo $row2['entry_company'];?></h5>
            <h4><font color="#18bc9c">Name: </font></h4>
            <h5><?php echo $row2['entry_firstname'].' '.$row2['entry_lastname'];?></h5>
            <h4><font color="#18bc9c">Address: </font></h4>
            <h5><?php echo $row2['entry_street_address'];?></h5>
            <h5><?php echo $row2['entry_suburb'].', '.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
            <h5><?php echo $row2['entry_state'];?></h5>
            <h5><?php echo $country; ?></h5>
            <BR>
        
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 col-lg-offset-1">
        <div class="col-lg-12 text-center">
          <h3>Shipping Method</h3>
          <hr class="star-primary">
        </div>
        <h5><?php echo $_SESSION['shipping_method'];?></h5>
         <div class="form-group col-xs-12">
          
                <CENTER>
                    <a href="../checkout-step1.php" class="btn btn-warning btn-md">
                        Edit
                    </a>
                </CENTER>
            </div>
      </div>
      <div class="col-lg-5">
        <div class="col-lg-12 text-center">
          <h3>Payment Method</h3>
          <hr class="star-primary">
        </div>
          <h5><?php echo $_SESSION['payment_method'];?></h5>
          <div class="form-group col-xs-12">
                <CENTER>
                    <a href="../checkout-step2.php" class="btn btn-warning btn-md">
                        Edit
                    </a>
                </CENTER>
            </div>
      </div>
    <div class="row">
    <div class="col-lg-12 text-center">
      <h3>Special Instructions or Comments About Your Order</h3>
      <hr class="star-primary">
      <div class="form-group col-xs-12">
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" data-validation-required-message="Please enter a message.">
            <?php
            if (isset($_SESSION["message"]) && !empty($_SESSION["message"])) {
              echo $_SESSION['message'];
            }else{
              echo 'None';
            }
            ?>
            </textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
    <div class="col-lg-12 text-center">
    <h3>Shopping Cart Content</h3>
      <hr class="star-primary">
    </div>
      <table class="table table-striped">
            <tr>
              <th>Quantity</th>
              <th>Item</th>
              <th>Total</th>
              <th></th>
            </tr>
            <?php $check=0;

$query1=mysql_query("SELECT SUM(b.customers_basket_quantity) AS allstock, GROUP_CONCAT(b.products_id SEPARATOR ',') AS stocktags, IF(c.parent_id IN(48,261), c.parent_id, a.master_categories_id) AS shape FROM zen_customers_basket b INNER JOIN zen_products a ON a.products_id = b.products_id INNER JOIN zen_categories c ON a.master_categories_id = c.categories_id WHERE b.customers_id = '$customers_id' AND a.require_artwork = 1 AND b.title = '' AND b.background = '' AND b.footer = '' AND b.customs = '' AND b.upload = '' AND (a.master_categories_id = 71 OR c.parent_id IN (48, 49, 261)) GROUP BY shape");
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
   
      echo "<tr>";
        echo "<td><span>".$row3['customers_basket_quantity']."x</span>";
        echo '<td><span>'.$row4["products_model"].'</span></td>';
        $price = number_format($price, 2);
        echo '<td></td>';
        echo '<td align="right"><span>$'.number_format($row3['customers_basket_quantity']*$price, 2).'</span></td>';
       $final_price=$row3['customers_basket_quantity']*$price;
       $customers_basket_id=$row3['customers_basket_id'];
         mysql_query("UPDATE zen_customers_basket set final_price='$final_price' where customers_basket_id='$customers_basket_id'");
    
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
      echo "<tr>";
       echo "<td><span>".$row5['customers_basket_quantity']."x</span></td>";
          echo '<td><span>'.$row6["products_model"].'</span></td>';
          echo '<td></td>';
         echo '<td align="right"><span>$'.$row5['customers_basket_quantity']*$row5['products_price'].'</span></td>';
          $final_price=$row5['customers_basket_quantity']*$price;
       $customers_basket_id=$row5['customers_basket_id'];
         mysql_query("UPDATE zen_customers_basket set final_price='$final_price' where customers_basket_id='$customers_basket_id'");
      
      echo "</tr>";
}
}
 
?>        
          <tr>
            <td></td>
            <td></td>
            <td><B>Sub-Total</B></td>
            <?php $sub=$_SESSION['subtotal']; ?>
            <td align="right"><B>$<?php echo number_format($sub, 2);?></B></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><B>Flat Rate shipping(Best Way)</B></td>

            <td align="right"><B>$<?php echo number_format($_SESSION['shippingprice'], 2);?></B></td>
          </tr>
          <?php 
          if (isset($_SESSION["coupon"]) && !empty($_SESSION["coupon"])) {
            $coupon=$_SESSION['coupon'];
            $query12=mysql_query("SELECT * FROM zen_coupons WHERE coupon_code='$coupon'");
            $row12=mysql_fetch_array($query12);
            $coupon_type=$row12['coupon_type'];
            if ($coupon_type=='P'){
               $coupon_amount=$_SESSION['subtotal']*$row12['coupon_amount']/100;
               $_SESSION['coupon_amount']=$coupon_amount;
            }else{
              $coupon_amount=$row12['coupon_amount'];
              $_SESSION['coupon_amount']=$coupon_amount;
            }
            
          
            echo '<tr>';
              echo '<td></td>';
              echo '<td></td>';
              echo '<td><B>Discount Coupon : '.$coupon.'</B></td>';
              echo '<td align="right"><B>-$'.number_format($coupon_amount, 2).'</B></td>';
            echo '</tr>';
            } ?>
          <?php
          if($sub<25){
            $sub=$sub+10;
            $_SESSION['loworder']=10;
          ?>
          <tr>
            <td></td>
            <td></td>
            <td><B>Low Order Fee</B></td>
            <td align="right"><B>$10.00</B></td>
          </tr>
          <?php } ?>
          <?php
          $shipping=$_SESSION['shipping'];
          $query2=mysql_query("SELECT * FROM zen_address_book WHERE address_book_id='$shipping'");
          $row2=mysql_fetch_array($query2);
          $entry_zone_id=$row2['entry_zone_id'];
          $country=$row2['entry_country_id'];
          $query3=mysql_query("SELECT * FROM zen_zones WHERE zone_id='$entry_zone_id'");
          $row3=mysql_fetch_array($query3);
          $zone_name=$row3['zone_name'];
          $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
          $row3=mysql_fetch_array($query3);
          $country=$row3['countries_name'];
          if($country=='United States' and $zone_name=='Utah'){
          ?>
          <tr>
            <td></td>
            <td></td>
            <td align="left"><B>Sales Tax</B></td>
            <td align="right"><B>$<?php echo number_format($_SESSION['tax'], 2);?></B></td>
          </tr>
          <?php } $_SESSION['order_total']=$_SESSION['order_total']-$coupon_amount; ?>
          <tr>
            <td></td>
            <td></td>
            <td><B>Total</B></td>
            <td align="right"><B>$<?php echo number_format($_SESSION['order_total'], 2);?></B></td>
          </tr>
        </table>
    </div>
  </div>

  <div class="row">
    <CENTER>
      <div class="form-group col-xs-12"> 
        <a href='../functions/confirmorder.php' class="btn btn-success btn-lg">Confirm Order</a>
      </div>
    </CENTER>
  </div>
</section>

<!--Modal-->
<div class="portfolio-modal modal fade" id="categories" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5 col-lg-offset-1">
            <fieldset>
            <legend><label>Current Shipping Address</label></legend>
            <?php
            $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_id='$customers_id'");
            $row1=mysql_fetch_array($query1);
            $customers_default_address_id=$row1['customers_default_address_id'];
            $query2=mysql_query("SELECT * FROM zen_address_book WHERE address_book_id='$customers_default_address_id'");
            $row2=mysql_fetch_array($query2);
            $country=$row2['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
            ?>
            <h4><font color="#18bc9c">Company:</font></h4>
            <h5><?php echo $row2['entry_company'];?></h5>
            <h4><font color="#18bc9c">Name: </font></h4>
            <h5><?php echo $row2['entry_firstname'].' '.$row2['entry_lastname'];?></h5>
            <h4><font color="#18bc9c">Address: </font></h4>
            <h5><?php echo $row2['entry_street_address'];?></h5>
            <h5><?php echo $row2['entry_suburb'].''.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
            <h5><?php echo $row2['entry_state'];?></h5>
            <h5><?php echo $country; ?></h5>
            </fieldset>
          </div>
          <div class="col-lg-5">
          <fieldset>
            <legend><label>Add New Address</label></legend>
            <label>Company Name:</label>
              <input required class="form-control" name="company_name"></input>
            <div class="row-fluid">
            <label>
              <input required class="radio-inline" type="radio" name="sex" value="m"></input>&nbsp&nbsp&nbspMale: &nbsp&nbsp&nbsp&nbsp</label>
            <label>
              <input required class="radio-inline" type="radio" name="sex" value="f"></input>&nbsp&nbsp&nbspFemale: </label>
            </div>
            <label>First Name:</label>
              <input required class="form-control" id="fname" name="f_name"></input>
            <label>Last Name:</label>
              <input required class="form-control" id="lname" name="l_name"></input>
                <label>Street Address:</label>
                <textarea required class="form-control" id="add1" name="st_address"></textarea>
            <label>City:</label>
              <input required class="form-control" id="city" name="city"></input>
            <label>Post/Zipcode:</label>
              <input required class="form-control" id="zip" name="post_zip"></input><br>
            <label for="size">Country</label>
            <select required class="form-control" name="country" id="country"></select>
              <script language="javascript">
                populateCountries("country", "state");
              </script>
            <label for="State">State</label>
              <select required class="form-control" name="state_province" id="state"></select>
          </fieldset>
          </div>
        </div></BR>
        <div class="row">
          <div class="form-group col-lg-12 col-lg-offset-1">
            <fieldset>
            <legend><label>...Or Choose From Your Address Book Entries</label></legend>
            <?php 
            $query1=mysql_query("SELECT * FROM zen_address_book WHERE customers_id='$customers_id'  and address_book_id!='$customers_default_address_id'");
            while($row1=mysql_fetch_array($query1)){
              $country=$row1['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
              ?>
            <input required class="radio-inline" type="radio" name="sex" value="m"></input><label><h3><?php echo $row1['entry_firstname'].' '.$row1['entry_lastname'];?></h3></label>
            <h4><font color="#18bc9c">Company:</font></h4>
            <h5><?php echo $row1['entry_company'];?></h5>
            <h4><font color="#18bc9c">Name: </font></h4>
            <h5><?php echo $row1['entry_firstname'].' '.$row2['entry_lastname'];?></h5>
            <h4><font color="#18bc9c">Address: </font></h4>
            <h5><?php echo $row1['entry_street_address'];?></h5>
            <h5><?php echo $row1['entry_suburb'].''.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
            <h5><?php echo $row1['entry_state'];?></h5>
            <h5><?php echo $country; ?></h5>
            <BR>
            <?php } ?>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>