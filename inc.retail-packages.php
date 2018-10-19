    <header>
       <div class="container">
            <div class="col-lg-12">
                <img class="img-responsive" src="../build/img/products.png" width="300px" height="300px" alt="">
                <div class="intro-text">
                    <span class="name"><h1>LDS Primary Tags</h1></span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </header>
       <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    <li data-transition="turnoff" data-slotamount="1" data-masterspeed="300">
                        <img alt="" src="../build/upload/promo.png" >
                        <div class="caption large_text sfb"
                            data-x="130"
                            data-y="430"
                            data-speed="600"
                            data-start="1000"
                            data-easing="easeOutExpo" 
                            data-end="7000" 
                            data-endspeed="500" 
                            data-endeasing="easeInSine" 
                            style="color: #444; font-family: Montserrat;">
                            <a href="specificproducts.php?cPath=264&&product=tags" style="color: #444;  font-weight: 800; border-color: #444;">View Details
                            </a>
                        </div>
                    </li>
                    <li data-transition="turnoff" data-slotamount="1" data-masterspeed="300">
                        <img alt="" src="../build/upload/slide2.png" >
                        <div class="caption large_text sfb"
                            data-x="130"
                            data-y="430"
                            data-speed="600"
                            data-start="1000"
                            data-easing="easeOutExpo" 
                            data-end="7000" 
                            data-endspeed="500" 
                            data-endeasing="easeInSine" 
                            style="color: #444; font-family: Montserrat;">
                            <a href="specificproducts.php?cPath=264&&product=tags" style="color: #444;  font-weight: 800; border-color: #444;">View Details
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    <section id="tags">
        
            </BR>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                 <div class="col-lg-12 text-center">
                    <h2>What Are Those Primary Tags</h2>
                    <hr class="star-primary">
                </div>
                    <p>These plastic tags are like dog tags with the exception of that they are worn as accessories like jewelries. They likewise fill in as keychain cards, baggage or bag tags. Schools, Clinics, and distinctive occasions in America are utilizing these things as rewards to students, patients, and members for accomplishing something astounding that merits gloating. </p>
                    <p>As we acquaint this famous pattern with Asia, we are glad to state that we offer the CHEAPEST on the planet. Not only that, our things are WATERPROOF and ensured TEARPROOF for they are made of Teslin, a thick plastic material that is of high caliber.</p>
                    <hr class="star-primary">
                </div>
                <div class="col-lg-4">
                    <CENTER><img src="../build/images/customtags.png" alt="Image 4"></CENTER>
                    <p>You can use these tags as a rewards program for elementary aged children in inner city schools to encourage them to attend school and increase attendance, it can also boost their achievements and school performance</p>
                    <p>You can also reward your kids with these tags for such things as being reverent, giving a talk or scripture reading.  This program would help kids throughout the church strengthen their testimonies of their Heavenly Father and the love that he has for them. </p>

                </div>
               
              
            </div>

        </section>

    

    <!-- About Section -->
<section class="success" id="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Tag Categories</h2>
                <hr class="star-light">
            </div>
            <?php 
