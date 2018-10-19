<script>
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

$(window).load(function(){$(".loader").fadeOut("slow");})
function myFunction(){document.getElementById("myform").reset();}$(document).ready(function(){$("#empty1").hide();$("#empty2").hide();$("#empty3").hide();$("#empty4").hide();$("#empty5").hide();$("#empty6").hide();$("#p1").hide();$("#title").hide();})
$(document).ready(function(){$("#b1hide").click(function(){var textarea=document.getElementById('title');$("#title").hide();$("#p1").hide();textarea.value='';});$("#b1show").click(function(){$("#title").show();$("#p1").show();});});$(document).ready(function(){$("#p2").hide();$("#background").hide();})
$(document).ready(function(){var textarea=document.getElementById('background');$("#b2hide").click(function(){$("#background").hide();$("#p2").hide();textarea.value='';});$("#b2show").click(function(){$("#background").show();$("#p2").show();});});$(document).ready(function(){$("#choose").hide();})
$(document).ready(function(){$("#b3hide").click(function(){var textarea=document.getElementById('image_describe');$("#choose").hide();textarea.value='';});$("#b3show").click(function(){$("#choose").show();$("#upload").show();$("#describe").show();$("#p_image").hide();$("#image_upload").hide();});});$(document).ready(function(){$("#upload").click(function(){$("#p_image").show();$("#image_upload").show();$("#p3").hide();$("#image_describe").hide();var textarea=document.getElementById('image_describe');textarea.value='';})})
$(document).ready(function(){$("#describe").click(function(){$("#p_image").hide();$("#image_upload").hide();$("#p3").show();$("#image_describe").show();})})
$(document).ready(function(){$("#p4").hide();$("#footer").hide();})
$(document).ready(function(){$("#b4hide").click(function(){var textarea=document.getElementById('footer');$("#footer").hide();$("#p4").hide();textarea.value='';});$("#b4show").click(function(){$("#footer").show();$("#p4").show();});});
    
    var country_arr = new Array(
      <?php 
      $servername = "localhost"; //live
      $username = "boostpr1_boostpr";
      $password = "Draper24@";
      $dbname = "boostpr1_boostpromotions";

      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if (!$conn) {
      die('connection error: ' .mysqli_connect_error());
      }else{
      $sql = "SELECT countries_id, countries_name FROM `zen_countries`";
      $result = mysqli_query($conn, $sql);

      while ($rs=mysqli_fetch_array($result)) {
      echo '"'; echo $rs['countries_name']; echo '", '; 
        }
       }    
      ?> 
);

function populateStates( countryElementId, stateElementId ){
  
  var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;

  var stateElement = document.getElementById( stateElementId );
  
  stateElement.length=0;  // Fixed by Julian Woods
  stateElement.options[0] = new Option('Select State','');
  stateElement.selectedIndex = 0;
  
  var state_arr = s_a[selectedCountryIndex].split("|");
  
  for (var i=0; i<state_arr.length; i++) {
    stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
  }
}

function populateCountries(countryElementId, stateElementId){
  // given the id of the <select> tag as function argument, it inserts <option> tags
  var countryElement = document.getElementById(countryElementId);
  countryElement.length=0;
  countryElement.options[0] = new Option('Select Country','-1');
  countryElement.selectedIndex = 0;
  for (var i=0; i<country_arr.length; i++) {
    countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
  }

  // Assigned all countries. Now assign event listener for the states.

  if( stateElementId ){
    countryElement.onchange = function(){
      populateStates( countryElementId, stateElementId );
    };
  }
}
</script>
<?php $corespondent='CTRTags';
$lccorespondent = strtolower($corespondent);
?>

