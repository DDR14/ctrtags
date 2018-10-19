<script type="text/javascript">                           
function validate(evt){
  if(evt.keyCode!=8){
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|[()-]|\./;
    if( !regex.test(key) ){
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
}
function validate1(evt){
  if(evt.keyCode!=8){
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[a-z]|[()-]|\./;
    if( !regex.test(key) ){
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }
}

</script>
<header>
    <div class="container">
        <div class="col-lg-12">
            <img class="img-responsive" src="../build/img/ctrtagflatlogo.png" width="300px" height="300px" alt="CTR Tags Refer a Friend Icon">
            <div class="intro-text">
                <span class="name"><h1>CTR Tags Referrals</h1></span>
                <hr class="star-light">
                <span class="skills"><h2>Take time to refer a friend on our website! We would like to extend the discount to your referral on your behalf.</h2></span>
            </div>
        </div>
    </div>
</header>
<section id="referral">
        <div class="container">
             <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="col-lg-12 text-center">
                        <h3>Your Information</h3>
                        <hr class="star-primary">
                    </div>
                    <form name="sentMessage" action="functions/referral.php" method="post"  onsubmit="return validateForm2()">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="customers_name" required onkeypress='validate1(event)' data-validation-required-message="Please enter your Name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="customers_email" requireddata-validation-required-message="Please enter your Email Address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <h3>Leaders Information</h3>
                            <hr class="star-primary">
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name2" name="leaders_name" required onkeypress='validate1(event)' data-validation-required-message="Please enter your Leader's Name." >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telephone</label>
                                <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="leaders_phone" required onkeypress='validate(event)' data-validation-required-message="Please enter your Leader's Phone Number." >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email2" name="leaders_email" required o data-validation-required-message="Please enter your Leader's Email Address."
                               >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Ward</label>
                                <input type="text" class="form-control" placeholder="Ward" id="ward" name="leaders_ward" required onkeypress='validate1(event)' data-validation-required-message="Please enter your Leader's Ward."
                               >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mailing Address</label>
                                <input type="text" class="form-control" placeholder="Mailing Address" id="mailing" name="leaders_address" required onkeypress='validate1(event)' data-validation-required-message="Please enter your Leader's Mailing Address."
                               >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>State</label>
                                <input type="text" class="form-control" placeholder="State" id="state" name="leaders_state" required onkeypress='validate1(event)' data-validation-required-message="Please enter your Leader's State."
                               >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" id="city" name="leaders_city" required onkeypress='validate1(event)' data-validation-required-message="Please enter your Leader's City."
                               >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Zip Code</label>
                                <input type="text" class="form-control" placeholder="Zip Code" id="zip" name="leaders_zip" required onkeypress='validate(event)' data-validation-required-message="Please enter your Leader's Zip Code."
                               >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        </BR>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <CENTER>
                                <button type="submit" class="btn btn-success btn-lg">Update</button>
                                </CENTER>
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