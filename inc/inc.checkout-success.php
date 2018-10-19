<?php $order_number=$_GET['ordernumber'];

session_unset();

// Destroy the session.
session_destroy();
 ?>

<header>
    <div class="container">
        <div class="col-lg-12">
            <img class="img-responsive" src="../build/img/checked.png"  alt="<?php echo $brand;?> Order Confirmed">
            <div class="intro-text">
                <span class="name"><h1>Your order is in process!</h1></span>
                <span class="skills"><h2>Your order No. is <?php echo $order_number; ?> </h2></span>
                <span class="skills"><p>If your order requires proofs please expect an email from our graphics department soon. Thank you for shopping. You have been automatically logout to ensure that your receipt and purchase information is not visible to the next person using this computer.</p></span>
                <hr class="star-light">

            </div>
        </div>
    </div>
</header>
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>