if (isset($_SESSION['ses_key'])=='' || isset($_SESSION['email'])=='') {
        $customers_id = '';
        $email = '';
 
    ?>
<div class="container">
  <div class="single-main">
    <div class="col-md-12 single-main-left">
      <div class="foradmin">
      <CENTER>
        <img src='images/spinarack2.png' alt="CTR Tags Spin A Rack" width="600px" height='600px'></img>
       <BR><BR><BR>
        <?php
        echo '<form action="login.php?cPath=retailpackaging&&products_id='.$product.'" method=post>';
          echo '<input type="submit" value="Log in to Shop Now"/>';
          echo '</form>';
        
        ?>
      </CENTER>
      </div>
    </div>
  </div>
</div>
    <?php }
         else{ 
  $count1=mysql_query("SELECT count(*) as count from tmp WHERE customers_id='$customers_id' and customs='$product' and title='tabs-1'");
  $rowcount1=mysql_fetch_array($count1);
  $number1=$rowcount1['count'];
  $count2=mysql_query("SELECT count(*) as count from tmp WHERE customers_id='$customers_id' and customs='$product' and title='tabs-2'");
 $rowcount2=mysql_fetch_array($count2);
 $number2=$rowcount2['count'];
 $count3=mysql_query("SELECT count(*) as count from tmp WHERE customers_id='$customers_id' and customs='$product' and title='tabs-3'");
 $rowcount3=mysql_fetch_array($count3);
 $number3=$rowcount3['count'];
 $count4=mysql_query("SELECT count(*) as count from tmp WHERE customers_id='$customers_id' and customs='$product' and title='tabs-4'");
 $rowcount4=mysql_fetch_array($count4);
 $number4=$rowcount4['count'];
          ?>
  <div class="container">
    <div class="single-main">
      <div class="col-md-9 single-main-left">
        <div class="foradmin">
      
          <div class="sngl-top">
          <div class="col-md-14 single-top-left">
          <div id="tabs">
    <ul>
        <li><a href="#tabs-0">Choose among this Tags</a></li>
        <li><a href="#tabs-1">Side1(<?php echo $number1;?>)</a></li>
        <li><a href="#tabs-2">Side2(<?php echo $number2;?>)</a></li>
        <li><a href="#tabs-3">Side3(<?php echo $number3;?>)</a></li>
        <li><a href="#tabs-4">Side4(<?php echo $number4;?>)</a></li>
     <a href="finalize.php">
        <button class='btn btn-warning' type='button' name='login'>Post Order</button><a/>
    </ul>
    <div id="tabs-0">
    
        <ul id="sortable1" class="connectedSortable ui-helper-reset">
          <?php  include('include/connect.php');
          $query4=mysql_query("SELECT * FROM zen_products WHERE manufacturers_id = '10' and master_categories_id!='276' and master_categories_id='$cPath'");
            while($row4=mysql_fetch_array($query4)){
              $products_id = $row4['products_id'];
              $customers_basket_id = $row5['customers_basket_id'];
                $query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
                $row5=mysql_fetch_array($query5);
                  $products_model = $row4['products_model'];
                  $products_id = $row4['products_id'];
                  $products_image = $row4['products_image'];
                  $products_name = $row5['products_name'];
                  $products_quantity_order_min = $row4['products_quantity_order_min'];
                  $products_price = $row4['products_price'];                             
                echo '<li class="ui-state-default" id="'.$products_id.'" >';
             echo '<input class="chbox" type="checkbox" />';
                echo '<img src="http://50.87.226.168/images/'.$products_image.'"  alt="CTR Tags '.$products_name.' Tags" title="'.$products_name.'" class="img-responsive product_drag">';
                echo '<CENTER>';
                echo '<p>'.$products_model.'</p>';
                echo '</CENTER>';
                echo '</li>';
            }
            ?>
        </ul>
        
    </div>
    <div id="tabs-1">
        <ul id="sortable2" class="connectedSortable ui-helper-reset">

        <?php
          $query4=mysql_query("SELECT * FROM tmp WHERE customers_id = '$customers_id' and title='tabs-1'");
            while($row4=mysql_fetch_array($query4)){
              $products_id = $row4['products_id'];
              $customers_basket_id = $row4['customers_basket_id'];
              $customers_basket_quantity=$row4['customers_basket_quantity'];
                $query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
                $row5=mysql_fetch_array($query5);
                $query6=mysql_query("SELECT * FROM zen_products WHERE products_id = '$products_id'");
                $row6=mysql_fetch_array($query6);
                  $products_model = $row6['products_model'];
                  $products_id = $row6['products_id'];
                  $products_image = $row6['products_image'];
                  $products_name = $row5['products_name'];
                  $products_quantity_order_min = $row6['products_quantity_order_min'];
                  $products_price = $row6['products_price'];  

                echo '<li class="ui-state-default" id="'.$products_id.'-'.$customers_basket_id.'" style="display: list-item;">';
               echo '<CENTER>';
                echo '<img src="http://50.87.226.168/images/'.$products_image.'"  alt="CTR Tags '.$products_name.' Tags" title="'.$products_name.'" class="img-responsive product_drag">';
                echo '<p><B>'.$products_model.'</B></p>';
                echo '<p>Quantity: '.$customers_basket_quantity.'</p>';
                echo '<a href="#" class="remove_product" id="'.$customers_basket_id.'"><span class="text-danger">Remove</span></a>';
                echo '</CENTER>';
                
                echo '</li>';
            }
            ?>
            </ul>
    </div>
    <div id="tabs-2">
        <ul id="sortable3" class="connectedSortable ui-helper-reset">
        <?php
          $query4=mysql_query("SELECT * FROM tmp WHERE customers_id = '$customers_id' and title='tabs-2'");
            while($row4=mysql_fetch_array($query4)){
              $products_id = $row4['products_id'];
              $customers_basket_id = $row4['customers_basket_id'];
              $customers_basket_quantity=$row4['customers_basket_quantity'];
                $query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
                $row5=mysql_fetch_array($query5);
                $query6=mysql_query("SELECT * FROM zen_products WHERE products_id = '$products_id'");
                $row6=mysql_fetch_array($query6);
                  $products_model = $row6['products_model'];
                  $products_id = $row6['products_id'];
                  $products_image = $row6['products_image'];
                  $products_name = $row5['products_name'];
                  $products_quantity_order_min = $row6['products_quantity_order_min'];
                  $products_price = $row6['products_price'];                            
                echo '<li class="ui-state-default" id="'.$products_id.'-'.$customers_basket_id.'" style="display: list-item;">';
                 echo '<CENTER>';
                echo '<img src="http://50.87.226.168/images/'.$products_image.'"  alt="CTR Tags '.$products_name.' Tags" title="'.$products_name.'" class="img-responsive product_drag">';
                echo '<p><B>'.$products_model.'</B></p>';
                echo '<p>Quantity: '.$customers_basket_quantity.'</p>';
                 echo '<a href="#" class="remove_product" id="'.$customers_basket_id.'"><span class="text-danger">Remove</span></a>';
                echo '</li>';
            }
            ?>
            </ul>
    </div>
    <div id="tabs-3">
        <ul id="sortable4" class="connectedSortable ui-helper-reset">
        <?php
          $query4=mysql_query("SELECT * FROM tmp WHERE customers_id = '$customers_id' and title='tabs-3'");
            while($row4=mysql_fetch_array($query4)){
              $products_id = $row4['products_id'];
              $customers_basket_id = $row4['customers_basket_id'];
              $customers_basket_quantity=$row4['customers_basket_quantity'];
                $query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
                $row5=mysql_fetch_array($query5);
                $query6=mysql_query("SELECT * FROM zen_products WHERE products_id = '$products_id'");
                $row6=mysql_fetch_array($query6);
                  $products_model = $row6['products_model'];
                  $products_id = $row6['products_id'];
                  $products_image = $row6['products_image'];
                  $products_name = $row5['products_name'];
                  $products_quantity_order_min = $row6['products_quantity_order_min'];
                  $products_price = $row6['products_price'];                            
                echo '<li class="ui-state-default" id="'.$products_id.'-'.$customers_basket_id.'" style="display: list-item;">';
                echo '<CENTER>';
                echo '<img src="http://50.87.226.168/images/'.$products_image.'"  alt="CTR Tags '.$products_name.' Tags" title="'.$products_name.'" class="img-responsive product_drag">';
                echo '<p><B>'.$products_model.'</B></p>';
                echo '<p>Quantity: '.$customers_basket_quantity.'</p>';
                 echo '<a href="#" class="remove_product" id="'.$customers_basket_id.'"><span class="text-danger">Remove</span></a>';
                echo '</CENTER>';
                echo '</li>';
            }
            ?>
            </ul>
    </div>
    <div id="tabs-4">
        <ul id="sortable5" class="connectedSortable ui-helper-reset">
        <?php
          $query4=mysql_query("SELECT * FROM tmp WHERE customers_id = '$customers_id' and title='tabs-4'");
            while($row4=mysql_fetch_array($query4)){
              $products_id = $row4['products_id'];
              $customers_basket_quantity=$row4['customers_basket_quantity'];
              $customers_basket_id = $row4['customers_basket_id'];

                $query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
                $row5=mysql_fetch_array($query5);
                $query6=mysql_query("SELECT * FROM zen_products WHERE products_id = '$products_id'");
                $row6=mysql_fetch_array($query6);
                  $products_model = $row6['products_model'];
                  $products_id = $row6['products_id'];
                  $products_image = $row6['products_image'];
                  $products_name = $row5['products_name'];
                  $products_quantity_order_min = $row6['products_quantity_order_min'];
                  $products_price = $row6['products_price'];                            
                echo '<li class="ui-state-default" id="'.$products_id.'-'.$customers_basket_id.'" style="display: list-item;">';
                echo '<CENTER>';
                echo '<img src="http://50.87.226.168/images/'.$products_image.'"  alt="CTR Tags '.$products_name.' Tags" title="'.$products_name.'" class="img-responsive product_drag">';
                echo '<p><B>'.$products_model.'</B></p>';
                echo '<p>Quantity: '.$customers_basket_quantity.'</p>';
                 echo '<a href="#" class="remove_product" id="'.$customers_basket_id.'"><span class="text-danger">Remove</span></a>';
                echo '</CENTER>';
                echo '</li>';
            }
            ?>
            </ul>
    </div>
</div>
            
        
      
    </div>
    <div class="clearfix"></div>
  
  <!--product end-->

  <!--cart start -->
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 p-right single-right">
        <div class="foradmin">
          <h3>Categories</h3>
          <?php include('include/categories2.php');?>
        </div>
        
        <div class="clearfix"> </div>
      </div>
  </div>
<?php }?>
</body>
<script type='text/javascript'>//<![CDATA[
var issued = '';
$('.connectedSortable').on('click', 'input', function () {
    $(this).parent().toggleClass('selected');

});
$("#sortable1, #sortable2, #sortable3 , #sortable4 , #sortable5").sortable({
    revert:0,
    helper: function (e, item) { //create custom helper
        if (!item.hasClass('selected')) item.addClass('selected');
        // clone selected items before hiding
        var elements = $('.selected').not('.ui-sortable-placeholder').clone();
        //hide selected items
        item.siblings('.selected').addClass('hidden');
        var helper = $('<ul/>');
        return helper.append(elements);
    },
    start: function (e, ui) {
        var elements = ui.item.siblings('.selected.hidden').not('.ui-sortable-placeholder');
        //store the selected items to item being dragged
        ui.item.data('items', elements);
    },
    update: function (e, ui) {
        //manually add the selected items before the one actually being dragged
        ui.item.before(ui.item.data('items'));

    },
    stop: function (e, ui) {
        //show the selected items after the operation
        ui.item.siblings('.selected').removeClass('hidden');
        //unselect since the operation is complete
        $('.selected').removeClass('selected');
        $(this).find('input:checked').prop('checked',false);
    }
}).disableSelection();

  var $tabs = $("#tabs").tabs({
       beforeActivate: function (event, ui) {

        var issued = ui.newPanel.attr('id'); //Get newly selected tab
        
        $.ajax({
        url: 'gettab.php',
        type: 'POST',
        data: {
            txt: issued,
        },
        dataType : 'json',
        success: function(data, textStatus, xhr) {
            console.log(data); // do with data e.g success message
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(textStatus.reponseText);
        }

    });
  
    
      }

    });
