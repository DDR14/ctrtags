<header class="success">
      <div class="container">
            <div class="col-lg-12">
                <?php echo '<img class="img-responsive" src="../build/img/delivery_truck.png" width="300px" height="300px" alt="'.$brand.' Shipping">';?>
                <div class="intro-text">
                    <span class="name"><h1>CTR Tags Step 1 of 3 - Delivery Information</h1></span>
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
      <h3>Shipping </br> Informations</h3>
      <hr class="star-primary">
    </div>
    <form  name="myForm2" method="post" action="functions/saveshipping.php" onsubmit="return validateForm()">
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
            <input type="hidden" name="shippingaddress" value="<?php echo $shipping;?>">
            <h4><font color="#18bc9c">Company:</font></h4>
            <h5><?php echo $row2['entry_company'];?></h5>
            <h4><font color="#18bc9c">Name: </font></h4>
            <h5><?php echo $row2['entry_firstname'].' '.$row2['entry_lastname'];?></h5>
            <h4><font color="#18bc9c">Address: </font></h4>
            <h5><?php echo $row2['entry_street_address'];?></h5>
            <h5><?php echo $row2['entry_suburb'].''.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
            <h5><?php echo $row2['entry_state'];?></h5>
            <h5><?php echo $country; ?></h5>
            <BR>
        <div class="form-group col-xs-12">
          <div class="alert alert-warning">
            <button type="button" class="close fui-cross" data-dismiss="alert"></button>
            Your order will be shipped to the address at the top or you may change the shipping address by clicking the Change Address button.
          </div>
                <CENTER>
                    <a href="#categories" class="btn btn-warning btn-md" data-toggle="modal">
                        Change Shipping Address
                    </a>
                </CENTER>
            </div>
      </div>
      <div class="col-lg-5">
        <div class="col-lg-12 text-center">
          <h3>Shipping <BR> Method</h3>
          <hr class="star-primary">
        </div>
         <?php
            require_once $base_path.'/functions/getcart2.php';
            ?>
        <?php if (isset($error) && !empty($error)) { ?>
            <div class="alert alert-error">
            <button type="button" class="close fui-cross" data-dismiss="alert"></button>
            <?php echo $error; ?>
        </div>
          <?php }else{ ?>
        <table class="table table-striped">
            <tr>
              <th>Shipping</th>
              <th>Rate</th>
            </tr>
            <tr>
           
              <td><input type="radio" name="shipping_method" value="Flat Rate Shipping (Best Way)" id="ship-table-table" required /><label for="ship-table-table" class="checkboxLabel" >Best Way</label></td>
              <td><B>$<?php echo $shippingprice;?></B></td>
            </tr>
        </table>
        <?php } ?>
        <div class="alert alert-warning">
            <button type="button" class="close fui-cross" data-dismiss="alert"></button>
            PRODUCTION TIME Tag only orders: 7-10 business days, Orders including Custom Lanyards: 3-4 weeks. If you would like the tags shipped separately, please advise before completing your order so we can add the 2nd shipping fee.
        </div>
        <div class="alert alert-success">
            <button type="button" class="close fui-cross" data-dismiss="alert"></button>
            Note: August - October is our busiest time of the year. Orders placed during these months may experience a longer than normal production time. If your order is time sensitive, please inquire about the current production time.
        </div>
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
            <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <CENTER>
      <div class="form-group col-xs-12">
        <button type="submit" class="btn btn-success btn-lg">Proceed To Step 2</button>
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
            <legend><label>Current Shipping Address</label></legend>
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
            <form  name="myForm2" method="post" action="functions/changeshipping.php" onsubmit="return validateForm()">
            <?php 
            $query1=mysql_query("SELECT * FROM zen_address_book WHERE customers_id='$customers_id'  and address_book_id!='$shipping'");
            while($row1=mysql_fetch_array($query1)){
              $country=$row1['entry_country_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
              ?>
            <input required class="radio-inline" type="radio" name="shipping" value="<?php echo $row1['address_book_id'];?>"></input><label><h3><?php echo $row1['entry_firstname'].' '.$row1['entry_lastname'];?></h3></label>
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
            <input type="submit" name=Login value="Change Shipping Address" class="btn btn-warning btn-md">
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