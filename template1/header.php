<?php
ini_set("display_errors", 0);
session_start();
?>
<div class="loginMessage"><?php
    if (isset($_SESSION['message'])) {
        ?>
        <?php echo $_SESSION['message']; ?>
        <?php
        unset($_SESSION['message']);
    }
    ?></div>
<div class="mapCont center fnClose">
 <h1 style="margin: 0px; padding: 10px;">Select a site <a style="font-size: 12px;" href="javascript:void(0)" class="fltrht mapClose" onclick="funClose();">Close</a></h1>
 <div class="relPostn">
  <div class="mapInfo absPostn">
   <label><input type="radio" id="radioNatSite" checked="checked" /> <b>National site</b></label>
   <p>If you want to see state site click on the correspondence state or choose from below.</p>
   <select class="selState">
    <option>State site</option>
    <option>Jammu & Kashmir</option>
    <option>Himachal Pradesh</option>
    <option>Punjab</option>
    <option>Uttaranchal</option>
    <option>Haryana</option>
    <option>Uttar Pradesh</option>
   </select>
  </div>
   <!--<img src="mapimages/map-lines.png" style="max-width: 421px; width: 100%;" class="mapBorder" />-->
  <?php include 'imap.php'; ?>
 </div>
</div>
<div class="bdyovrly">&nbsp;</div>
<header>
 <div class="hdrContnr center relPostn">
  <a class="logo fltlft" href="javascript:void(0)"><img src="images/logo.png" height="71" width="124" /></a>
  <a class="mapIco fltrht" href="javascript:void(0)">
   <img src="images/map-s.png" height="55" width="99" />
   <div>Choose State</div>
  </a>

  <div class="clear showinMob"></div>
  <div class="hdrToolContnr dispTable center absPostn">
   <div class="showinMob">
    <button type="button" class="respmenuBtn fltlft"></button>
    <button type="button" class="respSubscribeBtn fltlft"></button>
   </div>
   <div class="fltlft hidInMob contSubscrib">
    <form action="javascript:void(0)" id="formsearch" method="get">
     <div class="divField">
      <span class="fldTitle" style="top: -8px;">Newsletter Subscription</span>
      <input type="text" class="txtSearch" placeholder='Provide your email ID' />
      <input type="submit" class="btnSubmit btnBg btnStyle relPostn" value="Submit" />
     </div>
    </form>
   </div>
   <div class="fltrht contSigninup hidInMob">
       <?php if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) { ?>
        <input type="button" class="btnSignIn btnsgninfn btnBg btnStyle relPostn" value="Sign In" />
    <?php } else { ?>
        <a href="index.php?logout=1" class="btnSignIn btnBg btnStyle" id="logout">Sign Out</a>
        <!--<a href="javascript:void(0)" class="btnSignIn btnBg btnStyle" id="login">Login</a>-->
    <?php } ?>
    <input type="button" class="btnSignUp btnsgnupfn btnBg btnStyle" value="Sign Up" />
   </div>
   <div class="clear"></div>
   <?php include 'menu.php'; ?>
  </div>
  <div class="clear"></div>
 </div>
 <div class="clear"></div>

 <!-- **********************  Login form ************************ -->
 

     <!--<body>--> 
     <div class="signinformCont center fnClose">
      <div class="frmHdng">
       <h3 class="mrgnpdng" align="center">Sign in here</h3>
      </div>
      <br />
      <p class="closeicn">x</p>
      <form action="javascript:void(0);" method="post" id="loginForm" class="formLogin" name="frm" enctype="multipart/form-data" onsubmit="return validatelogin();">
       <div class="cntnr clear" style="padding: 10px 0px;">
        <!--<p class="hdng">Sign in here</p>-->
        <div class="form-group col-xs-12">
         <label class="col-lg-12">User Name <span class="spnStar">*</span>:</label>
         <div class="col-lg-12">
          <input type="text" id="username" name="username" class='form-control' placeholder="Enter user name or email"  />
         </div>
        </div>
        <div class="form-group col-xs-12">
         <label class="col-lg-12">Password <span class="spnStar">*</span>:</label>
         <div class="col-lg-12">
          <input type="password" id="usepassword" name="password" class='form-control' placeholder="Enter password"  />
         </div>
        </div>
        <div class="col-xs-12" align="center">       
         <input type="submit" value="Sign in" class="btnSignIn btnBg btnStyle relPostn" onclick="showmsg();" />
         <input type="reset" value="Reset" class="btnReset btnBg btnStyle" />
        </div>
        <div class="clear"></div>
       </div>
      </form>
      <br />
     </div>

     <!---------------------------before signup form------------------------------>
     <div class="entryGate center fnClose" style="display: none;">
      <div class="frmHdng">
       <h3 class="mrgnpdng" align="">Please enter Email ID or Mobile Number <a href="index.php" class="fltrht linkSignin">Login</a></h3>
      </div>
      <br />
      <p class="closeicn">x</p>
      <form action="javascript:void(0);" id="noticeform" method="post" name="frm" enctype="multipart/form-data" onsubmit="return validateForm();">
       <div class="cntnr clear" style="padding: 5px;">
        <div class="form-group col-xs-12 col-sm-5 col-md-5" style="margin: 0px; padding-bottom: 10px;">
         <label class="col-lg-12 mrgnpdng">Email<span class='spnStar'>*</span>:</label>
         <input type="email" class='form-control' placeholder="Enter email ID" id="email" name="email" onblur="chkExist('email');" />
         <div id="shw_emailexist"></div>
        </div>
        <div class="form-group col-xs-12 col-sm-5 col-md-5" style="margin: 0px; padding-bottom: 10px;">
         <label class="col-lg-12 mrgnpdng">Mobile<span class='spnStar'>*</span>:</label>
         <input type="text" class='form-control' id="phone" name="phone" placeholder="Enter mobile number" onblur="chkExist('phone');"/>
         <div id="shw_phoneexist"></div>
        </div>
        <div class="form-group col-xs-12 col-sm-2 col-md-2" style="margin: 0px;">
         <label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formStatusHid">&nbsp;</label>
         <input type="submit" value="Submit" id="pre_signup" class="btnnxtprv" style="margin: 0px;" />
        </div>
        <div class="clear"></div>
       </div>
      </form>
      <br />
     </div>

     <!---------------------------signup form------------------------------>
     <div class="signupformCont center">
      <div class="frmHdng">
       <h3 class="mrgnpdng" align="">Be a part of the change. Volunteer for the Swaraj Abhiyan<a href="index.php" class="fltrht linkSignin">Login</a></h3>
      </div>
      <p class="closeicn">x</p>
      <div class="frmcntnr" style="padding-bottom: 15px;">
       <div class="formStatusHid">
        <div class="col-md-4 col-sm-4 col-xs-12 icondiv">
         <div id="icon1" class="fltlft fonticn_pd active khammanKlass"></div><p class="fltlft pdb">Personal Details</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 icondiv">
         <div id="icon2" class="fltlft fonticn_cl khammanKlass"></div><p class="fltlft pdb">Currently Living</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 icondiv">
         <div id="icon3" class="fltlft fonticn_rav khammanKlass"></div><p class="fltlft pdb">Register as Voter</p>
        </div>
        <div class="clearfix"></div>
       </div>
       <form action="#" id="personaldetails" method="post" name="frm" enctype="multipart/form-data">
        <div class="prsnldtl">
         <div class="cntnr clear">
          <p class="hdng">Personal Details</p>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Name:</label>
           <div class="col-lg-8 pdng5">
            <input type="text" class='form-control' placeholder="Enter your name" />
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Email<span class='spnStar'>*</span>:</label>
           <div class="col-lg-8 pdng5">
            <input type="email" name="prsnlemail" class='form-control' placeholder="Enter email ID" />
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Gender:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>---select---</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">ID Card Detail:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control frmElWdth50">
             <option>Card Type</option>
             <option>Debit Card</option>
             <option>Credit Card</option>
             <option>Visa Card</option>
             <option>Master Card</option>
            </select>
            <input type="text" class="form-control frmElWdth50"  placeholder="ID Card Number"/>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Mobile<span class='spnStar'>*</span>:</label>
           <div class="col-lg-8 pdng5">
            <input type="text" name="prsnlphone" class='form-control' name="" placeholder="Enter mobile number" />
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">DOB :</label>
           <div class="col-lg-8 pdng5"> 
            <input type="text" class='form-control' placeholder="Enter Date of birth"/>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Father's Name:</label>
           <div class="col-lg-8 pdng5">
            <input type="text" class='form-control' placeholder="Enter your father's name" />
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Mother's Name:</label>
           <div class="col-lg-8 pdng5">
            <input type="text" class='form-control' placeholder="Enter your mother's name" />
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2">
           <label for=""><input type="checkbox" name="chkbx" class="chkbx" />&nbsp; I am NRI</label>
          </div>
          <div class="clear"></div>
         </div>
         <input type="button" value="Next" onclick="validatepersonal();" class="nxtbtn btnnxtprv fltrht"  name="fonticn_cl"/>
         <div class="clear"></div>
        </div>

        <!------ currently living-------->
        <div class="crntlvng"  style="display:none;">
         <div class="cntnr clear">
          <p class="hdng">Currently Living</p>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">State:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">District:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Parliament Constituency:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Assembly Constituency:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="clear"></div>
         </div>
         <input type="button" value="Next" class="btnnxtprv nxtbtn1 fltrht" name="fonticn_rav" />
         <input type="button" value="Previous" class="prevBtn btnnxtprv fltrht"  name="fonticn_pd"/>
         <div class="clear"></div>
        </div>

        <!------ Register as Voters-------->
        <div class="rgstrvtr" style="display:none;">
         <div class="cntnr clear">
          <p class="hdng">Register as Voters</p>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">State:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">District:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Parliament Constituency:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6">
           <label class="col-lg-4 pdng5">Assembly Constituency:</label>
           <div class="col-lg-8 pdng5">
            <select class="form-control">
             <option>ID Card Type</option>
             <option>Male</option>
             <option>Female</option>
             <option>Other</option>
            </select>
           </div>
          </div>
          <div class="form-group col-xs-12 col-sm-6 col-md-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2">
           <label><input type="checkbox" nm="chkbx" class="chkbx" />&nbsp; I Want to be Volunteer</label>
          </div>
          <div class='clear'></div>
         </div>
         <div align='center' class="relPostn sgnupbtnrespcont">
          <input type="submit" value="SUBMIT" class="btnDonate" />
          <input type="button" value="Previous" class="prevBtn1 absPostn btnnxtprv" style="right: 0px;"  name="fonticn_cl"/>
          <div class='clear'></div>
         </div>
        </div>  
       </form>
      </div>
     </div>
     <script type="text/javascript" src="js/jquery1.9.1.js"></script>
     <script type="text/javascript" src="js/jquery.validate.js"></script>
     <script type="text/javascript">
             //--------------------------- Before Signup form -----------------------------
             function validateForm() {
                 var validator = $("#noticeform").validate({
                     rules: {
                         "email": {
                             required: function () {
                                 if ($("#phone").val()) {
                                     return false;
                                 } else {
                                     return true;
                                 }
                             },
                             email: true
                         },
                         "phone": {
                             required: function () {
                                 if ($("#email").val()) {
                                     return false;
                                 } else {
                                     return true;
                                 }
                             },
                             number:true,
                             minlength:10,
                             maxlength:12
                         }
                     },
                     messages: {
                         "email": {
                             required: "<font color='red'>This field required</font>"
                         },
                         "phone": {
                             required: "<font color='red'>This field required</font>",
                             number:"<font color='red'>Please Enter Number Only</font>",
                             minlength:"<font color='red'>Please Enter minimum 10 numbers Only</font>",
                             maxlength:"<font color='red'>Please Enter maximum 12 numbers Only</font>",
                         }
                     }
                 });
                 var x = validator.form();
                 if (x && emailexists) {
                     if ($("#shw_emailexist").html().length > 0 && $("#shw_phoneexist").html().length > 0) {
                         return false;
                     } else if ($("#shw_emailexist").html().length > 0) {
                         return false;
                     } else if ($("#shw_phoneexist").html().length > 0) {
                         return false;
                     } else {
                         $(".entryGate").fadeOut(500);
                         $(".signupformCont").fadeIn(500).animate({top: $j(window).scrollTop() + 80}, 80);
                         //                $("#pre_signup").prop("disabled", true);
                         return true;
                     }
                 } else {
                     $(".entryGate").prop('style', 'display:block;');
                     //              $("#pre_signup").removeAttr("disabled");
                     $(".error").first().focus();
                     return false;
                 }
             }
             var emailexists = true;
             function chkExist(type) {
                 emailexists = false;
                 var email = $("#email").val();
                 var phone = $("#phone").val();
                 if (email != '' && phone != '') {
                     var url = "checkExist.php?email=" + email + "&phone=" + phone;
                 } else if (email != "") {
                     var url = "checkExist.php?email=" + email;
                 } else {
                     var url = "checkExist.php?phone=" + phone;
                 }
                 $.post(url, function (res) {
                     if (parseInt(res) <= 1 && $("#" + type).val() != '') {
                         $("#shw_" + type + "exist").html("<font color='red'>This " + type + " is already exist.</font>");
                         emailexists = false;
                     } else {
                         $("#shw_" + type + "exist").html("");
                         emailexists = true;
                     }
                 });
             }

             //          -------------------------- Log in form validation --------------------
             function validatelogin() {
                 var validator = $("#loginForm").validate({
                     rules: {
                         "username": {
                             required: true
                                     //,email:true
                         },
                         "password": {
                             required: true
                         }
                     },
                     messages: {
                         "username": {
                             required: "<font color='red'>This field required</font>"
                                     //email: "<font color='red'>Please enter an email address</font>"
                         },
                         "password": {
                             required: "<font color='red'>This field required</font>"
                         }
                     }
                 });
                 var x = validator.form();
                 if(x){
                     var username = $("#username").val();
                     var password = $("#usepassword").val();
                     $.post("index.php",{"username":username,"password":password}, function (res) {alert(res);
                         if(parseInt(res)){
                             $(".loginMessage").html("Successfully Logged In");
                             window.location.href="index.php";
                         }else{
                             $(".loginMessage").html("Username Or Password is Wrong");
                         }
                     });
                 }
             }
             //          -------------------------- Personal Details form validation --------------------
             function validatepersonal() {
                 var validator = $("#personaldetails").validate({
                     rules: {
                         "prsnlemail": {
                             required: true,
                             email: true
                         },
                         "prsnlphone": {
                             required: true
                         }
                     },
                     messages: {
                         "prsnlemail": {
                             required: "<font color='red'>This field required</font>",
                             email: "<font color='red'>Please enter an email address</font>"
                         },
                         "prsnlphone": {
                             required: "<font color='red'>This field required</font>"
                         }
                     }
                 });
                 var x = validator.form();
                 //---------------------------next btn function----------------
                 $j('.nxtbtn').click(function () {
                     if (x) {
                         var getName = $j(this).attr('name');
                         $j('.khammanKlass').removeClass('active').not($j('.' + getName).addClass('active'));
                         $j('.prsnldtl').stop().slideUp(500, function () {
                             $j('.crntlvng').stop().slideDown(500);
                         });
                     }
                 });
                 $j('.nxtbtn1').click(function () {
                     if (x) {
                         var getName = $j(this).attr('name');
                         $j('.khammanKlass').removeClass('active').not($j('.' + getName).addClass('active'));
                         $j('.crntlvng').stop().slideUp(500, function () {
                             $j('.rgstrvtr').stop().slideDown(500);
                         });
                     }
                 });
                 return x;
             }
             //---------------------------previous btn function----------------
             $j('.prevBtn').click(function () {
                 var getName = $j(this).attr('name');
                 $j('.khammanKlass').removeClass('active').not($j('.' + getName).addClass('active'));
                 $j('.crntlvng').slideUp(500, function () {
                     $j('.prsnldtl').slideDown(500);
                 });
             });
             $j('.prevBtn1').click(function () {
                 var getName = $j(this).attr('name');
                 $j('.khammanKlass').removeClass('active').not($j('.' + getName).addClass('active'));
                 $j('.rgstrvtr').slideUp(500, function () {
                     $j('.crntlvng').slideDown(500);
                 });
             });
     </script>
     <!-- **********************  /Login form ************************ -->
</header>
<div class="divGaltop"></div>
<a class="link2Top fa fa-eject" style="color: #2B64B5 !important;"></a>
<!-----------------------Facebook comment plugin--------------------------->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function funClose() {
        $j('.mapCont').fadeOut(800);
        hideoverlay();
    }

</script>
<style type="text/css">
 .mapClose{
     border: 1px solid #eeeeee;
     padding: 5px 3px;
     transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     -ms-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -webkit-transition: all 0.5s ease;
 }
 .mapClose:hover{
     box-shadow: 0px 0px 5px #269abc;
     -o-box-shadow: 0px 0px 5px #269abc;
     -ms-box-shadow: 0px 0px 5px #269abc;
     -moz-box-shadow: 0px 0px 5px #269abc;
     -webkit-box-shadow: 0px 0px 5px #269abc;
 }
</style>