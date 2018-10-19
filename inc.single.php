 <?php 
function numToOrdinalWord($num)
{
    $first_word = array('eth','First','Second','Third','Fouth','Fifth','Sixth','Seventh','Eighth','Ninth','Tenth','Elevents','Twelfth','Thirteenth','Fourteenth','Fifteenth','Sixteenth','Seventeenth','Eighteenth','Nineteenth','Twentieth');
    $second_word =array('','','Twenty','Thirthy','Forty','Fifty');

    if($num <= 20)
        return $first_word[$num];

    $first_num = substr($num,-1,1);
    $second_num = substr($num,-2,1);

    return $string = str_replace('y-eth','ieth',$second_word[$second_num].'-'.$first_word[$first_num]);
}
?>
 <header class="success">
      <div class="container">
            <div class="col-lg-12">
                <?php echo '<img class="img-responsive" src="http://50.87.226.168/images/'.$categories_image.'" width="300px" height="300px" alt="">';?>
                <div class="intro-text">
                    <span class="name"><?php echo $categories_name;?></span>
                    <a href="#categories" class="portfolio-link btn btn-lg btn-outline" data-toggle="modal">
                       Click Here to View Other Tag Categories 
                    </a>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </header>
     <section id="pakete">

<div class="box"><!-- The surrounding box -->

  <!-- The front container -->
  <div class="front">
    <table border="0">
      
      <tr>
        <th><B>Pieces</B></th>
        <?php 
        $query1=mysql_query("SELECT * FROM products_discount_quantity_template WHERE template_name='stock' ORDER BY discount_id ASC");
        $count=1;
        while($row1=mysql_fetch_array($query1)){
        echo '<td><button class="show-me_'.$count.'">'.$row1['discount_qty'].'+</button></td>';
        $count++;
        }
        ?>
      </tr>
      <tr>
        <th>Open Stock</th>
        <?php
        $query1=mysql_query("SELECT * FROM products_discount_quantity_template WHERE template_name='stock' ORDER BY discount_id ASC");
        while($row1=mysql_fetch_array($query1)){
        echo '<td class="entypo-check"><h3>$'.number_format($row1['discount_price'], 2).'</h3></td>';
        }
        ?>
      </tr>
      <tr>
        <th>PIECES</th>
        <td><button class="show-me_6">25+</button></td>
        <?php 
        $query1=mysql_query("SELECT * FROM zen_products_discount_quantity WHERE products_id='$products_id'");
        $count=7;
        while($row1=mysql_fetch_array($query1)){
        echo '<td><button class="show-me_'.$count.'">'.$row1['discount_qty'].'+</button></td>';
        $count++;
        ;
        }
        ?>
      </tr>
      <tr>
        <th>Personalized</th>
        <?php
        echo '<td class="entypo-check"><h3>$'.number_format($products_price, 2).'</h3></td>';
        $query1=mysql_query("SELECT * FROM zen_products_discount_quantity WHERE products_id='$products_id'");
        while($row1=mysql_fetch_array($query1)){
        echo '<td class="entypo-check"><h3>$'.number_format($row1['discount_price'], 2).'</h3></td>';
        }
        ?>
      </tr>
    </table>    
  </div>
<div class="responsive-tables">
  <div class="little1 active">
    <table>
      <tr>
        <th>...</th>
        <th>Paket 1</th>
      </tr>
      <tr>
        <th>Service 1</th>
        <td class="entypo-check"></td>
      </tr>
      <tr>
        <th>Service 2</th>
        <td class="entypo-check"></td>
      </tr>
      <tr>
        <th>Service 3</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Service 4</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Service 5</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Service 6</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Service 7</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Price</th>
        <td>1123,00$</td>
      </tr>
      <tr>
        <th>...</th>
        <td><button class="show-me_1">Details</button></td>
      </tr>
    </table>
  </div>
  <div class="little2 activetwo">
    <table>
      <tr>
        <th>...</th>
        <th>Paket 2</th>
      </tr>
      <tr>
        <th>Service 1</th>
        <td class="entypo-check"></td>
      </tr>
      <tr>
        <th>Service 2</th>
        <td class="entypo-check"></td>
      </tr>
      <tr>
        <th>Service 3</th>
        <td class="entypo-check"></td>
      </tr>
      <tr>
        <th>Service 4</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Service 5</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Service 6</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Service 7</th>
        <td class="entypo-cancel"></td>
      </tr>
      <tr>
        <th>Price</th>
        <td>5813,00$</td>
      </tr>
      <tr>
        <th>...</th>
        <td><button class="show-me_2">Details</button></td>
      </tr>
    </table>
  </div>
  
  <button class="next-table entypo-right-dir"></button>
  <button class="prev-table entypo-left-dir"></button>

