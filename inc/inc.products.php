    <header>
       <div class="container">
            <div class="col-lg-12">
                <img class="img-responsive" src="../build/img/products.png" width="200px" height="200px" alt="CTR Tags LDS Custom Tags">
                <div class="intro-text">
                    <span class="name"><h1>CTR Tags LDS Primary Tag Categories</h1></span>
                    <hr class="star-light">
                </div>
            </div>
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
               
                echo '<div class="col-sm-4 portfolio-item text-center">';
                    echo '<a href="specificproducts.php?cPath='.$categories_id.'&&product=tags" class="portfolio-link" data-sound="alert" data-toggle="modal">';
                        echo '<div class="caption">';
                            echo '<div class="caption-content">';
                                echo '<i class="fa fa-search-plus fa-3x"></i>';
                            echo '</div>';
                        echo '</div>';
                        echo '<CENTER>';
                        echo '<img src="http://50.87.226.168/images/'.$categories_image.'" class="img-responsive" alt="CTR Tags '.$categories_name.' Tags">';
                        echo '</CENTER>';
                   
                    echo '</a>';
                   echo '<h5>'.$categories_name.'</h5>';
                    echo '<hr class="star-light">';
                echo '</div>';
                }
                if ($categories_name=='Collectables'){

                 echo '<div class="col-sm-4 portfolio-item text-center">';
                    echo '<a href="specificproducts.php?cPath=53&&product=tags" class="portfolio-link" data-sound="alert" data-toggle="modal">';
                        echo '<div class="caption">';
                            echo '<div class="caption-content">';
                                echo '<i class="fa fa-search-plus fa-3x"></i>';
                            echo '</div>';
                        echo '</div>';
                        echo '<CENTER>';
                        echo '<img src="http://50.87.226.168/images/'.$categories_image.'" class="img-responsive" alt="CTR Tags '.$categories_name.' Tags">';
                        echo '</CENTER>';
                   
                    echo '</a>';
                   echo '<h5>'.$categories_name.'</h5>';
                    echo '<hr class="star-light">';
                echo '</div>';
                
                }

                
    }
                 echo '<div class="col-sm-4 portfolio-item text-center">';
                    echo '<a href="accessories.php?cPath=93" class="portfolio-link" data-sound="alert" data-toggle="modal">';
                        echo '<div class="caption">';
                            echo '<div class="caption-content">';
                                echo '<i class="fa fa-search-plus fa-3x"></i>';
                            echo '</div>';
                        echo '</div>';
                        echo '<CENTER>';
                        echo '<img src="../build/images/accesories.png" class="img-responsive" alt="CTR Tags Accessories">';
                        echo '</CENTER>';
                   
                    echo '</a>';
                   echo '<h5>Accessories</h5>';
                    echo '<hr class="star-light">';
                echo '</div>';
    echo '</div>';
    ?>

        </div>
    </header>
    <!-- About Section -->

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
                             echo '<img src="http://50.87.226.168/images/'.$categories_image.'" class="img-responsive img-centered" alt="CTR Tags '.$categories_name.' Tags">';
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