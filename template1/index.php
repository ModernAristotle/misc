<!DOCTYPE html>
<html>
<!-- **********************  include common.php ************************ -->
 <?php
 ini_set("display_errors", 0);
 session_start();
 if(isset($_SESSION['message'])){
     echo $_SESSION['message'];
     unset($_SESSION['message']);
 }
 if(isset($_REQUEST['logout'])){
     session_destroy();
     header("location:index.php");exit;
 }
 if(isset($_SESSION['username'])){
        header("location:home.php");exit;
 }
 include 'common.php';
 ?>
<?php if (empty($_SESSION['username'])){?>
 <body> 
<div class="signinformCont center fnClose">
  <div class="frmHdng">
    <h3 class="mrgnpdng" align="center">Sign in here</h3>
  </div>
 <br />
<!--<p class="closeicn">x</p>-->
 <form action="home.php" method="post" id="loginForm" class="formLogin" name="frm" enctype="multipart/form-data" onsubmit="return validatelogin();">
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
       <input type="submit" value="Sign in" class="btnSignIn btnsgninfn btnBg btnStyle relPostn" />
        <input type="button" value="Sign up" class="btnSignUp btnsgnupfn btnBg btnStyle" />
      </div>
     <div class="clear"></div>
    </div>
  </form>
  <br />
</div>

  <!---------------------------before signup form------------------------------>
<div class="entryGate center" style="display: none;">
  <div class="frmHdng">
   <h3 class="mrgnpdng" align="">Please enter Email ID or Mobile Number <a href="javascript:void(0)" class="fltrht linkSignin">Login</a></h3>
  </div>
  <br />
  <!--<p class="closeicn">x</p>-->
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
    <h3 class="mrgnpdng" align="">Be a part of the change. Volunteer for the Swaraj Abhiyan</h3>
  </div>
  <!--<p class="closeicn">x</p>-->
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
                  required: function() {
                    if ($("#phone").val()) {
                      return false;
                    } else {
                      return true;
                    }
                  },
                  email: true
                },
                "phone": {
                  required: function() {
                    if ($("#email").val()) {
                      return false;
                    } else {
                      return true;
                    }
                  }
                }
              },
              messages: {
                "email": {
                  required: "<font color='red'>This field required</font>"
                },
                "phone": {
                  required: "<font color='red'>This field required</font>"
                }
              }
            });
            var x = validator.form();
            if (x && emailexists) {
              if ($("#shw_emailexist").html().length > 0 && $("#shw_phoneexist").html().length > 0) {
                return false;
              } else if($("#shw_emailexist").html().length > 0) {
                return false;
              }else if($("#shw_phoneexist").html().length > 0){
                return false;
              }else{
                $(".entryGate").fadeOut(500);
                $(".signupformCont").fadeIn(500).animate({top: $j(window).scrollTop()+160},80);
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
            $.post(url, function(res) {
              if (parseInt(res) <= 1 && $("#"+type).val()!='') {
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
            return x;
        }
//          -------------------------- Personal Details form validation --------------------
          function validatepersonal() {
            var validator = $("#personaldetails").validate({
              rules: {
                "prsnlemail": {
                  required: true,
                  email:true
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
            return x;
        }
</script>
 </body>
<?php }?>
</html>