</div>
<?php 
        $query1=mysql_query("SELECT * FROM products_discount_quantity_template WHERE template_name='stock' ORDER BY discount_id ASC");
        $count=1;
        while($row1=mysql_fetch_array($query1)){
        echo '<div class="back '.strtolower("numToOrdinalWord($count)").'">';
        echo '<h1>'.$row1['discount_qty'].'</h1>';
        echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto natus labore dicta excepturi ab odit autem dolorem nulla neque sit laudantium sapiente aperiam magni nihil sed cupiditate asperiores at iure.<br /><br />No. 1';
        echo '</p>';
        echo '<button class="hide-me_1"></button>';
        echo '</div>';
        $count++;
    }
?>
  <!-- The backside containers -->  


  
  
</section>
<section id="contact">
        <div class="container">
        <div class="row demo-tiles">
                <div class="col-lg-3 col-lg-offset-2">
                <div class="col-xs-12">
                <CENTER>
                    <div class="tile tile-hot">
                        <?php
                            echo '<img src="http://50.87.226.168/images/'.$products_image.'" alt="Chat" class="tile-image">';
                            echo '<h3 class="tile-title">'.$products_model.'</h3>';
                            echo '<h4>'.$products_name.'</h4>';
                        ?> 
                    </div>
                </CENTER>
                </div>
                </div>
                <div class="col-lg-5">
                  
                    <h4 class="quick">Quick Overview:</h4>
                        <p class="quick_desc"><?php echo $products_description;?></p>
                        
                        <?php if (isset($_SESSION['ses_key'])) {
                        ?>
                        <form method="post" name="Form" action="functions/addtocart.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <ul class="list-unstyled">
                            <li id="<?php if (isset($customers_id)) {
                        echo $customers_id;
                    }else{
                        echo "empty1";}?>"><label class='text-black'>Would you like to change the <b>title</b> for this tag?</label class='text-black'>
                                <p id="p1">Tell us what you would like to change the title to, or list the tag number with the title you want.</p>
                                <input class="form-control" type="text" name="title" id="title"></input>
                                <input type="radio" name="button1" id="b1hide" checked>No</input>
                                <input type="radio" name="button1" id="b1show">Yes</input></li>
                            <li id="<?php if (isset($customers_id)) {
                        echo $customers_id;
                    }else{
                        echo "empty2";}?>"><label class='text-black'>Would you like to change the <b>background</b> for this tag?</label class='text-black'>
                                <p id='p2'>Describe to us what you would like to change the background to, or list the tag number with the background you want.</p>
                                <input class="form-control" type="text" name="background" id="background"></input>
                                <input type="radio" name="button2" id="b2hide" checked>No</input>
                                <input type="radio" name="button2" id="b2show">Yes</input></li>
                            <li id="<?php if (isset($customers_id)) {
                        echo $customers_id;
                    }else{
                        echo "empty3";}?>"><label class='text-black'>Would you like to change the <b>image</b> for this tag?</label class='text-black'>
                                <input type="radio" name="button3" id="b3hide" checked>No</input>
                                <input type="radio" name="button3" id="b3show">Yes</input>
                                <li id="choose">
                                <input type="radio" name="upload" id="upload" value="upload" class="upl_select">upload</input>
                                <input type="radio" name="upload" id="describe" value="customs" checked>describe</input>
                                <p id="p3">Tell us what you would like to change the image to, or list the tag number with the title you want.</p>
                                <input class="form-control" type="text" name="customs" id="image_describe"></input>
                                <p id="p_image">Would you like to upload an image with that?</p>
                                <input type="file" name="uploadfile" id="image_upload">
                            </li>

                                </li>
                            <li id="<?php if (isset($customers_id)) {
                        echo $customers_id;
                    }else{
                        echo "empty4";}?>"><label class='text-black'>Do you want a <b>footer</b> for this tag?</label class='text-black'>
                                <p id="p4"> Describe to us what you would like on the footer, or list the tag number with the footer you want.</p>
                                <input class="form-control" type="text" name="footer" id="footer"></input>
                                <input type="radio" name="button4" id="b4hide" checked>No</input>
                                <input type="radio" name="button4" id="b4show">Yes</input></li>
                                <?php 
                                echo "<input type='hidden' name='products_id' value='$products_id'>
                              <input type='hidden' name='products_model' value='$products_model'>
                              <input type='hidden' name='minqty' value='$minqty'>"; ?>
                            <div class="well info" >
                                <label class='text-black' style='color: #444;' id="<?php if (isset($customers_id)) {
                        echo $customers_id;
                    }else{
                        echo "empty5";}?>">Add Tags Quantity: <p style="color:red;"><?php echo "Minimum Quantity" . " " . $minqty; ?></p></label class='text-black'>
                                    <!--min value from db-->
                                    <input type="text" name="itmquantity" placeholder="<?php echo "Minimum Quantity" . " " . $minqty; ?>" id="<?php if (isset($customers_id)) {
                        echo $customers_id;
                    }else{
                        echo "empty6";}?>" class="form-control" value="<?php echo $minqty; ?>">
                                <?php
                                if (isset($_SESSION['email'])) {
                                    echo "<button class='btn btn-success' type='submit' name='addtocart' style='margin-top:10px;'>Add/View Cart</button>";
                                } else {
                                    
                                   echo '<a href="login.php?cPath='.$cPath.'&&category='.$category.'">';
                                   echo "<button class='btn btn-warning' type='button' name='login'>Log-in</button>";
                                } ?><a/>
                            </div>
                        </ul>
                    </form>
                <?php } else {
                    echo '<div class="single-but item_add">';
                    $category=$_GET['category'];
                    echo '<form action="login.php?cPath='.$cPath.'&&category='.$category.'" method=post>';
                    echo ' <button type="submit" class="btn btn-success btn-lg">Log in to Shop Now</button>';
                    echo '</form>';
                echo '</div>';
                 } ?>

                </div>
            </div>
        </div>
    </section>
    <section id="other" class="success">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2>Other Tags in <?php echo $categories_name;?> Cagtegory</h2>
                <hr class="star-light">
            </div>
            <?php  
            echo '<div class="row demo-tiles">';
                $query4=mysql_query("SELECT * FROM zen_products WHERE master_categories_id ='$master_categories_id'");
                while($row4=mysql_fetch_array($query4)){
                    
                    $products_id = $row4['products_id'];
                    $query5=mysql_query("SELECT * FROM zen_products_description WHERE products_id = '$products_id'");
                    $row5=mysql_fetch_array($query5);
                    $products_model = $row4['products_model'];
                    $products_image = $row4['products_image'];
                    $products_description = $row5['products_description'];
                    $products_name = $row5['products_name'];
                    $products_quantity_order_min = $row4['products_quantity_order_min'];
                    $products_price = $row4['products_price'];
            
                echo '<div class="col-sm-3 portfolio-item text-center">';
                    echo '<div class="tile1">';
                        echo '<img src="http://50.87.226.168/images/'.$products_image.'" alt="Compas" class="tile-image">';
                        echo '<h3 class="tile-title1">'.$products_model.'</h3>';
                        echo '<p class="tile-title1">'.$products_description.'</p>';
                        echo '<a class="btn btn-success btn-lg" href="single.php?cPath='.$products_model.'&&category=268">View</a>';
                    echo '</div>';
                echo '</div>';
            }
                ?>
                
            </div> <!-- /tiles -->
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <d<div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
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
        </div> <!-- /tiles -->
        </div>
    </section>

    <!-- Footer -->
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
    echo '<div class="portfolio-modal modal fade" id="categories" tabindex="-1" role="dialog" aria-hidden="true">';
        echo '<div class="modal-content">';
           
            echo '<div class="close-modal" data-dismiss="modal">';
                echo '<div class="lr">';
                    echo '<div class="rl">';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="container">';
             echo '<div class="row">';
                echo '<div class="col-lg-12 text-center">';
                    echo '<h2>Tag Categories</h2>';
                    echo '<hr class="star-primary">';
                echo '</div>';
            echo '</div>';
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
               
                echo '<div class="col-sm-4 portfolio-item text-center">';
                 
                    echo '<a href="specificproducts.php?cPath='.$categories_id.'&&product=tags" class="portfolio-link" data-toggle="modal">';
                        echo '<div class="caption">';
                            
                        echo '</div>';
                        echo '<CENTER>';
                        echo '<img src="http://50.87.226.168/images/'.$categories_image.'" class="img-responsive" alt="">';
                        echo '</CENTER>';
                   
                    echo '</a>';
                   echo '<h5>'.$categories_name.'</h5>';
                    echo '<hr class="star-primary">';
                echo '</div>';
        }
    }
    echo '</div>';
  
            echo '</div>';
        echo '</div>';
    echo '</div>';
}}
    ?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    