<form id="myform" name="myForm" method="post" action="registration/registrationexec.php">
  <div class="col-md-6">
              <h4>MY ACCOUNT INFORMATION</h4>
              <p>NOTE: If you already have an account with us, please login at the <a href="javascript:history.go(-1)" >login page</a>. </p>
              <h4 style=" color: red;">IMPORTANT NOTICE</h4>
              <p>In an effort to provide prompt customer service please notify the individual responsible for your EMAIL SERVER 
              that you need to have <?php echo $lccorespondent;?>.com enabled as a safe sender. Our ability to contact 
              you through email and your prompt replies are essential to avoid delays to your order. We will be 
              sending emails with images for artwork approvals that can, and often are blocked by firewall and 
              email server settings if not specifically set up to allow emails and images from <?php echo $lccorespondent;?>.com. 
              </p>
              <p>If you at all believe that this may be an issue, please assign a personal email for <?php echo $corespondent;?> correspondence.</p>
                  <label>How did you hear about us?</label>
                  <select name="howheard" width="50" required> 
                  <option value="null"></option>
                  <option value="friend">Friends</option>
                  <option value="tradeshow" >Tradeshow</option>
                  <option value="searchengine" >Search Engine</option>                
                  <option value="facebook" >Facebook</option>
                  <option value="twitter" >Twitter</option>
                  <option value="pinterest" >Pinterest</option>
                  <option value="samples in mail" >Samples in Mail</option>
                  <option value="pta" >PTA</option>
                  <option value="co-worker" >Co-worker</option>
                  <option value="blog" >Blog</option>
                  <option value="usbc" >USBC</option>
                  </select>   


                  <h3>Additional Contact Details</h3>
                  <label>Telephone:</label>
                  <input type="tel" onkeypress='validate(event)' required class="form-control" id="phone" name="telephone" pattern=".{11,}" title="Maximum of 11 Numbers" maxlength="12" 
                  ></input>
                  <label>Fax Number:</label>
                  <input class="form-control" name="fax" onkeypress='validate(event)'
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                  ></input>

                  <h3>Login Details</h3>
                  <label>Email Address: <?php if (isset($_SESSION['err_email'])){ echo "<strong style='color:red;'>* Invalid Email!</strong>"; }else{echo "";}?></label>
                  <input type="email" required class="form-control" name="email"></input>
                  <label>Password:</label>
                  <input required type="password" class="form-control" name="pass" id="passWord" minlength="8" title="Minimum of 8 Characters"></input>
                  <label>Confirm Password:</label>
                  <input required type="password" class="form-control" name="confirm_password" id="cpass"></input>
    </div> <!-- colmd6 -->
    <div class="col-md-6">
           <h3>Company Details</h3>
              <label>Company Name:</label>
              <input required class="form-control" name="company_name" onkeypress="return numberOnly(this, event)"></input>
               
              <h3>Address Details</h3>
              <div class="row-fluid">
              <label>
              <input required class="radio-inline" type="radio" name="sex" value="m"></input>&nbsp;&nbsp;&nbsp;Male: &nbsp;&nbsp;&nbsp;&nbsp;</label>
              <label>
              <input required class="radio-inline" type="radio" name="sex" value="f"></input>&nbsp;&nbsp;&nbsp;Female: </label>
              </div>
              
              <label>First Name:</label>
              <input required class="form-control" id="fname" name="f_name" onkeypress="return numberOnly(this, event)"></input>
              <label>Last Name:</label>
              <input required  class="form-control" id="lname" name="l_name" onkeypress="return numberOnly(this, event)"></input>
              <label>Street Address:</label>
              <textarea required onkeypress='validate(event)' class="form-control" id="add1" name="st_address"></textarea>
              <label>City:</label>
              <input required class="form-control" id="city" name="city" onkeypress="return numberOnly(this, event)"></input>
              
              <label>Post/Zipcode:</label>
              <input required type="text"  class="form-control" id="zip" name="post_zip"
              onkeypress="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
              maxlength="5"></input><br>
              <label for="size">Country</label>
              <select required class="form-control" name="country" id="country"></select>
              <script language="javascript">
                populateCountries("country", "state");
              </script>
              <label for="State">State</label>
              <input required class="form-control" id="state" name="state_province" onkeypress="return numberOnly(this, event)"></input>
              <!-- select required class="form-control" name="state_province" id="state"></select> -->
              <input type=hidden name=validate>
              <input type=hidden name=corespondent value="<?php echo $lccorespondent;?>">
              <BR><BR>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>   
