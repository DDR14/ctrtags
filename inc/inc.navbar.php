
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div id="top-banner-holder">      
    <div id="notification-banner" class=""><span id="notification-banner-title" class="navbar-left">CALL US: 800-803-0906</span>
      <div class="navbar-right"> <span id="notification-banner-title" class="fa fa-sign-in"><a href="login.php"> Sign in</a></span> <span id="notification-banner-title" class="fa fa-user"><a href="account.php"> account</a> </span></div>
    </div>  

  </div>
  <div class="container">
    <ul class="icon1 sub-icon1 profile_img">
      <li><a class="active-icon c1" href="#"><img src='../build/img/icons/png/shopping-cart.png' alt='CTR Tags Shopping Cart Icon'> </a><div class="rate"><?php echo $quantity;?></div>
        <ul class="sub-icon1 list">
        <CENTER>
          <h3>Welcome</h3>
            <?php 
                if (isset($_SESSION['ses_key'])=='' || isset($_SESSION['email'])=='') {
                    $customers_id = '';
                    $email = '';
                    $quantity='0';
            ?>
            <hr class="star-primary">
            <a href="login.php">
              <div class="login_buttons">
                <button type="submit"  class="check_button" >Log in to View Cart</button>
              </div>
            </a>
            <?php }else{ 
                $email= $_SESSION['email'];
                $customers_id = $_SESSION['customers_id'];
                require_once 'functions/cart.php';
                $sql=mysql_query($sql);
                    if (mysql_num_rows($sql)>0){
                        while ($check_row = mysql_fetch_array($sql)){
                            if ($check_row['customers_basket_quantity']<$check_row['products_quantity_order_min']){
                                $check = 1;
                            }
                        }
                    }
                $sql_basket=mysql_query($sql_basket);
                $row_basket = mysql_fetch_array($sql_basket);
                $quantity = $row_basket['quantity'];
                $ptotal = round($row_basket['ptotal'], 2);
                $email= $_SESSION['email'];
                $query1=mysql_query("SELECT * FROM zen_customers WHERE customers_email_address='$email'");
                    $row1=mysql_fetch_array($query1);
                        $name=$row1['customers_firstname'];
                        $lastname=$row1['customers_lastname'];
                        if($quantity==''){
                          $quantity='0';
                        }
            ?>
            <h4>Items on Cart(<?php echo $quantity;?>)</h4>
          <hr class="star-primary">
          <div class="shopping_cart" style="overflow-y:scroll; overflow-x:hidden; max-height:150px; width:200px;">
          <?php
          $sql = "SELECT a.customers_basket_quantity,a.final_price,a.customers_basket_id,
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
                    WHERE a.customers_id = '$customers_id'";
$final_price=0;
          $result = mysql_query($sql);
            if (mysql_num_rows($result) > 0) {
                $itm = 1;
                while($row = mysql_fetch_array($result)) {
                    $price = round($row['products_price'],2);
                    $total = $row['customers_basket_quantity']*$row['products_price'];
                    $qty = ($row['customers_basket_quantity']);
                    $products_name = ($row['products_model']);
                    $products_min = ($row['products_quantity_order_min']);
                    $title = $row['title'];
                    $background = $row['background'];
                    $price=$row['final_price']/$qty;
                    $final_price=$row['final_price']+$final_price;
                    $final_price = number_format($final_price, 2);
            echo '<div class="cart_box">';
              echo '<div class="message">';
                echo '<a href="functions/deletecart.php?id='.$row['customers_basket_id'].'"><div class="alert-close"></div></a>';
                echo '<div class="list_img"><img src="http://50.87.226.168/images/'.$row['products_image'].'" class="img-responsive" alt="CTR Tags '.$row['products_name'].'"/>';
                echo '</div>';
                echo '<div class="list_desc"><h4><a href="http://ctrtags.com/single.php?cPath='.$products_name.'">'.$products_name.'</a></h4>'.$qty.' x <span class="actual">$'.$price.'</span>';
                echo '</div>';
                echo '<div class="clear"></div>';
              echo '</div>';
            echo '</div>';
        }
    }
        ?>
          </div>
          <?php if($final_price=='0'){ ?>
           <h4>Your Cart is Empty</h4>
            <a href="products.php">
              <div class="login_buttons">
                <button type="submit"  class="check_button" >Click Here to View Products</button>
              </div>
            </a>
          <?php }else{ ?>
          <div class="total">
            <div class="total_left">CartSubtotal : </div>
              <div class="total_right">$<?php echo $final_price;?></div>
              <div class="clear"> </div>
            </div><BR>
            <a href="viewcart.php">
              <div class="login_buttons">
                <button type="submit"  class="check_button" >View All</button>
              </div>
            </a>
            <?php }} ?>
            <hr class="star-primary">
            <div class="message">
              <h4><a href="orders.php"><span class="fa fa-truck"></span> Orders</a></h4>
              <div class="clear"></div>
            </div>
            <div class="message">
              <h4><a href="account.php"> <span class="fa fa-user"></span> Account</a></h4>
              <div class="clear"></div>
            </div>
            <?php if (isset($_SESSION['ses_key'])) { ?>
            <div class="message">

              <h4><a href="#" class="mb-control" data-box="#mb-signout""><span class="fa fa-sign-out"></span> Log Out </a></h4>
              <div class="clear"></div>
            </div>
            <?php }else{ ?>
            <div class="message">
              <h4><a href="login.php"><span class="fa fa-sign-in"></span> Sign in</a></h4><HR class="star-primary">
              <div class="clear"></div>
            </div>
            <?php } ?>
            </CENTER>
            <div class="clear"></div>
          </ul>
      </li>
    </ul>
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
      </button>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sub-navigation">
        <span class="sr-only">Toggle navigation</span> <i class="fa fa-home"></i>
      </button>
      <a class="navbar-brand" href="#page-top">CTR Tags</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden">
          <a href="#page-top"></a>
        </li>
        <li <?php if($active=='index'){ echo 'class="current"'; }?>>
          <a href="index.php">Home</a>
        </li>
        <li <?php if($active=='about-us'){ echo 'class="current"'; }?>>
          <a href="about-us.php">About Us</a>
        </li>
        <li <?php if($active=='products'){ echo 'class="current"'; }?>>
          <a href="products.php">Products</a>
        </li>
        <li <?php if($active=='theprograms'){ echo 'class="current"'; }?>>
          <a href="the-program.php">The Program</a>
        </li>
        <li <?php if($active=='how-to-order'){ echo 'class="current"'; }?>>
          <a href="how-to-order.php">How to Order</a>
        </li>
        <li <?php if($active=='contact'){ echo 'class="current"'; }?>>
          <a href="contact.php">Contacts</a>
        </li>
        <li <?php if($active=='referrals'){ echo 'class="current"'; }?>>
          <a href="referrals.php">Referrals</a>
        </li>
      </ul>
    </div>
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out as <?php echo $name.' '.$lastname;?></p>                    
                        <p>Press No if you want to continue shopping.</p>
                        <p>Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="functions/logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signin">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>In</strong> ?</div>
                    <div class="mb-content">
                        <p>Please Log In or Sign Up to Continue</p>                    
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="login.php?cPath=referrals" class="btn btn-success btn-lg">Log In</a>
                            <button class="btn btn-default btn-lg mb-control-close">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="build/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="build/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->