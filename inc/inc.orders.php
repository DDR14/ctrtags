<header>
    <div class="container">
        <div class="col-lg-12">
            <img class="img-responsive" src="../build/img/how-to-order.png"  alt="CTR Tags How to Order Icon">
            <div class="intro-text">
                <span class="name"><h1>CTR Tags Orders</h1></span>
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
                        $status=$row1['orders_status'];
                        $query2=mysql_query("SELECT * FROM zen_orders_status WHERE orders_status_id='$status'");
                        $row2=mysql_fetch_array($query2);
                        $order_status=$row2['orders_status_name'];
                        echo '<tr>';
                        echo '<th>'.$row1['date_purchased'].'</th>';
                        echo '<th>#'.$row1['orders_id'].'</th>';
                        echo '<th>'.$row1['customers_name'].'<br>'.$row1['customers_country'].'</th>';
                        echo '<th>'.$order_status.'</th>';
                        echo '<th>$'.$row1['order_total'].'</th>';
                        echo '<td>';
                            echo '<div class="mbl">';
                                echo '<div class="btn-group">';
                                    echo '<i class="dropdown-arrow dropdown-arrow-inverse"></i>';
                                    echo '<button class="btn btn-info">Select Action</button>';
                                    echo '<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">';
                                    echo '<span class="caret"></span>';
                                    echo '</button>';
                                    echo '<ul class="dropdown-menu dropdown-inverse">';
                                        echo '<li><a href="https://www.boostpromotions.com/index.php?main_page=account_history_info&order_id='.$row1['orders_id'].'&summary=view" class="active">View</a></li>';
                                        echo '<li><a href="https://www.boostpromotions.com/index.php?main_page=account_history_info&order_id='.$row1['orders_id'].'">Proofs</a></li>';
                                        echo '<li><a href="https://www.boostpromotions.com/index.php?main_page=account_history_info_payment&order_id='.$row1['orders_id'].'">Payment</a></li>';
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                        echo '</td>';
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