<header>
    <div class="container">
        <div class="col-lg-12">
            <img class="img-responsive" src="../build/img/account.png"  alt="<?php echo $brand;?> Acount Avatar">
            <div class="intro-text">
                <span class="name"><h1>CTR Tags My Account</h1></span>
                <hr class="star-light">
            </div>
        </div>
    </div>
</header>
<section id="contact">
    <div class="container">
       <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Account Information</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
        <?php 
            $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_id='$customers_id'");
            $row1=mysql_fetch_array($query1);
            $customers_default_address_id=$row1['customers_default_address_id'];
        ?>
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" action="functions/updateaccount.php" method="post" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="name" required data-validation-required-message="Please enter your First Name." value="<?php echo $row1['customers_firstname'];?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="email" required data-validation-required-message="Please enter your Last Name." value="<?php echo $row1['customers_lastname'];?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="phone" required data-validation-required-message="Please enter your email address." value="<?php echo $row1['customers_email_address'];?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telephone</label>
                                <input type="text" class="form-control" placeholder="Telephone" id="phone" required data-validation-required-message="Please enter your Telephone number." value="<?php echo $row1['customers_telephone'];?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Fax</label>
                                <input type="text" class="form-control" placeholder="Fax" id="phone" required data-validation-required-message="Please enter your fax."
                                value="<?php echo $row1['customers_fax'];?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        </BR>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <CENTER>
                                <button type="submit" class="btn btn-success btn-lg">Update</button>
                                </CENTER>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</section>
<section id="contact">
    <div class="container">
       <div class="row">
            <div class="col-lg-12 text-center">
                <h2>My Address Book</h2>
                <hr class="star-primary">
            </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <div class="col-lg-12 text-center">
                <h3>Address Books</h3>
                <hr class="star-primary">
            </div>
           <?php 
            $query1=mysql_query("SELECT * FROM zen_address_book WHERE customers_id='$customers_id'  and address_book_id!='$shipping'");
            while($row1=mysql_fetch_array($query1)){
              $country=$row1['entry_country_id'];
              $id=$row1['address_book_id'];
            $query3=mysql_query("SELECT countries_name FROM zen_countries WHERE countries_id='$country'");
            $row3=mysql_fetch_array($query3);
            $country=$row3['countries_name'];
              ?>
            
                <a href="functions/deleteaddress.php?id=<?php echo $id;?>">
                <button style="float:right;" type="submit" name="delete" class="btn btn-warning btn-sm">Delete</button></a>
            
            <form action='functions/editaddress.php' method='post'>
                <input type='hidden' name='id' value='<?php echo $row1['address_book_id'];?>'>
                <button style="float:right;" type="submit" name="edit" class="btn btn-success btn-sm">Edit</button>
            </form>
            <h4><font color="#18bc9c">Company:</font></h4>

            <h5><?php echo $row1['entry_company'];?></h5>
            <h4><font color="#18bc9c">Name: </font></h4>
            <h5><?php echo $row1['entry_firstname'].' '.$row1['entry_lastname'];?></h5>
            <h4><font color="#18bc9c">Address: </font></h4>
            <h5><?php echo $row1['entry_street_address'];?></h5>
            <h5><?php echo $row1['entry_suburb'].''.$row2['entry_city'].', '.$row2['entry_postcode'];?></h5>
            <h5><?php echo $row1['entry_state'];?></h5>
            <h5><?php echo $country; ?></h5>
            
            <BR>
            <?php } ?>
        </div>
    
                <div class="col-lg-4">
                    <div class="col-lg-12 text-center">
                        <h3>Add Address Book</h3>
                        <hr class="star-primary">
                    </div>
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
              <BR><button style="float:right;" type="submit" name="edit" class="btn btn-success btn-sm">Submit</button>
              <?php } ?>
                </div>
            </div>
</section>
<section id="contact">
    <div class="container">
       <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Account Password.</h2>
                <hr class="star-primary">
            </div>
        </div> 
    </div>
    <?php 
            $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_id='$customers_id'");
            $row1=mysql_fetch_array($query1);
        ?><div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" action="functions/changepassword.php" method="post" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Current Password</label>
                                <input type="password" class="form-control" placeholder="Current Password" id="current" name="current" required data-validation-required-message="Please enter your First Name." >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="New Password" id="new" name="new" required data-validation-required-message="Please enter your Last Name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" id="confirm" name="confirm" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        </BR>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <CENTER>
                                <button type="submit" class="btn btn-success btn-lg">Update</button>
                                </CENTER>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</section>

    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>