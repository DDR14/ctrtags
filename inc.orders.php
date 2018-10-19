<header>
    <div class="container">
        <div class="col-lg-12">
            <img class="img-responsive" src="../build/img/how-to-order.png"  alt="">
            <div class="intro-text">
                <span class="name">Orders</span>
                <hr class="star-light">
            </div>
        </div>
    </div>
</header>
<section id="contact">
    <div class="container">
        <div class="demo-row">
            <div class="demo-content-wide">
                <table class="table table-striped">
                    <tr>
                        <th>Date</th>
                        <th>No.</th>
                        <th>Ship To</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                    <?php
                    $query1=mysql_query("SELECT * FROM zen_orders WHERE customers_id='$customers_id' AND date_purchased BETWEEN NOW() - INTERVAL 30 DAY AND NOW()");
                    while($row1=mysql_fetch_array($query1)){
                        $status=$row1['order_status'];
                        $query2=mysql_query("SELECT * FROM zen_orders_status WHERE order_status_id='$status'");
                        $row2=mysql_fetch_array($query2);
                        $order_status=$row2['order_status_name'];
                        echo '<tr>';
                        echo '<th>'.$row1['date_purchased'].'</th>';
                        
                        echo '<th>'.$row1['customers_name'].'<br>'.$row1['customers_country'].'</th>';
                        echo '<th>'.$order_status.'</th>';
                        echo '<th>'.$row1['order_total'].'</th>';
                        echo '<th>'.$row1['date_purchased'].'</th>';
                        echo '<tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>

    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>