</form> 
<script>
$(window).load(function(){$(".loader").fadeOut("slow");})
function myFunction(){document.getElementById("myform").reset();}$(document).ready(function(){$("#empty1").hide();$("#empty2").hide();$("#empty3").hide();$("#empty4").hide();$("#empty5").hide();$("#empty6").hide();$("#p1").hide();$("#title").hide();})
$(document).ready(function(){$("#b1hide").click(function(){var textarea=document.getElementById('title');$("#title").hide();$("#p1").hide();textarea.value='';});$("#b1show").click(function(){$("#title").show();$("#p1").show();});});$(document).ready(function(){$("#p2").hide();$("#background").hide();})
$(document).ready(function(){var textarea=document.getElementById('background');$("#b2hide").click(function(){$("#background").hide();$("#p2").hide();textarea.value='';});$("#b2show").click(function(){$("#background").show();$("#p2").show();});});$(document).ready(function(){$("#choose").hide();})
$(document).ready(function(){$("#b3hide").click(function(){var textarea=document.getElementById('image_describe');$("#choose").hide();textarea.value='';});$("#b3show").click(function(){$("#choose").show();$("#upload").show();$("#describe").show();$("#p_image").hide();$("#image_upload").hide();});});$(document).ready(function(){$("#upload").click(function(){$("#p_image").show();$("#image_upload").show();$("#p3").hide();$("#image_describe").hide();var textarea=document.getElementById('image_describe');textarea.value='';})})
$(document).ready(function(){$("#describe").click(function(){$("#p_image").hide();$("#image_upload").hide();$("#p3").show();$("#image_describe").show();})})
$(document).ready(function(){$("#p4").hide();$("#footer").hide();})
$(document).ready(function(){$("#b4hide").click(function(){var textarea=document.getElementById('footer');$("#footer").hide();$("#p4").hide();textarea.value='';});$("#b4show").click(function(){$("#footer").show();$("#p4").show();});});
</script>

<script src="build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
       autoHideDialCode: false,
       autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
       formatOnDisplay: false,
       // geoIpLookup: function(callback) {
       //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
       //     var countryCode = (resp && resp.country) ? resp.country : "";
       //     callback(countryCode);
       //   });
       // },
       //hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
       preferredCountries: ['us'],
       separateDialCode: false,
      utilsScript: "build/js/utils.js",
    });
  </script>

<!-- Numbers and symbols validation -->
  <script>
  var inputEl = document.getElementById('phone');
  var goodKey = '0123456789+ ';

  var checkInputTel = function(e) {
  var key = (typeof e.which == "number") ? e.which : e.keyCode;
  var start = this.selectionStart,
    end = this.selectionEnd;

  var filtered = this.value.split('').filter(filterInput);
  this.value = filtered.join("");

  /* Prevents moving the pointer for a bad character */
  var move = (filterInput(String.fromCharCode(key)) || (key == 0 || key == 8)) ? 0 : 1;
  this.setSelectionRange(start - move, end - move);
  }

  var filterInput = function(val) {
    return (goodKey.indexOf(val) > -1);
  }

  inputEl.addEventListener('input', checkInputTel);

  </script>

<!-- Letters and space validation -->
  <script>
        function numberOnly(txt, e) {
            var arr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ";
            var code;
            if (window.event)
                code = e.keyCode;
            else
                code = e.which;
            var char = keychar = String.fromCharCode(code);
            if (arr.indexOf(char) == -1)
                return false;
            
        }
    </script>