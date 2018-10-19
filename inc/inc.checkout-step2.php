<header class="success">
      <div class="container">
            <div class="col-lg-12">
                <?php echo '<img class="img-responsive" src="../build/img/profits.png" width="300px" height="300px" alt="'.$brand.' Payments">';?>
                <div class="intro-text">
                    <span class="name"><h1>CTR Tags Step 2 of 3 - Payment Information</h1></span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </header>
<section id="contact">
  <div class="container">
  <?php if (isset($_SESSION['couponerror']) && !empty($_SESSION['couponerror'])) { ?>
  <div class="row">
    <div class="col-lg-12 text-center">
      <div class="alert alert-error">
        <button type="button" class="close fui-cross" data-dismiss="alert"></button>
        <?php echo $_SESSION['couponerror']; ?>
      </div>
    </div>
  </div>
  <?php }?>
    <div class="row">
      <div class="col-lg-5 col-lg-offset-1">
        <div class="col-lg-12 text-center">
          <h3>Billing Address</h3>
          
        </div>
        <form  name="myForm2" method="post" action="functions/savebilling.php" onsubmit="return validateForm()">
        <?php
            if (isset($_SESSION["billing"]) && !empty($_SESSION["billing"])) {
            $billing=$_SESSION['billing'];
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
            <input type="hidden" name="billingaddress" value="<?php echo $billing;?>">
        <h4><font color="#18bc9c">Company:</font></h4>
        <h5><?php echo $row2['entry_company'];?></h5>
        <h4><font color="#18bc9c">Name: </font></h4>
        <h5><?php echo $row2['entry_firstname'].' '.$row2['entry_lastname'];?></h5>
        <h4><font color="#18bc9c">Address: </font></h4>
        <h5><?php echo $row2['entry_street_address'];?></h5>
        <h5><?php echo $row2['entry_suburb'].', '.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
        <h5><?php echo $row2['entry_state'];?></h5>
        <h5><?php echo $country; ?></h5>
        </BR>
        <div class="form-group col-xs-12">
          <div class="alert alert-warning">
            <button type="button" class="close fui-cross" data-dismiss="alert"></button>
            Your billing address is shown to the top. The billing address should match the address on your credit card statement. You can change the billing address by clicking the Change Address button.
          </div>
          <CENTER>
            <a href="#categories" class="btn btn-warning btn-md" data-toggle="modal">
              Change Billing Address
            </a>
          </CENTER>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="col-lg-12 text-center">
          <h3>Order Total</h3>
        </div>
        <?php 
        $query1=mysql_query("SELECT SUM(final_price) AS sub FROM zen_customers_basket WHERE customers_id='$customers_id'");
        $row1=mysql_fetch_array($query1);
        $sub=$row1['sub'];
      $sub1=$row1['sub'];
        $_SESSION['subtotal']=$sub1;
        ?>
        <table class="table table-striped">
          <tr>
            <td align="left">Sub-Total</td>
            <td align="right">$<?php echo number_format($sub, 2);?></td>
          </tr>
          <tr>
            <td align="left">Flat Rate shipping(Best Way)</td>
            <td align="right">$<?php echo number_format($_SESSION ['shippingprice'], 2);?></td>
          </tr>
          
          <?php
          $sub=$sub+$_SESSION['shippingprice'];
          if($sub1<25){
            $sub=$sub+10;
          ?>
          <tr>
            <td align="left">Low Order Fee</td>
            <td align="right">$10.00</td>
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
          $salestax=$sub1 * (6.85 / 100);
          $_SESSION['tax']=$salestax;
          $sub=$sub+$salestax;
          $_SESSION['order_total']=$sub;
          ?>
          <tr>
            <td align="left">Sales Tax</td>
            <td align="right">$<?php echo number_format($salestax, 2);?></td>
          </tr>
          <?php } ?>
          <tr>
            <td align="left"><B>Total</B></td>
            <td align="right">$<?php echo number_format($sub, 2);?></td>
          </tr>
        </table>
        <div class="col-lg-12 text-center">
          <h3>Discount Coupon</h3>
          
        </div>
          Please type your coupon code into the box next to Redemption Code. Your coupon will be applied to the total and reflected in your cart after you click continue.</BR>
          <font color="#EC971F">Please note: you may only use one coupon per order.</font></BR></BR>
          Redemtion Code: &nbsp;&nbsp;<input type="text" name="coupon" placeholder="Redemption Code">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 col-lg-offset-1">
        <div class="col-lg-12 text-center">
          <h3>Payment Method</h3>
          
        </div>
        <p><input type="radio" name="payment_method" required value="Pay after approved artwork (by credit card or check)."> Pay after approved artwork (by credit card or check).</br>
        <input type="radio" name="payment_method" required value="Purchase Order <small>(A copy of the PO must be received before production can commence.)</small>"> Purchase Order </br>
        <font color="#EC971F">Please Note: A copy of the PO must be received before production can commence.</font></p>
      </div>
      <div class="col-lg-5">
        <div class="col-lg-12 text-center">
          <h3>Text Notification</h3>
          
        </div>
          We now notify customers through email and PHONE TEXT to insure that artwork approval requests and other important notices are being received to keep the order moving forward.
          </br>
          Enter Your Mobile Number:
          </br>
          <input type="text" name="number" placeholder="Mobile">
          <select name="carrier">
            <option value="">-Carrier-</option>
            <option value="@message.alltel.com">Alltel</option>
            <option value="@mmode.com">AT&amp;T Wireless</option>
            <option value="@myboostmobile.com">Boost Mobile</option>
            <option value="@mobile.mycingular.com">Cingular</option>
            <option value="@mms.cricketwireless.net">Cricket Wireless</option>
            <option value="@mymetropcs.com">MetroPCS</option>
            <option value="@messaging.nextel.com">Nextel</option>
            <option value="@text.republicwireless.com">Republic Wireless</option>
            <option value="@messaging.sprintpcs.com">Sprint PCS</option>
            <option value="@msg.telus.com">Telus</option>
            <option value="@tmomail.net">T-Mobile</option>
            <option value="@email.uscc.net">US Cellular</option>
            <option value="@vtext.com">Verizon</option>
            <option value="@vmobl.com">Virgin Mobile USA</option>
          </select>
      </div>
  <div class="row">
    <CENTER>
      <div class="form-group col-xs-12">
        <button type="submit" class="btn btn-success btn-lg">Proceed To Step 3</button>
      </div>
    </CENTER>
  </div>
  </form>
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
            <legend><label>Current billing Address</label></legend>
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
            <h5><?php echo $row2['entry_suburb'].''.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
            <h5><?php echo $row2['entry_state'];?></h5>
            <h5><?php echo $country; ?></h5>
            </fieldset>
          </div>
          <div class="col-lg-5">
          <fieldset>
            <legend><label>Add New Address</label></legend>
            <?php 
            $query1=mysql_query("SELECT count(*) as count FROM zen_address_book WHERE customers_id='$customers_id'");
            $row1=mysql_fetch_array($query1);
            $count=$row1['count'];
            if($count>=5){
            ?>
            <div class="alert alert-warning">
                <button type="button" class="close fui-cross" data-dismiss="alert"></button>
                  Only 5 Address Book Can Be Added
              </div>
              <?php }else{ ?>
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
              <?php } ?>
          </fieldset>
          </div>
        </div></BR>
         <div class="row">
          <div class="form-group col-lg-12 col-lg-offset-1">
            <fieldset>
            <legend><label>...Or Choose From Your Address Book Entries</label></legend>
            <form  name="myForm2" method="post" action="functions/changebilling.php" onsubmit="return validateForm()">
            <?php 
            $query1=mysql_query("SELECT * FROM zen_address_book WHERE customers_id='$customers_id'  and address_book_id!='$billing'");
            while($row1=mysql_fetch_array($query1)){
              $country=$row1['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
              ?>
            <input required class="radio-inline" type="radio" name="billing" value="<?php echo $row1['address_book_id'];?>"></input><label><h3><?php echo $row1['entry_firstname'].' '.$row1['entry_lastname'];?></h3></label>
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
            <CEMTER>
            <input type="submit" name=Login value="Change Billing Address" class="btn btn-warning btn-md">
            </CEMTER>
            </form>
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