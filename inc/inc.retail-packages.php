    <header>
       <div class="container">
            <div class="col-lg-12">
                <img class="img-responsive" src="../build/img/products.png" width="300px" height="300px" alt="CTR Tags Custom LDS Tags">
                <div class="intro-text">
                    <span class="name"><h1>CTR Tags LDS Primary Tags</h1></span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </header>
       <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    <li data-transition="turnoff" data-slotamount="1" data-masterspeed="300">
                        <img alt="Retail Package Promo 1" src="../build/upload/promo.png" >
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
                        <img alt="Retail Package Promo 2" src="../build/upload/slide2.png" >
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

             <?php 
if (isset($_SESSION['ses_key'])=='' || isset($_SESSION['email'])=='') {
        $customers_id = '';
        $email = '';
 
    ?>
<section id="signin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Already Registered?</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form  name="myForm2" method="post" action="functions/login.php" onsubmit="return validateForm()">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="phone"  name="password" required data-validation-required-message="Please enter your Password.">
                                <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    </BR>
                    <div class="row">
                        <div class="form-group col-xs-12">   
                            <input type="submit" name=Login value="Sign In" class="btn btn-success btn-lg">
                        </div>
                     </div>
                </form>
            </div>
        </div>
    </div>
</section id="signin">
<section id="signup" class="success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>New Customer?</h2>
                <hr class="star-light">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h4>Create a Customer Profile with ctrtags.com which allows you to shop faster, track the status of your current orders, review your previous orders and take advantage of our other member's benefits.</h4>
        </div>
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <a href="createacct.php">
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-lg btn-outline">Create An Account</button>
            </div>
        </a>
    </div>
</section>
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
<section>
<div class="container">
    <div class="col-lg-12">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-0">Choose</a></li>
                <li><a href="#tabs-1">Side1(<?php echo $number1;?>)</a></li>
                <li><a href="#tabs-2">Side2(<?php echo $number2;?>)</a></li>
                <li><a href="#tabs-3">Side3(<?php echo $number3;?>)</a></li>
                <li><a href="#tabs-4">Side4(<?php echo $number4;?>)</a></li>
                <a href="finalize.php">
                <button class='btn btn-success' type='button' name='login'>Post Order</button><a/>
            </ul>
            <div id="tabs-0">
        <ul id="sortable1" class="connectedSortable ui-helper-reset">

          <?php  
          $query4=mysql_query("SELECT * FROM zen_products WHERE manufacturers_id = '10' and master_categories_id!='276' and master_categories_id='262'");
            while($row4=mysql_fetch_array($query4)){
              $products_id = $row4['products_id'];
              $customers_basket_id = $row5['customers_basket_id'];
                $query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
                $row5=mysql_fetch_array($query5);
                  $products_model = $row4['products_model'];
                  $products_id = $row4['products_id'];
                  $products_description = $row5['products_description'];
                  $products_image = $row4['products_image'];
                  $products_name = $row5['products_name'];
                  $products_quantity_order_min = $row4['products_quantity_order_min'];
                  $products_price = $row4['products_price'];                           
                echo '<li class="ui-state-default col-lg-2 tile" id="'.$products_id.'" >';
             echo '<CENTER>';
                echo '<img src="http://50.87.226.168/images/'.$products_image.'"  alt="CTR Tags '.$products_name.' Tags" title="'.$products_name.'" class="img-responsive product_drag">';
                echo '<CENTER>';
                echo '<h5 class="tile-title">'.$products_model.'</h5>';
                echo '<p>'.$products_description.'</p>';
                echo '</CENTER>';
                echo '</li>';
            }
            ?>

        </ul>
         <div class="clearfix"></div>
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
            <div class="clearfix"></div>
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
            <div class="clearfix"></div>
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
            <div class="clearfix"></div>
        </ul>
            </div>
        </div>
    <div class="clearfix"></div>
    </div>
</div>
<?php }?>
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
    window.location = "http://www.flat.ctrtags.com/redirect.php";
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
                window.location = "http://www.flat.ctrtags.com/redirect.php";  
           }  
           else  
           {  
                return false;  
           }  
      });    
//]]> 

</script>
</section>
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- Portfolio Modals -->
   