var $tab_items = $("ul:first li", $tabs).droppable({
    accept: "ul, .connectedSortable li",
    hoverClass: "ui-state-hover",
    drop: function (event, ui) {
      
      var id = ui.draggable.attr("id");
      var item_quantity = prompt("Please Enter Quantity");
      if(item_quantity){
      console.log(ui.draggable.data('items'));
      var elements = [];
      var $item = $(this);
      var $elements = ui.draggable.data('items');
      var type = $(this).attr('data-type');
      var action = "add"; 
     $.ajax({  
                url:"draganddropaction.php",  
                method:"POST",  
                data:{id:id, item_quantity:item_quantity, action:action},  
               
           })
}else{
  window.location = "http://www.ctrtags.com/redirect.php";
}
      var $list = $($item.find("a").attr("href")).find(".connectedSortable");  
      $elements.show().hide('slow');
    window.location = "http://www.ctrtags.com/redirect.php";
        ui.draggable.show().hide("fast", function () {
            $tabs.tabs("option", "active", $tab_items.index($item));
            $(this).appendTo($list).show("slow").before($elements.show("slow"));
        }); 
     
    }

});
 $(document).on('click', '.remove_product', function(){  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                var id = $(this).attr("id");  
                var action="delete";  
                $.ajax({  
                     url:"draganddropaction.php",  
                     method:"POST",  
                     data:{id:id, action:action},  
                     success:function(data){  
                          $('#dragable_product_order').html(data);  
                     }  
                });
                window.location = "http://www.ctrtags.com/redirect.php";  
           }  
           else  
           {  
                return false;  
           }  
      });    
