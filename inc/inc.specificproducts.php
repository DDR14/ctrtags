<header>
    <div class="container">
        <div class="col-lg-12">
            <div class="intro-text">
                <span class="name"><h1>CTR Tags <?php echo $categories_name;?></h1></span>
                <a href="#categories" class="portfolio-link btn btn-lg btn-outline" data-toggle="modal">Click Here to View Other Tag Categories</a>
                <hr class="star-light">
            </div>
            <?php  
        echo '<div class="row">';
        $query4=mysql_query("SELECT a.*, b.* FROM zen_products a 
            INNER JOIN zen_products_description b
            ON a.products_id = b.products_id
            INNER JOIN zen_products_to_categories c
            ON c.products_id = a.products_id
            WHERE c.categories_id ='$cPath'");
        while($row4=mysql_fetch_array($query4)){
            $products_id = $row4['products_id'];
            $products_model = $row4['products_model'];
            $products_image = $row4['products_image'];
            $products_description = $row4['products_description'];
            $products_name = $row4['products_name'];
            $products_quantity_order_min = $row4['products_quantity_order_min'];
            $products_price = $row4['products_price'];
            echo '<div class="col-sm-3 portfolio-item text-center">';
                    echo '<div class="tile1">';
                        echo '<img src="http://50.87.226.168/images/'.$products_image.'" alt="CTR Tags '.$products_name.'" class="tile-image">';
                        echo '<h3 class="tile-title1">'.$products_model.'</h3>';
                        echo '<p class="tile-title1">'.$products_description.'</p>';
                        echo '<a class="btn btn-success btn-lg" href="single.php?cPath='.$products_model.'&&category=268&&product='.$_GET['product'].'">View</a>';
                    echo '</div>';
                echo '</div>';
            }
                ?>
        </div>
        </div>
    </div>
</header>
    


<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
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
                                        echo '<img src="http://50.87.226.168/images/'.$categories_image.'" class="img-responsive" alt="CTR Tags '.$categories_name.'">';
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