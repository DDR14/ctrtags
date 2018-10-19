 <header>
        <div class="container">
            <div class="col-lg-12">
                <img class="img-responsive" src="../build/img/icons/png/login.png" width="300px" height="300px" alt="CTR Tags Login Icon">
                <div class="intro-text">
                    <span class="name"><h1>CTR Tags LOGIN OR CREATE AN ACCOUNT</h1></span>
                    <div class="page-scroll">
                    <a href="#signin" class="btn btn-lg btn-outline" width="200px">
                        Sign In 
                    </a>
                    <a href="#signup" class="btn btn-lg btn-outline page-scroll" width="200px">
                       Sign Up
                    </a>
                    </div>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </header>
    <!-- Contact Section -->
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
                                <input type="hidden" name="cPath" value="<?php echo $_GET['cPath'];?>">
                                <?php 
                                    $category=$_GET['category'];
                                    echo $category;
                                
                                ?>
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
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                
                                <input type="submit" name=Login value="Sign In" class="btn btn-success btn-lg">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- /tiles -->
        </div>
    </section>
     <section id="signup" class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>New Customer?</h2>
                    <hr class="star-light">
                </div>
            </div>
        <div class="row">
              <h4>Create a Customer Profile with ctrtags.com which allows you to shop faster, track the status of your current orders, review your previous orders and take advantage of our other member's benefits.</h4> 

        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="createacct.php">
                      <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-outline">Create An Account</button>
                            </div>
                    </a>
                </div>
        </div>
    </section>

    <!-- Footer -->


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>