//]]> 
 
</script>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                </BR>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-success btn-lg">Send</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- Portfolio Modals -->
    <?php 
             echo '<div class="row">';
                $query4=mysql_query("SELECT * FROM zen_categories WHERE parent_id='261'");
                while($row4=mysql_fetch_array($query4)){
                    
                    $categories_image = $row4['categories_image'];
                    $categories_id = $row4['categories_id'];
                    $query5=mysql_query("SELECT * FROM zen_categories_description WHERE categories_id = '$categories_id'");
                    $row5=mysql_fetch_array($query5);
                    
                    $categories_name = $row5['categories_name'];
                    $nospace=strtolower(preg_replace('/-+/', '-', preg_replace('/[^\wáéíóú]/', '-', $categories_name)));
                   
                    $categories_description = $row5['categories_description'];
                if (($categories_name!='')and ($categories_name!='Collectables') and ($categories_name!='Retail Package')){
    echo '<div class="portfolio-modal modal fade" id="'.$nospace.'" tabindex="-1" role="dialog" aria-hidden="true">';
        echo '<div class="modal-content">';
            echo '<div class="close-modal" data-dismiss="modal">';
                echo '<div class="lr">';
                    echo '<div class="rl">';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="container">';
                echo '<div class="row">';
                    echo '<div class="col-lg-8 col-lg-offset-2">';
                        echo '<div class="modal-body">';
                            echo '<h2><font="#141414">'.$categories_name.'</h2>';
                            echo '<hr class="star-primary">';
                             echo '<img src="http://50.87.226.168/images/'.$categories_image.'" class="img-responsive img-centered" alt="">';
                            echo '<ul class="list-inline item-details">';
                                echo '<li>
                                    <strong>'.$categories_description.'
                                    </strong>';
                                echo '</li>';
                            echo '</ul>';
                            echo '<a href="specificproducts.php?cPath='.$categories_id.'&&product=tags"><button type="button" class="btn btn-default" ><i class="fa fa-view"></i>View Tags</button></a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
}}
    ?>