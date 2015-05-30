
<!DOCTYPE html>
<html>
 <!-- **********************  include common.php ************************ -->
 <head>
    <title>Swaraj Abhiyan, India</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="pragma" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="{$meta_keywords}" />
        <meta name="description" content="{$meta_description}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/easyslider.css" />
  <script type="text/javascript" src="js/jquery1.9.1.js"></script>
  <script type="text/javascript" src="js/swaraj.js"></script>
    <script type="text/javascript" src="js/easySlider1.7.js"></script>
 </head>
 <body>
<!--<div class="startingLoader" style="position: fixed; height: 100%; width: 100%; z-index: 100000; background: #2C71BF; left: 0px; top: 0px;">
      <div class="spinner">
  <div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div>
</div>
</div>-->
  <!-- **********************  include header.php ************************ -->
  <div class="signinformCont center fnClose">
  <div class="frmHdng">
    <h3 class="mrgnpdng" align="center">Sign in here</h3>
  </div>
  <br />
  <p class="closeicn">x</p>
  <form action="#" method="post" name="frm" enctype="multipart/form-data">
    <div class="cntnr clear" style="padding: 10px 0px;">
     <!--<p class="hdng">Sign in here</p>-->
      <div class="form-group col-xs-12">
        <label class="col-lg-12">User Name <span class="spnStar">*</span>:</label>
        <div class="col-lg-12">
          <input type="text" class='form-control' placeholder="Enter user name or email"/>
        </div>
      </div>
      <div class="form-group col-xs-12">
        <label class="col-lg-12">Password <span class="spnStar">*</span>:</label>
        <div class="col-lg-12">
          <input type="password" class='form-control' placeholder="Enter password"/>
        </div>
      </div>
      <div class="col-xs-12" align="center">
        <input type="submit" value="Sign in" class="signinBtn" />
      </div>
     <div class="clear"></div>
    </div>
  </form>
  <br />
</div>

<!---------------------------before signup form------------------------------>
<div class="entryGate center fnClose" style="display: none;">
  <div class="frmHdng">
    <h3 class="mrgnpdng" align="">Please enter Email ID or Mobile Number</h3>
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
<div class="signupformCont center fnClose">
  <div class="frmHdng">
    <h3 class="mrgnpdng" align="">Be a part of the change. Volunteer for the Swaraj Abhiyan</h3>
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
    </div>
    <form action="#" method="post" name="frm" enctype="multipart/form-data">
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
              <input type="email" class='form-control' placeholder="Enter email ID" />
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
              <input type="text" class='form-control' placeholder="Enter mobile number" />
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
        <input type="button" value="Next" class="nxtbtn btnnxtprv fltrht"  name="fonticn_cl"/>
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
       <div align='center' class="relPostn">
        <input type="button" value="Previous" class="prevBtn1 absPostn btnnxtprv" style="right: 0px;"  name="fonticn_cl"/>
          <input type="submit" value="SUBMIT" class="btnDonate" /></div>
        <div class='clear'></div>
      </div>  
    </form>
  </div>
</div>
<script type="text/javascript" src="js/jquery1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
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
</script><div class="mapCont center fnClose">
 <h1 style="margin: 0px; padding: 10px;">Select a site</h1>
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
 <script type="text/javascript">
   $(function () {
	var thisFill;
	   $('path.imap').hover(
			   function () {
				   thisFill = $(this).attr('fill');
//				   thisTitle = $(this).attr('title');
				   $(this).attr('fill', '#E6E6E6');
			   }, function () {
		   $(this).attr('fill', thisFill);
	   });
   });
  </script>

  <svg version="1.1"
	   id="svg3642" sodipodi:version="0.32" sodipodi:modified="true" sodipodi:docname="India-states-numbered.svg" inkscape:version="0.46" sodipodi:docbase="D:\" inkscape:output_extension="org.inkscape.output.svg.inkscape" xmlns:cc="http://creativecommons.org/ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="95%"
	   viewBox="0 0 1594 1868" enable-background="new 0 0 1594 1868" xml:space="preserve">
 <sodipodi:namedview  id="base" inkscape:window-width="1024" inkscape:current-layer="svg3642" inkscape:pageshadow="2" inkscape:window-height="708" inkscape:window-x="0" inkscape:window-y="26" inkscape:pageopacity="0.0" inkscape:zoom="0.56568542" inkscape:cx="1084.8025" borderopacity="1.0" pagecolor="#ffffff" inkscape:cy="636.55576" showgrid="false" bordercolor="#666666">
 </sodipodi:namedview>
 <defs>


 <inkscape:perspective  id="perspective389" inkscape:persp3d-origin="797 : 622.66667 : 1" inkscape:vp_x="0 : 934 : 1" inkscape:vp_y="0 : 1000 : 0" sodipodi:type="inkscape:persp3d" inkscape:vp_z="1594 : 934 : 1">
 </inkscape:perspective>
 </defs>
 <path id="bihar_1_" class="imap" title="Bihar" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M980.904,672.971
	   c-9.646-2.544-19.52-1.091-28.733-3.464c-10.854-2.792-16.487-10.413-28.613-11.37c-15.604-1.229-31.313-2.331-46.962-1.016
	   c-10.726,0.902-20.462,3.037-25.761,13.14c-4.688,8.941-5.692,19.876-9.529,29.245c-3.979,9.738-10.095,17.992-15.069,27.159
	   c-9.484,17.438-0.357,35.616,0.438,54.217c1.109,25.959-5.093,45.274,21.313,59.784c17.354,9.54,36.563,16.021,54.853,23.513
	   c19.213,7.872,38.229,16.646,58.021,23.021c36.398,11.725,78.521,9.146,110.577-13.295c31.459-22.025,25.259-51.313,21.798-84.479
	   c-1.466-14.02-0.248-27.271,3.712-40.799c2.212-7.555,6.229-14.994,6.202-22.958c-0.034-9.469,1.107-18.889,1.041-28.351
	   c-8.271-2.938-16.409,0.552-24.686-0.438c-2.854-0.342-6.076-0.21-9.013-0.643c-6.438-0.948-12.688-3.484-18.908-5.234
	   c-7.938-2.229-15.922-4.309-23.919-6.324C1012.072,680.753,996.435,677.07,980.904,672.971z"/>
 <path id="sikkim_1_" class="imap" title="Sikim" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1139.258,660.755
	   c3.313-18.916,5.689-39.727-15.271-47.983c-5.583-2.19-12.164-1.773-18.158-1.351c-4.415,0.318-11.04,0.32-14.879,2.719
	   c-7.074,4.42-13.779,12.479-17.257,20.044c-4.271,9.276-8.314,20.354-8.522,30.613c-0.128,6.375,1.4,13.174,3.733,18.908
	   c1.673,4.109,8.063,6.063,11.975,6.984c9.147,2.146,18.75,5.596,28.369,4.529c8.85-0.971,19.969-2.429,25.198-10.191
	   C1138.425,679.105,1138.046,667.69,1139.258,660.755z"/>
 <path id="jharkhand_1_" class="imap" title="Jharkhand" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M977.802,989.931
	   c-17.426-2.479-33.502-9.686-48.721-18.257c-7.278-4.099-14.332-9.813-21.779-13.388c-6.727-3.224-15.048-2.401-21.509-6.289
	   c-6.597-3.973-9.705-14.723-13.194-20.876c-5.841-10.298-13.842-17.966-18.506-29.069c-4.17-9.93-7.063-20.516-8.684-31.161
	   c-1.051-6.938-3.614-13.801-3.229-20.896c0.198-3.646,1.402-6.063,3.021-9.144c1.186-2.259,1.535-6.396,4.048-7.673
	   c2.03-1.021,4.698-0.642,6.875-0.503c3.113,0.199,3.7,0.669,6.129,2.232c3.888,2.502,8.985,1.418,13.335,1.718
	   c2.776,0.191,5.491,0.322,8.343,0.333c4.237,0.017,4.104-1.084,4.375-4.948c1.538-0.081,4.604,1.44,5.646,2.542
	   c0.965,1.021,0.794,3.53,2.284,4.487c3.169,2.034,6.594-4.846,10.37-1.763c2.584,2.104-0.776,6.85,2.979,9.348
	   c2.998,1.989,6.271,2.193,9.951,1.951c0.438-1.605,0.32-3.229,0.434-4.899c1.664-0.104,3.46,0.274,4.949-0.626
	   c2.125-1.284,1.037-2.829,2.326-4.414c0.919-1.13,3.679-1.679,5.014-0.604c1.113,0.893,1.021,3.655,2.329,4.866
	   c0.795,0.729,4.212,2.354,5.331,2.417c2.791,0.146,1.91-1.583,3.574-2.775c2.063-1.481,8.438,0.644,7.813-4.185
	   c2.946-1.783,6.336-2.021,9.942-2.063c2.813-0.028,2.723,0.189,3.667-2c1.134-2.627-0.263-2.085,3-2.667
	   c2.659-0.475,2.167-0.513,2.666-3c0.172-0.854-0.119-1.627,0.236-2.406c0.365-0.813,1.479-1.106,1.78-1.9
	   c0.729-1.889-1.021-3.531,0.979-4.699c0.998-0.584,4.448-0.008,5.617,0.063c0.088,4.646,8.209,0.877,10.322,0.68
	   c0.268,0.412,0.427,0.361,0.669,0.67c0.565,2.9,2.918,2.639,4.007,4.604c0.771,1.406-0.003,4.993,0.102,6.623
	   c3.9,1.003,7.53-4.656,7.949,2.383c0.079,1.325-0.629,4.688,0.393,5.69c1.396,1.36,4.313-1.087,4.664,1.926
	   c5.776,1.077,3.264-6.135,5.277-8.707c0.396-0.507,1.596-0.854,1.936-1.309c0.688-0.908,0.033-1.959,0.99-2.691
	   c2.279-1.745,3.442,1.317,3.457,3.374c2.729,0.576,6.328-2.146,6.341-4.905c2.627,0.382,4.146,5.241,7.229,3.564
	   c0.468-2.354-1.286-3.605,1.051-4.605c2.521-1.075,3.327,1.288,4-2.002c0.389-1.896,0.479-3.771,0.667-5.666
	   c0.087-0.855-0.319-2.218,0.064-3c0.679-1.358,1.808-0.78,2.608-1.669c2.416-2.633-0.069-6.924,0.648-10.334
	   c0.735-3.459,3.563-1.688,5.327-3.226c1.002-0.868,2.541-6.502,3.063-8.049c2.709-0.197,5.518,0.063,8.229-0.108
	   c0.414-1.537-0.854-3.492,1.604-3.425c0.036-0.317,0.106-3.722,0.188-3.73c3.353-0.479,6.844,0.438,9.593,2.541
	   c2.263,1.732,3.896,3.604,6.787,4.17c2.342,0.475,4.27,0.127,6.387,1.745c7.912,6.063,8.354,18.78,11.942,27.584
	   c4.603,11.271,9.188,24.354,3.136,35.897c-5.732,10.932-10.146,19.771-13.828,31.854c-2.329,7.646-7.203,14.035-9.422,21.697
	   c-3.954,13.651-6.515,27.809-10.896,41.438C1050.851,992.651,1013.827,995.074,977.802,989.931z"/>
 <path id="rajasthan_1_" class="imap" title="Rajasthan" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M349.779,536.473
	   c12.664-9.396,24.521-19.938,39.166-26.129c14.464-6.104,28.271,1.359,40.119,11.123c11.104,9.15,19.462,19.707,32.466,26.742
	   c10.771,5.828,19.307,12.454,28.885,20.045c9.068,7.188,17.291,14.828,25.979,22.35c11.204,9.695,20.645,20.537,32.657,30.063
	   c10.635,8.422,21.688,16.749,32.757,24.711c7.356,5.29,11.74,13.873,14.017,22.489c2.511,9.543,6.433,16.825,9.979,26.014
	   c3.396,8.795,5.813,17.637,6.208,26.908c0.729,16.964-1.033,29.626-9.729,44.388c-11.869,20.146-26.896,39.557-36.773,60.708
	   c-9.482,20.317-16.428,39.573-30.813,56.815c-9.227,11.052-22.276,21.499-34.069,29.625c-9.854,6.787-20.146,16.729-30.438,22.382
	   c-9.93,5.438-25.936,5.459-37.009,7.144c-31.336,4.771-65.243-5.552-94.813-14.515c-45.438-13.771-81.858-46.164-119.167-74.107
	   c-9.581-7.178-20.43-14.112-27.292-24.146c-5.625-8.227-10.025-17.565-15.223-26.086c-31.067-50.931-38.855-119.118-15.976-174.833
	   c6.899-16.806,18.034-37.354,34.14-47.058c19.465-11.729,49.842-7.955,71.583-8.82c9.429-0.377,14.031-1.614,21.683-6.406
	   c4.637-2.903,5.574-4.139,11.674-4.867c6.586-0.786,13.734-0.839,16.596-8.474C327.677,547.378,339.545,544.071,349.779,536.473z"/>
 <path id="west_bengal_1_" class="imap" title="West Bengal" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1084.26,703.517
	   c-1.392-1.212-2.013-2.52-3.175-3.938c-2.709-3.319-5.396-6.604-8.336-9.717c-3.565-3.784-9.15-6.604-9.409-12.354
	   c-0.198-4.413,5.714-7.202,9.688-6.636c2.188,0.313,2.916,1.664,4.793,2.688c1.485,0.809,3.854,0.352,4.625,1.86
	   c0.435,0.83-0.188,1.823,0.357,2.646c-0.141-0.208,2.067,1.271,2.006,1.256c0.938,0.316,1.865-0.229,2.688-0.212
	   c1.075,0.018,1.987,0.451,3.012,0.455c0.897,0.003,1.618-0.479,2.731-0.255c1.628,0.313,1.082,0.708,2.264,1.311
	   c0.957,0.488,4.234,1.095,5.505,0.5c1.017-0.474,0.705-1.261,1.427-2.078c0.363-0.413,1.538-0.681,2.03-0.964
	   c0.059-0.959,0.012-1.965,0.081-2.92c0.735-0.604,2.166-0.771,3.206-0.543c1.474,0.32,1.826,1.717,3.249,2.073
	   c1.291,0.317,1.735-1.278,2.758-1.083c0.938,0.178,1.173,1.428,1.563,2.229c0.521-0.813,1.127-1.562,1.938-2.191
	   c2.126,0.728,2.09,1.691,4.577,1.189c1.959-0.395,3.856-1.064,5.688-1.854c27.688-11.955,63.854,7.64,63.331,38.926
	   c-0.2,11.875-5.614,19.847-13.989,27.648c-3.563,3.313-9.746,6.935-11.94,11.354c-2.396,4.834-1.354,11.729-2.022,17.09
	   c-1.354,10.703-5.262,21.91-7.288,32.667c-2.545,13.452-3.271,27.192-5.862,40.623c-2.803,14.52-2.423,19.588,5.706,32.917
	   c9.063,14.854,15.396,30.342,18.631,47.493c4.274,22.637,6.252,46.866,4.419,69.824c-2.034,25.505-31.479,32.289-53.913,31.546
	   c-17.771-0.589-35.434-5.952-52.637-10.104c-8.817-2.125-19.88-3.579-25.026-11.934c-4.57-7.432-6.438-14.215-12.348-20.7
	   c-4.384-4.813-4.634-2.472-5.614-10.035c-0.513-3.938-1.313-7.897-0.479-11.881c0.271-1.32,1.271-3.146,2.383-4.479
	   c0.401-0.479,0.817-0.896,1.219-1.196c1.34-1.007,3.411-0.72,4.772-1.521c1.376-0.813,1.85-2.398,3.688-2.69
	   c-0.687-0.776-1.826-0.376-2.559-0.979c-1.577-1.31-0.488-1.356-0.741-2.937c-0.313-1.97,0.423-1.343-1.737-2.595
	   c-0.985-0.573-1.959-0.983-2.896-1.73c1.04-2.213,3.3-0.674,1.967-3.749c-0.854-1.983-4.724-3.315-4.384-5.209
	   c-1.369-0.271-2.541,0.379-3.906,0.24c0.229-1.093,0.439-2.406,0.24-3.573c-1.893-0.083-4.354-1.413-5.625-2.709
	   c-0.438-0.443-0.821-1.684-1.399-2.271c-0.599-0.608-1.438-0.509-1.98-1.313c-0.656-0.965-0.834-3.665-0.271-5.424
	   c0.616-1.914,1.938-2.186,3.949-3.063c0.754-2.875-6.152-2.013-7.896-1.889c-0.033,0.188-0.07,0.369-0.108,0.559
	   c-1.195,0.267-1.729-0.341-1.659-1.563c-2.941-0.173-5.188,1.646-7.043-0.383c-2.275-2.487-2.343-5.637-6.507-4.387
	   c-1.15-3.056-2.116-3.521-5.734-3.28c-1.516,0.098-2.385,0.47-3.354-0.327c-0.354-0.284,0.271-1.533-0.288-2.03
	   c-0.854-0.75-2.619-0.271-3.66-0.354c-0.338-1.696,0.479-4.834,1.354-6.233c3.291-0.076,2.396-7.318,0.383-8.658
	   c2.801-0.206,5.715,0.063,8.521-0.104c0.471-1.863-1.165-2.827-0.905-4.567c2.043-0.575,4.418-0.469,6.564-0.333
	   c0.354,4.979,1.518,6.22,6.717,6.283c2.623,0.03,2.745-0.032,3.334-2.333c0.66-2.578,0.201-2.708,2.593-4.406
	   c2.45-1.742,4.778-3.652,7.327-5.258c3.026-1.9,4.896-2.104,8.157-2.457c3.205-0.344,3.063-1.299,3.601-4.354
	   c0.479-2.722,1.298-4.295,3.938-1.892c0.222-3.594,0.063-5.166,4.05-3.584c2.81,1.116,6.047,2.547,9.282,2.229
	   c0.276-1.688,0.099-3.188-1.498-3.967c2.081-0.025,3.604,1.253,5.487,0.978c0.365-1.063,0.025-2.333,0.365-3.301
	   c0.479-1.359,1.313-0.854,1.354-2.657c0.049-1.832-3.143-3.28-2.27-4.271c0.584-0.659,5.25-0.104,5.91,0.262
	   c2.491,1.354,1.25,3.295,4.976,2.956c0.076-1.063,0.021-2.174,0.104-3.229c0.188-0.038,0.368-0.074,0.559-0.109
	   c0.145-1.229-0.511-3.256,0.041-4.03c1.021-1.463,3.194-0.938,4.305-0.284c-0.505-2.873,2.724-2.61,4.673-2.688
	   c-0.31-1.104-1.281-2.527-2.574-2.65c-0.563-2.188,1.605-1.646,2.625-2.536c0.979-0.864,1.668-2.229,2.74-3.414
	   c2.438-2.705,2.411-4.811,2.211-8.609c-4.891-0.917-0.604-3.807-1.592-5.648c1.835-0.15,3.741-0.003,5.582-0.116
	   c0.104-1.813,0.682-5.454-0.271-6.95c-1.079-1.706-4.479-1.354-3.627-4.608c0.704-0.146,1.137-0.677,1.896-0.773
	   c0.225-3.521,1.708-9.694-0.038-12.896c-0.896-1.634-2.192-3.164-3.546-4.39c-1.116-1.017-1.936-0.29-1.927-2.166
	   c0.009-2.163,3.293-3.699,4.104-5.523c-2.305-1.12-2.425-3.134-3.127-5.307c-0.567-1.771-2.688-3.667-2.361-5.616
	   c1.608-0.102,3.281-0.014,4.896-0.083c0.188-2.563-0.04-4.646,3.051-5.308c2.799-0.604,3.409,2.244,5.957,1.938
	   c-0.175-1.536-0.517-2.979-0.624-4.625c-0.174-2.647,0.003-2.938-1.341-4.979c-0.729-1.105-1.77-3.146-2.659-4.008
	   c-1.34-1.295-2.396-0.918-4.271-1.043c-0.406-2.094-1.35-1.705-2.729-2.625c-1.348-0.896-2.188-1.334-2.593-3.323
	   c-0.478-2.371,0.754-2.881,1.592-4.657c0.707-1.5,0.604-2.8,0.722-4.625c1.481,0.188,2.991,0.318,4.563,0.231
	   c1.409-4.009,1.125-5.107,5.327-6.332c0.313-0.095,1.211-2.701,1.569-3.132c2.854-3.396,6.813-2.028,6.894-7.745
	   c0.03-2.582-1.896-4.609-2.149-7.118c-0.248-2.386,1.014-4.925,0.074-7.29c-0.688-1.753-2.548-1.655-3.896-2.512
	   C1086.898,706.199,1085.587,704.674,1084.26,703.517z"/>
 <path id="madhya_pradesh_1_" class="imap" title="Madhya Pradesh" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M378.761,918.589
	   c3.207-2.92,4.787-6.146,5.815-10.287c0.562-2.263,1.396-6.896,3.938-7.854c4.49-1.694,4.271,4.955,7.499,5.968
	   c0.166-0.387,0.277-0.74,0.441-1.127c1.631-0.085,3.238,0.271,4.796,0.775c2.424-4.144,9.105-3.611,12.489-5.952
	   c4.77-3.311-4.354-5.921-7.447-7.086c2.692-2.693,0.907-3.563,1.047-6.813c4.662-1.842,9.658-3.104,14.034-4.964
	   c5.512-2.34,5.738-7.43,5.379-13.123c-0.162-2.572-0.72-4.413,0.014-7.012c0.646-2.251,2.824-3.442,3.521-5.464
	   c0.938-2.771-0.913-4.248-1.537-6.122c-0.824-2.479-0.896-4.531-1.063-7.327c-2.928-0.188-5.951,0.03-8.884-0.149
	   c0.974-1.501,2.908-2.708,3.472-4.415c0.748-2.271-1.258-4.646,1.45-5.979c-0.729-1.813-3.396-2.545-5.386-2.604
	   c-0.093-1.463-0.663-4.605,0.011-5.943c0.745-1.479,3.855-1.892,4.313-3.072c0.772-2.041-5.048-8.549,1.521-7.323
	   c-0.313,3.112,1.438,1.237,2.574,2.389c1.271,1.275,2.104,3.563,4.425,2.965c-0.188-5.985-10.271-10.26-6.313-16.854
	   c3.406,1.124,2.089,5.354,5.896,6.433c2.601,0.729,5.871,0.142,7.121-1.981c1.411-2.396-0.284-4.774,2.366-6.659
	   c2.229-1.583,6.299-0.945,8.938-0.771c0.15,2.397,0.15,4.944,0,7.353c-3.79-0.484-2.813,3.521-2.997,6.003
	   c-1.769,0.041-3.628,1.063-3.438,3.074c0.241,2.493,3.007,2.19,5.008,2.493c4.166,0.625,8.146,0.813,12.426,1.077
	   c-0.135,0.655,0.282,1.688,0.149,2.353c-0.365,1.813,5.279-2.285,5.181-2.225c2.781-1.861,4.066-2.389,8.167-2.126
	   c0.188,2.911-0.024,5.929,0.159,8.842c1.479,0.604,3.163,0.729,4.738,0.729c0.076,0.891,0.191,7.653-0.908,7.771
	   c-1.763,0.188-3.291-0.069-4.513-1.339c-2.248,0.62-3.374,4.146-2.959,6.236c0.354,1.805,1.938,0.328,2.316,1.371
	   c1.772,4.804-3.148,7.45,0.732,11.32c1.273,1.271,2.504-0.177,2.938,1.896c-1.684,0.586-2.311,2.061-3.938,2.606
	   c-2.058,0.694-6.313,1.801-8.397,1.418c-2.146-0.396-4.183-3.72-6.125-0.955c-0.732,1.038-0.665,7.612-0.398,8.946
	   c5.662-0.104,5.086,2.57,8.962,5.158c0.813-1.658,0.148-4.104,1.049-6c2.944-0.701,6.62,0.538,9.828,0.342
	   c0.451-1.534,1.859-2.125,3.51-2.003c0.354-2.313-1.187-3.757-1.347-5.841c4.001-1.613,4.634,0.132,6.813-3.692
	   c1.188-2.1,2.699-5.827,2.688-8.313c3.797-1.229,7.178,0.494,10.938,1.429c3.438,0.854,7.479,0.69,10.907,1.947
	   c-0.186-0.813,0.313-2.052,0.151-2.875c1.417-0.047,2.926-0.104,4.337-0.156c0.163-0.266,0.396-0.756,0.474-0.879
	   c0.164,1.416,0.156,2.956,0.188,4.389c2.218,0.075,3.521,1.572,5.849,1.146c-0.292,2.078,0.646,4.229,3.002,3.852
	   c0.038-3.146,5.534-2.585,5.485-5.837c-4.184-1.108-2.455-14.237-3.861-17.981c4.615-0.989,5.163,4.188,8.962,2.906
	   c2.292-0.771,3.237-5.453,2.988-8.013c-0.422-4.339-2.729-4.932-6.5-5.5c-4.068-0.614-4.994-1.508-6.437-5.411
	   c3.614-0.286,7.396,0.234,5.839-4.486c-0.37-1.116-2.04-1.932-2.434-3.072c-0.472-1.394,0.015-4.003,0.104-5.445
	   c4.081-0.259,8.2,0.521,12.27,0.007c3.745-0.473,5.428-2.483,8.691-3.896c-0.282,1.021,0.207,2.25,0.036,3.23
	   c1.724-0.212,3.438-1.141,5.351-0.998c0.245-3.877,0.19-7.971,0.028-11.854c-3.556,0.521-2.376-3.729-2.528-5.997
	   c-4.953-0.146-5.259,1.741-6.51,5.835c-2.368-0.469-2.504-1.979-5.415-1.837c-0.56,0.023-2.534,1.229-3.5,1.429
	   c-1.063,0.217-2.408,0-3.5,0c-4.688,0.002-8.646,0.027-12.624-1.375c-5.01-1.771-6.684-1.997-7.376-7.625
	   c-0.354-2.932-0.979-4.317-2.376-6.997c-1.229-2.365-1.17-3.981-2.074-6.43c4.313,0.513,2.19-5.333,4.536-6.986
	   c2.166-0.092,4.46-0.82,6.417-1.583c2.991-1.163,2.82-1.05,4.51-3.987c2.063-3.586,5.188-8.223,9.625-10.375
	   c2.141-1.033,4.576-0.646,6.75-1.772c2.348-1.224,2.446-3.206,4.104-4.874c2.536-2.558,10.589-3.097,12.098-6.4
	   c3.409-0.339,6.897-1.475,9.54-3.442c1.438-1.075,2.252-2.97,3.736-3.771c1.802-0.979,3.621-0.646,5.563-1.447
	   c0.896-8.855,11.867-5.375,17.491-6.484c-0.406,0.076,1.474-4.965,1.837-5.448c1.96-2.585,4.123-2.646,7.246-3.479
	   c2.684-0.709,3.907-1.652,5.979-3.482c10.271-9.089,19.732-10.292,32.968-7.775c13.7,2.604,26.748,7.881,39.54,13.291
	   c36.369,15.387,72.457,30.485,104.896,53.081c12.414,8.646,29.452,16.277,39.961,27.063c9.521,9.764,4.729,26.4,9.729,38.694
	   c3.937,9.688,8.673,19.673,8.313,30.312c-0.177,5.24-0.563,8.992-3.813,13.109c-2.521,3.188-6.823,4.198-8.157,8.236
	   c-1.354,4.104,0.979,9.365-0.354,13.53c-1.604,5.033-6.052,9.313-8.62,13.807c-3.66,6.383-4.394,7.453-2.519,14.882
	   c2.1,8.3,5.788,13.604,2.563,22.104c-4.098,10.771-13.188,19.971-18.666,30.098c-5.609,10.354-12.352,20.125-19.561,29.438
	   c-9.295,12.008-19.521,23.295-28.104,35.854c-2.909,4.26-5.479,10.12-10.343,12.596c-6.753,3.438-17.136,2.396-24.53,2.332
	   c-10.188-0.091-23.186,2.842-32.539-1.817c-9.832-4.896-17.021-13.854-27.653-17.976c-24.549-9.521-52.947-10.771-78.636-6.188
	   c-44.25,7.9-89.595,10.453-133.887,1.174c-19.84-4.157-33.821-9.271-51.229-19.433c-11.601-6.771-26.394-10.339-32.521-22.51
	   c-6.168-12.241-6.688-28.366-5.021-41.745C362.24,929.298,369.548,926.975,378.761,918.589z"/>
 <path id="chhattisgarh_1_" class="imap" title="Chhattisgarh" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M716.517,1008.61
	   c5.076-0.479,6.016-5.02,6.07-9.651c0.022-1.631,0.168-3.378,0-5c-0.164-1.58-0.947-3.053-0.948-4.617
	   c2.809,0.354,5.774-1.327,6.282-3.718c0.635-2.992-3.063-8.976-1.354-11.339c0.767-1.063,2.344-0.521,3.64-1.051
	   c0.137-2.162-0.036-4.396,0.101-6.563c2.563-0.227,4.249,1.771,6.566,1.232c0.081-1.274,0.085-2.621-0.008-3.896
	   c-3.021-1.142,0.875-5.465,1.09-7.021c1.24,0.38,2.628,0.382,3.917,0.25c0.221-3.391-0.113-6.854,0.101-10.232
	   c3.27-0.229,6.141,0.209,9.06-0.959c1.211-0.482,1.538-1.373,3.563-1.092c1.521,0.211,2.938,1.597,4.284,1.284
	   c0.129-1.621,2.304-2.98,3.699-3.618c2.201-1.006,3.094-0.182,4.349-2.001c0.452-0.655,0.13-1.45,0.762-2.24
	   c0.646-0.801,1.442-0.837,2.321-1.353c1.111-0.652,3.632-1.446,4.271-2.729c0.845-1.7-0.457-3.813,0.646-5.438
	   c1.077-1.58,3.105-2.107,4-3.909c0.835-1.688,0.337-4.139,1.313-5.688c1.229-1.973,3.521-1.598,3.057-4.601
	   c3.261-0.198,6.565,0.729,8.993-1.646c2.041-1.997,2.116-4.603,1.715-7.401c-0.493-3.454-1.027-4.249-3.407-6.649
	   c-1.646-1.664-3.043-4.911-5.943-4.729c-0.059-1.813-2.076-3.896-3.73-4.25c-1.369,3.468-2.521,0.563-3.73-0.283
	   c-1.506-1.063-3.313-1.438-5.244-0.75c-2.233,0.792-2.125,2.677-4.256,0.917c-0.752-0.621-2.462-2.896-2.75-3.65
	   c-1.517-3.991,8.146-6.077,6.345-10.938c-0.581-1.563-8.355-1.859-4.271-5.875c2.563-2.521,6.953-0.646,6.647,2.832
	   c3.711,0.767,4.938,0.379,8.279-0.541c1.813-0.5,3.896,0.146,5.677,0.266c2.354,0.146,9.5-1.271,9.043,2.607
	   c2.101,0.112,7.313-2.275,7.675,0.666c2.438,0.259,4.771-1.084,6.646,0.739c0.825,0.813-0.316,3.041,1.646,2.087
	   c0.843-0.4,0.755-2.385,1.021-3.136c1.302-3.632,1.604-0.335,4.631-1.625c1.816-0.771,0.68-3.688,1.648-5.021
	   c1.329-1.813,3.854-0.447,5.266-1.537c1.521-1.17,0.521-3.591,2.876-4.381c1.948-0.655,4.142,0.413,6.198-0.54
	   c4.759-2.192,8.096-4.715,13.329-5.696c4.13-0.771,8.407-1.602,12.584-0.368c5.271,1.563,2.666,4.288,4.067,7.857
	   c1.252,3.188,5.688,3.995,7.926,6.134c1.771,1.7,1.488,2.438,2.248,4.602c0.591,1.688,1.31,3.184,3.383,2.717
	   c0.211,3.468,0.406,5.824,4.708,5.634c3.594-0.165,3.333-1.868,5.4,1.343c2.146,3.341,0.845,4.076-0.065,7.648
	   c-0.613,2.429-0.572,5.541,0.055,7.94c4.234-0.85,3.06,7.354,3.666,10c3.144,0.127,3.796,4.604,5.945,6.282
	   c2.175,1.696,5.351,0.588,8.308,0.836c-0.743,2.845-1.646,4.449-1.64,7.604c0.01,1.679,0.25,2.69-0.771,3.729
	   c-1.313,1.314-3.862,1.716-5.229,3.021c-1.313,1.266-4,3.264-4.61,5.262c-2.896,9.358-1.424,21.686,3.786,30.032
	   c5.805,9.293,7.482,11.646,7.479,22.386c-0.011,9.222,1.35,17.186-3.519,25.095c-4.896,7.965-12.359,15.198-18.75,21.98
	   c-12.22,12.972-27.563,23.862-34.271,40.841c-3.646,9.213-8.709,18.051-12.271,27.127c-3.472,8.813-4.313,18.796-7.813,27.807
	   c-7.169,18.438-18.704,34.664-31.354,49.729c-6.395,7.604-10.896,17.771-18.063,24.561c-8.668,8.203-22.613,9.796-33.944,10.979
	   c-14.794,1.541-27.794,0.479-37.569-11.868c-12.463-15.743-19.547-37.79-26.293-56.454c-5.512-15.241-8.689-28.98-4.313-44.896
	   c4.14-15.016,10.792-29.313,15.664-44.104c1.893-5.735,3.462-11.359,3.164-17.445c-0.176-3.535-2.823-7.922-1.91-11.426
	   c0.822-3.146,3.313-3.604,5.247-6.059c3.674-4.662,3.826-12.116,11.235-12.729C710.632,1009.151,713.621,1008.883,716.517,1008.61z"
	   />
 <path id="odisha_1_" class="imap" title="Odisha" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1084.433,1001.089
	   c1.521,4.8-0.146,10.661-0.417,15.669c-0.729,13.745-1.354,27.555-4.833,40.939c-5.604,21.562-13.87,42.563-25.63,61.54
	   c-13.363,21.563-34.354,36.489-57.243,46.638c-23.481,10.414-48.188,8.133-73.104,8.802c-9.273,0.249-17.424,9.531-26.021,13.817
	   c-9.396,4.687-19.296,8.256-28.833,12.633c-13.646,6.266-27.885,10.723-41.688,16.553c-18.783,7.938-36.979,15.292-58.021,12.896
	   c-6.815-0.777-16.034-5.104-21.879-8.636c-6.247-3.781-5.516-12.751-0.521-17.156c1.018-0.897,2.213-1.606,3.562-2.044
	   c1.056-0.339,3.347,0.049,4.199-0.458c0.658-0.392,1.866-2.388,2.66-3.051c6.5-5.436,6.011-7.626,6.575-16.067
	   c2.995-0.578,3.588-2.321,5.305-3.697c1.26-1.01,0.795-1.352,2.621-1.887c1.088-0.319,3.063,0.563,4.021,0.032
	   c3.034-1.677,4.822-9.229,7.035-11.45c1.658-0.066,3.258-0.359,4.865-0.659c0.41-4.137-0.367-5.149-3.774-7.062
	   c2.116-0.669,4.61-0.492,6.776-0.938c0.205-3.805,3.729-2.097,5.604-4.013c1.475-1.492,1.672-6.23,1.527-8.338
	   c1.17,0.221,2.771-0.271,3.859-0.271c0.447-6.682-1.271-12.127-2.423-18.313c-0.521-2.797,0.422-6.479-0.112-8.998
	   c-0.659-3.12-3.669-2.411-4.479-5.913c-0.973,0.188-2.354-0.351-3.338-0.161c-0.271-5.01,2.521-7.93,2.934-12.426
	   c0.609-6.875-5.728-2.036-6.077-7.428c-1.343,0.192-2.899,0.572-4.334,0.341c-2.69-4.501,0.836-8.197,0.979-12.841
	   c2.297-0.144,6.561-1.104,6,2.354c6.104,0.385,11.954-0.85,16.854,2.659c0.168,2.663-1.479,9.584,3,8.341
	   c-0.896-5.179,8.146-3.796,11.001-2.854c0.117,1.927,0.021,3.934,0.146,5.854c2.861,0.508,3.854-1.54,5.339-3.016
	   c0.135-1.728,0.608-4.702,0.095-6.41c-1.188-3.867-0.854-1.449-4.313-1.479c-2.646-0.019-7.678-0.864-10.604-2.104
	   c-2.78-1.195,1.896-17.938,1.563-20.656c-0.275-2.209-0.644-2.408-1.829-4.104c-0.562-0.802-2.13-0.521-2.646-1.354
	   c-0.646-1.017-0.318-3.299-0.404-4.479c-0.478-6.563-0.603-13.188-0.188-19.75c0.872-0.151,2.057,0.063,2.854,0.513
	   c0.122,1.938,1.604,4.723,4.072,3.943c1.062-0.324,2.897-4.291,3.521-5.531c2.346-4.689,3.199-7.854,3.556-13.43
	   c5.214-0.323,10.244,0.438,15.428,0.433c2.231-0.014,5.249-0.521,7.387,0.067c0.905,0.25,1.333,1.602,2.615,1.93
	   c1.139,0.294,2.774-0.014,3.923-0.07c0.271-2.331,1.361-3.45,1.99-5.427c0.46-1.446-0.076-4.36,0.566-5.521
	   c1.479-2.604,6.358-1.369,9.438-1.563c0.479-2.646-1.619-2.598-2.325-4.523c-0.76-2.078,0.021-5.373,0.4-7.396
	   c0.589-3.15,1.289-3.104,2.979-5.021c0.236-0.268,1.246,0.354,1.532-0.063c0.452-0.66,0.271-1.588,0.487-1.932
	   c0.813-1.229-1.938-2.354,0.918-3.086c0.438-3.193,0.913-4.23,3.563-6.046c0.964-0.646,2.063-1.184,2.995-1.803
	   c-1.643-3.386-5.834-4.96-3.498-9.467c0.411-0.798,2.046-0.734,2.533-1.47c0.58-0.863-0.074-2.431,0.439-3.156
	   c2.169-3.084,6.678-5.588,9.888-7.607c1.667-1.05,3.027-2.636,4.729-3.602c1.983-1.135,5.125-0.709,6.544-2.68
	   c0.375-0.521,0.562-1.233,0.635-2.045c0.169-1.839-0.246-4.119-0.342-5.46c-0.268-0.161-0.759-0.396-0.878-0.479
	   c3.115-0.268,4.74-0.396,6.476,1.875c1.753,2.308,0.88,3.845,3.521,5.454c1.875,1.145,5.313,1.211,7.472,2.144
	   c2.949,1.271,4.229,1.025,7.396-0.846c2.836-1.678,3.826-3.018,7.197-3.104c3.119-0.082,6.604,0.604,9.677-0.011
	   c2.691-0.54,5.726-1.019,8.24-2.123c2.46-1.081,4.425-3.675,7.409-2.935c0.354,5.627,0.392,11.726-0.012,17.341
	   c-0.275,0.063-0.562,0.109-0.83,0.171c-0.146,2.479-2.646,2.313-3.533,4.313c4.338,0.206,6.919,2.87,10.952,3.104
	   c5.169,0.293,5.104-5.025,9.997-6.53c3.064-0.94,8.646,0.771,11.104,1.928c2.063,0.974,1.926,1.994,4.896,2.104
	   c1.813,0.065,3.378-0.144,4.601-1.438c3.146,1.12,1.554,3.625-0.048,5.334c2.469,0.562,4.031,1.314,6.859,1.019
	   c1.271-2.632-0.098-7.146,4.514-6.981c0.646-3.423-2.178-5.272-1.838-8.342c4.817-1.84-1.48-10.938-2.551-13.515
	   c2.938-0.22,8.646-2.61,8.531,1.854c3.184,0.197,8.188-0.828,10.932,1.063c1.234,0.854,6.271,7.607,6.07,8.941
	   c0.688,0.021,1.688-0.153,2.354-0.521c1.134-6.782,11.604-1.215,10.646,4.515c1.389-0.12,2.521,0.408,3.854,0.66
	   c1.952,8.146,8.165,2.066,11.875,7.479c1.792,2.604-0.443,5.324,0.53,8.024c0.762,2.105,4.894,5.229,4.84,1.104
	   c0.292-0.07,2.701-0.198,2.744-0.292c0.604-1.271,1.143-2.51,1.672-3.829c4.427-0.313,3.624,5.194,4.879,7.438
	   c0.879,1.563,4.974,2.136,6.546,2.979c0.521,0.274,1.926,1.611,2.488,2.012c1.218,0.854,2.975,0.523,3.925,2.5
	   c1.229,2.563-0.312,5.563,0.793,8.063C1079.739,995.736,1083.304,997.521,1084.433,1001.089z"/>
 <path id="gujarat_1_" class="imap" title="Gujarat" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M335.82,827.011
	   c1.337-2.244,4.217-0.849,7.049-0.669c0.136,2.286-1.042,4.479-0.566,6.566c1.606,0.104,3.271-0.296,4.583,0.799
	   c-2.997,1.894-6.418,2.321-6.979,6.917c-0.479,3.807,1.382,7.284,5.642,7.05c-0.425,1.636-0.979,4.279,1.043,4.966
	   c3.216,1.088,4.093-6.392,7.271-3.582c1.266,1.12,2.054,1.917,2.396,3.563c0.983,4.625-2.73,6.179-4.999,9.341
	   c-0.89,1.247-2.345,2.578-1.432,4.406c0.936,1.875,2.609,1.158,4.104,1.908c3.503,1.755,0.722,5.231,3.229,7.887
	   c2.116-1.104,5.721-2.639,6.098,0.799c0.277,2.53-1.494,5.426-0.415,8.074c1.231,3.021,4.69,0.896,7.74,1.592
	   c2.094,0.472,1.612,0.489,2.919,2.315c1.07,1.486,1.566,2.729,3.692,2.397c0.038,0.188,0.069,0.369,0.104,0.563
	   c0.854,0.062,1.742,0.005,2.61,0.058c3.417,0.209,4.625-0.354,6.074,2.926c0.927,2.104,0.35,1.542-0.094,3.131
	   c-0.396,1.443-0.773,2.646,0.688,3.283c2.271,1.004,5.723-2.515,7.354,1.319c0.831,1.958-0.056,6.17-0.021,8.341
	   c0.043,3.599,0.91,5.977,4.667,6c2.128,0.014,2.565-0.363,3.332,1.334c0.313,0.708,0.178,3.229,0,3.998
	   c-0.576,2.477-3.161,5.419-5.023,7.334c-1.438,1.489-0.979,1.63-3.646,1.667c-1.313,0.018-2.646-0.036-3.938,0.058
	   c-0.758,2.14-1.929,4.497-4.058,5.525c-2.301,1.109-4.612-0.335-6.95,0.134c-1.465,8.371,12.427,1.439,11.566,10.232
	   c-3.228,0.202-7.232-0.603-9.956,0.719c-0.497,0.238-2.521,1.617-3.063,2.25c-1.75,2.041,0.239,2.295,1.666,4.154
	   c1.021,1.313,1.409,2.896,1.979,4.334c0.229,0.567,1.146,1.646,1.106,2.25c-0.061,0.938-1.229,0.972-1.371,1.396
	   c-2.644,8.204,3.56,10.271,8.908,14.369c3.388,2.588,6.646,5.626,7.857,9.827c1.01,3.486,1.063,7.086,2.349,10.535
	   c2.239,6.002,5.296,11.646,7.382,17.729c3.125,9.113,9.621,18.798,8.155,28.896c-1.979,13.67-12.896,15.604-24.062,21.021
	   c-12.854,6.229-25.767,12.574-39.69,16.021c-8.882,2.188-17.965,3.646-26.983,3.751c-15.242,0.164-28.959-6.368-44.298-6.564
	   c-19.778-0.253-37.192-4.728-56.49-9.126c-19.535-4.452-41.109-7.017-59.706-14.646c-15.475-6.354-24.039-21.638-34.357-33.993
	   c-7.233-8.664-15.743-16.451-19.38-27.33c-3.96-11.85-6.431-24.854-9.343-37.018c-3.439-14.354-6.308-28.979-10.292-43.188
	   c-3.704-13.208-8.867-25.74-11.063-39.347c-1.897-11.771-7.448-24.048-2.748-35.867c9.213-23.167,34.417-31.847,56.196-37.888
	   c15.299-4.243,35.259-6.308,50.985-2.155c13.876,3.653,23.464,10.554,38.333,10.742c4.968,0.063,10.201,2.727,14.867-0.159
	   c2.166-1.339,4.821-2.305,7.729-2.331c0.751-0.008,3.386-0.416,3.932,0.063c0.896,0.802,0.145,2.229,0.394,3.271
	   c0.697,2.904,2.681,3.479,5.292,2.616c0.032-0.947,0.066-1.952,0.1-2.899c2.417,0.042,4.779-0.74,7.275-0.717
	   c2.978,0.027,3.433,1.969,6.674,2c2.452,0.021,5.743-1.167,7.609,0.667c1.352,1.329,1.313,5.852,4.341,4.949
	   c-0.103-1.608,0.98-4.77,3.001-4.232c0.101,1.278,1.03,2.107,2.325,1.896c0.573-2.769,4.373-4.809,7.008-4.563
	   c0.175,2.479-0.167,4.396,2.311,5.707c2.142,1.138,5.326-0.446,7.424,0.563c1.919,0.921,0.577,1.563,1.317,3.016
	   c0.575,1.128,0.888,1.681,2.072,2.593c2.613,2.021,2.759,2.354,2.976,5.707c2.5-0.832,2.664-2.715,4.009-4.575
	   c2.062-0.585,2.438,1.548,3.607,2.617c1.08,0.986,2.509,1.715,3.952,2.042c0.106,1.729,0.071,3.301,0.432,4.918
	   c3.188,0.133,10.229-1.595,11.009,2.314c3.146,0.979,3.24-3.05,3.608-4.949C335.385,827.947,335.577,827.418,335.82,827.011z"/>
 <path id="maharashtra_1_" class="imap" title="Maharashtra" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M309.954,1060.174
	   c2.584-0.466,5.758-0.088,7.125,2.434c0.795,1.477,1.771,4.604,3.847,4.68c1.077,0.022,2.49-1.104,3.463-1.532
	   c1.229-0.538,2.457-0.97,3.813-0.918c1.007,0.038,1.991,0.438,2.988,0.014c0.384-0.165,1.589-1.839,1.458-1.831
	   c1.271-0.076,2.604-0.021,3.892-0.102c0.155-2.45-0.304-4.854,0.765-6.958c0.358-0.707,1.146-0.521,1.618-1.587
	   c0.316-0.7,0.271-1.322,0.333-2.071c0.091-1.113-0.308-2.593,0.001-3.666c0.646-2.238,1.875-2.492,1.667-5.667
	   c-0.124-1.896-0.06-5.104-2.534-5.317c0.608-1.239,1.278-2.575,1.603-3.964c2.628-0.333,2.248,1.537,3.565,2.948
	   c1.812,1.914,3.901,1.219,6.316,1.384c0.08,1.28,0.021,2.618,0.101,3.898c2.194-0.188,2.625,0.65,3.958,2.099
	   c0.761-2.954,4.427-1.521,6.313-2.587c0.764-0.438,1.53-1.46,1.557-2.34c0.019-0.368-2.353-3.313-1.146-3.729
	   c2-0.7,4.273-0.306,6.229-1.106c0.313-3.268-0.139-8.951-1.754-11.615c-1.146-1.896-2.619-2.576-4.146-3.859
	   c-1.189-0.998-2.188-2.955-3.701-3.474c-1.451-0.498-3.064-0.011-4.479-0.404c-0.604-0.171-1.271,0.273-1.771-0.292
	   c-0.152-0.174-0.604-1.896-0.372-1.913c2.188-0.146,5.104,0.521,7.214-0.112c0.438-0.136,1.533-1.241,2.142-1.521
	   c0.927-0.437,2.192-0.05,2.949-0.993c1.545-1.928-0.68-4.022,1.979-5.665c2.047-1.26,5.274-0.884,7.607-1.475
	   c0.033-0.943,0.068-1.946,0.104-2.896c1.962-0.133,3.453,0.338,4.967-1.031c1.974-1.789,0.729-2.749,4.313-2.278
	   c2.032,0.266,3.27,0.68,5.378-0.041c1.298-0.439,1.822-1.155,3.517-1.003c-2.896-2.484-5.183-4.389-8.977-4.354
	   c-2.43,0.021-5.499-0.611-7.53,0.75c-1.354,0.901-3.083,3.899-5.742,2.286c-1.813-1.104-0.934-5.649-3.591-5.425
	   c-0.249-1.495,1.457-3.913,2.559-4.339c0.104-1.373,0.104-2.851-0.001-4.224c-1.682-0.563-4.007-0.473-3.226-3.009
	   c1.394-0.097,3.646,0.438,4.959-0.045c1.545-0.563,1.595-2.284,2.893-3.35c1.518-1.231,2.979-0.688,4.771-0.979
	   c1.516-0.243,2.604-1.521,3.918-1.77c2.73-0.504,6.396,3.517,9.684,1.696c1.576-0.869,1.813-4.442,4.426-4.313
	   c1.693,0.084,2.066,1.784,3.022,2.854c0.09,0.101,3.316,2.771,3.159,1.894c0.563,3.082-0.163,5.979,1.22,8.949
	   c1.229,2.646,2.646,5.752,5.583,6.333c3.554,0.702,6.133-1.136,9.32-1.354c2.656-0.183,6.65,0.317,8.999,1.272
	   c2.831,1.153,2.901,3.19,4.242,5.813c0.86,1.688,2.982,5.692,4.729,6.521c1.479,0.701,3.749-0.266,5.354,0.068
	   c1.316,0.271,2.111,0.896,3.666,0.999c1.729,0.104,2.845-0.771,4.335-1.025c2.348-0.396,3.694,0.688,5.595,1.356
	   c3.021,1.084,6.154-0.271,9.183-0.604c2.892-0.313,5.899-0.334,8.812-0.333c0.983,0,2.062-0.279,2.952,0.271
	   c0.495,0.304,1.36,2.229,1.521,2.271c3.64,0.968,6.356,0.485,6.604,4.729c0.146,2.604,1.435,6.396,0.604,8.604
	   c-0.188,0.039-0.374,0.077-0.561,0.113c0.146,3.285,7.313,1.938,9.604,1.938c1.123,0,4.492,0.595,5.347,0.021
	   c1.313-0.878,0.388-2.896,0.381-4.308c1.771-0.111,4.253,0.448,5.938-0.062c1.697-0.506,2.363-2.472,4.284-2.382
	   c0.708-2.622-0.488-3.346-2.832-3.924c1.19-2.007,2.489-4.743,5.166-4.741c0.271-2.394,2.157-1.837,3.381-2.939
	   c1.313-1.186,1.247-3.23,0.712-5.278c2.321-0.25,3.271-1.239,3.017-3.677c1.733-0.144,3.024,0.044,4.633-0.739
	   c1.134-0.563,1.955-1.522,3.313-2.048c2.063-0.797,8.303-2.101,8.066,1.3c1.073-1.099,3.638-0.504,5.208-0.617
	   c1.578-2.87,1.364-4.349,4.758-5.063c2.318-0.484,5.759-1.021,7.747,0.646c3.021,2.521,4.247,8.254,6.86,11.396
	   c-1.083,0.271-2.146,0.975-2.646,1.803c-0.138-0.538-0.697-1.438-0.646-2.271c-1.625,1.271-4.917,0.152-6.982,0.272
	   c0.855,2.28,1.93,8.551,4.582,8.898c-0.164-1.723-0.071-2.89,1.717-3.298c2.288-0.521,1.563,0.813,2.667,1.675
	   c1.89,1.475,0.869,0.848,3.333,0.677c1.565-0.107,2.479,0.568,3.729,0.673c3.82,0.29,8.685-0.521,11.624-1.997
	   c2.563-1.31,4.467-1.604,7.594-1.702c0.412-3.136,2.834-6.729,6.417-5.989c1.93,0.396,4.021,2.646,6.057,1.372
	   c1.438-0.902,0.905-3.49,3.199-2.975c0.104,1.679-0.598,4.973,0.801,6.218c1.479,1.312,3.201-0.729,3.979-2.209
	   c2.143-0.533,4.479,1.816,6.051,3.021c1.854,1.433,2.472,1.813,4.896,1.924c3.896,0.188,7.438-1.521,11.277-1.389
	   c0.143-2.313-0.439-4.29-0.245-6.563c3.119-0.211,6.783,1.521,10.177,1.639c-0.323-0.65,0.004-1.307-0.159-1.976
	   c0.969-0.323,2.146-0.534,3.229-0.438c0.355-1.229,0.251-3.854,1.781-4.55c2.716-1.229,3.146,2.253,4.251,3.366
	   c2.321,2.349,6.288-0.172,8.354,2.146c1.851,2.07-0.524,3.104,2.646,3.75c2.289,0.475,5.348-0.854,7.674-1.004
	   c1.565-0.102,2.813-0.455,4.391-0.104c2.069,0.459,4.067,2.229,6.021,2.707c2.636,0.64,9.947,0.382,12.258-0.575
	   c1.493-0.619,2.652-3.702,4.429-3.723c1.468-0.019,0.757,1.218,1.896,1.646c0.805,0.31,2.142,0.077,2.979,0.104
	   c0.646,1.946,1.819,0.514,2.978,1.271c0.937,0.622,0.468,0.472,1.132,1.346c0.824,1.086,0.868,2.396,1.993,3.572
	   c1.383,1.448,2.1,2.832,3.252,4.188c1.966,2.305,5.576,2.188,8.351,2.567c2.288,0.317,3.091,0.162,3.679,2.666
	   c0.438,1.896-0.125,3.315-1.347,4.414c-1.337,1.203-2.955,0.87-4.313,1.604c-1.276,0.683-1.842,2.718-3.638,2.271
	   c0.305-2.051-1.375-2.247-2.998-1.896c0.14,1.481,0.797,2.771,0.94,4.276c0.167,1.654-0.188,3.373,0.074,5.021
	   c0.761,4.619,3.774,2.229,5.854,5.028c4.227,5.694-2.813,12.405-2.546,17.563c1.646,0.409,3.416-1.429,5.563-1.229
	   c0.124,2.893-0.813,5.616-0.603,8.555c0.198,2.734,0.308,4.484-1.424,6.829c-0.63,0.853-6.628,3.313-6.878,1.952
	   c0.334,1.813-1.495,2.082-2.07,3.636c-0.425,1.128-0.009,3.416,0.068,4.604c1.032-0.041,1.938-0.479,2.604-1.259
	   c0.837,0.521,2.984,1.368,3.675,2.033c1.326,1.279,1.008,2.37,1.01,4.269c0,1.517,0.438,3.601-0.587,4.654
	   c-1.093,1.137-3.07,0.614-4.691,0.729c-0.456,2.457,1.746,3.063,1.195,4.857c-0.534,1.771-2.98,1.688-1.517,4.396
	   c2.313-1.008,3.71-3.993,6.938-2.332c2.396,1.229,1.477,4.638,4.271,5.418c0.146,1.479,0.199,3.175,0.74,4.604
	   c0.859,2.29,1.084,1.424,3.613,1.391c0.063,0.893,0.438,1.659,0.416,2.563c2.512,0.157,5.938,0.048,7.62,1.969
	   c2.521,2.864-2.136,3.6-1.288,6.356c0.604,0.063,1.294,0.637,1.663,0.717c-0.979,0.854-2.227,1.438-2.1,2.951
	   c-0.725,0.662-0.521,0.415-1,1.333c-1.146,0.881-2.182,0.896-3.009,1.999c-1.659,0.246-4.891-0.199-6.609-0.608
	   c-2.281-0.543-3.59-4.826-5.35-4.681c-0.275,0.021-1.646,1.765-1.983,2.088c-0.908,0.876-1.868,1.354-2.658,2.167
	   c-1.581,1.635-2.468,3.521-5.291,3.146c-0.095,0.283-0.063,0.604-0.101,0.896c-1.958,0.513-1.396,2.136-1.618,3.724
	   c-0.109,0.813,0.146,1.604-0.334,2.354c-0.441,0.688-1.331,0.354-1.672,0.886c-1.28,1.987-1.177,7.144,0.688,9.03
	   c1.107,1.13,2.388,0.854,2.997,2.396c0.666,1.683-0.141,2.885-1.345,3.599c-2.521,1.485-6.213,0.024-5.271,4.686
	   c0.812,0.33,1.716,0.891,2.268,1.396c-2.146,1.31-4.813,1.541-6.99,2.666c-2.576,1.332-4.947,2.936-7.319,4.763
	   c-2.953,2.271-6.02,2.743-9.347,3.642c-2.137,0.575-5.203,0.981-7.103,2.021c-1.824,1.002-3.563,3.105-5.137,4.484
	   c-4.02,3.521-7.945,7.118-11.825,10.782c-28.953,27.354-54.709,58.057-85.529,83.418c-24.562,20.214-50.797,45.381-79.938,59.063
	   c-27.412,12.869-66.7,15.688-96.188,21.101c-39.249,7.196-81.628,12.938-109.942-21.81c-23.546-28.896-22.706-70.104-19.827-105.195
	   c2.272-27.702,4.357-57.438,12.66-84.133c5.708-18.357,15.893-34.487,16.347-54.151c0.086-3.724-1.117-9.996,0.703-13.385
	   c1.745-3.249,7.5-3.988,10.79-4.271c2.79-0.229,5.461,1.431,7.934,0.944C306.749,1061.513,308.095,1060.508,309.954,1060.174z"/>
 <path id="Goa_1_" class="imap" title="Goa" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M351.586,1356.247
	   c6.222,10.249,10.829,23.593,25.273,12.493c8.1-6.229,11.438-17.657,12.558-27.366c0.477-4.141,1.412-10.191,0.328-14.275
	   c-1.247-4.688-8.253-7.479-11.899-10.063c-2.396-1.702-3.913-3.135-6.68-3.336c-1.93-0.146-3.993-0.075-5.926,0
	   c-3.486,0.136-4.88,2.766-8.646,1.584c-0.59-0.188-8.337-2.761-8.178-2.327c-1.838-4.968-7.45-3.876-11.686-3.871
	   c-6.761,0.009-8.563-0.244-8.898,6.782c-0.238,4.915-0.654,11.326,2.357,15.489c3.347,4.632,8.925,7.012,12.479,11.398
	   C345.834,1346.662,348.941,1351.889,351.586,1356.247z"/>
 <path id="Andhra_Pradesh_1_" class="imap" title="Andhra Pradesh" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M928.586,1192.357
	   c7.523-11.582,15.247-23.271,20.835-35.942c1.854-4.208,8.695-14.703,5.002-18.429c-3.955-3.989-11.528-2.563-16.503-2.36
	   c-1.878,0.076-5.212,0.591-7,0c-2.868-0.947-0.902-2.576-1.385-5.283c-2.624-0.145-3.555,0.313-5.563,1.684
	   c-0.275,1.271,0.688,1.968,1.896,1.981c0.679,2.832-1.859,2.062-3.376,2.042c-2.244-0.013-3.033,0.024-4.908,1.909
	   c-0.902,0.907-0.917,1.521-2.001,2.007c-0.701,0.318-2.122-0.521-2.621,0.311c-0.133,0.221,2.208,3.807,2.604,4.293
	   c-4.146,0.268-3.242,4.344-6.939,4.791c0.126,0.534-0.218,1.354-0.094,1.892c-2.541,0.161-6.896,0.817-9.282-0.021
	   c-1.546-0.547-2.354-1.729-4-2.248c-1.51-0.479-3.063-0.346-4.667-0.346c-1.103,0-3.353,0.445-4.341,0.008
	   c-1.839-0.813-1.107-2.414-1.651-4.017c-0.854-2.543-3.038-4.354-4.063-6.938c-1.033-0.229-1.742,0.201-2,1.224
	   c-2.905,0.752-5.437-5.229-5.333-7.56c-0.402-0.354-1.061-0.646-1.563-0.682c-0.11,1.91,0.323,8.963-3.382,5.915
	   c-0.5,0.623-0.938,1.673-1.25,2.353c-0.688-1.395-0.95-3.054-2.092-3.938c-0.776,1.866-1.512,5.482-1.375,7.604
	   c-2.598-1.425-2.688-5.033-6.283-2.979c-4.806,2.746,1.988,2.958,2.396,5.289c0.387,0.007,0.854,0.13,1.234,0.1
	   c-0.68,0.06-3.75,4.797-5.061,5.443c-1.771,0.876-4.957,1.574-6.904,1.841c-1.354,0.188-2.478-0.657-3.948-0.282
	   c-0.268,0.067,0.054,4.498-0.396,5.022c-0.646,0.736-2.68,0.368-3.521,1.308c-0.732,0.825-1.186,2.771-0.813,3.818
	   c0.561,1.589,2.688,1.438,3.079,3.418c1.369-0.037,1.594,1.141,1.227,2.332c-2.586-0.479-2.959,1.673-2.896,3.668
	   c1.223,0.258,1.012,0.229,1.229,1.334c-3.354-0.297-4.208,4.039-7.216,2.979c-1.531-0.535-2.085-2.732-3.151-3.59
	   c-1.354-1.08-2.267-1.063-4.188-0.96c-0.081,1.28-0.021,2.618-0.104,3.897c-3.619-0.313-3.746,2.063-5.688,3.978
	   c-1.904,1.872-4.313,3.712-5.212-0.188c1.1-0.688,4.169-2.945,1.678-3.791c-0.329-0.938-0.13-2.203-0.625-3.041
	   c-0.35-0.577-1.16,0.099-1.529-0.478c-0.331-0.508-0.37-1.146-0.647-1.692c-0.938-1.832-2.392-3.319-4.414-3.852
	   c-1.896,3.021-2.771,4.396-6.37,5.249c-0.146,2.188,1.032,4.261,0.921,6.481c0.305,0.063,0.603,0.063,0.898,0.098
	   c0.422,1.938-1.419,1.452-2.196,2.693c-0.77,1.213-0.455,3.146-0.368,4.541c0.829,0.012,1.361,0.48,2.229,0.435
	   c0.168,0.567,0.17,1.665,0,2.233c-1.935-0.063-1.229,2.274-1.334,3.664c-2.314,0.354-2.11-0.773-3.267,1.053
	   c-0.979,1.563-0.095,3.843-2.688,3.688c-2.177-0.135-2.078-2.89-2.99-3.695c-0.959-0.857-3.25-0.914-4.676-1.014
	   c-4.535-0.307-4.209,4.359-8.334,5.021c-4.479,0.708-6.018-1.021-6.39,4.284c-1.412,0.354-2.422,1.104-3.944,1.381
	   c-1.364,0.246-3.035-0.396-4.354,0.059c-1.2,0.414-1.147,1.285-2.646,1.609c-1.311,0.281-2.992,0-4.332,0
	   c-2.854,0.001-5.188,0.646-8,0.667c-1.308,0.01-2.758,0.726-3.658,0.673c-1.927-0.113-2.194-1.274-3.938-1.688
	   c-2.856-0.687-5.161,2.563-7.663,3.105c-3.646,0.813-3.07-2.148-3.07-5.098c0-2.901,0.256-5.688-1.009-7.657
	   c-0.647-1.015-1.854-1.631-2.021-3.002c-0.114-0.95,1.5-3.455,0.715-4.364c-0.021-0.087-0.052-0.174-0.069-0.26
	   c-1.646-0.271-2.07,1.489-3.896,0.896c-0.172-1.168-0.511-2.355-0.438-3.563c-0.691-0.042-1.581-0.188-2.281-0.051
	   c-1.624,0.322-0.867,0.841-1.656,1.341c-1.11,0.704-1.745,1.479-3.616,0.604c-0.854-2.52,2.414-3.37,0.948-6.346
	   c-0.806-1.631-1.313-2.104-1.676-3.935c-0.313-1.57-0.308-1.907-1.083-3.252c-2.077-3.578-4.394-7.362-7.461-10.188
	   c-0.967-0.885-3.354-3.229-4.72-3.021c-0.268,0.041-1.104,1.563-1.651,1.813c-0.88,0.396-2.821,0.209-3.744-0.021
	   c-2.652-0.682-3.021-3.979-5.736-5.021c-0.896-0.347-2.313,0.192-3.271,0.029c-3.291-0.558-6.883-1.212-9.561-3.238
	   c-1.225-0.926-5.712-4.392-1.827-4.826c0.19-2.646-0.384-4.076-1.188-6.353c-0.428-1.194-0.308-2.399-1.074-3.271
	   c-0.649-0.729-2.146-0.652-2.674-1.318c-1.8-2.268,0.339-4.475,1.896-6.104c2.321-2.435,1.041-6.769,2.015-9.896
	   c0.571-1.854,1.229-2.865,1.092-4.991c-0.146-2.203-1.628-2.547-1.697-4.284c-3.007-0.271-7.233-3.836-8.637-5.725
	   c-1.546-2.091-1.438-1.212-3.896-0.668c-2.065,0.457-3.823-0.704-5.718-0.612c-0.433,1.407-0.868,3.456-2.679,3.229
	   c0.122-0.939-0.805-2.771-2.07-1.896c-0.938,0.646,0.188,2.396-0.365,3.208c-1.919,2.833-4.993-0.934-4.656-3.208
	   c-0.656,0.128-1.577-0.229-2.231-0.104c0.122-0.531-0.225-1.375-0.084-1.916c-1.087-0.069-3.9,0.146-4.801-0.437
	   c-0.404-0.262-1.447-2.262-1.283-2.216c-0.463-0.13-0.974-0.13-1.436,0.001c-0.214,1.438-0.063,3.063-0.176,4.559
	   c-1.888,0.729-0.814,3.06,0.354,3.99c-3.35,1.042-4.393-3.287-7.178-2.883c-0.021,0.262-0.124,0.604-0.163,0.9
	   c-1.606-0.267-2.904-0.734-4.626-0.554c-1.438,0.159-2.734,0.854-4.282,0.543c-0.096-1.604-0.304-3.216,0.604-4.614
	   c0.951-1.479,2.971-0.837,2.31-3.275c-2.288-0.438-4.851,0.383-7.239,0.229c-0.164-2.604,0.063-5.291-0.103-7.896
	   c-1.74-0.111-3.525-0.025-5.284-0.058c-1.95-0.021-2.954-0.799-4.591-1.101c-2.867-0.524-5.828,1.285-8.688,0.715
	   c0.443-2.448-6.847-4.688-8.394-6.475c-0.4,0.947-1.27,1.688-2.292,1.938c0.479,2.591,5.247,4.267,2.563,7.828
	   c-1.151,1.541-2.919,0.163-2.956,2.766c-0.018,0.813,1.283,0.844,1.387,1.646c0.104,0.874-0.354,1.457-0.438,2.271
	   c-0.172,1.498-0.002,2.937,0.092,4.396c0.154,2.495-0.063,2.697-1.625,4.357c-1.817,1.938-2.681,2.568-5.381,2.646
	   c-1.625,0.046-3.063,0.153-4.616,0.385c0,1.75,1.843,1.522,2.887,2.7c0.944,1.067,0.975,2.575,2.027,3.511
	   c-0.191,0.193-0.845,0.862-1.021,1.021c-2.363,0.218-5.702-0.513-7.074,2.002c1.354-3.146-3.071-3.884-2.682-6.862
	   c-1.18-0.229-2.313-0.015-3.473,0.308c0.984,3.729-2.573,3.104-3.052,6.614c-0.188,1.451,0.493,3.438-0.325,4.674
	   c-0.854,1.3-2.916,1.138-3.938,2.425c-1.688,2.114,0.079,1.925,0.938,3.31c0.354,0.563,0.396,1.854,0.729,2.259
	   c1.388,1.668,3.256,1.604,3.052,4.243c0.217,0.025,2.501,0.183,2.499,0.15c0.271,4.23-2.354,3.021-5.063,5.559
	   c-1.768,1.646-3.003,3.863-4.084,5.989c-0.521,1.029-1.194,1.896-1.479,3.063c-0.172,0.729,0.431,2.424,0.028,3.01
	   c-1.042,1.522-5.389-0.438-7.08,0.31c0.572,1.745-0.506,2.704-2.241,2.424c0.563,1.089,0.621,2.5-0.646,2.989
	   c-0.291,2.609,0.813,2.313,1.521,4.011c0.691,1.658,0.896,3.921-1.529,3.989c0.161,2.199,0.693,4.193,0.563,6.563
	   c-3.705-0.409-3.203,2.446-3.027,4.619c0.271,3.288,0.145,6.895-0.836,10.065c-3.81,12.428-13.854,17.146-23.053,25.729
	   c-8.74,8.162-16.439,18.314-25.979,25.489c-2.898,2.188-5.75,3.304-8.028,6.294c-3.037,3.979-2.854,9.11-5.646,13.079
	   c-3.921,5.563-9.463,9.882-13.021,15.689c-4.379,7.152-3.859,13.765-3.749,21.82c0.184,12.9,0.514,25.813-0.085,38.709
	   c-1.536,33.26-1.284,45.741,19.749,72.928c20.104,25.979,43.142,49.877,60.938,77.604c10.354,16.124,17.063,36.563,33.188,48.077
	   c19.284,13.769,45.839,12.968,67.12,4.685c17.938-6.979,29.587-20.063,44.587-31.146c11.291-8.339,23.811-13.408,33.945-23.533
	   c34.089-34.021,43.896-83.265,58.696-127.161c17.354-51.459,59.424-77.938,93.849-115.968
	   C897.068,1226.28,914.798,1213.589,928.586,1192.357z"/>
 <path id="Karnataka_1_" class="imap" title="Karnataka" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M519.487,1312.8
	   c0.144-0.502,0.313-0.979,0.521-1.419c2.879-6.263,8.855-4.001,14.051-4.007c3.784-0.005,7.479,1.418,11.155,1.212
	   c0.229-3.536-0.38-7.137-0.212-10.755c0.127-2.729-0.275-7.948,1.292-10.163c3.072-0.229,5.313,0.271,5.17-3.506
	   c-0.876-0.059-1.794-0.018-2.67-0.076c-0.725-2.021-5.59-1.664-7.474-1.919c-3.774-0.512-6.529-2.582-10.281-2.831
	   c-0.961-4.923,5.967-2.517,8.67-3.554c0.436-1.313,1.826-4.063,3.505-3.945c0.23-0.911,0.063-2.104,0.994-2.506
	   c0.349-1.498-0.471-2.43-1.932-2.501c0.813-2.04-0.904-4.096-0.438-6.168c0.949-0.061,1.936-0.013,2.869-0.076
	   c0.545-3.042-2.854-4.248-1.019-7.229c0.628-1.021,1.188-1.354,1.542-2.482c0.354-1.146,0.251-2.285,0.264-3.506
	   c0.013-1.287,1.637-5.453,0.712-6.512c-0.479-0.551-2.266-0.231-2.957-0.471c-0.726-0.251-2.67-1.313-2.715-2.104
	   c-0.076-1.345,2.209-1.601,2.417-2.455c0.196-0.805,0.933-1.098,1.749-1.002c0.153-1.313,1.489-2.974,2.225-4.213
	   c0.896-1.505,2.193-2.354,3.134-3.993c1.271-2.226,2.682-1.229,4.5-2.729c0.92-0.753,0.972-1.444,2.188-1.771
	   c0.797-0.207,1.891,0.021,2.711-0.038c0.938-3.349-5.736-3.214-7.657-3.214c-1.469,0-3.334,0.313-4.561-0.368
	   c-0.813-0.439-0.526-0.946-1.495-1.39c-0.557-0.249-1.584-0.264-2.212-0.279c-0.542-2.854,1.782-2.941,3.925-3
	   c0.07-1.043-0.134-2.284,0.281-3.191c0.768-1.689,1.44-1.188,3.224-1.309c0.079-1.461-0.021-2.968,0.07-4.424
	   c2.422,0.445,3.21-1.75,4.517-3.046c1.61-1.594,2.449-1.422,2.445-3.991c-0.003-2.104-0.807-3.34-1.307-5.25
	   c-0.618-2.359-0.604-2.938,2.019-3.038c0.081-1.274,0.08-2.645,0-3.927c-1.646-0.093-1.007-3.953-0.925-5.248
	   c0.493,0.104,1.182-0.175,1.675-0.076c0.116-0.354,0.116-1.063,0-1.424c-2.454-0.146-4.971,0.077-7.425-0.076
	   c0.126-1.516,0.003-1.896-1.288-2.477c-0.936-0.419-2.71,0.526-2.212-1.447c2.018,0.271,2.854-1.927,1.729-3.559
	   c-0.938-1.364-3.888-2.138-5.476-1.938c-0.947,1.233-2.416,2.354-2.836,4.16c-1.908,0.887-2.287,1.854-3.688,3.111
	   c-0.697,0.635-1.99,0.839-2.725,1.563c-0.479,0.479-0.715,0.521-1.063,1.123c-0.181,0.296,0.059,0.898-0.239,1.24
	   c-1.108,1.27-3.162,0.813-4.749,0.301c-3.174-1.021-6.807-0.799-7.938,3.125c1.267,0.246,1.854,0.813,2.229,1.979
	   c0.122,0.368,0.033,3.298-0.079,3.31c-0.795,0.063-1.629,0.021-2.425,0.073c-0.063,1.1,0.408,2.667,0.036,3.536
	   c0.05-0.115-1.542,1.289-1.372,1.185c-0.521,0.322-0.815,0.271-1.396,0.556c-2.644,1.299-4.138,1.438-6.763,0.146
	   c0.054-0.6-0.144-1.313-0.081-1.918c-0.229-0.011-0.445-0.01-0.676,0.002c-0.074,1.188-0.729,3.416-0.104,4.51
	   c0.813,1.421,3.544,1.354,1.659,3.438c-1.417,1.563-3.521,0.896-4.396,3.456c-0.318,0.936,0.212,2.646-1.438,2.271
	   c-0.745-0.168-1.799-2.377-2.043-2.924c-2.098,0.188-3.735-1.1-5.963-0.795c-2.122,0.286-2.456,1.125-3.252,2.75
	   c-0.443,0.901-1.48,1.727-1.76,2.508c-0.283,0.793,0.438,2.047-0.202,2.705c-0.982,1.006-3.125,0.021-3.979-0.207
	   c-0.793-0.214-1.386-0.563-2.518-0.462c-0.449,1.714,1.128,2.646,0.962,4.47c-0.11,1.224-0.904,1.927-0.999,2.994
	   c-0.195,2.194,0.684,5.696,2.96,6.291c0.037,1.336-1.275,2.147-1.438,3.439c-1.911-1.082-2.847-2.854-5.272-3.188
	   c-1.333-0.188-3.008,0.309-4.271-0.049c-1.176-0.326-1.271-0.948-2.271-1.563c-0.732-0.452-4.241-0.49-4.413-0.896
	   c0.146,0.346,0.033,1.076,0.167,1.418c-2.077,0.984-5.612,0.147-7.913,0.01c-0.411-0.943-1.259-1.188-1.872-2.104
	   c-0.455-0.683-0.466-1.427-0.907-2.11c-0.758-1.177-1.646-1.813-3.221-1.457c-0.629,1.163-2.376,0.642-3.542,0.402
	   c-1.615-0.32-1.566-0.312-2.428-1.501c-1.318-1.832-2.646-3.119-5.286-2.656c-0.092,1.459,0.095,2.942-0.025,4.396
	   c-0.084,1.021-0.491,1.521-0.667,2.146c-0.41,1.479-0.479,2.595,0.476,4.354c0.982,1.843,1.547,2.573,1.396,4.771
	   c-2.205,1.146-3.046,2.795-1.889,4.924c0.585,1.076,1.171,1.315,1.347,2.716c0.151,1.198-0.313,2.438-0.163,3.655
	   c0.117,0.979,0.838,1.952,0.271,2.817c-0.396,0.604-2.026,1.047-2.727,0.631c-0.859-0.521-0.48-1.952-1.288-2.521
	   c-0.624-0.438-2.008-0.182-2.725-0.143c-0.066,1.042-0.024,2.129-0.051,3.174c-4.95,0.313-11.96-1.754-16.698,0.082
	   c0.169,0.734,0.975,2.621,0.491,3.471c-0.565,0.988-3.186,1.361-4.28,1.236c-1.767-0.2-1.579-0.866-2.744-1.984
	   c-3.304-3.173-7.848-3.354-12.229-2.957c1.271,0.568,0.771,3.608,0.688,4.911c-0.604-0.063-1.313,0.121-1.925,0.067
	   c-0.146,2.34-0.563,4.811-2.782,5.72c-0.93,0.384-2.221,0.215-3.2,0.552c-1.392,0.479-4.082,1.021-4.593,2.405
	   c-1.37-0.104-3.29,0.563-4.206,1.6c-1.519,1.72-0.15,2.479,1.229,3.646c-2.234-0.021-4.227,1.169-6.69,1.013
	   c-0.135-2.021,0.062-3.585-2.221-4.218c-1.701-0.475-4.854-0.184-5.571,1.257c-0.295,0.584,0.245,1.998-0.282,2.521
	   c-0.563,0.557-1.729,0.107-2.469,0.229c-2.413,0.368-2.146,1.393-2.282,3.469c-2.279,0.527-2.723-2.057-4.925-1.925
	   c-0.146,2.617,0.733,3.421,2.523,4.906c1.304,1.081,3.324,2.912,1.94,4.563c-0.796,0.95-1.565-0.063-2.011,1.491
	   c-0.217,0.772,0.063,2.03,0.249,2.75c0.454,1.766,2.197,3.78,3.043,1.045c2.729-0.553,3.097,2.146,4.701,3.727
	   c1.384,1.354,1.729,1.139,1.756,3.229c0.003,0.304,0.007,0.604,0.01,0.907c0.019,0.938,0.02,1.884-0.047,2.807
	   c-2.668,0.168-4.793-0.063-7.175,1.082c-1.161,4.438,3.925,2.131,5.385,4.313c1.398,2.094-2.475,6.166-4.384,6.437
	   c-0.089,1.37,0.01,2.795-0.076,4.168c-2.252,0.138-3.592-1.25-5.674-0.927c0.026,0.146-0.005,0.504,0,0.67
	   c0.999,0.245,1.537,1.036,1.674,2.013c-2.104-0.396-2.964-0.939-5.031,0.216c-2.729,1.532-6.796,2.418-5.799,6.188
	   c1.167,0.074,2.831-0.277,3.951,0.053c1.641,0.481,1.396,0.861,2.576,2.082c1.179,1.219,5.188,4.94,2.049,6.252
	   c1.146,1.668-0.8,5.299-0.907,7.273c2.727,0.688,4.505,2.286,3.898,5.34c-1.818-0.15-0.958,1.049-1.909,1.479
	   c-1.003,0.459-2.245,0.584-3.323,0.616c-0.293,2.793,3.938,1.379,2.896,4.563c-0.188,0.037-0.368,0.073-0.563,0.109
	   c-0.137,1.921,0.438,4.771-0.374,6.364c-0.385,0.761-1.65,0.959-2.04,1.909c-0.271,0.708,0.032,2.171-0.021,2.946
	   c-1.992,0.452-2.964-1.619-4.875-1.938c0.199,0.563,0.037,1.646,0.208,2.271c-4.15,0.256-7.76-0.095-11.566,1.095
	   c-0.428,6.813,4.646,10.733,7.646,16.188c3.308,6.012,2.979,15.189,3.229,21.964c0.646,17.237,1.794,34.478,4.416,51.543
	   c2.155,14.025,5.128,28.063,7.4,42.012c14.729-4.354,26.456,18.965,35.672,27.846c21.248,20.479,46.666,40.743,75.701,47.969
	   c12.187,3.027,25.688,7.729,38.396,6.937c11.146-0.702,22.615-6.722,32.705-11.058c16.115-6.928,38.454-19.863,34.104-41.033
	   c-0.896-4.346-3.242-8.15-4.622-12.326c-1.52-4.592-0.982-9.145-0.854-13.881c0.104-3.604,0.265-6.998-0.336-10.57
	   c-0.771-4.693,1.604-4.891,5.61-5.146c0.104-0.353,0.104-0.845,0-1.188c-1.719,0.129-5.229-1.537-3.217-3.085
	   c2.005-1.541,4.43,0.745,5.479,2.185c0.729,0.988,2.063,3.371,3.483,1.618c1.281-1.572-0.854-5.39-0.715-7.24
	   c0.271-3.466,1.999-3.103,4.961-3.284c-0.15-1.229-0.583-3.941,1.251-3.998c0.181-1.577,0.245-2.688,0.536-4.219
	   c0.15-0.813,0.405-4.088-0.055-4.755c-1.094-1.583-7.809-0.646-9.91-0.779c0.125-1.065-0.844-2.094-1.035-3.214
	   c-0.163-0.938,0-2.052,0-3c0-2.011,0.146-4.104,0.257-5.979c0.229-3.932-1.638-2.938-4.757-2.771
	   c-1.537,0.075-4.69-0.574-4.78,1.716c-0.351,0.104-0.848,0.104-1.193-0.002c-0.06-1.688,0.75-3.313,0.438-4.93
	   c-1.159-0.188-1.66-1.003-2.971-1.042c-0.848-0.021-1.354,0.771-2.442,0.472c-1.9-1.773,0.108-1.972,1.663-1.99
	   c0.07-2.058,0.168-4.104,0.228-6.151c0.063-2.023,0.536-2.938-1.219-3.729c-1.521-0.688-5.927-0.674-5.508,1.873
	   c-0.555,0.112-1.373,0.112-1.925,0c-0.184-2.989,1.842-3.864,1.675-6.929c-0.555-0.112-1.373-0.112-1.925,0
	   c-0.063,0.798-0.021,1.632-0.075,2.429c-0.427,0.125-1.25,0.127-1.675,0c0.023-2.271-4.694-1.541-6.268-1.41
	   c1,0.812,0.763,2.199,0.688,3.41c-2.283,0.64-2.546,1.59-3.722,3.028c-1.371,1.688-2.978,1.418-4.955,1.543
	   c0.026,0.271-0.104,0.65-0.073,0.927c-2.972,0.188-5.958,0.016-8.927,0.073c-0.068,1.104,0.226,2.248-1.017,2.646
	   c-0.104-0.221-0.405-1.49-0.063-1.646c-2.009-0.063-2.063,0.104-2.521-1.786c-0.318-1.346-0.146-2.813-0.229-4.214
	   c-2.933-0.188-5.428-0.521-8.212-0.784c-3.209-0.308-3.438-4.271-6.963-3.466c-0.078,1.246-0.195,2.712-0.037,3.966
	   c0.106,0.873,1.032,3.02,0.269,3.712c-0.919,0.837-6.639,0.087-7.979-0.001c-0.338-1.761,0.433-4.021,1.006-5.674
	   c4.087-0.507,3.688-3.74,1.415-6.287c-1.271-1.422-3.128-0.938-3.463-2.756c-0.156-0.854,0.531-2.566,0.469-3.707
	   c-1.405-0.454-3.104-1.873-4.677-1.824c-0.041-0.801-0.041-1.625,0-2.426c3.859-0.078,6.552,1.743,8.146,5.271
	   c0.281,0.618,0.563,2.034,1.119,2.445c0.729,0.534,1.613,0.01,2.44,0.245c2.188,0.635,2.146,1.854,2.294,3.962
	   c1.237,0.387,2.086-0.188,2.257-1.418c3.527-0.771,6.75-0.141,8.645,3.223c1.021,1.813,1.298,3.897,3.979,2.359
	   c1.827-1.052,1.896-2.278,0.353-3.859c-1.104-1.139-2.303-0.491-3.267-1.303c-1.195-1.004-0.13-4.083,0.006-5.463
	   c0.25-2.582,1.328-2.764,3.743-2.75c1.8,0.006,4.654,0.438,3.97-2.216c-1.769-0.104-3.223-2.557-3.72-4.027
	   c-0.387-1.146-0.092-1.813-0.993-2.723c-0.394-0.396-1.47-0.341-1.949-0.771c-0.082,0.994-0.3,2.494-0.05,3.479
	   c0.182,0.718,1.328,2.096,0.961,2.759c-0.998,1.807-1.991-0.938-2.471-1.489c-0.9-1.041-1.067-0.994-2.705-1.054
	   c0.044-1.453-0.301-2.875-0.271-4.365c-0.25,0.156-0.438,0.095-0.726,0.188c-0.545,2.781-5.016,0.612-6.75,0.948
	   c-2.771,0.535-2.136,2.615-2.343,4.979c-1.048,0.066-2.12,0.063-3.156,0.002c-0.498-2.091-4.115-0.353-5.536-0.942
	   c-1.786-0.755-0.921-3.373-1.045-5.229c-2.063,0.409-2.082-1.293-2.426-2.752c0.216-0.066,0.447-0.052,0.671-0.067
	   c0.377-0.688,0.372-0.599,0.999-1.008c0.099-1.373,1.19-2.114,2.506-1.993c0.646-2.748-1.424-1.601-2.713-1.457
	   c-2.511,0.271-2.643-1.646-4.711-2.301c0.145-2.759-1.69-1.86-2.544-3.698c-0.661-1.434-0.516-3.745-0.258-5.268
	   c0.075-0.457,1.556-5.229,1.308-5.217c0.576-0.043,1.021-0.396,1.669-0.313c0.117-1.858,0.069-3.697,0.58-5.479
	   c0.514-1.788,0.335-3.146,0.42-5.193c-1.501-0.1-2.686,0.301-3.511-0.787c-0.771-1.013-0.491-2.722-0.414-3.963
	   c1.188-0.063,1.399-1.537,1.771-2.457c1.326,1.479,2.291,3.604,4.189,4.48c1.908,0.89,2.776-0.221,4.492-0.521
	   c0.791-0.146,2.491-0.303,3.264-0.061c0.696,0.227,1.107,1.14,1.78,1.39c2.011,0.745,3.928-1.423,4.713-3.123
	   c1.6-3.471,2.196-9.397,0.438-12.94c-0.808-1.608-0.214-0.986-1.938-1.56c-1.594-0.521-1.418-0.104-2-1.75
	   c-0.671-1.896-1.51-3.489-1.5-5.75c0.008-2.247,0.308-3.911,0.69-6c0.56-3.019,1.084-2.604,4.021-2.788
	   c0.172-1.229-0.332-2.253-0.486-3.418C518.921,1318.953,518.698,1315.544,519.487,1312.8z"/>
 <path id="Kerala_1_" class="imap" title="Kerala" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M400.647,1478.171
	   c0.229-0.042,0.469,0.001,0.68,0.188c0.521,0.451,0.174,2.576,0.214,3.229c1.651-0.711,3.603,1.749,1.75,2.582
	   c0.138,0.968,1.023,1.992,2.169,1.669c0.667-2.724,1.418-3.017,3.793-1.461c0.929,0.608,1.787,0.632,1.512,2.261
	   c-0.146,0.905-1.379,0.535-0.979,1.95c1.046,0.063,2.139,0.005,3.186,0.076c0.066,0.89,0.006,1.813,0.1,2.705
	   c0.271-0.63,2.738-2.938,3.4-2.96c0.078,1.229,0.245,2.881-0.188,3.971c2.177,0.5,2.307,1.861,3.268,3.708
	   c0.362,0.117,1.061,0.113,1.414-0.006c0.344-2.3,4.836-1.688,2.104,1.101c-0.709,0.729-1.969,1.163-1.813,2.449
	   c0.104,0.883,1.011,1.013,1.271,1.744c0.149,0.437-0.018,1.33-0.021,1.806c-0.021,2.029-0.313,3.045,1.998,3.442
	   c1.479,0.254,2.313-0.213,3.57,0.688c1.554,1.114,3.938,5.445,3.714,7.271c3.473-0.338,5.229,4.479,8.506,5.287
	   c1.531,0.376,3.842-0.742,4.979,0.688c0.738,0.939,0.193,3.234,0.972,4.321c1.354,1.918,4.777,2.988,7.014,3.229
	   c1.273,0.141,2.602-0.063,3.737-0.271c1.368-0.25,3.104-1.511,4.474-1.193c0.116,1.707-0.032,3.476,0.076,5.184
	   c1.362-0.354,3.396-0.445,4.694,0.084c1.764,0.72,1.756,3.813,2.727,3.911c0.027-0.146,0.057-0.279,0.084-0.419
	   c1.798-0.464,2.666,1.979,3.914,2.9c1.313,0.975,2.081,0.688,3.812,0.783c1.657,0.104,2.756,0.244,3.231,1.771
	   c0.593,1.857-0.084,2.216,1.506,3.688c3.187,2.945,6.569,5.813,10.48,7.743c3.677,1.813,7.646,1.393,10.929,3.688
	   c7.751,5.438,15.857,10.429,23.063,16.606c9.854,8.479,20.894,16.928,23.776,30.146c3.917,17.896,5.777,36.766,2.479,54.896
	   c-2.647,14.563-11.15,27.128-11.271,41.99c-0.1,12.556-6.301,24.207-13.286,34.438c-3.878,5.684-8.348,15.252-15.053,17.979
	   c-9.738,3.962-24.909-4.729-32.849-9.538c-25.104-15.196-35.8-46.559-46.602-72.186c-11.508-27.32-22.688-54.777-34.109-82.144
	   c-10.888-26.054-10.98-54.411-19.646-81.154c-1.589-4.908-4.646-9.184-6.435-14.012c-0.521-1.398-2.104-4.938-1.646-6.438
	   c0.579-1.896,3.698-2.052,5.153-3.015c4.248-2.813,9.799-3.979,14.987-4.229c2.145-0.099,4.953,0.597,7.006,0.021
	   C399.133,1479.197,399.931,1478.298,400.647,1478.171z"/>
 <path id="Tamil_Nadu_1_" class="imap" title="Tamil Nadu" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M727.723,1470.271
	   c5.104,14.029,11.271,28.979,7.395,44.176c-4.161,16.266-17.604,22.892-24.313,37.881c-5.688,12.716-11.122,25.211-17.151,37.87
	   c-6.854,14.393-14.606,28.229-21.301,42.479c-4.063,8.688-9.121,16.98-13.646,25.438c-3.188,5.934-8.063,10.369-10.411,16.764
	   c-3.204,8.716-1.375,19.301-6.257,27.417c-5.106,8.488-18.19,10.794-25.861,17.255c-14.247,11.999-27.911,27.529-44.104,37.637
	   c-8.104,5.063-20.467,5.021-29.64,4.873c-9.854-0.146-21.582-1.056-30.052-6.674c-3.127-2.065-5.696-4.979-6.177-8.831
	   c-0.329-2.625,0.346-5.877,1.826-8.074c0.813-1.216,1.843-1.979,3.146-2.646c0.663-0.338,5.65-1.396,5.69-1.59
	   c0.038-0.188,0.066-0.369,0.104-0.563c0.336,0.034,0.89-0.03,1.229-0.104c0.116-1.833-0.021-3.732,0.101-5.564
	   c0.362,0.041,0.871-0.143,1.233-0.103c0.086-1.183,0.021-2.407,0.104-3.59c5.021,1.999,3.318-2.363,2.563-5.64
	   c-0.188-0.033-0.369-0.071-0.563-0.109c-0.088-2.699-2.938-4.423-2.73-6.926c0.135-1.693,2.758-4.604,4.291-4.733
	   c0.722-1.779,0.56-3.979,0.31-5.832c-1.641-0.262-4.47-4.461-4.832-6.171c-0.632-2.994,0.674-1.021,2.564-2.591
	   c0.991-0.833,2.331-4.074,2.688-5.341c0.727-2.479-0.979-9.608,3.618-8.734c-0.129-1.635,0.356-2.809,0.96-4.281
	   c0.452-1.104,0.586-3.021,1.123-4.021c0.788-1.479,2.433-0.438,1.646-2.957c-0.617-1.979-2.234-2.082-2.073-4.563
	   c-1.896-0.771-2.583,0.841-3.34,2.159c-2.864,0.563-4.375-2.878-6.992-3.292c3.479-0.229,0.448-8.146,4.34-9.374
	   c-0.224-1.085-0.39-2.399-0.349-3.563c-0.188-0.034-0.369-0.073-0.563-0.108c-0.517-2.229,1.063-4.553,2.188-6.374
	   c0.63-1.021,1.937-0.456,1.442-2.569c-0.323-1.404-2.288-2.558-3.646-2.725c0.104-1.354-0.732-2.236-0.667-3.563
	   c3.444,0.283,3.334-2.5,3.366-5.301c0.01-0.832,0.137-0.813-0.067-1.97c-0.126-0.713-1.008-2.709-1.354-3.455
	   c-0.924-1.972,0.063-1.583-2.325-1.993c-1.283-0.222-2.87-0.021-3.992,0.323c-1.787,0.563-1.594,1.354-2.75,2.271
	   c-2.406,1.928-4.829,0.938-4.646,4.681c-0.561,0.354-1.229,0.476-1.891,0.342c-0.386-3.551-3.729-2.024-5.279-4.057
	   c-0.851-1.105-1.813-6.989-2.022-8.416c-0.407-2.652,0.903-5.063,1.222-7.416c0.295-2.188-0.619-4.979,1.646-6.451
	   c0.216-2.951,0.561-7.245-1.349-9.609c-1.188-1.479-3.596-1.646-5.27-2.659c-1.578-0.949-2.533-2.239-4.624-2.063
	   c0.591-1.854-0.196-4.365,0.684-6.223c0.806,0.063,1.765-0.188,2.563-0.104c0.076-3.932,1.293-8.9-3.543-9.873
	   c-3.458-0.691-8.883,0.263-12.646,0.259c0.279-0.021,0.568-0.025,0.854-0.051c0.229-1.438,2.054-2.771,2.712-3.949
	   c0.915-1.636,0.514-2.854,2.624-3.725c-0.004-2.35-2.729-1.761-3.947-2.66c-1.656-1.229-1.519-2.37-3.669-2.938
	   c-0.691-0.188-1.688-0.104-2.333-0.349c-0.788-0.291-1.516-1.217-1.892-1.354c-1.352-0.498-3.161-0.268-4.729-0.359
	   c-0.174-2.83-0.229-5.927,0.344-8.569c2.148,0.555,3.108,2.465,5.896,1.903c0.271-4.008,4.604-1.524,4.766-5.896
	   c1.354-0.089,5.186-0.771,6.323,0.028c0.781,0.549,1.232,5.215,1.004,5.196c1.395,0.099,2.679-1.085,4.3-1.278
	   c1.285-0.15,2.691,0,3.99,0c1.354,0,5.563,0.729,6.623,0.002c1.089-0.743,0.688-1.52,0.905-2.937
	   c0.404-2.688,1.063-4.84,3.441-6.432c1.521-1.013,5.438-1.938,7.362-1.313c1.786,0.573,2.344,3.742,4.271,3.29
	   c0.167-0.884,0.521-1.644,0.438-2.563c1.667-0.575,2.997-0.721,4.875-0.719c1.813,0.002,2.686,0.648,4.146,0.938
	   c1.548,0.3,2.809,0.183,4.251,0.646c1.651,0.535,2.783,1.646,4.625,1.363c0.096-2.688,0.604-6.132,2.378-8.031
	   c2.688-2.89,6.869-2.063,10.622-2.302c0.09-1.256-0.146-2.491,0.47-3.53c0.563-0.947,1.984-0.957,2.59-2.084
	   c0.652-1.222,0.802-6.519-0.06-7.666c-1.146-1.534-6.117-1.896-7.949-2c-2.688-0.141-5.04,0.377-6.967-1.76
	   c1.149-0.699,2.107-2.031,3.375-2.896c1.441-0.985,2.664-1.146,3.676-2.338c1.875-2.192,1.373-6.229,1.199-8.957
	   c-0.447,0.082-1.14-0.188-1.581-0.104c0.938-2.59,0.176-6.135,0.352-8.896c2.963-0.188,7.532,0.347,9.813-2.021
	   c0.979-1.022,1.896-8.951,2.199-8.979c2.553-0.16,5.438-1.252,7.185,0.354c2.24,2.063,2.146,4.386,5.019,1.521
	   c1.117-1.107,0.282-2.604,2.68-1.521c0.563,0.257,1.754,2.039,2.419,2.521c1.314,0.968,2.904,1.22,4.313,1.74
	   c1.975,0.738,1.493-0.238,2.354,1.688c0.545,1.224-0.307,1.604,1.319,2.986c0.962,0.813,2.234,1.373,3.322,2.071
	   c2.688,1.729,4.374,2.271,6.909,0.179c0.938-0.771,2.354-1.799,3.021-2.644c0.729-0.921,2.138-1.938,2.666-2.749
	   c1.143-1.736,1.604-5.479,4.354-5.254c0.146-2.353,0.181-4.886-0.009-7.229c-0.188-0.036-0.366-0.07-0.557-0.106
	   c-0.247-1.188,0.146-2.406,0.334-3.56c5.024-2.646,10.021-3.384,16.265-3.394c2.367-0.005,3.238-0.063,5.021,1.334
	   c1.219,0.952,1.729,2.519,3.324,3.019c2.12,0.661,6.479,0.216,6.051-2.634c0.654,0.129,1.574-0.229,2.229-0.104
	   c0.52-7.021,3.725,0.308,4.649-1.323c0.769-1.341,1.096-3.255,2.281-4.242c0.286-0.234,3.391-1.063,3.396-1.104
	   c0.142-1.938-0.577-4.434,1.333-5.563c-0.868-0.273-2.563-0.521-2.683-1.646c-0.201-1.9,5.416-1.281,6.732-1.063
	   c3.618,0.604,3.188,2.186,3.387,5.287c0.646-0.149,1.649-0.563,2.23-1.016c0.364-5.229,5.063-0.541,4.77,2.688
	   c1.438,0.549,3.053,0.406,4.563,0.33c-0.39-5.643,3.107-4.405,7.333-4.676c0.553-1.813-1.408-2.146-0.896-3.896
	   c3.5-1.896,1.863-6.78,6.561-6.438c0.107-1.729-0.011-3.514,0.104-5.229c1.178-0.23,2.188-0.095,2.674,0.896
	   c0.268,0.021,0.646-0.018,0.892,0.104c0.158,0.888,0.524,1.647,0.438,2.571c2.016,0.592,2.854-0.938,3.33-2.589
	   c3.707,1.204,7.12,3.47,10.729,4.644c6.717,2.188,15.087,3.183,20.476,8.226C722.302,1457.017,725.358,1463.753,727.723,1470.271z"
	   />
 <path id="uttar_pradesh_1_" class="imap" title="Uttar Pradesh" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M656.012,545.712
	   c-12.186-8.815-26.851-15.921-39.667-24.044c-11.587-7.344-24.005-15.862-36.521-21.369c-16.979-7.468-36.189-8.262-49.404,6.563
	   c-9.072,10.177-14.165,23.844-19.915,36.009c-5.135,10.862-20.789,32.261-17.813,44.418c2.963,12.112,23.897,24.011,33.386,30.493
	   c3.688,2.521,6.987,5.587,10.569,8.263c3.469,2.589,8.271,4.158,11.34,7.12c2.26,2.183,2.715,5.264,4.313,7.863
	   c1.232,2.003,3.459,3.179,4.767,5.109c2.313,3.456-0.604,2.819-1.86,5.277c-1.143,2.22-0.416,8.296,0.08,10.722
	   c0.771,3.778,2.979,5.042,3.153,8.893c0.188,4.063,4.53,3.609,6.963,4.563c0.804,0.315,3.714,0.697,3.604,2.146
	   c-0.092,1.267-2.668,1.555-2.665,1.455c-0.128,3.599,5.934,0.188,4.354,5.334c-1.455,0.355-1.82,1.48-1.502,3.011
	   c-3.813-0.849-3.642,2.188-3.354,5c3.25,0.206,8.5-0.654,9.36,3.485c-2.284-0.063-5.93-0.335-6.014,2.515
	   c-2.084,0.132-4.271,0.013-6.348,0.161c-0.058,0.271-0.107,0.554-0.169,0.831c-4.936,0.463-7.057,9.417-2.483,9.006
	   c-0.676-7.334,7.285-4.669,12.494-4.999c-0.105-1.209,0.271-2.645,0.148-3.854c1.298-0.082,3.677-0.521,4.924-0.088
	   c1.17,0.413,2.108,2.331,2.604,2.409c3.117,0.497,3.366-3.085,6.813-2.321c0.427,2,0.313,4.563,3.018,3.854
	   c0.006-1.479,0.463-3.055,1.159-4.337c0.563,0.009,1.271-0.195,1.843-0.161c0.146-1.537,0.645-2.028,1.979-2.362
	   c0.795,2.189,2.051,4.148,4.172,4.438c-1.313,0.563-2.354,1.791-1.998,3.422c0.248,1.134,4.847-1.301,5.313-1.375
	   c1.833-0.292,3.794,0.681,5.601,1.127c1.693,0.419,2.902,1.479,4.333,1.933c2.479,0.779,6.71,0.17,9.305,0.014
	   c-0.039-0.358,0.144-0.867,0.104-1.229c4.044-0.258,5.269,1.229,8.232,3.348c-0.467,3.229,4.694,2.366,6.063,3.938
	   c1.188,1.354-0.229,4.729,0.984,6.979c1.682,3.144,3.623,4.246,3.674,7.687c0.038,2.677-0.551,5.385-0.396,7.958
	   c-4.038,0.146-2.104,4.271-4.563,4.438c-0.688,1.447-0.329,3.28-0.445,4.893c-2.644,1.48-2.063,6.73-4.886,8.106
	   c-0.521,2.454-2.516,4.844-2.779,7.233c-2.625-2.293-2.521,2.063-2.327,3.662c-0.307,0.036-0.594,0.063-0.896,0.099
	   c-0.048,2.528,4.515,4.76,1.021,6.949c-1.163,0.729-2.778-0.188-4.067,0.313c-1.896,0.739-1.646,1.896-3.667,2.354
	   c-2.734,0.62-5.883-0.396-8.667,0c-3.569,0.499-2.185,3.37-2.389,6.616c-1.559,0.657-2.875-0.64-4.024-0.03
	   c-1.396,0.726-0.923,2.917-0.92,4.413c0.005,2.539-0.854,8.574,3.271,8.052c0.367,1.604,1.587,2.866,1.346,4.565
	   c-3.234-0.604-2.164,3.479-4.896,3.102c-0.183,2.866,0.566,5.535-1.792,7.633c-1.339,1.19-4.813,4.086-6.542,3.701
	   c-0.146,1.878,1.607,3.229,2.208,4.95c0.591,1.698,1.271,3.646,1.747,5.333c0.709,2.479,2.862,7.742-0.956,8.724
	   c-0.5,5.399,4.18,1.461,6.291,5.276c1.542,2.786-0.271,5.889,0.044,8.949c1.322,0.032,2.563,0.6,3.896,0.334
	   c0.198-3.021,0.492-4.813,2.978-6.601c0.757,3.545,4.985,1.107,6.438,3.646c0.646,1.142,0.416,2.796,1.301,4.166
	   c0.884,1.372,1.596,2.629,3.292,2.791c-0.132-0.661,0.225-1.577,0.102-2.24c2.021-0.662,5.136-0.248,5,2.573
	   c0.958-0.308,2.104-1.697,3.271-2.382c1.408-0.828,2.982-1.813,4.639-2.309c0.072-2.15,0.215-4.505,2.352-5.604
	   c-1.546-1.778-2.342-3.563-4.904-4.396c-0.316-1.351,0.563-2.146,1.896-1.982c0.063-0.998,0.438-3.029,0.072-3.977
	   c-0.521-1.354-2.113-1.479-2.072-3.267c-2.325-0.28-4.771,1.729-7.563,1.229c-0.191-3.098,0.188-5.77,0.709-8.611
	   c0.223-1.193,0.602-3.088,0.237-4.333c-0.75-2.618-1.089-1.378-3.332-2c-5.239-1.454,0.97-14.354-4.938-13.063
	   c-1.104-2.32,0.021-4.999-1.303-7.351c-1.022-1.825-1.554-1.941-3.429-2.263c-1.35-0.229-3.548,0.646-2.946-1.611
	   c2.258-0.063,2.229,0.016,3.278-1.391c0.28-0.378,0.313-1.55,0.658-2.093c0.367-0.569,1.063-0.81,1.396-1.521
	   c0.848-0.407,3-1.313,3.938-1.063c2.229,0.586,1.563,1.856,1.729,3.955c3.903,0.245,4.387,0.231,4.667-3.563
	   c0.81,0.069,1.763-0.181,2.563-0.104c0.075-1.172,0.025-2.396,0.082-3.563c3.252-0.012,1.652-0.512,3.201-2.146
	   c0.728-0.766,2.146-1.173,3.015-1.544c1.484,2.284-1.369,3.142-1.271,5.313c0.063,1.37,1.882,3.521,1.978,5.271
	   c-3.229,0.212-6.569,0.619-5.896,4.991c0.74,0.437,1.651,0.979,2.229,1.35c0.231-1.067,0.454-2.084,0.438-3.229
	   c0.93-0.363,1.906-0.521,2.896-0.345c0.14,2.445,0.08,4.166-2.229,5.344c-0.174,0.563-0.181,1.654-0.01,2.229
	   c1.307,0.229,2.226-0.662,2.329-1.896c0.911-0.17,3.342-1.579,4.222-0.979c1.498,1.021-0.859,3.525,1.688,3.988
	   c-0.073,0.451,0.161,1.104,0.104,1.563c2.247,0.03,2.438-1.706,5.021-1.052c1.32,0.34,1.688,1.014,3.261,1.104
	   c1.068,0.063,2-0.066,2.949-0.387c-0.074-0.81,0.181-1.76,0.104-2.563c2.8-0.354,0.373-2.96-0.114-3.992
	   c-0.646-1.358-0.88-2.877-1.146-4.423c2.121,0.063,2.957,2.132,5.155,1.741c-0.188,3.896,2.287,2.813,5.345,3
	   c0.615,3.111-2.807,3.936-4.304,5.682c-1.625,1.896-2.223,6.09,1.291,6.563c0.313-1.891-1.643-3.193,0.377-4.3
	   c1.14-0.619,4.291,0.042,5.623-0.042c-0.188-1.315-0.024-2.686,1.377-2.958c1.938-0.386,1.941,1.541,2.396,2.958
	   c3.72,0.396,8.349-0.092,12.229-0.336c0.146-2.311-0.827-5.229,1-6.881c1.166-1.053,1.75,0.147,2.299,0.116
	   c0.813-0.048,1.485,0.021,2.646-0.479c2.063-0.896,4.708-2.831,3.139-5.313c1.651-0.327,4.021,0.086,5.596,0.563
	   c-0.021-1.688,5.228-3.373,6.666-3.25c0.276,4.445,0.504,4.325,4.052,6.643c1.247,0.813,1.775,2.521,3.281,3.031
	   c0.432,2.197-0.407,3.354-1.876,4.353c-1.449,0.979-3.063,0.529-2.354,3.2c0.357,0.1,0.612,0.263,0.927,0.365
	   c-0.055,0.365-0.461,1.337-0.695,1.646c-1.025,0.425-0.655,0.232-1.331,1c-1.153,0.09-2.08,0.896-2.231,1.986
	   c1.479,0.1,2.896,0.121,4.239-0.32c-0.379-1.951,1.386-3.526,3.384-2.945c2.071,0.604,1.267,2.837,1.377,4.943
	   c3.944,1.106,2.858-4.535,1.998-6.553c1.142-0.917,3.039-1.251,3.688,0.229c0.237-0.563,0.688-0.896,0.649-1.916
	   c2.938-0.836,1.848,1.813,3.273,2.644c0.848,0.489,3.973,0.19,4.955,0.264c-0.025-0.17-0.02-0.709-0.009-0.896
	   c-0.843-0.317-1.343-1.043-1.479-2c1.396-0.653,3.257-0.438,4.813-0.344c-0.084,0.702,0.352,1.608,0.386,1.995
	   c0.326-0.646,0.479-1.729,0.376-2.663c1.18-0.063,2.405-0.072,3.581,0.013c-0.17,1.275-1.448,1.4-1.896,2.258
	   c-0.549,1.033-0.348,2.173-0.396,3.354c-0.104,2.771-0.39,4.92-1.884,7.279c2.94,0.771,3.951-2.716,6.824-2.57
	   c0.146,2.283,10.489,1.063,12.935,0.904c-2.103-4.362,4.622-6.482,1.419-10.612c0.717-0.813,1.9-0.814,2.987-0.613
	   c-0.146,0.837,0.228,1.776,0.388,2.329c0.833-1.591,2.063-3.67,4.604-2.995c0.041,0.661,0.497,1.215,0.446,1.894
	   c1.156,1.146,1.884,2.271,3.896,2.011c-0.462-2.235,1.614-3.363,0.75-5.896c1.321-0.083,4.603-0.613,5.644,0.259
	   c2.313,1.938-0.229,5.446,0.045,7.646c1.506,0.083,3.229-0.465,4.614-0.275c2.55,0.335,1.232,1.063,2.396,2.598
	   c2.195,2.883,5.286,0.753,8.551,1.449c0.152,2.386-1.015,7.14,1.388,8.494c1.854,1.05,6.438,0.036,8.615,0.174
	   c0.031,0.947,0.064,1.952,0.104,2.896c1.939,0.122,3.953-0.021,5.896,0.104c0.114,1.833-0.019,3.729,0.104,5.563
	   c1.063,0.074,2.173,0.021,3.229,0.104c0.078,1.063,0.021,2.172,0.104,3.229c2.604-0.517,2.146,2.556,4.229,2
	   c0.188-1.756-0.479-3.229-0.229-4.896c3.604-0.229,11.313,1.352,13.34-1.66c1.604-0.329,3.701,0.237,4.614,1.271
	   c0.538,0.604-0.045,1.771,0.379,2.271c0.6,0.708,2.076,0.313,2.621,0.875c0.755,0.788,1.243,3.813,0.354,4.624
	   c-1.022,0.942-3.688,0.036-4.634-0.389c-0.104,1.492-0.104,3.085-0.01,4.581c0.439-0.096,1.131,0.188,1.563,0.093
	   c0.1,1.501,0.008,3.063,0.104,4.564c4.188-0.206,2.854,3.155,1.935,6.051c-0.184,0.563-0.047,1.104-0.393,1.667
	   c-0.301,0.479-1.466,0.938-1.521,1.063c-0.649,1.313-0.354,3.026-0.449,4.556c-0.652-0.134-1.572,0.229-2.229,0.102
	   c-0.154,0.479-0.152,1.419-0.002,1.898c1.716,0.532,2.87,1.327,3.625,3.051c0.598,1.354-0.416,3.583,1.938,3.383
	   c-0.396,3.45,3.992,2.657,6.333,3.344c0.292,4.021,3.091,3.272,6.378,3.272c2.677,0,6.854,0.849,8.697-1.241
	   c1.979-2.242-0.199-5.846,1.625-8.035c0.332-0.396,1.646-0.116,1.945-0.455c0.412-0.465,0.146-1.762,0.389-1.948
	   c1.074-0.854,2.166-0.593,3.643-0.707c-0.411-2.465-3.587-3.412-0.956-6.028c0.904-0.903,1.982-0.564,2.688-1.91
	   c0.978-1.877-0.354-2.037-0.768-3.241c-0.407-1.19-0.896-1.938-0.239-3.423c0.521-1.167,1.938-1.742,1.994-3.01
	   c0.039-0.91-1.13-1.425-1.354-2.313c-0.286-1.104-0.006-2.841,0.063-3.971c3-0.366,5.25-1.138,5.945-4.383
	   c0.45-2.104-0.254-5.719-1.736-7.261c-1.729-1.795-3.943-1.95-5.514-4.479c-1.472-2.367-0.894-5.122-1.997-7.616
	   c-1.05-2.354-1.896-4.422-1.417-7.313c0.396-2.401,1.419-6.116,2.604-8.092c1.396-2.326,2.795-2.745,5.396-3.241
	   c3.646-0.693,4.364-2.188,6.977-4.271c3.036-2.426,7.328-2.146,9.264-5.146c1.839-2.854,2.361-6.813,6.378-7.646
	   c1.021-1.729,4.173-1.354,5.317-3.021c1.691-2.459-0.19-4.764,3.313-5.423c2.231-0.423,4.479,0.563,4.145,3.12
	   c3.768,0.354,2.843-2.17,5.688-3.28c2.818-1.104,4.896,1.133,7.584,1.34c2.917,0.229,6.178,0.586,6.342-2.675
	   c0.073-1.489-0.52-2.688-1.342-3.658c-1.281-1.516-0.771-0.729-2.99-1.271c-1.271-0.313-1.442-0.77-2.669-1.402
	   c-1.23-0.646-2.688-0.145-3.937-0.732c-0.821-0.396-1.271-1.727-1.989-2.343c-1.146-0.979-1.595-0.872-3.073-1.512
	   c-1.646-0.716-5.705-2.448-6.769-3.729c-0.852-1.021-0.5-2.66-1.146-3.699c-0.607-0.982-1.646-1.564-2.494-2.239
	   c-2.34-1.845-3.483-2.956-4.563-5.688c2.479,0.142,4.385-0.762,6.385-1.634c3.234-1.411,2.731-1.751,1.896-5.093
	   c-0.851-3.38-0.816-2.714-4.313-2.99c-1.852-0.146-1.896-0.771-3.323-1.342c-1.362-0.55-2.384-0.584-3.946-0.722
	   c-1.539-3.294-1.184-5.686,2.604-5.938c0.563-0.039,1.854,0.271,2.332,0.006c1.354-0.767,0.2-1.151,0.982-2.021
	   c1.271-1.402,2.45-1.505,4.352-1.646c3.245-0.247,6.804,0.571,10,0c1.573-0.278,3.646-1.251,1.771-3.354
	   c-1.004-1.123-3.202-0.604-4.72-0.688c0.021-1.244-0.713-2.131-1.987-2.013c-0.813-2.328-0.663-4.639-0.75-7.229
	   c-2.991-0.429-7.709,1.179-9.896-2.053c-2.084-3.07,1.132-7.875-2.131-10.604c-0.688-0.564-2.213,0.199-2.938-0.657
	   c-0.843-1,0.064-2.359-0.021-3.398c-0.25-3.021-3.36-4.804-3.047-7.944c-5.229,0.313-4.462-7.104-5.338-10.485
	   c-1.604-6.202-2.771-12.42-3.771-18.771c-2.322-14.727-6.586-33.764-18.765-43.854c-13.011-10.775-33.255-15.938-48.795-21.697
	   c-7.881-2.919-16.147-6.813-24.479-7.817c-16.313-1.979-33.223,3.56-49.506,3.938c-13.423,0.313-18.748-7.981-29.739-13.471
	   C683.936,558.928,668.717,554.904,656.012,545.712z"/>
 <path id="haryana_1_" class="imap" title="Haryana" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M544.209,586.509
	   c-0.192-2.447,0.076-4.938-0.035-7.396c-0.146-3.366-1.313-7.326-2.34-10.415c-1.247-3.755-1.166-5.591-0.186-9.415
	   c0.813-3.192,0.901-6.735,1.897-9.861c0.312-0.041,0.584-0.068,0.896-0.104c0.729-1.323,0.724-2.979,1.457-4.229
	   c1.036-1.785,2.557-2.281,2.932-4.723c0.499-3.246-1.316-8.396,3.61-8.384c0.333-1.039,1.188-1.181,1.646-2.025
	   c0.383-0.725,0.121-1.882,0.651-2.42c1.146-1.167,2.34-0.773,4.04-0.888c0.438-7.063,8.553-10.456,10.111-17.579
	   c1.646-7.479-2.217-15.019-2.839-22.271c0.094,1.027-11.936-11.407-12.885-12.516c-4.582-5.354-9.114-9.61-16.419-10.715
	   c-21.386-3.238-45.411,10.979-63.361,20.917c-11.837,6.55-24.846,10.458-37.479,15.108c-3.244,1.194-6.414,2.582-9.649,3.791
	   c-2.113,0.796-4.389,0.479-5.979,2.205c-3.073,3.34-3.538,9.459-3.532,13.771c0.003,2.394-0.394,4.981,0.313,7.313
	   c0.35,1.146,0.771,1.987,1.771,2.665c0.466,0.314,3.339,0.861,3.336,0.854c0.256,0.838,0.248,2.494-0.001,3.334
	   c-3.953,0.105-3.021,4.208-2.849,7.011c1.421,0.049,2.928,0.104,4.349,0.148c0.085,1.353,0.328,3.063,0.076,4.427
	   c-0.246,1.318-1.396,2.771-1.512,3.607c-0.3,2.102,0.59,4.551,0.436,7.313c-1.59,0.118-3.256,0.034-4.847,0.146
	   c-0.238,2.103,2.076,2.822,3.837,3c-0.034,0.99,0.688,1.683,0.548,2.731c3.167-0.955,6.405-0.729,9.451,0.123
	   c0.266-4.271,1.838-2.563,3.976-1.938c1.447,0.425,3.955,1.413,5.524,2.087c-0.104,1.191,0.281,2.638,0.163,3.838
	   c0.667-0.104,1.688,0.289,2.337,0.162c0.518,1.976,4.732,3.033,6.589,2.91c2.89-0.188,4.791-2.981,7.813-2.354
	   c0.04,0.537,0.317,1.146,0.328,1.695c7.524-0.039,1.581,9.177,4.875,12.164c0.313,0.271,2.813,1.369,2.903,0.57
	   c-0.676,5.369-1.159,11.709-0.375,17.084c0.441,3.033,2.813,5.025,3.989,7.729c0.709,1.624-0.038,3.595,1.563,4.982
	   c1.563,1.352,4.911,0.569,6.825,0.698c0.123,3.629,0.087,4.739,3.199,6.323c2.612,1.331,2.662,0.854,4.502,2.962
	   c2.995,3.435,6.473,7.549,4.771,12.016c-0.356,0.951-1.521,1.645-2.014,3.018c-0.335,0.956-0.08,2.098-0.389,3.107
	   c-0.98,3.229-1.715,3.146-0.613,6c0.976,2.521,1.62,2.992,4.113,3.414c-0.104-0.021,3.712-0.416,3.889-0.428
	   c0.563-0.031,1.854,1.097,3.036,0.938c0.11-2.188-1.878-7.415-0.948-8.947c1.156-1.907,5.854-0.919,7.959-1.053
	   c-0.679-1.854-1.771-3.599-1.354-5.841c0.646-0.271,1.084-0.828,1.386-1c-1.646,0.271-3.085-0.239-2.881-2.013
	   c2.936-0.62,8.838,2.25,10.529,4.304c3.059,3.698,1.813,5.428,7.805,5.033c0.676-1.406-0.047-4.375,1.051-5.337
	   c0.813-0.714,4.836-0.081,5.96-0.146c0.043-1.417,0.104-2.931,0.163-4.337c2.875-1.869,5.3,3.484,8.324,3.999
	   c-0.034,0.313,0.01,0.982,0.013,1.331c-3.378,1.25-3.287,10.238-3.424,13.582c-0.104,2.588-3.042,12.774,2.926,10.925
	   c0.027-3.312,2.169-3.771,4.998-3.5c0.011-1.403-0.091-2.606-0.317-3.876c1.813,1.021,7.479,0.331,9.396-0.048
	   c2.999-0.593,7.216-8.14,10.66-6.78c-5.489-2.158-5.18-8.296,1.146-9.429c2.127-0.382-1.976-9.071-2.4-10.025
	   c-0.946-2.091-1.852-4.075-3.497-5.688c-1.253-1.228-2.663-2.517-3.03-4.321c-0.197-0.979-0.103-4.961-1.12-5.361
	   c-0.354-0.142-0.735-0.057-1.096-0.188c-0.231-0.084-0.479-0.313-0.688-0.451c-0.288-0.202-0.613-0.413-0.896-0.633
	   c-0.485-0.369-0.938-0.813-1.426-1.188c-0.225-0.169-0.401-0.375-0.625-0.543c-0.162-0.125-0.479-0.227-0.554-0.395
	   c-0.075-0.2,0.026-0.597-0.026-0.834c-0.063-0.241-0.166-0.479-0.271-0.7c-0.296-0.691-0.537-1.407-0.822-2.104
	   c-0.556-1.348-0.425-2.572-0.086-3.936c0.271-1.075,0.646-2.13,0.908-3.209c0.521-2.078-1.005-3.646-1.539-5.518
	   C544.491,589.424,544.323,587.96,544.209,586.509z"/>
 <path id="punjab_1_" class="imap" title="Punjab" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M536.553,408.137
	   c-6.409-5.013-14.289-7.419-21.216-11.551c-3.537-2.109-6.493-3.309-8.04-7.119c-1.406-3.462-4.793-5.21-7.618-7.424
	   c-3.375-2.646-8.243-4.196-12.471-4.694c-4.309-0.507-7.843,2.312-11.005,4.883c-3.964,3.223-7.916,4.83-12.485,6.894
	   c-2.271,1.028-4.586,2.078-6.745,3.191c-2.044,1.054-3.457,3.065-5.35,4.334c-2.242,1.503-4.451,2.25-7.033,2.679
	   c-3.313,0.552-6.313,2.107-9.394,3.373c-10.021,4.114-25.563,7.229-33.854,14.33c-4.451,3.805-2.813,3.961-4.879,8.466
	   c-5.556,12.15-8.139,23.785-7.413,37.35c0.44,8.229,3.708,16.979,2.396,25.271c-0.972,6.057-2.896,5.787-6.146,10.547
	   c-1.938,2.841-4.948,8.563-3.241,12.161c2.078,4.375,8.479,0.004,10.521,4.313c1.142,2.411-2.271,6.446,2.136,6.481
	   c2.281,0.019,4.563,0.002,6.844,0c3.55-0.004,5.406,1.999,8.694,2c2.938,0,6.521-0.53,9.25,0.444
	   c3.278,1.17,4.931,3.613,8.208,1.769c0.429-1.035,1.156-1.42,1.585-2.419c3.745-0.273,10.313,0.175,12.907,2.97
	   c0.821,0.884,2.154,4.126,3.556,4.004c2.354-0.193,0.838-4.792,3.951-1.975c0.13,1.777-0.582,3.34-0.457,5.013
	   c0.151,2.021,1.744,2.979,2.992,1.688c0.674-0.697-0.247-1.567,1.009-1.74c1.278-0.177,0.831,0.68,0.999,1.504
	   c0.779,3.824-1.889,4.396-3.043,7.44c-0.63,1.664-0.396,0.911,1.049,2.303c2.104,2.015,2.583,2.72,2.782,5.719
	   c1.594,0.104,2.837,0.392,3.461-0.963c0.547-1.18-0.298-2.979,0.245-4.249c0.604-1.416,1.74-1.586,2.756-2.551
	   c1.07-1.021,1.771-2.483,2.549-3.699c0.781-1.215,1.396-2.886,2.702-3.249c1.146-0.313,2.609,0.542,3.554,0.938
	   c2.697,1.104,4.783,1.479,7.908,1.272c-0.677-4.727,9.831-4.146,10.325,1.25c1.838,0.116,3.474,0.041,5.219,0.482
	   c0.872,0.221,1.442,0.918,2.313,0.313c0.641-0.438,0.516-1.604,1.14-2.061c0.086-0.656,0.377-1.217,0.537-1.869
	   c0.322,0.514,0.827,0.733,1.054,1.385c1.149-0.483,0.464-1.771,1.439-2.479c0.675-0.491,2.396-0.244,3.22-0.524
	   c0.345-0.992,1.191-1.672,1.26-2.682c-2.979,0.396-2.381-5.571-1.724-7.219c0.96-2.404,1.466-5.021,1.45-7.563
	   c-0.003-0.591-0.021-1.138,0.183-1.675c1.34,0.505,2.545,0.711,3.983,1.061c0.709,0.18,1.62,1.27,1.929,1.328
	   c3.882,0.86,0.19-5.354,4.023-4.021c2.593,0.896,1.25,5.521,3.484,6.511c1.612,0.705,1.828-1.137,2.767-1.886
	   c0.917-0.739,2.167-0.563,2.703-1.812c0.25-0.577,0.189-3.396-0.073-3.955c-0.688-1.396-1.438-0.979-2.906-1.095
	   c-0.071-0.313-0.066-0.604,0-0.925c1.942,0.278,1.779-1.453,3.021-2.3c0.902-0.619,3.286-1.197,4.407-1.281
	   c-0.103-1.458,0.334-2.898,0.245-4.413c-1.925-0.139-1.849-1.17-1.42-2.75c0.713-1.008,2.082-0.835,3.421-0.755
	   c-0.021,1.78,2.521,1.563,3.536,2.271c1.406,0.973,1.148,2.146,2.05,3.656c1.563,0.204,1.063-7.477,0.968-8.958
	   c-0.11-1.881,0.76-7.021-0.243-8.521c-0.816-1.229-3.117-0.82-4.363-2.271c-1.021-1.174-2.1-3.52-1.689-5.104
	   c0.291-1.142,1.063-1.038,1.521-1.776c0.756-1.188,0.598-2.354-0.421-3.888c-0.553-0.817-1.896-2.241-1.816-3.201
	   c0.146-1.886,3.771-4.057,5.091-4.979c2.83-1.988,5.774-3.808,8.955-5.187c9.293-4.021,6.472-18.68,5.356-26.507
	   C547.788,424.831,544.51,414.361,536.553,408.137z"/>
 <path id="uttaranchal_1_" class="imap" title="Uttranchal" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M585.787,451.432
	   c-12.258,2.978-16.237,11.563-19.604,22.727c-1.921,6.357-2.793,8.899-0.599,15.056c1.124,3.146,3.212,5.925,4.407,9.063
	   c1.204,3.158-1.739,4.521-1.957,7.188c-0.152,1.873,1.683,3.313,3.462,4.585c1.351,0.979,2.634,2.427,4.018,3.322
	   c2.913,1.885,7.702,2.512,10.714,4.178c-1.688-0.263-3.09,0.868-4.584,1.466c-0.771,2.722-1.438,6.335-2.724,8.943
	   c-0.717,1.454-2.019,2.592-3.082,3.918c-0.805,1.005-2.403,2.485-2.583,3.749c-0.249,1.757,1.646,3.119,2.089,4.649
	   c0.419,1.438-0.313,3.896,0.495,5.09c1.737,2.545,7.938,0.097,10.248-0.369c-0.28,1.578,0.958,3.621-0.458,5.221
	   c3.229,1.563,5.018,6.57,6.966,0.742c0.927-2.771,0.535-2.172,3.325-3c1.043-0.31,1.286,0.029,2.083-0.909
	   c0.638-0.751,0.151-1.879,0.578-2.424c1.312-1.675,2.537-0.415,4.673-0.995c2.799-0.759,1.606-2.574,4.334-1.423
	   c1.276,0.539,3.104,2.08,4,3.083c1.528,1.708,1.757,4.146,3.304,6.008c1.872,2.253,4.044,3.209,6.38,4.901
	   c2.244,1.626,4.19,3.329,6.313,5.082c1.685,1.395,6.861,2.181,5.589,4.271c-0.8,1.319-5.118,1.661-6.521,2.125
	   c-0.813,1.104-1.334,2.438-1,3.896c2.896,0.939,3.354,4.707,6.56,5.104c0.21,5.606,3.792,2.564,7.719,2.619
	   c5.563,0.077,4.752,1.905,5.055,6.617c2.77-0.238,5.945,2.757,8.61,3.643c1.413,0.479,3.027,0.583,4.333,1.333
	   c1.967,1.134,1.523,1.083,1.723,3.69c1.712,0.104,3.561,0.16,5.277,0.05c2.229-0.142,2.922,0.222,5,0.666
	   c3.548,0.759,6.552-1.625,9.95-0.949c0.102,1.587-0.001,3.249,0.104,4.825c0.938-0.248,1.923-0.283,2.896-0.159
	   c0.154,2.771,4.13-0.167,3.771,4.233c1.386,0.087,2.847,0.087,4.229,0.001c1.813-2.231,0.854-3.877,3.756-5.216
	   c2.095-0.977,4.5-1.697,6.664-2.605c4.125-1.729,8.559-2.732,12.938-3.563c7.438-1.401,15.088-1.688,22.483-3.201
	   c15.064-3.104,26.706-17.092,31.563-31.271c2.912-8.5,3.604-20.632,2.755-29.49c-1.128-11.688-5.086-16.698-14.322-24.995
	   c-20.751-18.646-43.471-35.938-65.396-53.28c-5.485-4.342-7.182-3.121-12.661-5.313c-3.526-1.399-6.174-5.021-9.915-5.797
	   c-3.956-0.813-10.956,1.482-14.938,2.16c-10.644,1.818-21.131,4.546-31.881,5.729C609.669,447.737,597.758,448.535,585.787,451.432z
	   "/>
 <path id="himachal_pradesh_1_" class="imap" title="Himanchal Pradesh" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M571.101,503.77
	   c-2.972,1.512-5.757,5.873-5.979-0.021c-1.712-0.033-4.752,0.14-6.271-0.709c-0.687-0.385-1.381-1.666-2.054-2.316
	   c-2.2-2.126-4.423-2.348-7.24-2.4c-0.136-2.072,0.035-4.192-0.05-6.282c-0.045-1.104,0.205-2.688-0.334-3.672
	   c-0.644-1.185-1.12-0.813-2.367-1.751c-1.644-1.237-3.405-2.685-4.827-4.227c-2.228-2.422-5.104-5.094-7.044-7.693
	   c-0.653-0.896-0.853-1.902-1.432-2.813c-1.522-2.37-3.479-1.585-5.678-2.493c-2.321-0.958-8.229-4.104-7.078-7.515
	   c0.561-1.666,1.636-2.042,1.213-4.2c-0.106-0.552-0.613-1.053-0.7-1.8c-0.101-0.863,0.209-1.624,0.212-2.462
	   c-0.271,0.031-0.646-0.095-0.925-0.075c-0.154-4.574-2.499-1.338-5.3-2.75c-1.068-0.539-1.318-2.555-1.906-3.449
	   c-0.782-1.188-1.673-2.671-2.645-3.708c-2.99-3.188-1.993,1.966-3.25,3.376c-1.313,1.478-5.08,0.911-7.149,0.781
	   c-0.172-2.726,0.372-5.758-0.479-8.268c-0.85-2.483-2.724-4.365-4.313-6.45c-1.555-2.036-3.015-4.063-4.487-6.049
	   c-0.719-0.979-2-2.063-1.463-3.458c0.261-0.685,2.463-1.654,3.169-1.525c0.377-1.652-2.146-3.026-2.893-4.27
	   c-1.313-2.195-1.521-4.07-3.813-5.516c-1.768-1.102-4.019-1.938-6.02-2.713c-1.779-0.68-4.657-0.081-6.222-1.211
	   c0.884-1.539,3.188-0.396,3.995-2.262c0.479-1.104-0.188-3.23-0.341-4.188c-0.219-1.46-0.538-2.251,1.313-2.771
	   c1.396-0.394,3.276,0.001,4.724-0.087c-0.336,0.021,0.322-1.785,0.998-3.31c0.439-0.991,0.886-1.862,1.07-2.035
	   c1.263-1.18,3.296-1.521,4.926-1.658c0.134-1.746-2.324-4.076-3.26-5.47c-2.822-4.202-4.982-9.139-7.208-13.68
	   c-2.487-5.074-3.996-12.075-2.754-17.739c1.771-8.105,9.146-14.295,16.766-16.771c7.285-2.367,15.229-1.536,22.577-3.744
	   c5.797-1.742,12.651-0.984,18.575-0.059c4.669,0.729,9.271,1.972,13.972,2.457c3.337,0.345,6.662,0.261,9.979,0.583
	   c4.291,0.416,8.646,1.561,12.919,2.262c4.549,0.748,8.892,2.385,13.423,3.213c4.708,0.86,8.814,0.966,13.326,3.08
	   c4.938,2.319,10.083,5.067,14.188,8.438c3.254,2.669,6.986,5.056,10.117,7.925c3.431,3.143,6.384,7.809,8.927,11.695
	   c4.982,7.615,7.604,17.933,5.861,27.029c-1.064,5.554-3.245,11.427-3.635,17.084c-0.28,4.067,0.238,7.32,1.271,11.192
	   c1.002,3.771,2.709,9.063,2.411,13.004c-0.311,4.063-3.557,7.521-3.69,11.626c-0.104,3.229,1.946,4.924,4.1,6.917
	   c0.355,0.341,4.476,5.595,2.88,5.69c-2.57,0.157-5.372,0.597-7.899,0.332c0.196-3.604-5.729-5.952-9.051-5.946
	   c-1.66,0.002-3.342-0.085-5,0c-0.673,0.03-1.701,0.181-2.333,0.069c-1.271-0.214-1.096-0.683-2.334-1.094
	   c-1.952-0.646-3.547-0.553-5.673-0.646c-1.736-0.079-3.366-1.01-4.938-0.938c-2,3.854-6.479,1.18-9.334,3.332
	   c-0.192,1.233-0.916,4.357-2.049,4.614c-1.729,0.39-2.709-2.772-5.008-2.349c-2.429,0.445-7.26,5.396-6.951,8.288
	   c0.441-0.086,1.124,0.188,1.566,0.104c0.479,2.463-2.992,1.563-4.566,1.667c-0.188,2.094,0.443,3.087,1.006,4.896
	   c0.188,0.033,0.367,0.071,0.563,0.108c-0.006,0.171-0.024,0.746,0.006,0.896c-2.799-0.521-2.403,2.623-2.939,4.396
	   c-0.479,1.573-1.717,2.82-1.623,4.604c0.558,0.015,1.021,0.438,1.563,0.446c0.396,0.013-0.813,7.359-0.822,7.938
	   c1.986-0.092,2.979,1.822,1.953,3.375C576.58,501.8,572.367,503.13,571.101,503.77z"/>
 <path id="tripura_1_" class="imap" title="Tripura" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1254.301,829.403
	   c-6.886,8.758-16.937,21.721-18.678,33.118c-1.98,12.961,9.114,24.059,15.489,34.19c5.754,9.154,7.853,16.229,19.762,12.962
	   c8.393-2.3,17.411-7.082,23.808-13.001c14.186-13.108,22.692-28.887,28.563-47.053c5.505-17.044-8.114-43.688-25.957-48.161
	   C1280.768,797.327,1263.209,818.073,1254.301,829.403z"/>
 <path id="mizoram_1_" class="imap" title="Mizoram" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1303.244,901.507
	   c5.594,33.907,39.561,97.114,76.563,56.317c23.729-26.155,16.396-75.927,4.2-106.081c-7.219-17.849-16.126-37.844-33.762-46.163
	   c-8.045-3.794-21.604-8.676-30.224-3.328c-7.314,4.538-17.479,18.073-15.764,27.011c-0.168-0.876,2.2,1.498,2.405,2.037
	   c0.541,1.42-0.49,3.875-0.229,5.485c0.231,1.462,1.476,2.938,1.767,4.729c0.705,4.342-1.438,8.872-1.378,13.229
	   c0.045,3.146,1.14,6.046,0.146,9.055c-0.854,2.627-4.438,3.98-5.426,7.904C1299.645,879.336,1301.895,893.327,1303.244,901.507z"/>
 <path id="manipur_1_" class="imap" title="Manipur" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1417.398,840.33
	   c-5.202,2.412-15.068,4.64-20.734,3.773c-5.696-0.87-10.507-5.055-16.532-5.451c-5.539-0.373-13.863,2.185-15.411-5.174
	   c-0.008-0.035-2.559-0.866-2.887-1.146c-0.934-0.783-0.969-2.526-1.681-3.113c-1.813-1.482-6.229-0.886-8.744-2.376
	   c-2.909-1.723-4.396-2.313-7.858-2.524c-0.155-2.354,0.777-5.746-0.792-7.771c-1.309-1.688-4.228-1.676-6.104-2.721
	   c-4.401-2.446-7.479-6.979-9.664-11.381c-3.938-7.915-7.577-20.775-2.622-29.044c3.762-6.278,8.866-6.497,14.938-8.771
	   c7.354-2.743,9.438-6.079,13.951-12.701c17.438-25.524,70.245-56.756,97.498-27.463c24.908,26.772,6.797,69.771-11.543,93.875
	   C1433.111,826.362,1426.798,835.973,1417.398,840.33z"/>
 <path id="nagaland_1_" class="imap" title="Nagaland" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1354.122,713.983
	   c6.08-11.729,20.137-20.188,30.177-28.104c8.481-6.686,16.482-13.957,25.007-20.591c5.901-4.593,12.274-10.679,19.621-4.604
	   c1.015,0.848,1.504,2.167,2.566,3.024c1.058,0.852,3.071,1.042,3.956,2.16c1.601,2.021-0.074,10.18,5.335,9.208
	   c0.354,5.047,3.997,9.283,5.328,14.413c1.479,5.714,1.997,11.62,2.77,17.456c0.563,4.229,1.32,8.438,2.091,12.646
	   c0.813,4.409,1.901,6.813-1.093,10.565c-2.695,3.38-1.996,8.051-4.699,11.132c-2.266,2.582-6.228,3.579-9.33,4.714
	   c-5.104,1.871-16.593,4.896-19.764-1.964c-1.083-2.343-0.141-6.4-0.302-8.967c-1.67-0.102-2.752-0.069-4.208,0.625
	   c-1.111,0.521-1.662,1.586-3.021,1.715c-0.271,0.822-0.918,1.771-1.071,2.592c-0.186,0.963,0.431,2.474,0.021,3.358
	   c-0.745,1.655-3.387,2.418-5.341,2.651c-4.41,0.541-8.871-0.334-13.333-0.334c-2.225,0-4.444,0.016-6.667,0
	   c-3.037-0.011-3.521,0.396-4,3.334c-0.354,2.186-0.665,3.479-1.647,5.354c-0.729,1.378-1.563,3.423-2.385,4.625
	   c-0.882,1.301-2.081,2.104-3.218,3.688c-1.306,1.824-0.42,1.816-3,2c-3.022,0.222-6.063-0.762-8.824-1.916
	   c-5.802-2.434-12.104-5.697-13.958-12.47c-0.64-2.342-0.206-5.894-0.482-8.34C1343.528,732.165,1349.718,722.472,1354.122,713.983z"
	   />
 <path id="meghalaya_1_" class="imap" title="Meghalaya" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1206.834,732.698
	   c-8.88,3.387-22.078,0.724-29.136,7.381c-5.783,5.456-10.62,21.709-10.396,29.521c0.429,14.604,13.417,18.575,25.613,19.771
	   c17.199,1.684,35.001,6.221,52.283,3.888c7.438-1.004,14.896-1.869,22.38-2.54c3.558-0.313,7.336-0.959,10.9-0.753
	   c3.137,0.188,6.229,1.294,9.377,1.314c2.305,0.015,4.505,0.419,6.793,0.499c4.048,0.141,9.019,0.725,12.714-0.604
	   c3.892-1.396,7.791-3.136,11.563-4.703c4.854-2.009,8.563-3.274,12.438-6.688c1.379-1.217,2.535-1.693,3.263-3.267
	   c0.532-1.146,0.457-2.3,0.688-3.527c0.604-3.242,0.981-6.356-0.563-9.37c-2.051-4.001-3.726-7.87-6.498-11.448
	   c-2.636-3.396-6.729-6.73-6.978-11.24c-0.229-4.123-0.863-7.871-2.519-11.718c-3.392-7.915-9.896-13.666-17.8-16.903
	   c-18.125-7.433-47.896-6.229-64.968,4.146c-11.021,6.688-16.146,16.709-30.521,15.589"/>
 <path id="path3771" fill="#C3C3C3" stroke="#FFFFFF" d="M302.595,1047.802c1.448-1.594,10.135-2.657,10.708-0.22
	   c0.361,1.521-1.543,1.954-2.506,3.073c-2.713,0.188-10.462,0.038-8.375-2.657C302.481,1047.933,302.536,1047.868,302.595,1047.802z"
	   />
 <path id="chandigarh_1_" class="imap" title="Chandigarh" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M531.023,477.463
	   c0.6,0.068,1.109,0.152,1.438,0.2c0.094,1.488,0.655,8.753-2.924,6.979c0.38,0.188-1.604-2.271-1.501-2.063
	   c-0.335-0.703-0.036-1.493-0.271-2.208c-0.229-0.714-1.438-0.908-1.021-2C527.171,477.219,529.391,477.279,531.023,477.463z"/>
 <path id="dadra_and_nagar_haveli_1_" class="imap" title="Dadra and Nagar Haveli" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M325.786,1062.258
	   c-0.586-0.076-1.363-0.044-1.813,0.092c-0.021,0.603-0.445,0.916-0.441,1.563c-1.286,0.081-5.335,0.589-5.038-1.928
	   c0.172-1.453,2.146-0.521,2.52-2.229c1.537-0.104,4.786,0.539,4.251-2.063c-0.744-3.54-6.1-4.107-8.423-2.289
	   c-2.406,1.883-3.479,5.813-2.835,8.729c1.294,5.814,7.063,5.772,12.202,5.446c0.146-2.354,0.146-4.875,0-7.229
	   C326.084,1062.306,325.942,1062.279,325.786,1062.258z"/>
 <path id="delhi_ncr_1_" class="imap" title="Delhi NCR" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M536.917,594.914
	   c0.097-0.136,0.262-0.191,0.539-0.212c0.014-0.215-0.063-0.554,0.09-0.707c0.299,0.129,0.555,0.728,0.823,0.412
	   c0.129-0.153,0.052-0.4,0.187-0.563c0.121-0.145,0.289-0.146,0.49-0.168c0.212-0.013,0.442-0.021,0.623,0.083
	   c0.231,0.133,0.267,0.443,0.503,0.199c0.119-0.123,0.049-0.343,0.197-0.467c0.125-0.105,0.324-0.136,0.463-0.206
	   c0.052-0.19-0.034-0.675,0.129-0.787c0.133-0.091,0.658,0.007,0.829-0.003c0.019-0.299-0.035-1.081,0.435-0.589
	   c0.146,0.141,0.118,0.382,0.32,0.474c0.207,0.094,0.358-0.018,0.577,0.133c0.146,0.104,0.193,0.275,0.384,0.281
	   c0.175,0.006,0.28-0.287,0.532-0.159c0.308,0.156,0.163,0.897,0.182,1.194c0.091,0.02,0.229,0.019,0.319-0.001
	   c0.052-0.074,0.212-0.325,0.298-0.361c0.158-0.063,0.308-0.014,0.458-0.092c0.309-0.16,0.515-0.588,0.918-0.422
	   c0.292,0.12,0.343,0.486,0.416,0.758c0.12,0.451,0.201,0.438,0.661,0.465c0.012,0.195,0.096,0.696,0.008,0.869
	   c-0.157,0.313-0.465,0.094-0.751,0.167c-0.371,0.094-0.292,0.197-0.084,0.415c0.288,0.302,0.354,0.283,0.382,0.704
	   c0.339,0.021,0.548,0.067,0.861,0.18c0.007,0.063,0.01,0.104,0,0.152c-0.11,0.062-0.242,0.142-0.236,0.292
	   c0.396-0.021,0.246,0.268,0.336,0.506c0.146,0.368,0.457,0.181,0.7,0.328c0.28,0.169,0.154,0.585,0.341,0.828
	   c0.166,0.216,0.656,0.271,0.864,0.521c0.219,0.259,0.065,0.649,0.175,0.983c0.372,0.086,0.354-0.189,0.587-0.329
	   c0.231-0.14,0.603-0.092,0.86-0.075c0.021,0.21-0.132,0.438-0.124,0.576c0.012,0.19,0.223,0.305,0.254,0.501
	   c0.033,0.211-0.09,0.314-0.165,0.458c-0.1,0.192-0.104,0.286-0.127,0.542c-0.021,0.41-0.282,0.714-0.116,1.157
	   c0.146,0.354,0.485,0.502,0.752,0.749c0.167,0.146,0.396,0.646,0.241,0.928c-0.122,0.235-0.604,0.201-0.837,0.281
	   c-0.635,0.218-1.058,0.97-0.738,1.634c0.281,0.583,0.928,0.742,1.313,1.221c0.275,0.333,0.413,1.508,0.021,1.833
	   c-0.146,0.121-0.258,0.146-0.378,0.278c-0.106,0.137-0.042,0.266-0.299,0.337c-0.172,0.048-0.409,0-0.542-0.084
	   c-0.173-0.111-0.176-0.373-0.333-0.42c-0.146-0.044-0.712,0.195-0.875,0.253c-0.247,0.089-0.659,0.173-0.845,0.364
	   c-0.107,0.104-0.081,0.284-0.206,0.377c-0.141,0.104-0.304,0.004-0.41,0.174c-0.182,0.292,0.188,0.627,0.333,0.803
	   c0.229,0.261,0.354,0.509,0.336,0.866c-0.011,0.342-0.225,0.541-0.382,0.826c-0.301,0.129-0.679,0.335-1.044,0.415
	   c-0.34,0.073-0.765,0.009-1.116,0.009c-0.121,0-0.521,0.069-0.617-0.009c-0.129-0.108-0.011-0.347-0.133-0.484
	   c-0.06-0.063-0.216-0.059-0.295-0.131c-0.028-0.027-0.104-0.251-0.123-0.284c-0.052-0.144-0.099-0.326-0.088-0.503
	   c-0.455-0.031-0.977-0.081-1.246-0.464c-0.243-0.346-0.29-0.869-0.29-1.292c0-0.228-0.021-0.484,0.008-0.708
	   c0.031-0.175,0.267-0.428,0.067-0.619c-0.099-0.099-0.518-0.063-0.658-0.173c-0.188-0.149-0.146-0.26-0.173-0.535
	   c-0.229-0.017-1.038-0.208-1,0.154c-0.224,0.045-0.574-0.014-0.779-0.083c-0.021-0.415-0.003-0.33-0.34-0.491
	   c-0.213-0.101-0.37-0.304-0.552-0.471c-0.188-0.173-0.435-0.447-0.742-0.326c-0.229,0.093-0.244,0.236-0.091,0.387
	   c0.152,0.15,0.453,0.132,0.544,0.408c0.109,0.326-0.082,0.319-0.368,0.332c-0.469,0.021-0.896-0.068-1.367-0.034
	   c-0.006,0.023-0.011,0.046-0.015,0.069c-0.038,0.014-0.076-0.007-0.11,0.014c-0.005,0.023-0.01,0.046-0.015,0.069
	   c-0.119,0.036-0.235,0.07-0.362,0.096c0.013,0.081-0.049,0.121-0.055,0.195c-0.308,0.036-0.715,0.005-1.034-0.035
	   c-0.385-0.048-0.646-0.203-1.042-0.051c-0.063,0.021-0.146,0.046-0.207,0.104c-0.051,0.049-0.061,0.188-0.082,0.2
	   c-0.099,0.082-0.297,0.214-0.461,0.125c-0.203-0.112-0.191-0.858,0.077-0.883c0.021-0.058,0.021-0.139,0-0.196
	   c-0.325-0.117-0.438-0.101-0.458-0.5c-0.247,0.003-0.166-0.183-0.283-0.301c-0.057-0.056-0.25-0.158-0.334-0.199
	   c-0.188-0.097-0.171-0.043-0.314-0.214c-0.047-0.053,0.007-0.137-0.059-0.201c-0.021-0.021-0.099-0.021-0.125-0.05
	   c-0.105-0.123-0.188-0.057-0.252-0.248c-0.026-0.113,0-0.297,0-0.417c0-0.706-0.021-0.887,0.707-0.917
	   c0.455-0.019,0.444-0.229,0.646-0.614c0.138-0.271,0.224-0.565,0.354-0.846c0.069-0.145,0.111-0.393,0.271-0.417
	   c0.159-0.027,0.271,0.182,0.454,0.168c0.276-0.021,0.186-0.229,0.375-0.327c0.229-0.114,0.256,0.071,0.334,0.16
	   c0.158,0.181,0.021,0.201,0.33,0.25c0.149,0.024,0.348,0.003,0.49-0.006c0.067-0.241-0.07-0.151-0.154-0.244
	   c-0.021-0.027-0.119-0.034-0.17-0.083c-0.056-0.058-0.018-0.151-0.031-0.209c-0.111-0.266-0.235-0.433-0.216-0.75
	   c0.061-0.727,0.521-0.677,1.114-0.715c0.021-0.234-0.021-0.456,0.079-0.662c0.123-0.239,0.193-0.201,0.225-0.499
	   c0.025-0.357,0-0.345-0.25-0.49c-0.243-0.144-0.396-0.155-0.323-0.504c0.396,0.008,0.257-1.118,0.229-1.417
	   c-0.112-0.004-0.239-0.009-0.354-0.013c-0.063-0.28,0.129-0.479,0.146-0.734c0.021-0.229-0.113-0.507-0.063-0.752
	   c0.13-0.077,0.209-0.334,0.162-0.507c-0.039-0.143-0.183-0.088-0.222-0.208c-0.021-0.072,0-0.215,0.007-0.292
	   C536.806,595.182,536.839,595.023,536.917,594.914z"/>
 <g>
 <g>
 <path fill="#C3C3C3" stroke="#FFFFFF" stroke-width="2" d="M804.817,1260.868c-1.354,0-3.317-0.406-4.313,0.518
	   c-1.036,0.966-1.21,2.647,0.022,3.38c0.747,0.444,3.853,0.854,4.525,0.199c1.063-1.003,0.104-3.601-1.021-4.097"/>
 <path fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M666.212,1540.401c0.42-0.091,0.848-0.313,1.229-0.354
	   c1.008-0.094,2.08,0.148,3.104,0.068c0.127-2.313,0.328-4.68,0.567-6.984c0.146-1.416,1.221-3.369-0.201-4.017
	   c-1.628-0.736-3.313,0.069-4.854,0.584c-0.354,0.119-1.447,0.634-1.813,0.29c-0.509-0.485,0.005-1.122,0.589-1.257
	   c-0.08-0.072-1.012-1.063-0.918-1.117c0.854-0.505,1.464-2.339,0.158-2.675c-1.626-0.419-1.014,1.805-1.82,2.314
	   c-1.675,1.067-1.208-1.15-1.501-1.646c-0.646-1.104-2.413-0.239-3.313-0.137c-0.613,1.262-0.173,2.298,1.271,2.154
	   c0.082,0.359,0.08,0.91,0,1.279c-1.509,0.571-0.5,1.799-0.666,3.004c-0.054,0.387-3.646-0.188-3.92,1.479
	   c1.86,0.248,5.883,1.687,4.49,4.014c1.104,0.365,1.575,0.704,2.754,0.726c0.238,1.465,2.188,1.438,2.234-0.005
	   c0.518,0.227,0.959,0.53,1.293,0.983c0.14,0.188,0.302,1.081,0.373,1.133C665.577,1540.467,665.892,1540.47,666.212,1540.401z"/>
 <path fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M669.045,1583.374c-1.18-0.682-2.687-0.794-4.292-0.248
	   c-1.729,0.587-0.358,3.042-2.641,2.858c-0.161,1.594,1.954,3.664,3.454,3.839c0.017,0.091,0.021,0.183,0.047,0.271
	   c0.764,0.065,0.435,0.631,0.969,1.041c0.497,0.38,1.235,0.629,1.74,0.983c1.517,1.063,1.224,1.575,3.063,0.642
	   c0.148-2.099,0.393-4.885-0.307-6.826C670.673,1584.77,669.957,1583.901,669.045,1583.374z"/>
 <path fill="#C3C3C3" stroke="#FFFFFF" stroke-width="2" d="M431.549,1539.923c-0.323,0.286-0.633,0.531-0.854,0.698
	   c-1.668,1.251-4.811,0.21-5.104-2.116c-0.303-2.358,3.938-1.619,5.627-1.47C433.535,1537.24,433.327,1538.354,431.549,1539.923z"
	   />
 </g>
 </g>
 <path id="andaman_and_nicobar_1_" class="imap" title="Andaman and Nicobar" fill="#C3C3C3" d="M1545.755,1717.973c23.148-59.063,16.505-126.055,2.836-186.104
	   c-9.271-40.743-15.457-95.3-38.479-130.938c-7.979-12.338-19.069-18.01-35.86-21.9c-28.624-6.65-93.107-10.646-116.595,7.602
	   c-18.609,14.455-30.544,36.784-42.362,57.459c-20.281,35.483-13.677,78.858-9.082,118.813
	   c5.313,46.134,21.409,90.813,45.608,129.577c17.209,27.563,25.938,59.063,43.563,84.056c6.854,9.721,11.915,25.891,21.438,31.755
	   c7.082,4.363,19.34,1.771,27.438,2.342c13.352,0.938,31.233,5.063,43.989,0.188
	   C1529.365,1795.102,1531.671,1753.911,1545.755,1717.973z"/>
 <path id="path3781" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.5433" d="M357.006,1538.885
	   c-5.415-6.972-14.012-14.301-18.437-19.354c-7.271-8.293-14.695-16.461-22.578-24.176c-12.646-12.373-26.915-24.809-43.794-30.937
	   c-33.77-12.259-60.661,12.41-79.814,37.647c-7.488,9.857-14.252,20.271-20.765,30.805c-6.446,10.422-16.792,22.906-20.47,34.577
	   c-6.007,19.063-5.944,44.56-5.938,64.46c0.004,18.089,2.164,36.839,10.7,53.063c19.541,37.15,65.58,46.084,103.666,49.814
	   c21.8,2.135,44.907,5.266,66.805,4.359c5.891-0.238,18.141-14.814,21.838-19.065c7.243-8.326,12.493-18.039,16.063-28.459
	   c9.596-28.063,8.272-59.351,5.271-88.411c-1.873-18.143-2.672-39.404-8.188-56.813
	   C360.607,1544.042,359.029,1541.489,357.006,1538.885z"/>
 <path id="diu_1_" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.5433" d="M209.837,1027.375c0.101-0.971,0.117-1.852-1.067-2.056
	   c-1.001-0.173-2.436,1.01-2.672,1.961c0.98-0.063,3.665,1.259,3.905-0.489"/>
 <path id="jammu_and_kashmir_1_" class="imap" title="Jammu & Kashmir" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M491.004,381.119
	   c-0.597,0.591-1.365,0.945-2,1.524c-0.103,0.094-0.71,0.107-0.95,0.282c-0.331,0.242,0.238,0.905-0.282,1.162
	   c-2.231,1.103-2.603-0.932-3.506,1.8c-0.646,1.978-0.261,2.469-2.513,2.737c-1.703,0.203-3.508-0.07-5.212,0.038
	   c0.086,2.032-2.542,1.678-2.325,4.175c-2.61,0.165-3.661-0.67-5.962-1.407c-3.198-1.024-6.927,0.894-10.084,1.951
	   c-4.018,1.345-8.083,2.804-12.319,3.276c-3.728,0.415-7.508-1.931-10.938-3.297c-21.586-8.588-41.215-21.825-56.368-39.523
	   c-7.213-8.426-13.361-17.736-18.415-27.605c-4.429-8.648-10.172-20.504-12.01-30.367c-2.497-13.402,0.188-25.747-4.505-39.046
	   c-7.77-21.937-23.534-41.215-24.666-65.169c-1.521-32.001,5.836-52.027,27.337-75.766c26.81-29.6,66.005-36.45,104.656-33.796
	   c91.057,6.251,169.521,36.196,248.273,78.725c30.775,16.619,43.877,63.821,45.702,96.922c1.511,27.421-9.041,53.207-21.946,76.814
	   c-10.929,19.991-19.978,41.615-33.229,60.271c-5.195,7.313-12.146,13.197-20.025,17.44c-3.961,2.133-8.252,4.094-12.602,5.291
	   c-4.237,1.166-9.374-3.979-12.827-6.322c-1.579-1.063-3.406-2.516-4.809-3.841c-1.396-1.322-2.27-2.991-3.827-4.246
	   c-2.813-2.244-5.411-3.12-7.365-6.058c-1.032-1.551-2.563-3.613-4.298-4.428c-1.582-0.742-3.414-0.291-5.24-0.282
	   c-1.958,0.01-1.992-0.069-3.063-1.438c-0.901-1.159-0.899-1.863-2.688-2.062c-1.314-0.146-3.313,0.237-4.211,1.175
	   c0.259-1.367,0.776-3.241,2.674-2.963c0.709-3.178,4.479-16.443-3.463-12.212c-0.644,0.343-1.066,1.21-1.556,1.457
	   c-0.635,0.316-1.365,0.029-1.943,0.294c-1.249,0.573-1.219,2.09-2.751,2.505c-1.366,0.37-2.869-0.647-4.25-0.756
	   c-1.476-0.117-2.993,0.055-4.462-0.038c-0.112-1.771,0.239-3.769-0.229-5.468c-0.443-1.648-2.021-3.397-3.116-4.682
	   c-1.28-1.498-3.863-2.074-4.943-3.563c-0.953-1.314-0.428-3.574-0.532-5.212c-2.51-0.552-5.288,2.256-7.462,2.963
	   c-2.954,0.961-6.181,2.145-9.25,2.512c-3.638,0.435-6.725,0.208-9.063-2.694c-1.138-1.402-1.375-2.371-3.188-2.568
	   c-1.697-0.185-3.67,0.333-5.462,0.207c-0.438-1.998-2.592-2.964-3.494-4.519c-1.179-2.032-0.671-2.311-3.293-2.688
	   c-1.619-0.232-3.716-0.144-5.063-1.188c-1.681-1.293-0.771-3.027-1.479-4.774c-4.175-0.28-8.354-0.538-12.713-0.538
	   c-4.084,0-8.701-1.031-10.036,3.458c-2.118,1.438-1.244,4.734-3.542,6.085c-1.958,1.151-5.18,0.355-7.372,0.494
	   c-0.4,1.113-0.494,2.424-1.294,3.217c-0.342,0.339-0.911,0.386-1.304,0.697c-0.563,0.444-0.854,1.027-1.396,1.548
	   c-1.041,0.996-1.13,1.296-2.854,0.563c-1.445-0.612-1.749-1.281-2.487-2.525c-0.811-0.095-1.611,0.133-2.412,0.25
	   c-0.521,1.677-1.188,2.893-1.008,4.675c2.165,0.144,3.238-0.127,3.712,2.288c0.366,1.863-0.391,3.739-0.5,5.5
	   C493.042,375.802,493.365,378.782,491.004,381.119z"/>
 <path id="arunachal_pradesh_1_" class="imap" title="Arunchal Pradesh" fill="#C3C3C3" d="M1547.754,563.566c-3.812-11.938-9.099-23.517-12.9-35.396
	   c-2.479-7.767-5.688-16.139-9.479-23.338c-3.544-6.729-7.146-14.545-11.067-20.807c-2.563,5.096-15.562,8.396-20.845,10.382
	   c-9.557,3.577-17.563,6.79-28.146,8.438c-17.277,2.697-35.873,3.932-52.604,9.479c-32.371,10.755-66.469,24.342-95.109,42.686
	   c-19.854,12.722-44.979,15.662-64.107,29.328c-7.451,5.322-26.588,15.044-27.879,25.003c-0.789,6.094,5.303,15.063,6.927,20.988
	   c4.438,16.229,10.365,31.899,17.413,47.202c1.845,4.007,6.518,18.825,10.33,20.593c1.463,0.684,5.673-0.104,7.31-0.107
	   c7.688-0.02,15.337,0.157,22.989-0.673c13.813-1.497,28.107-3.188,41.518-6.183c11.938-2.661,26.357-5.01,38.543-5.146
	   c9.396-0.104,17.688-0.598,26.893,0.741c10.217,1.487,20.477-1.813,29.563,5.006c7.702,5.774,16.899,4.253,25.979,4.253
	   c12.793,0,25.59,0,38.383,0c19.729,0,39.65-0.813,59.373,0.064c1.479-8.807,0.688-18.229,0.688-27.104
	   c0.002-16.479-0.412-33.021,0.07-49.48c0.454-15.386,2.245-32.51-1.454-47.613C1549.436,569.092,1548.634,566.319,1547.754,563.566z
	   "/>
 <path id="assam_1_" class="imap" title="Assam" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M1174.295,710.346c0.486,1.33,1.458,2.202,3.18,2.084
	   c-0.76,1.158-1.313,2.563-2.252,3.858c-0.932,1.308-2.188,2.306-3.396,3.729c-0.615,0.729-1.337,1.438-1.675,2.354
	   c-0.197,0.521-0.021,2.313-0.291,2.672c-0.928,1.175-2.542,0.121-3.491,0.922c-0.958,0.812-0.876,2.481-0.983,3.632
	   c-0.731,7.938-0.129,16.395-0.129,24.377c0,2.284-0.229,3.697,0.985,4.967c1.601,1.661,3.574,1.696,5.682,1.69
	   c2.08-0.006,9.028,1.153,10.604-0.065c1.875-1.457-0.78-6.686-1.323-8.551c-0.438,0.09-1.117-0.179-1.563-0.083
	   c-0.063-1.179-0.082-2.401,0.018-3.573c2.513-0.396,2.604-2.649,4.034-4.313c1.231-1.447,0.837-1.188,2.896-1.408
	   c2.854-0.313,11.938,1.212,11.952-3.543c2.178-0.148,4.154-0.021,6.271-0.542c1.934-0.479,3.104-1.17,4.934-0.44
	   c1.608,0.646,2.133,1.438,4.158,1.679c2.137,0.26,4.812,0.686,6.93,0.479c2.075-0.196,3.956-1.247,6.077-1.296
	   c1.892-0.043,3.252,1.021,4.97,1.561c2.524,0.791,4.105-0.739,5.979,1.366c1.022,1.163,0.688,3.522,2.635,3.854
	   c1.896,0.313,1.763-2.138,2.415-2.625c1.137-0.854,2.038-0.836,3.549-0.688c0.104,1.576-0.495,4.153,0.043,5.624
	   c0.771,2.104,2.159,1.731,4.292,1.604c0.188-1.288,0.524-2.515,1.375-3.313c0.586-0.549,1.942-0.131,2.618-1.032
	   c0.646-4.143,3.489-2.717,6.344-3.23c4.313-0.79-0.146-1.772,0.119-4.373c0.249-2.427,3.428-2.127,3.646-4.281
	   c1.524-0.098,3.354-0.422,4.56,0.604c1.416,1.205,1.002,4.236,3.017,4.986c-0.18-2.582,1.16-2.774,1.731-4.623
	   c0.688-2.22-1.01-3.729,1.299-5.033c3.409-1.926,8.597,4.214,11.074,0.073c1.89-0.342,3.84,0.046,5.722-0.209
	   c2.313-0.313,4.479-0.926,6.84-0.799c0.291,1.979-2.01,1.848-3.219,2.608c-0.89,0.563-2.508,2.459-2.34,3.611
	   c3.391,0.688,3.08,2.78,2.532,5.655c-0.407,2.143-0.698,4.536-0.543,7.021c2.621,0.593,3.88-1.813,6.28-2.278
	   c1.976-0.383,4.898-1.438,7-1c3.041,0.631,2.334,3.598,4.93,4.735c1.604,0.713,4.641,1.213,6.643,0.923
	   c-2.259,0.323-2.479,6.502-2.078,8.021c0.975,3.646,6.1,3.552,8.082,6.27c1.074,1.479,0.883,4.032,0.393,5.768
	   c-0.959,0.438-2.258,0.764-3.147,1.354c-2.443,1.615-3.993,4.833-6.478,6.229c-2.357,1.323-4.924,0.954-6.866,3.111
	   c-1.761,1.948-1.865,4.425-4.704,5.104c-4.279,1.021-8.162-1.188-11.729,2.644c-2.685,2.881-3.332,7.65-3.563,11.407
	   c-0.188,3.016,0.771,4.53,2.886,6.666c0.391,0.396,6.438,4.229,6.362,3.365c0.114,1.385,0.263,3.676-0.146,4.979
	   c-0.582,0.229-1.28-0.139-1.813,0.195c1.614,2.104,2.646,5.896,2.02,9.136c-0.035,0.187,9.907-1.302,10.604-1.258
	   c0.121,1.94-0.021,3.956,0.104,5.896c1.957,0.387,3.989-0.591,5.291-2.032c1.438-1.594,1.229-2.581,1.378-4.864
	   c0.945-0.03,1.949-0.063,2.896-0.104c0.063-0.979-0.276-2.65,0.125-3.542c0.621-1.357,2.016-1.271,2.948-2.313
	   c1.521-1.69,1.277-5.521,1.377-7.732c1.229,2.193,4.354,3.823,5.316,6.269c1.953,0.146,3.209-1.969,4.941-2.314
	   c1.521-0.311,3.52,0.813,5.271-0.021c0.174-2.359,0.168-3.604,1.063-5.605c0.957-2.141,1.332-3.531,1.323-6
	   c-0.015-3.795,0.142-7.729,0.386-11.613c1.727-0.104,3.515,0.01,5.229-0.104c0.813-1.772,0.684-3.87,1.063-5.948
	   c0.438-2.404,1.243-4.221-0.313-6.613c0.889-0.092,1.716-0.229,2.573-0.437c0.696-1.122,1.125-2.308,1.395-3.617
	   c0.23-1.169-0.138-3.575,0.388-4.666c0.314-0.678,2.266-2.583,2.663-3.012c1.137-1.212,1.688-2.152,3.585-2.063
	   c-1.257-2.057-0.979-4.47-0.972-6.937c0.021-4.721-1.591-2.086-4.423-3.908c-0.368-0.234-1.477-2.189-1.601-2.424
	   c-0.693-1.289-1.634-0.279-0.654-2.01c0.732-1.307,4.232-2.438,5.627-3.055c-0.062-2.22,1.582-1.836,2.063-3.261
	   c0.563-1.663-0.311-2.812,0.719-4.33c1.856-2.766,6.34-2.729,7.547-5.952c-1.61-0.69-1.907-2.068-1.563-3.688
	   c2.029-0.416,3.847-0.845,5.64-1.938c-1.354,0.828-0.273,3.125,0.313,4.094c1.191,1.953,1.978,2.066,4.061,1.854
	   c4.313-0.438,5.842-4.438,4.521-8.313c-0.965-2.823-0.735-2.521,1.188-4.658c2.646-2.938,0.441-2.521-0.801-5.431
	   c0.234,0.558,4.625-8.104,4.771-8.255c1.164-1.229,2.813-1.219,3.834-2.957c1.646-2.829,0.521-6.999,2.643-9.595
	   c0.438-0.531,2.354-0.854,3.021-0.768c0.344,1.25-0.262,2.964,0.188,4.146c0.273,0.729,0.813,1.063,1.669,0.834
	   c0.845-0.229,0.646-0.536,1.163-1.14c0.999-1.138,2.793-1.944,3.184-3.521c0.339-1.371,0.111-2.839,0.647-4.175
	   c2.229-5.525,8.493-7.063,13.375-9.954c1.329-0.787,2.84-1.688,3.644-3.046c0.599-1.014,1.354-3.188,2.798-3.527
	   c0.479-1.188-0.061-2.719,0.979-3.51c0.979-0.747,3.021-0.87,4.217-1.26c0.893-0.287,1.958-0.161,2.791-0.457
	   c0.938-0.334,1.73-1.354,2.373-2.069c0.774-0.866,2.076-1.604,2.813-2.547c0.729-0.943,0.663-1.612,1.986-2.009
	   c1.041-0.313,2.394-0.066,3.514-0.146c0.464-0.67,1.563-1.183,2.233-1.848c-0.604,0.423-0.813,0.146-0.771-0.473
	   c0.688,0.077,2.626-2.156,3.229-2.69c0.741-0.651,3.066-1.271,3.52-2.125c0.416-0.806,0.104-3.104,0.295-4.005
	   c0.463-2.251,1.13-2.25,3.326-2.813c1.034,1.401,5.693,1.479,7.332,0.938c0.924-0.313,2.021-1.021,3.02-1.455
	   c0.953-0.423,3.201-0.541,3.713-1.313c3.349,0.225,6.736-2.271,7.146-5.704c0.147-1.3,0.563-5.134-1.146-4.65
	   c-0.979,0.271-1.209,1.701-1.985,2.181c-0.729,0.442-1.953,0.354-2.854,0.296c-0.146-1.426-0.666-2.558-1.356-3.68
	   c-0.865-1.406-0.598-2.703-0.688-4.432c-3.837-1.594-3.979-5.031-3.979-8.865c0-1.456-0.511-4.264,0.488-5.487
	   c0.433-0.526,1.549-0.803,2.125-1.297c0.729-0.618,1.355-1.4,1.854-2.216c0.601-0.979,2.186-2.282,1.729-3.208
	   c-1.098-2.277-6.3-0.933-8.076-0.615c-1.351,0.231-2.631,0.75-3.959,0.828c-1.959,0.112-2.944-0.271-4.248,1.207
	   c-1.23,1.405-1.429,1.604-3.293,1.918c-1.556,0.264-2.011,1.134-3.299,1.854c-1.134,0.646-2.895,0.864-4.166,1.182
	   c-1.095,0.271-2.998,0.271-4.004,0.792c-0.701,0.354-0.382,0.979-0.865,1.342c-0.59,0.438-1.313-0.033-1.963,0.195
	   c-0.752,0.27-0.951,0.967-1.5,1.536c-0.671,0.688-0.891,0.739-1.834,0.967c-0.604,0.146-1.431,0.212-2,0.48
	   c-0.688,0.334-1.104,1.021-1.834,1.313c-1.451,0.563-2.521,0.146-3.832,1.229c-0.771,0.646-0.734,0.559-1.668,0.938
	   c-0.813,0.339-0.972,0.76-1.701,1.217c-0.49,0.311-1.355,0.291-1.965,0.497c-0.916,0.313-0.793,0.396-1.5,1.026
	   c-0.177,0.15-0.119,0.229-0.188,0.438c-0.563-0.102-0.604,0.194-0.964,0.355c-0.317,0.145-0.913,0.182-1.188,0.318
	   c-0.896,0.479-1.401,1.146-2.116,1.848c-1.088,1.061-2.146,1.605-3.556,2.159c-1.207,0.474-3.123,1.521-4.162,2.511
	   c-1.427,1.35-2.621,0.396-4.297,1.188c-0.235,1.438-2.14,0.807-3.192,1.129c-1.479,0.459-2.432,1.854-4,1.687
	   c-1.375-0.152-2.653-1.271-3.821-1.841c-0.841-0.407-3.146-1.334-4.018-1c-0.511,0.189-0.834,0.988-0.661,1.633
	   c0.271,0.979,0.707,0.475,1.338,1.063c1.11,1.061,1.229,4.688,1.145,6.109c-0.452,0.209-0.354,0.228-0.671,0.5
	   c-1.161,0.206-1.716,1.619-2.479,2.527c-0.811,0.961-1.645,1.823-2.451,2.673c-0.822,0.857-1.806,1.521-2.715,2.482
	   c-0.479,0.516-0.688,0.769-1.146,1.169c-0.479,0.412-0.926,0.842-1.339,1.337c-1.544,1.851-2.891,3.437-4.309,5.5
	   c-0.683,0.991-1.375,1.812-1.364,3.334c0.006,1.375,0.563,2.354,0.479,3.81c-1.521,0.1-2.396-0.12-3.188,1.188
	   c-0.643,1.063-1.095,2.253-1.827,3.131c-0.814,0.973-2.426,1.97-3.632,2.209c-1.475,0.293-2.993,0.068-4.5,0.166
	   c-0.611,0.034-1.396,0.021-2,0.152c-0.938,0.211-1.146,0.861-1.82,1.188c-1.137,0.538-2.704,0.532-4.014,0.45
	   c-3.147-0.195-5.991-0.373-8.498,1.868c-1.147,1.028-3.354,1.041-4.82,1.332c-2.393,0.479-4.123,0.598-6.344-0.491
	   c-1.729-0.854-3.133-1.313-5.015-1.663c-2.813-0.528-5.438-1.488-8.485-1.514c-2.067-0.019-1.854,1.372-3.5,2.054
	   c-0.64,0.262-1.369,0.047-2.011,0.271c-0.536,0.189-1.46,0.813-2.063,1.132c-1.896,0.988-3.581,2.438-5.729,2.685
	   c-1.308,0.146-2.654,0.156-3.894,0.658c-1.063,0.437-1.979,1.307-3.146,1.511c-1.063,0.188-2.035,0.261-3.056,0.508
	   c-1.521,0.37-2.828,0.496-4.26,1.131c-1.697,0.756-3.691,0.657-5.662,0.396c-2.468-0.32-4.027-3.079-6.479-3.735
	   c-2.438-0.655-4.748-1.062-7.155-1.979c-6.628-2.524-12.841-0.438-19.563-0.938c-5.653-0.418-10.625-2.962-16.45-3.25
	   c-9.525-0.479-17.816-3.914-27.313-2.104c-8.688,1.661-13.155,8.669-20.938,11.944c-1.973,0.829-6.411,1.146-7.771,2.897
	   c-1.382,1.787-0.33,7.294-0.354,9.521c-0.023,2.506-0.84,3.89-1.688,5.959C1174.335,703.012,1173.303,707.631,1174.295,710.346z"/>
 <path id="path3787" fill="none" stroke="#FFFFFF" d="M491.004,381.119c-0.597,0.591-1.365,0.945-2,1.524
	   c-0.103,0.094-0.71,0.107-0.95,0.282c-0.331,0.242,0.238,0.905-0.282,1.162c-2.231,1.103-2.603-0.932-3.506,1.8
	   c-0.646,1.978-0.261,2.469-2.513,2.737c-1.703,0.203-3.508-0.07-5.212,0.038c0.086,2.032-2.542,1.678-2.325,4.175
	   c-2.61,0.165-3.661-0.67-5.962-1.407c-3.198-1.024-6.927,0.894-10.084,1.951c-4.018,1.345-8.083,2.804-12.319,3.276
	   c-3.728,0.415-7.508-1.931-10.938-3.297c-21.586-8.588-41.215-21.825-56.368-39.523c-7.213-8.426-13.361-17.736-18.415-27.605
	   c-4.429-8.648-10.172-20.504-12.01-30.367c-2.497-13.402,0.188-25.747-4.505-39.046c-7.77-21.937-23.534-41.215-24.666-65.169
	   c-1.521-32.001,5.836-52.027,27.337-75.766c26.81-29.6,66.005-36.45,104.656-33.796c91.057,6.251,169.521,36.196,248.273,78.725
	   c30.775,16.619,43.877,63.821,45.702,96.922c1.511,27.421-9.041,53.207-21.946,76.814c-10.929,19.991-19.978,41.615-33.229,60.271
	   c-5.195,7.313-12.146,13.197-20.025,17.44c-3.961,2.133-8.252,4.094-12.602,5.291c-4.237,1.166-9.374-3.979-12.827-6.322
	   c-1.579-1.063-3.406-2.516-4.809-3.841c-1.396-1.322-2.27-2.991-3.827-4.246c-2.813-2.244-5.411-3.12-7.365-6.058
	   c-1.032-1.551-2.563-3.613-4.298-4.428c-1.582-0.742-3.414-0.291-5.24-0.282c-1.958,0.01-1.992-0.069-3.063-1.438
	   c-0.901-1.159-0.899-1.863-2.688-2.062c-1.314-0.146-3.313,0.237-4.211,1.175c0.259-1.367,0.776-3.241,2.674-2.963
	   c0.709-3.178,4.479-16.443-3.463-12.212c-0.644,0.343-1.066,1.21-1.556,1.457c-0.635,0.316-1.365,0.029-1.943,0.294
	   c-1.249,0.573-1.219,2.09-2.751,2.505c-1.366,0.37-2.869-0.647-4.25-0.756c-1.476-0.117-2.993,0.055-4.462-0.038
	   c-0.112-1.771,0.239-3.769-0.229-5.468c-0.443-1.648-2.021-3.397-3.116-4.682c-1.28-1.498-3.863-2.074-4.943-3.563
	   c-0.953-1.314-0.428-3.574-0.532-5.212c-2.51-0.552-5.288,2.256-7.462,2.963c-2.954,0.961-6.181,2.145-9.25,2.512
	   c-3.638,0.435-6.725,0.208-9.063-2.694c-1.138-1.402-1.375-2.371-3.188-2.568c-1.697-0.185-3.67,0.333-5.462,0.207
	   c-0.438-1.998-2.592-2.964-3.494-4.519c-1.179-2.032-0.671-2.311-3.293-2.688c-1.619-0.232-3.716-0.144-5.063-1.188
	   c-1.681-1.293-0.771-3.027-1.479-4.774c-4.175-0.28-8.354-0.538-12.713-0.538c-4.084,0-8.701-1.031-10.036,3.458
	   c-2.118,1.438-1.244,4.734-3.542,6.085c-1.958,1.151-5.18,0.355-7.372,0.494c-0.4,1.113-0.494,2.424-1.294,3.217
	   c-0.342,0.339-0.911,0.386-1.304,0.697c-0.563,0.444-0.854,1.027-1.396,1.548c-1.041,0.996-1.13,1.296-2.854,0.563
	   c-1.445-0.612-1.749-1.281-2.487-2.525c-0.811-0.095-1.611,0.133-2.412,0.25c-0.521,1.677-1.188,2.893-1.008,4.675
	   c2.165,0.144,3.238-0.127,3.712,2.288c0.366,1.863-0.391,3.739-0.5,5.5C493.042,375.802,493.365,378.782,491.004,381.119z"/>
 <path id="path3789" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M690.333,345.017
	   c-4.252-3.561-11.274-3.084-16.443-2.488c-2.457,0.283-1.813,1.809-2.095,3.612c-0.344,2.292-2.284,3.132-3.454,5.15
	   c-0.771,1.341-1.418,3.391,0.488,4.881c0.381,0.298,0.902-0.123,1.255,0.144c0.558,0.423,0.776,0.999,1.237,1.461
	   c0.843,0.846,1.854,1.405,1.8,2.713c0.811-0.09,1.585,0.131,2.175,0.581c0.135,2.329,0.16,6.037-1.244,7.963
	   c1.451,0.897,0.836,3.88,1.032,5.494c0.239,1.979,0.998,4.333,0.311,6.312c-0.26,0.748-0.857,1.144-1.063,1.933
	   c-0.237,0.942,0.006,2.278,0.006,3.256c0,3.341-0.009,4.512,3.383,5.477c2.768,0.785,5.632,2.429,8.623,2.023
	   c2.175-0.294,2.453-1.294,3.813-2.886c3.447-4.065,6.979-8.437,8.14-13.977c1.646-7.92-0.354-17.423-3.45-24.771
	   C672.793,349.428,671.371,346.724,669.333,345.017z"/>
 <path id="path3791" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M645.501,443.362c-5.323-0.313-9.664,1.771-10.936,7.438
	   c-0.229,1.021-0.25,2.189-0.182,3.229c0.185,2.251,0.024,1.765,1.479,2.971c1.396,1.162,3.033,1.844,4.538,2.825
	   c0.686,0.447,1.383,0.641,1.977,1.17c0.293,0.261-0.145,1.117,0.294,1.454c1.737,1.334,4.078,0.503,6.104,0.631
	   c0.077,1.061,0.021,2.172,0.101,3.233c0.438,0.042,0.788,0.089,1.229-0.018c0.979-0.217,2.749-1.438,4.007-1.807
	   c1.675-0.479,2.801-0.462,3.459-2.168c1.604-4.156-2.016-10.896-4.424-13.982C650.995,445.587,648.932,443.56,645.501,443.362z"/>
 <path id="path3793" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M629.591,419.362c-1.247-2.408-1.578-5.276-3.142-7.528
	   c-1.21-1.744-3.009-2.791-2.944-5.198c-1.384-0.081-2.261,1.985-2.641,3.089c-0.455,1.321-0.365,2.767-0.365,4.271
	   c0,1.332-0.253,3.096,0.454,4.249c0.521,0.849,1.727,2.188,2.424,2.917c1.62,1.687,1.287,3.305,2.114,5.213
	   c0.188,0.452,0.62,0.592,0.87,0.967c2.255-0.125,2.998,4.715,3.164,6.333c2.007,0.108,3.607-0.055,3.642-2.308
	   c0.009-0.813-0.09-1.229-0.333-1.82C631.494,426.25,631.319,422.7,629.591,419.362z"/>
 <path id="path3795" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M1307.034,678.479c4.104-1.479,7.948-2.771,8.077-2.396
	   c1.354,4.016,4.64,3.38,8.389,3.616c2.516,0.146,5.879,0.456,8.326-0.074c2.723-0.59,4.732-2.011,7.342-2.666
	   c2.605-0.653,5.42-1.115,7.992-1.602c5.013-0.947,10.667-1.036,14.924-4.407c1.132-0.896,1.123-1.484,1.732-2.584
	   c0.704-1.271,1.646-2.771,2.018-4c0.791-2.67-0.471-5.813,0.575-8.425c2.102-5.25,7.115-8.418,11.099-12.332
	   c2.396-2.355,5.382-3.646,7.635-6.252c2.076-2.407,3.94-3.988,7.025-4.686c5.452-1.214,10.106-3.104,15.249-5.729
	   c5.045-2.577,10.788-6.146,14.693-10.33c1.489-1.604,2.512-2.581,4.799-3.502c1.876-0.755,5.384-1.521,6.756-3.001
	   c1.184-1.277,0.858-3.312,0.894-4.882c0.063-2.646-0.138-2.861,1.812-4.135c3.264-2.139,6.771-4.348,10.143-6.397
	   c3.81-2.33,5.38-5.405,9.658-7.074c2.376-0.927,4.204-2.146,6.033,0.065c0.809,0.978,0.201,2.045,1.643,2.756
	   c0.944,0.467,2.646,0.376,3.688,0.252c2.072-0.248,4.01-1.168,5.979-1.657c2.027-0.501,4.659-2.438,6.609-2.291
	   c0.978,3.188,1.104,5.289,5,4.896c0.382-0.896,0.84-1.596,1.438-2.226c2.547,0.063,4.94,2.527,7.021,3.916
	   c1.563,1.06,3.146,1.396,4.927,2.012c1.787,0.613,2.346,1.104,3.938,2.171c3.479,2.32,7.188,0.222,10.431,1.82
	   c0.766,0.389,0.763,1.452,1.421,1.949c0.618,0.467,2.128,0.967,2.542,1.374c1.33,1.313,1.573,3.249,3.609,4.093
	   c0.725,10.021,13.209,13.813,19.557,5.146c2.455-3.354,1.449-15.252,0.868-19.331c-1.438-10.058-5.954-20.448-8.016-30.396
	   c-1.849-8.882-4.276-17.408-10.345-24.646c-11.291-13.469-28.813-20.371-45.006-25.519c-31.521-10.021-66.16-5.17-98.071-0.098
	   c-26.791,4.27-48.815,20.121-70.565,35.579c-9.941,7.065-19.31,14.824-29.218,21.882c-9.354,6.657-14.896,16.188-21.517,25.396
	   c-4.011,5.578-8.604,11.324-10.479,18.099c-1.275,4.612-0.819,9.611-0.819,14.486c0,8.633-1.104,18.446,0.653,26.813
	   c1.749,8.313,9.771,16.418,16.318,21.898c3.468,2.897,7.519,2.604,11.457,4.479c3.834,1.824,8.15,3.313,12.229,4.142
	   c1.107,0.226,2.365-0.021,3.332-0.334c2.101-0.688,3.914-1.789,6.343-2.324C1297.925,681.873,1302.63,680.07,1307.034,678.479z"/>
 <path id="path3797" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M696.558,496.977c-0.727-1.794-0.021-2.421-1.166-3.729
	   c-0.646-0.75-2.83-2.128-3.841-2.261c-0.804-0.105,2.116-7.015,3.357-7.576c2.5,2.431,4.271,2.25,4.934,5.954
	   c0.305,1.705,0.481,3.979,0.164,5.676c-0.104,0.579,0.036,1.789-0.508,2.212C699.4,497.323,696.479,496.779,696.558,496.977z"/>
 <path id="path3799" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M777.976,339.219
	   c3.979-0.519,7.503,0.559,11.648-0.441c4.466-1.078,8.666-3.046,13.122-4.162c2.864-0.717,6.189-0.547,9.111-1.075
	   c3.354-0.609,5.058-2.094,7.9-4.026c9.188-6.216,13.239-16.031,18.08-25.954c3.35-6.842,7.288-15.191,7.52-22.849
	   c0.227-7.91,0.371-16.097,0.001-24.009c-0.782-16.672-7.271-30.445-12.896-45.67c-3.646-9.915-6.471-16.483-14.854-22.481
	   c-3.702-2.646-6.032-5.132-10.317-5.999c-6.547-1.324-13.109-1.519-19.756-1.524c-19.1-0.013-39.046,5.398-56.574,12.911
	   c-6.792,2.911-24.634,6.411-26.628,14.089c-1.071,4.125-1.223,13.95,5.218,13.288c0.104,1.876-0.048,3.801,0.07,5.674
	   c1.574,0.395,3.31-1.729,4.711-2.205c1.735-0.588,3.544-0.588,5.464-0.47c0.131,0.24,0.271,0.924,0.256,1.165
	   c-1.175,0.823-2.004,0.311-2.662,1.855c-0.46,1.081-0.15,3.307-0.307,4.449c-0.374,2.93,1.701,4.698,1.792,7.701
	   c0.139,0.029,0.277,0.057,0.416,0.086c0.03,1.267,0.884,2.849,2.254,2.745c-0.17,1.647,0.65,2.933-0.92,4.005
	   c-0.322,1.95,0.715,4.686,1.5,6.42c0.229,0.023,0.441,0.052,0.666,0.074c0.505,1.271,0.801,2.503,1.292,3.713
	   c0.715,1.76,1.854,3.508,2.249,5.25c0.396,1.724-0.084,2.948,1.245,4.006c1.015,0.807,3.583,0.563,3.53,2.457
	   c0.708-0.058,3.298,0.089,3.799,0.575c0.789,0.765,0.393,2.545,0.464,3.675c2.606,0.191,5.232,0.137,7.713,0.039
	   c2.646-0.105,4.172,1.225,6.213,2.292c0.646,2.289,0.063,4.386,2.986,4.975c2.798,0.563,3.256,0.615,4.343,3.189
	   c4.698,0.4,7.128,4.205,5.419,8.757c-1.258,0.024-1.526,1.689-2.389,2.36c-1.039,0.816-2.45,0.748-2.867,2.389
	   c-1.806,0.561-3.867,0.451-5.708,1.043c-0.908,0.292-1.345,0.18-1.762,1.23c-1.081,2.729,2.174,1.996,2.741,3.422
	   c0.479,1.215-1.665,3.214-2.229,4.147c-2.596,4.348,2.229,7.821,1.493,11.945c-0.405,2.279-2.259,2.016-2.5,4
	   c-0.313,2.628,2.048,4.425,3.196,6.503c0.563,1.029,0.995,2.121,1.547,3.148c0.337,0.626,0.88,2.336,1.243,2.754
	   c0.296,0.341,1.188,0.366,1.514,0.656c0.622,0.556,1.073,1.77,1.963,1.981c-0.057,0.603,0.131,1.316,0.075,1.92
	   c1.43-0.019,0.688,0.877,1.443,1.292c2.688,1.474,7.816,0.58,10.756,0.239C654.084,340.479,656.436,339.551,658.976,339.219z"/>
<!-- <path id="path3801" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M522.093,218.334c4.78,1.785,9.496,3.621,14.277,5.433
	   c2.143,0.813,4.438,0.512,6.632,1.335c4.542,1.707,9.605,1.933,14.477,1.927c4.291-0.005,7.289-1.258,11.029-3.356
	   c2.952-1.655,7.648-3.232,9.293-6.468c1.773-3.485-1.307-8.053-3.313-10.719c-2.896-3.823-8.238-6.422-12.205-9.017
	   c-4.652-3.042-9.12-6.53-13.486-9.957c-4.125-3.238-8.322-6.469-12.729-9.446c-2.152-1.455-4.228-3.357-6.479-4.682
	   c-2.493-1.462-5.457-2.219-8.114-3.403c-4.508-2.009-11.896-6.477-17.171-4.913c-3.978,1.18-5.764,6.241-7.271,9.536
	   c-2.313,5.027-2.421,11.525-1.511,17.064C497.605,204.334,510.898,214.154,522.093,218.334z"/>-->
 <path id="path3803" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.543" d="M196.335,319.642
	   c0.529,5.064,2.149,9.922,2.976,14.933c0.574,3.482-0.604,10.148,2.625,12.528c2.789,2.054,7.432,2.844,10.659,4.074
	   c4.524,1.718,8.486,3.669,12.404,6.612c8.86,6.657,19.371,11.162,30.313,13.318c3.527,0.695,7.891,1.595,11.271-0.111
	   c1.071-0.54,3.729-2.447,3.583-3.845c-0.192-1.765-2.482-1.861-3.654-2.667c-1.127-0.775-0.958-1.368-1.006-2.659
	   c-0.042-1.147-0.636-2.157-0.521-3.271c-1.486-0.56-2.875-0.347-2.979-2.358c-0.057-1.142,0.653-3.043,0.178-4.171
	   c-0.457-1.083-2.512-1.685-3.512-1.996c-0.563-0.175-1.142-0.117-1.658-0.534c-0.638-0.516-0.77-1.315-1.542-1.762
	   c-1.417-0.82-2.063-0.419-2.759-2.042c-0.563-1.319-0.771-2.858-2.045-3.795c-1.13-0.831-2.485-1.189-3.468-2.372
	   c-1.396-1.678-0.289-2.018,1.146-2.954c0.98-0.639,2.229-1.661,3.162-2.505c0.791-0.713,2.632-2.27,2.968-3.37
	   c0.46-1.511-0.293-3.05-0.634-4.333c-0.372-1.402-0.438-2.645-1.013-4.013c-1.146-2.729-3.044-3.166-5.362-4.608
	   c-1.591-0.99-1.798-1.347-1.795-3.213c0.001-0.61-0.14-1.407,0-1.999c0.303-1.285,2.565-2.85,3.672-3.335
	   c0.938-0.41,2.039-0.513,2.991-1.046c1.014-0.567,1.56-1.389,2.366-1.958c0.896-0.635,2.104-0.74,3.012-1.292
	   c1.491-0.913,4.861-2.66,3.751-5.003c-0.354-0.749-1.361-1.242-1.95-1.742c-1.012-0.86-1.298-1.605-1.854-2.762
	   c-2.896-0.212-5.77-0.362-8.646-0.362c-1.438,0-2.943,0.165-4.333,0.17c-2.104,0.009-1.271-1.642-0.834-3.004
	   c0.479-1.465,0.378-2.555,1.362-3.796c0.8-1.01,2.513-1.396,3.271-2.408c1.198-1.588,0.067-3.204-0.971-3.953
	   c-1.703-1.229-0.771-1.996-1.163-4.022c-0.438-2.291-1.766-1.375-3.004-0.154c-1.466,1.447-2.03,1.103-3.371-0.121
	   c-0.803-0.733-2.809-1.303-1.971-2.722c0.653-1.109,2.963-1.324,3.978-2.033c0.444-0.311,0.575-0.863,1.063-1.208
	   c0.847-0.603,1.627-0.457,1.975-1.584c0.194-0.63-0.209-1.397,0.192-2.004c0.395-0.597,1.512-0.875,2.013-1.333
	   c1.229-1.124,0.636-2.142,0.451-3.663c-0.229-1.843,0.438-2.65,1.845-3.496c1.637-0.982,1.733-0.046,3.496,0.342
	   c1.163,0.256,3.297,0.175,4.5-0.013c1.668-0.26,2.396-1.271,3.329-2.463c0.979-1.245,2.08-1.643,3.463-2.236
	   c0.604-0.259,1.124-0.742,1.875-0.764c1.119-0.032,1.913,0.644,3,0.796c1.462,0.205,3.024-0.087,4.5,0
	   c1.319,0.078,2.607,0.476,3.67,1.195c1.146,0.772,1.063,2.482,2.326,3.179c0.486,0.266,1.146,0.095,1.674,0.239
	   c0.907,0.248,1.897,1.022,2.97,1.273c0.563,0.133,1.521-0.109,2.026,0.107c0.667,0.284,0.588,1.128,1.334,1.482
	   c0.775,0.368,2.508,0.025,3.367,0.025c1.509,0,2.646,0.438,4.062,0.667c2.271,0.366,4.642,0.84,7.071,0.833
	   c2.688-0.007,4.699-1.607,7.146-0.146c0.126,0.813-1.058,2.771,0.485,2.667c0.433,0.78,1.313,0.738,1.563,1.785
	   c0.932,0.087,0.603,1.025,1.128,1.333c0.411,0.241,1.515,0.025,2.011,0.025c3.691,0.001,7.837-0.156,11.358,1.159
	   c1.706,0.637,3.329,1.483,5.313,1.345c1.061-0.073,1.063-0.368,1.821-0.966c0.854-0.67,1.697-0.849,2.554-1.279
	   c1.354-0.676,2.294-1.79,3.584-2.467c1.396-0.731,2.034-1.36,2.867-2.621c1.476-2.229,6.298-3.199,6.029,0.803
	   c2.084,0.215,4.142-1.096,5.808-2.141c0.985-0.618,4.917-1.757,5.195-2.638c5.225-0.382,10.401-0.399,15.612-0.72
	   c0.113-0.916,0.979-1.136,1.354-1.813c0.358-0.646,0.294-1.571,0.33-2.329c0.109-2.306,0.521-3.409,2.5-4.704
	   c2.494-1.626,5.832-1.679,8.667-1.129c0.756,0.146,1.094,0.593,1.716,0.549c0.17-0.012,1.257-1.02,1.608-1.21
	   c2.473-1.336,3.102-3.148,3.893-5.743c0.482-1.583,1.021-2.791,1.037-4.509c0.026-2.84,0.826-7.37-0.616-9.816
	   c-1.896-3.222-5.137-5.391-7.88-7.846c-2.523-2.266-5.867-3.389-8.203-5.783c-1.133-1.162-2.173-3.247-2.74-4.758
	   c-0.279-0.749-0.23-1.443-0.771-2.113c-0.56-0.699-1.481-1.005-2.049-1.725c-0.873-1.109-0.411-2.733-0.321-4.046
	   c0.104-1.459-0.021-2.939-0.792-4.158c-0.494-0.783-0.373-1.004-1.375-1.008c-1.261-0.005-1.034,0.924-1.871,1.466
	   c-1.009,0.653-3.349,0.501-4.462,0.366c-0.623-0.076-1.346-0.313-2-0.166c-0.876,0.197-0.913,0.65-1.667,1
	   c-1.504,0.696-2.723-0.431-4.167-0.674c-1.119-0.188-3.424,0.553-4.341-0.146c-0.823-0.628-0.79-2.917-0.955-3.845
	   c-0.271-1.521-0.457-2.538-1.371-3.844c-1.009-1.439-1.571-1.967-3.219-2.124c-1.563-0.148-3.003-0.305-3.822-1.861
	   c-1.176-2.238,1.188-2.146,1.837-3.709c0.332-0.796,0.104-1.37,0.543-2.083c0.439-0.702,1.278-1.19,1.516-2.046
	   c0.313-1.205-1.245-1.922-1.035-2.689c0.187-0.682,2.104-0.862,2.666-0.836c0.104-1.881-0.666-2.147-1.688-3.605
	   c-0.679-0.973-1.778-2.134-1.638-3.378c0.153-1.334,2.086-2.441,2.717-3.659c2.813-5.427,2.25-12.375,0.825-18.412
	   c-1.28-5.422-3.738-7.319-8.882-9.966c-23.526-12.105-50.021-15.499-76.171-9.758c-21.979,4.822-45.7,3.494-64.625,16.484
	   c-6.244,4.286-14.979,8.412-19.361,14.639c-5.021,7.127-3.807,18.196-2.002,26.266c3.284,14.685,4.089,29.969,6.388,44.839
	   c2.769,17.859,5.36,35.762,7.622,53.675c0.876,6.939,0.697,14.227,1.867,21.045C353.546,310.282,354.814,314.653,355.335,319.642z"
	   />
 <path id="siachen_1_" fill="#C3C3C3" stroke="#FFFFFF" stroke-width="3.5433" d="M937.181,0.195c-1.74-0.333-3.252-1.51-5-1.874
	   c-0.854-0.178-1.755-0.124-2.651-0.126c-2.999-0.008-6.228,0.63-9.098,1.542c-1.664,0.529-2.649,1.048-4.38,1.254
	   c-0.927,0.111-2.701-0.117-3.537,0.237c-0.879,0.372-1.627,1.591-2.334,2.174c-0.91,0.75-1.465,1.063-2.666,1.126
	   c-2.158,0.112-4.715,0.356-6.805,0.142c-0.32-1.221-0.714-2.312-1.029-3.475c-0.483-1.779-0.786-1.653-2.5-1.333
	   c-1.012,0.188-2.941,0.501-4.004,0.17c-1.273-0.397-1.354-1.717-2.196-2.662c-1.043-1.168-2.279-0.845-3.633-1.176
	   c-1.021-0.25-2.15-0.983-2.875-1.625c-0.625-0.553-2.041-4.148-2.997-3.642c-0.87,0.46-0.251,5.521-0.179,6.501
	   c1.921,0.321,17.326,29.136,17.5,30.304C554.881,246.267,584.699,224.742,591.167,220.195"/>
<!-- <g>
 <line id="line3820" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1329.148" y1="678.852" x2="1485.813" y2="522.185"/>
 <line id="line3822" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1463.875" y1="591.211" x2="1492.792" y2="562.294"/>
 <line id="line3824" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1504.542" y1="596.415" x2="1536.333" y2="564.625"/>
 <line id="line3826" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1307.855" y1="676.898" x2="1472.133" y2="512.624"/>
 <line id="line3828" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1403.686" y1="627.553" x2="1487.434" y2="543.804"/>
 <line id="line3830" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1281.814" y1="680.185" x2="1438.48" y2="523.519"/>
 <line id="line3832" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1277.189" y1="661.565" x2="1408.133" y2="530.624"/>
 <line id="line3834" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1261.189" y1="654.232" x2="1298.131" y2="617.291"/>
 <line id="line3836" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1486.506" y1="591.211" x2="1561.007" y2="516.71"/>
 <line id="line3838" fill="none" stroke="#8EDD8E" stroke-width="3" x1="1518.498" y1="605.701" x2="1544.921" y2="579.277"/>
 </g>
 <line id="line3854" fill="none" stroke="#FFFFFF" stroke-width="3.5433" x1="625.107" y1="423.478" x2="633.92" y2="414.665"/>
 <line id="line3856" fill="none" stroke="#FFFFFF" stroke-width="3.5433" x1="642.774" y1="461.144" x2="651.586" y2="452.332"/>
 <line id="line3858" fill="none" stroke="#FFFFFF" stroke-width="3.5433" x1="694.774" y1="491.811" x2="703.586" y2="482.998"/>
 <g>
 <line id="line3806" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="601.813" y1="242.185" x2="646.48" y2="197.518"/>
 <line id="line3808" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="618.803" y1="271.674" x2="693.721" y2="196.757"/>
 <line id="line3810" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="633.543" y1="303.415" x2="735.333" y2="201.625"/>
 <line id="line3812" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="596.193" y1="224.564" x2="618.803" y2="201.955"/>
 <line id="line3814" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="606.685" y1="260.553" x2="670.434" y2="196.804"/>
 <line id="line3816" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="633.173" y1="280.545" x2="707.674" y2="206.044"/>
 <line id="line3818" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="632.163" y1="328.035" x2="723.47" y2="236.728"/>
 <line id="line3840" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="510.092" y1="194.466" x2="530.425" y2="174.133"/>
 <line id="line3842" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="538.333" y1="212.705" x2="555.333" y2="195.705"/>
 <line id="line3844" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="531" y1="196.705" x2="548" y2="179.705"/>
 <line id="line3846" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="506.474" y1="174.844" x2="522.804" y2="158.514"/>
 <path fill="none" stroke="#F4F4F4" stroke-width="3.543" d="M554.667,219.611c6.096-6.095,12.191-12.191,18.287-18.286"/>
 <line id="line3850" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="648.904" y1="357.773" x2="681.033" y2="325.645"/>
 <line id="line3852" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="653.774" y1="376.144" x2="683.253" y2="346.665"/>
 <line id="line3860" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="157.494" y1="407.625" x2="452.974" y2="112.145"/>
 <line id="line3862" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="227.213" y1="407.625" x2="522.693" y2="112.145"/>
 <line id="line3864" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="296.934" y1="407.625" x2="409.843" y2="294.714"/>
 <line id="line3866" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="343.414" y1="407.625" x2="409.583" y2="341.455"/>
 <line id="line3868" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="134.253" y1="407.625" x2="429.733" y2="112.145"/>
 <line id="line3870" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="203.974" y1="407.625" x2="499.454" y2="112.145"/>
 <line id="line3872" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="180.733" y1="407.624" x2="476.213" y2="112.145"/>
 <line id="line3874" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="273.693" y1="407.625" x2="402.473" y2="278.845"/>
 <line id="line3876" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="320.173" y1="407.625" x2="408.963" y2="318.834"/>
 <path fill="none" stroke="#F4F4F4" stroke-width="3.543" d="M507.954,266.324c11.424-11.424,22.849-22.849,34.271-34.273"/>
 <line id="line3880" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="366.653" y1="407.625" x2="421.951" y2="352.327"/>
 <line id="line3882" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="250.454" y1="407.625" x2="545.934" y2="112.145"/>
 <line id="line3884" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="443.343" y1="261.215" x2="510.092" y2="194.466"/>
 <path fill="none" stroke="#F4F4F4" stroke-width="3.543" d="M480.581,270.458C499,253,516,234,533.96,217.078"/>
 <line id="line3888" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="425.974" y1="255.344" x2="506.474" y2="174.844"/>
 <line id="line3890" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="463.463" y1="264.334" x2="529.963" y2="197.834"/>
 <line id="line3892" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="409.843" y1="294.714" x2="443.343" y2="261.215"/>
 <line id="line3894" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="409.583" y1="341.455" x2="480.581" y2="270.458"/>
 <path fill="none" stroke="#F4F4F4" stroke-width="3.543" d="M398.504,397.047C449,345,500,296,550.271,245.28"/>
 <line id="line3898" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="436.374" y1="407.625" x2="601.813" y2="242.185"/>
 <line id="line3900" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="540.604" y1="349.875" x2="618.803" y2="271.674"/>
 <line id="line3902" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="578.333" y1="358.625" x2="633.543" y2="303.415"/>
 <line id="line3904" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="408.963" y1="318.834" x2="463.463" y2="264.334"/>
 <line id="line3906" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="421.951" y1="352.327" x2="507.954" y2="266.324"/>
 <line id="line3908" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="413.133" y1="407.625" x2="596.193" y2="224.564"/>
 <line id="line3910" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="523.113" y1="344.125" x2="606.685" y2="260.553"/>
 <line id="line3912" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="556.343" y1="357.375" x2="633.173" y2="280.545"/>
 <line id="line3914" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="591.323" y1="368.875" x2="632.163" y2="328.035"/>
 <line id="line3916" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="610.063" y1="373.375" x2="642.783" y2="340.655"/>
 <line id="line3918" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="630.553" y1="376.125" x2="648.904" y2="357.773"/>
 <line id="line3920" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="622.293" y1="407.625" x2="653.774" y2="376.144"/>
 <line id="line3922" fill="none" stroke="#F4F4F4" stroke-width="3.543" x1="402.473" y1="278.845" x2="425.974" y2="255.344"/>
 </g>-->
 <path id="foreign_1_" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="3.5433" d="M811.083,1578.01
	   c-12.481,8.197-26.875,14.898-40.544,20.854c-19.688,8.579-41.311,12.073-60.711,21.119c-11.953,5.563-24.161,14.222-34.374,22.517
	   c-9.161,7.441-21.637,18.83-26.333,29.93c-9.874,23.352-16.707,51.063-19.443,76.165c-3.053,28.007,6.025,52.671,18.396,77.104
	   c9.983,19.732,24.471,37.191,46.952,42.234c11.084,2.482,22.63,1.992,33.813,0.521c11.759-1.563,27.146-2.917,37.996-7.82
	   c11.116-5.021,21.763-10.979,32.444-16.854c34.438-18.938,69.337-36.688,102.469-57.861c57.413-36.689,113.324-76.08,169.12-115.18
	   c30.769-21.563,61.966-42.982,91.638-66.041c75.532-58.699,150.868-125.438,195.191-211.804
	   c12.235-23.854,17.542-48.294,26.809-73.141c10.614-28.445,21.559-23.058,46.901-23.335c21.34-0.229,42.765,1.063,64.131,1.104
	   c19.212,0.036,78.634-33.483,96.968-49.483l5.998-1244H2.5L0.833,836.695c3.356,2.639,25.783,1.938,28.826,4.186
	   c2.253,1.664,4.448,5.292,5.676,6.077c5.391,3.447,7.466,4.081,16.297,4.07c4.786-0.005,9.192,1.522,13.916,0.422
	   c1.523-0.358,12.903-0.906,12.99-1.208c0.586-2.045,1.296-3.729,1.771-5.563c1.708-0.813,0.39-2.562,0.937-4.063
	   c0.434-1.192,1.541-1.418,2.066-2.604c1.111-0.024,2.587,0.185,3.533-0.439c1.274-0.851,0.375-2.063,2.334-2.2
	   c0.86-0.064,1.858,1.104,2.724,1.271c1.119,0.226,2.538-0.017,3.684-0.017c5.392,0,10.912,0.309,16.275-0.05
	   c1.229-2.188,0.852-5.223,1.651-7.617c0.849-2.551,1.411-4.688,1.407-7.658c-0.003-2.021,0.223-8.243,2.333-4.008
	   c0.776,1.558,0.123,6.646,2.611,6.604c0.537-1.633,1.991-5.854,3.999-5.55c0.828,2.581,0.789,5.147,4.399,3.614
	   c0.919-0.391,1.556-1.675,2.577-1.614c0.941,0.063,1.98,1.839,2.823,2.189c2.655,1.104,4.766-0.027,6.916-0.591
	   c1.625-0.437,1.313-0.535,3,0.092c1.274,0.474,1.721,1.6,3.285,1.201c0.513-2.5,1.406-2.057,3.141-1.699
	   c1.451,0.292,2.758,0.75,4.584,0.75c1.319,0,4.185-0.563,5.349-0.023c0.913,0.425,2.602,3.104,3.252,4.021
	   c2.663,3.729,4.309,4.681,9.065,4.674c2.013-0.002,9.236,1.058,9.39-1.276c1.869-1.521,3.961-2.824,5.701-4.36
	   c1.665-1.479,1.476-1.604,3.909-1.688c1.677-0.063,2.802-0.076,4.333-0.667c1.727-0.666,2.5-2.041,3.992-2.654
	   c1.212-0.5,3.085-0.604,4.325-0.679c2.924-0.176,6.059-0.134,8.966,0.049c0.45,4.025-2.453,8.807,2.05,10.617
	   c3.262,1.313,8.215,0.853,11.875,0.616c0.111-2.657,1.173-4.821,4.069-5.005c0.037-0.188,0.074-0.37,0.113-0.563
	   c1.508-0.102,3.198-0.384,4.286,0.66c1.434-1.214,3.43-3.393,5.269-3.431c0.378-0.343,0.521-0.647,1.005-1.011
	   c0.007-0.24-0.031-0.685-0.001-0.896c-2.386-0.146-4.845,0.051-7.231-0.1c-0.537-2.739,1.11-5.567,0.892-8.563
	   c-0.476-0.065-0.75-0.38-1.225-0.46c0.358-2.986,3.683-3.527,6.146-3.413c0.815-3.767-5.005-9.926-6.974-13.021
	   c-2.488-3.933-4.425-4.904-5.389-9.486c-0.736-3.501-3.328-5.683-4.974-9.002c-1.698-3.428-3.43-6.925-4.526-10.479
	   c-1.147-3.713-1.505-6.979-1.5-11.021c0.008-6.045,0.288-7.021-6-7c-3.899,0.012-7.482-0.403-11-1.5
	   c-1.453-0.453-3.036-1.032-4.024-1.979c-1.52-1.444,0.061-2.937-3.389-3.604c-0.115-1.6,0.468-4.358-0.188-5.813
	   c-0.542-1.198-2.521-1.254-3.286-3.104c-1.078-2.611-0.463-9.295,0.903-11.479c1.025-1.634,2.753-2.173,3.957-4.056
	   c1.188-1.855,1.03-3.438,1.027-5.973c-0.005-4.313,1.133-8.854-2.5-11.402c-2.769-1.944-7.631-2.873-11.024-2.511
	   c-0.884,0.095-0.627,1.7-1.963,1.443c-1.481-0.274-1.361-1.31-2.402-2.063c-1.25-0.908-2.218-2.146-3.474-3.11
	   c-6.191-4.761-13.498-5.012-11.136-14.854c0.677-2.824,2.495-4.155,2.998-7.002c1.172-6.646,0.259-8.956,6.098-12.876
	   c3.796-2.557,8.323-4.564,11.801-7.234c3.054-2.344,6.481-7.021,8.833-10.117c2.311-3.029,4.383-5.812,6.778-8.771
	   c1.054-1.313,1.282-3.271,2.478-4.624c4.58-5.201,13.935-10.662,20.51-4.948c2.911,2.529,1.064,4.47,2.113,8.462
	   c0.791,3.013,6.021,8.551,9.05,9.229c5.488,1.229,10.32-3.52,15.042-5.438c4.318-1.757,8.43-2.271,13.377-2.271
	   c8.329,0,17.038,2.646,23.538-3.361c4.151-3.846,3.724-9.247,6.733-13.662c1.51-2.214,4.166-3.196,6.511-4.502
	   c2.542-1.416,4.171-1.789,5.135-4.376c0.954-2.563-1.894-7.875,1.917-8.583c2.214-4.514,4.979-10.246,10.063-11.929
	   c2.984-0.989,5.294-0.611,7.882-2.625c5.174-4.021,11.167-5.156,16.249-8.938c6.556-4.873,7.426-12.5,13.352-17.646
	   c2.164-1.886,3.646-4.813,4.759-7.767c1.075-2.849,1.838-6.13,2.863-9.087c1.933-5.575,3.586-10.57,4.006-16.342
	   c3.354-1.813,5.373-3.104,9.413-3.087c2.705,0.009,5.396,0.82,8.109,0.664c3.057-0.188,3.271-2.653,4.807-5.037
	   c1.146-1.786,2.715-2.604,4.646-3.563c2.212-1.104,1.77-1.244,2.188-3.563c0.498-2.764,0.911-5.409,0.718-8.451
	   c-1.854-0.771-3.962-2.572-1.934-4.54c0.412-0.396,3.403-0.938,3.435-1.051c0.366-1.325-0.645-2.203-1.925-1.996
	   c-0.482-2.982,3.604-2.375,5.419-2.505c0.029-0.146,0.063-0.276,0.084-0.415c1.771-0.323,2.229-2.951,3.92-3.335
	   c0.066-1.041,0.019-2.127,0.075-3.169c2.577-0.063,2.694-0.63,4.158-2.537c1.129-1.474,3.154-1.604,3.813-3.252
	   c0.868-2.161-0.425-3.354,2.238-4.499c1.97-0.854,3.273-0.751,4.768-2.494c1.438-1.679,2.729-3.287,4.232-4.756
	   c0.679-0.661,0.854-1.164,1.438-2.021c0.774-1.146,0.7-0.973,1.813-1.479c1.257-0.582,1.295-0.229,2.188-1.25
	   c0.771-0.896,0.272-1.313,1.563-1.754c0.801-0.278,2.104,0.438,2.771-0.229c0.521-0.521,0.229-2.04,0.188-2.724
	   c-1.146-0.468-2.77-0.468-3.925,0c0.091,0.396-0.168,1.021-0.075,1.419c-0.799,0.041-1.625,0.041-2.425,0
	   c-0.019-0.279-0.104-0.653-0.075-0.925c-2.896-0.115-0.254-10.275,0.314-11.535c0.492-1.09,1.637-2.479,2.553-3.245
	   c0.47-0.396,2.328-0.843,2.377-1.55c0.213-3.071-0.354-3.508-3.367-3.444c0.563-0.442,1.199-0.803,1.867-1.056
	   c0.192-2.641-0.58-4.92-1.852-7.188c-0.569-1.018-3.354-4.853-2.122-5.979c1.438-1.316,2.427,1.002,3.268-1.538
	   c0.614-1.854,0.253-2.098,1.507-3.558c1.161-1.354,2.072-2.604,3.743-3.192c3.032-1.065,6.604,0.646,6.537-3.713
	   c1.762-0.156,1.563-2.411,2.763-3.313c1.354-1.005,4.063-0.479,5.7-0.479c3.69,0,7.296-0.063,10.958-0.288
	   c0.438-1.411,1.696-1.92,2.73-2.762c1.422-1.158,1.793-1.576,1.813-3.451c0.028-2.788,1.564-6.5,1.157-9.139
	   c-0.256-1.659-3.758-4.574-5.396-5.063c-1.188-0.356-3.053,0.053-4.306-0.026c0.241-1.94-1.662-2.477-1.767-4.233
	   c-0.941-0.091-1.957-0.088-2.896,0.007c-0.036,0.185-0.065,0.369-0.104,0.554c-1.116-0.033-1.701,0.554-1.659,1.672
	   c-0.731,0.16-1.833,0.153-2.563-0.007c-0.029-0.184-0.065-0.369-0.104-0.553c-0.36,0.009-0.862-0.022-1.229-0.115
	   c-0.504-1.06-1.063-2.033-1.104-3.225c-2.967-0.188-8.17-0.969-9.958,1.657c-0.883-0.918-0.688-2.328-0.707-3.649
	   c-2.871-0.736,0.289-2.721,0.646-3.45c0.929-1.856,0.521-3.018,0.352-4.885c-0.188-0.038-0.369-0.076-0.563-0.114
	   c-0.511-2.603,1.492-4.699,1.229-7.559c-1.396-0.135-2.438,0.314-3.563,1.008c-0.088,1.053-0.021,2.167-0.104,3.225
	   c-3.948,0.251-6.199-1.852-10.229-1.558c-0.065,0.472-0.372,0.745-0.439,1.217c-5.229,1.206-3.166-5.061-5.937-6.633
	   c-1.189-0.683-3.002,0.169-4.354-0.644c-1.361-0.813-1.712-2.779-3.271-3.047c-1.227-4.709-11.423-4.464-14.673-4.669
	   c0.535-4.287-2.868-4.923-6.332-5c0.229-1.867,0.697-3.507,0.563-5.559c-0.188-0.038-0.369-0.076-0.563-0.114
	   c-0.083-1.164,0.274-2.822-0.051-3.942c-0.371-1.277-1.45-1.019-1.354-2.684c0.046-0.769,1.753-1.938,2.024-2.984
	   c0.274-1.021-0.001-2.592-0.016-3.659c-0.022-1.75-0.146-3.252-0.597-4.934c-0.209-0.786-1.046-2.397-1.092-3.057
	   c-0.154-2.308,1.354-4.517,1.354-7.017c-0.001-0.627,0.123-1.395,0.006-2.007c-0.145-0.743-0.964-0.721-1.025-1.31
	   c-0.146-1.264,0.681-1.962,0.777-2.925c0.251-2.286-0.646-4.602-1.404-6.775c-1.646-4.729-1.414-9.461-1.729-14.6
	   c-0.309-0.05-0.6-0.069-0.903-0.097c-1.036-2.742-0.896-5.533-1.097-8.554c-1.624-0.657,0.249-4.955,0.383-6.73
	   c0.074-0.976-0.063-3.271,0.66-4.006c1.368-1.4,6.874-0.366,8.673-0.344c2.129,0.026,1.448,0.523,2.675-1.966
	   c0.824-1.67,1.104-2.467,1.325-4.351c0.146-1.217-0.572-3.691,0.229-4.69c0.683-0.849,3.348-0.615,4.358-1.044
	   c0.395-0.162,0.979-1.044,1.741-1.339c0.813-0.313,1.467-0.202,2.333-0.26c1.418-0.096,2.874,0.044,4.271-0.058
	   c0.375-0.673,0.809-2.122,1.375-2.625c0.738-0.654,2.337-0.659,2.779-1.292c0.652-0.932,0.002-2.341,0.221-3.374
	   c0.229-1.079,0.813-1.666,1.271-2.641c0.769-1.632,2.257-4.055,1.424-6.009c-0.896-2.116-3.354-1.24-5.612-1.383
	   c-0.903-2.328-3.226-2.605-4.969-3.684c-1.177-0.728-0.889-1.973-2.426-2.542c-0.92-0.341-2.099,0.266-3-0.114
	   c-3.146-1.323-2.297-9.792,1.271-9.992c0.027-1.018,0.452-1.754,1.346-2.008c0.148-0.727,0.148-1.818-0.001-2.543
	   c-3.414-2.426-7.401-0.62-11.283-1.399c-1.116-0.224-2.126-0.391-3.073-1.057c-1.063-0.748-1.47-2.016-2.584-2.633
	   c-1.592-0.882-3.938,0.313-4.729-1.594c-2.607,0.563-1.7-1.654-3.188-2.814c-1.47-1.15-2.539,0.458-3.431-1.902
	   c-0.536-1.417-0.104-3.142-0.652-4.333c-0.566-1.238-2.271-2.461-2.391-4.283c-1.048-0.066-2.243,0.123-3.284-0.05
	   c-0.498-0.083-1.215,0.196-1.674,0.041c-0.656-0.221-0.47-1.257-0.979-1.407c-2.479-0.727-3.938,1.51-6.293,0.976
	   c-0.037-0.184-0.073-0.368-0.109-0.552c-2.813-0.753-3.019,2.353-5.223,2.242c0.146-3.17-4.354-1.999-3.771-4.916
	   c-0.551-0.039-2.86,0.271-3.217-0.118c-1.066-1.17,0.348-1.398,0.521-2.332c0.382-1.978,0.729-3.497,0.066-5.395
	   c-0.452-1.303-1.328-1.156-1.109-2.396c0.077-0.437,1.745-1.977,1.996-3.115c0.271-1.226-0.188-2.558,0.532-3.699
	   c1.862-2.938,3.438,0.237,5.862-0.387c0.272-0.372,0.393-0.371,0.666-0.667c0.372-5.628,8.849-4.733,8.438-10.56
	   c1.729-0.109,3.514,0.008,5.229-0.101c0.416-1.971,0.947-3.946,1.436-5.9c2.506-0.045,3.443-1.126,3.344-3.659
	   c1.063-0.613,2.104-2.809,3.264-3.34c1.23-0.571,3.646,0.02,5.02-0.05c3.297-0.169,6.424-1.084,9.667-0.341
	   c3.369,0.772,5.473,2.716,9.333,2.024c1.813-0.324,3.061-0.961,5-1.016c1.563-0.044,2.882,0.013,4.271-0.725
	   c0.101-0.936,0.103-1.953,0.01-2.894c-0.994-0.327-1.615-0.771-2.567-1.097c-1.11-4.954-4.271-2.586-7.429-4.284
	   c2.438-1.402,9.079,0.229,11.788,0.918c4.056,1.032,6.428,2.313,10.875,2.032c0.105-1.043,0.213-1.898,0.434-2.899
	   c3.276-0.205,5.292-1.063,8.283-2.05c2.838-0.938,4.646-2.61,7.999-2.016c1.229,0.218,2.229,1.695,3.688,0.966
	   c1.438-0.717,1.225-2.583,2.98-3.265c1.074-0.415,3.5-0.768,4.607-0.277c1.197,0.532,1.23,1.848,2.666,1.974
	   c1.371,4.502,3.891,2.399,7.061,1.333c1.371-0.462,2.866-0.382,4.333-0.382c0.639,0,1.752-0.222,2.341-0.008
	   c0.625,0.228,0.732,0.867,1.063,1.018c2.512,1.159,4.906,0.945,7.936,0.99c3.575,0.054,5.354-0.204,5.333,3.667
	   c-0.011,2.239-0.797,6.27-0.008,8.333c0.435,1.138,1.729,2.338,3.34,1.674c1.415-0.585,0.802-1.703,2.328-2.339
	   c5.434-2.271,9.97,2.124,12.747,5.924c1.429,1.957,1.853,4.382,2.926,6.741c0.812,1.774,2.168,4.714,3.497,6.106
	   c1.124,1.178,2.945,1.431,4.077,2.634c1.126,1.202,1.75,3.083,3.344,3.934c3.157,1.684,7.464-1.413,9.771,2.326
	   c1.854,3.014,2.189,6.203,6.646,7.008c2.612,0.472,4.106-0.375,6.255,1.763c1.51,1.501,2.611,3.798,2.993,5.881
	   c0.715,3.911-0.418,6.83,2.672,10.001c2.725,2.792,3.829,2.681,7.747,2.681c2.188,0,6.063-0.722,7.758,0.575
	   c0.917,0.702,0.953,2.25,1.992,3.025c0.707,0.527,2.363,0.962,3.25,1.083c3.041,0.413,4.785-0.312,7.104,1.89
	   c0.438,0.423,0.361,1.425,0.806,1.784c0.479,0.405,1.354,0.049,1.782,0.552c0.912,1.093,1.265,1.768,0.934,3.365
	   c-1.688,0.387-11.073,4.688-6.624,6.398c1.122,0.431,4.223-0.987,5.674-1.007c1.777-0.024,3.563,0,5.333,0
	   c1.82,0,3.964,0.302,5.688-0.234c2.416-0.754,2.264-1.472,4.729-0.514c1.981,0.769,2.761,1.865,4.601-0.234
	   c1.604-1.842,0.635-3.353,3.473-3.971c2.745-0.598,6.271,0.418,9.139,0.237c-0.031-0.787,0.461-1.439,0.436-2.225
	   c1.074-0.385,2.23-0.21,3.209-0.792c0.856-0.513,1.407-1.941,2.396-2.291c0.961-0.34,2.333,0.258,3.341,0.042
	   c1.448-0.31,2.111-0.974,3.333-1.758c2.271-1.454,4.09-1.871,6.667-2.591c2.454-0.687,4.104-2.706,6.333-3.341
	   c4.028-1.147,9.674,0.266,13.598,0.755c1.573,0.196,5.029,0.917,6.666,0.202c1.979-0.867,1.649-3.171,2.473-4.893
	   c2.038,0.214,3.206-2.114,5.683-1.408c1.964,0.561,2.79,1.853,2.646,3.966c3.091-0.111,8.176,2.849,11.196,3.799
	   c4.271,1.338,6.813,2.971,11.416,1.819c4.604-1.151,6.263-0.004,8.75,3.683c1.063,1.565,2.149,4.132,3.92,5.015
	   c0.854,0.425,2.095,0.031,2.994,0.402c0.688,0.279,1.209,0.78,1.944,1.056c0.396,1.923,1.671,2.632,2.464,4.202
	   c1.563,3.094-0.813,2.979-1.748,5.076c-1.594,3.582,0.971,8.364-1.05,11.951c-4.377,0.916-2.763,7.808-2.993,11.324
	   c-1.498,0.729-1.353,2.505-1.959,4.056c-0.561,1.434-1.058,2.117-1.979,3.41c-1.954,2.738-1.521,5.111-1.729,8.541
	   c-3.021,0.191-5.723-0.353-8.266,1.143c-2.107,1.239-5.209,3.184-5.692,5.566c-0.232,1.177,0.612,3.452-0.302,4.365
	   c-0.796,0.795-3.646,0.312-4.698,0.311c-2.788-0.003-4.768,0.647-7.292,1.064c1.071,1.106,2.438,3.479,2.646,4.927
	   c0.237,1.724-0.729,2.502-0.938,4.008c-0.17,1.255,0.479,2.207,0.526,3.065c0.169,2.697-1.261,4.644-3.604,6.193
	   c-1.263,0.836-2.313,0.235-2.598,2.009c-0.044,0.281,0.827,2.434,0.891,3.015c-2.271-0.147-4.019,0.121-6.293,0.4
	   c-2.76,0.338-4.049-0.882-6.33-1.35c-1.063-0.219-2.271,0.222-3.334,0.034c-1.188-0.21-1.804-1.221-3.268-0.968
	   c-1.354,0.234-3.521,2.292-4.35,2.989c0.104,0.224,0.217,0.449,0.313,0.677c2.313,5.054,3.023,10.963,5.551,15.953
	   c0.699,1.382,1.521,1.504,0.688,3.598c-0.254,0.016-7.38,0.439-7.242,0.711c1.367,2.679,0.168,6.25,0.708,9.265
	   c0.79,4.416,5.896,9.167,10.259,9.741c3.777,0.496,14.398-0.548,10.025,6.426c-1.423,2.27-3.096,4.201-2.366,7.574
	   c0.58,2.676,3.163,4.493,4.604,6.741c0.646,1.021,0.925,2.252,1.668,3.259c0.705,0.955,1.758,1.577,2.493,2.602
	   c1.478,2.032,0.529,4.369,2.209,6.326c-1.434,0.503-2.771,1.509-4.303,2.156c-1.897,0.806-2.215,1.047-3.083,2.834
	   c-0.755,1.554-0.584,3.012-2.25,3.414c-1.525,0.37-3.32-1.145-3.396-2.631c-2.188,1.291-4.455,3.891-4.318,6.583
	   c0.002,0.036-3.604,0.384-4.013,0.632c-0.874,0.541-0.914,1.299-1.521,1.955c-0.271,0.306,0.103,0.978-0.271,1.264
	   c-0.384,0.298-1.036-0.077-1.38,0.181c-1.525,1.143-3.027,1.216-2.819,3.968c0.11,1.46-3.93-2.424-3.998-2.5
	   c-1.349-1.577-2.623-3.177-4.875-3.252c-0.095-1.154-0.05-2.317-0.127-3.477c-1.002-0.331-1.871-0.598-2.896-0.766
	   c-0.229-3.726,1.142-6.74,0.896-10.566c-0.431-0.079-0.798-0.087-1.226,0.008c-0.604,1.244-1.938,1.781-2.106,3.226
	   c-3.219,0.908-9.002,1.01-10.007,5.001c-1.301,0.15-3.407,0.788-3.041,2.147c0.209,0.781,2.291,1.091,2.771,1.486
	   c1.651,1.354,2.411,3.225,2.666,5.407c0.146,1.199,0.188,2.939-0.331,4.024c-0.587,1.23-2.482,1.54-2.018,3.315
	   c0.521,1.935,3.094,1.714,3.964,3.104c0.674,1.078,0.281,2.354,0.204,3.521c-0.124,1.873-0.485,3.813,1.104,5.104
	   c1.121,0.916,1.734-0.034,2.604,1.235c0.534,0.789,0.295,2.333,0.443,3.249c0.854,5.324,5.235,9.318,5.688,14.771
	   c0.165,1.992,0.532,5.596-0.31,7.335c-0.729,1.511-1.992,1.857-2.375,3.665c-0.153,0.726,1.02,7.229,1.759,6.646
	   c0.513-0.403,1.357-0.511,1.854-0.95c0.176,1.911-0.122,4.929,0.971,6.563c1.063,1.596,3.377,1.396,4.529-0.494
	   c1.141-1.866-0.563-3.345,1.479-4.782c0.701-0.496,2.007,0.315,2.71-0.628c0.588-0.801,0.034-2.66,0.19-3.563
	   c1.571,0.26,7.438,6.71,5.1,7.302c1.104-0.278,2.729,0.417,3.837,0.146c1.146,3.609-1.104,7.813,3.197,8.481
	   c1.479,1.308,0.655,2.839,1.616,4.517c1.127,1.979,3.427,1.752,4.845,3.099c2.381,2.258,3.938,7.829,8.539,6.604
	   c0.039-0.188,0.075-0.369,0.111-0.554c1.857-0.324,3.094-1.982,4.938-2.396c2.54-0.558,3.797,1.102,5.951,1.729
	   c-0.013,1.93,4.214,6.385,5.697,6.924c1.479,0.538,2.896,0.004,4.353,0.346c0.87,0.204,2.167,0.813,2.771,1.481
	   c0.729,0.813,0.349,1.253,0.827,1.956c0.896,1.305,1.688,2.871,3.688,2.948c-0.664,2.563-0.197,6.985,1.428,9.199
	   c1.231,1.681,4.733,1.323,6.607,1.415c2.4,0.11,4.771,0.564,7.008,1.334c1.869,0.646,2.632,2.14,4.563,3.021
	   c1.188,0.549,2.214,0.266,3.438,0.646c2.479,0.771,2.412,3.102,3.729,5.331c1.92,3.26,2.701,2.454,5.931,2.979
	   c2.396,0.386,2.917,1.628,4.25,3.269c0.099,0.121,3.477,5.031,0.52,4.521c-2.979-0.521-3.563-0.272-4.769,2.104
	   c-1.222,2.415-4.236,4.906-4.966,7.334c-1.479,0.236-4.127-0.041-5.365,0.874c-1.396,1.032-1.429,3.417-1.911,4.851
	   c-0.749,2.206-1.428,3.438-3.591,4.316c-1.556,0.643-3.753,0.633-4.438,2.684c-0.975,2.936,2.227,8.441-0.05,11.021
	   c-1.396,1.594-2.911,0.242-4.183,2.317c-0.817,1.335-0.074,3.737-1.688,4.39c-0.944,2.865,0.672,6.195,1.672,8.885
	   c1.408,0.188,1.609,1.418,1.229,2.685c-1.063,0.074-2.18,0.021-3.232,0.104c-0.165,0.563-0.453,0.948-0.438,1.554
	   c-1.78,1.563-2.438,5.26-3.692,7.573c-1.729,3.208-3.457,6.296-5.916,8.992c-1.354,1.487-3.618,3.973-2.563,6.165
	   c0.938,1.947,4.131,1.769,5.42,3.556c0.755,1.048,1.01,2.36,1.895,3.354c2.111,2.354,3.438,0.791,5.854,1.813
	   c1.894,0.813,2.396,4.164,4.684,3.891c0.16-2.523-0.854-5.993,2.384-5.946c2.242,0.033,2.947,2.471,4.667,4
	   c3.577,3.18,6.104,5.903,11.283,6.05c-0.129,0.656,0.229,1.577,0.104,2.231c1.258,0.071,3.023-0.291,4.222,0.102
	   c0.796,0.262,2.686,1.875,3.735,2.374c1.282,0.604,2.284,1.313,3.396,1.92c1.499,0.823,2.339,0.466,3.854,0.981
	   c2.313,0.795,3.717,3.205,4.483,5.674c0.542,1.721-0.229,7.102,2.193,6.604c0.038-0.185,0.073-0.361,0.109-0.555
	   c3.184-1.168,4.222,1.354,6.688,3.178c2.42,1.788,4.521,2.938,7.199,4.157c-0.106,0.529,0.225,1.354,0.113,1.885
	   c2.353,1.067,4.199,1.938,6.604,2.644c2.218,0.646,5.505,2.021,6.396,4.356c1.939,0.544,2.978-1.756,4.361-2.51
	   c2.207-1.188,2.238-0.576,4.729,0.479c3.354,1.421,6.599,3.475,9.845,4.769c1.952,0.778,3.313,0.75,4.924,2.418
	   c1.667,1.729,1.938,3.538,4.417,3.907c3.896,0.578,8.104-2.514,12.282-1.616c0.644,2.005,2.12,3.524,2.394,5.606
	   c0.256,1.935-0.075,4.021,0.05,5.957c2.521,0.157,9.672-1.315,10.018,2.008c3.229,0.182,7.288-1.166,10.321-0.063
	   c1.813,0.66,2.807,2.032,3.618,3.438c0.831,1.433,1.396,4.72,3.938,3.957c0.506-1.354,2.94-1.879,3.973-2.961
	   c1.031-1.08,1.729-2.529,2.146-3.938c4.271-0.313,8.646-0.797,12.528,1.021c2.521,1.185,4.702,3.8,7.756,2.971
	   c1.063-0.289,1.854-1.31,2.882-1.741c3.061-1.307,5.057-1.396,8.438-1.976c2.75-0.474,1.823-0.771,2.729-3.282
	   c2.222-0.49,2.521,0.959,4.271,1.641c1.2,0.47,2.889-0.188,3.934,0.726c0.729,0.642,0.9,2.48,1.646,3.351
	   c3.918,4.552,12.169,2.212,17.396,3.47c0.122,1.887,1.098,3.767,1.452,5.688c0.354,1.922,0.271,3.425-0.438,5.104
	   c-1.328,3.188-2.896,7.094,2,7.999c3.695,0.688,7.646-0.675,10.924,0.75c3.188,1.386,5.813,2.747,6.813,6.188
	   c1.572,0.112,4.516-0.564,5.938,0.057c2.25,0.979,0.945,3.375,2.324,5.089c1.354,1.688,3.76,1.24,5.676,1.25
	   c2.938,0.02,2.771-1.03,4.944-2.062c0.468-1.313,4.5-3.979,5.973-4.688c1.986-0.962,4.771-0.68,7.032-0.53
	   c0.266,4.153-0.161,8.406,0.104,12.563c1.508-0.084,3.063,0.271,4.304,1.14c0.947,0.663,1.764,2.522,2.896,2.519
	   c0.496-0.009,2.581-1.729,3.016-1.987c0.938-0.58,1.764-1.261,2.728-1.938c1.462-1.039,1.083-1.495,3-1.667
	   c1.911-0.17,3.114,0.884,4.709,1.771c2.275,1.271,4.634,1.727,7.253,0.854c0.617-2.202,4.798,0.521,6.391,1.048
	   c1.198,0.396,2.146,0.401,3.334,0.668c1.474,0.318,1.758,0.826,2.646,1.331c1.588,0.896,3.898,1.396,5.688,2.669
	   c1.354,0.953,2.727,3.695,4.271,3.604c0.146-0.65,0.629-0.893,0.78-1.548c4.336,0.508,6.188-0.913,8.938-3.72
	   c0.617-0.63,0.439-1.146,1.325-1.685c0.614-0.371,1.621,0.125,2.34-0.326c1.396-0.878,0.938-2.938,2.61-3.278
	   c1.313,2.479,2.021,6.76,2.104,9.563c1.699,0.104,3.699-0.28,5.229,0.438c-0.034,0.354,0.139,0.857,0.104,1.229
	   c2.604-0.24,4.069,2.771,5.624,2.134c2.213-0.904,0.778-4.388,3.743-5.065c2.979-0.688,5.907,2.192,9.045,1.229
	   c1.065-0.327,1.74-1.036,3.062-1.271c0.639-0.105,9.105-2.25,9.096-2.043c0.065-0.688,0.529-1.123,0.438-1.897
	   c2.418,0.894,5.867,6.778,7.563,6.236c0.834-1.547,1.396-3.845,1.799-5.532c0.449-1.911,0.001-3.855,1.524-5.383
	   c-0.089,0.438,0.136,1.128,0.109,1.593c4.229,0.256,4.615-0.593,4.616-4.613c0-1.272-0.112-2.854,0.479-4.034
	   c0.438-0.88,2.442-1.854,2.604-2.362c0.471-1.489-1.604-4.295-2.418-5.537c-1.182-1.813-2.369-2.326-2.757-4.658
	   c-0.279-1.683,0.058-3.587-0.052-5.277c-2.495,0.342-0.959-1.851-1.941-3.04c-1.018-1.229-2.712,0.102-3.771-0.911
	   c-1.389-1.314,0.063-7.361-0.625-9.396c-0.021-0.059-1.396-0.568-1.567-0.722c3.374-1.663,2.172-3.09,1.541-6.313
	   c-0.354-1.784,0.703-2.783,1.006-4.249c0.407-1.974-0.854-3.92-0.894-5.876c-0.043-2.341,2.287-2.652,3.155-4.617
	   c0.396-0.896,0.466-1.908,0.983-2.757c0.609-0.98,0.589-1.07,0.994-2.25c0.373-1.084,1.158-2.149,1.513-3.19
	   c0.466-1.354,1.317-4.915,0.994-5.874c-0.599-1.779-2.716-2.78-2.718-5.146c1.208-0.076,2.465,0.001,3.673-0.076
	   c-0.396-1.855,3.563,0.052,4.701-0.313c2.402-0.75,0.434-3.676,4.279-2.943c0.771,0.146-0.154,3.049,1.714,1.758
	   c0.021-0.021,0.604-1.581,0.688-1.753c0.555-1.035,1.312-1.688,1.687-2.927c1.421,0.116,2.09,1.903,3.431,1.68
	   c0.065-1.043,0.013-2.131,0.076-3.175c0.71-0.021,1.464-0.057,2.174-0.075c-0.056-0.604,0.134-1.316,0.076-1.925
	   c0.7-0.042,2.313-0.329,2.785,0.189c1.042,1.146-0.702,1.996,1.177,2.521c0.898,0.249,1.576-0.566,2.5-0.521
	   c0.667,0.037,2.587,0.73,3.25,1.006c2.161,0.886,2.366,2.893,2.5,5.019c0.146,2.333-1.313,4.317,2.212,4.038
	   c0.119,1.875,0.058,2.9-0.761,4.401c-0.464,0.856-2.271,3.531,0.521,3.604c-0.104,1.625-0.554,3.938-1.274,5.396
	   c-0.739,1.468-2.396,2.938-2.229,5.025c-0.396-0.09-1.021,0.166-1.425,0.071c-0.021,0.563,0.078,1.37,0.257,1.919
	   c0.143,0.024,0.272,0.061,0.411,0.089c0.199,2.786,0.787,6.646,3.162,8.278c1.409,0.967,2.501,0.763,2.726,2.891
	   c0.153,1.51-0.729,3.229-1.063,4.678c-3.771-0.063-2.5,2.543-2.786,4.959c-0.42,3.536-0.688,1.908,1.713,4.758
	   c1,1.188,0.656,2.929,1.532,4.281c0.755,1.17,2.146,2.045,3.179,2.957c1.797,1.592,2.113,1.077,4.584,1.406
	   c3.101,0.413,1.946,1.063,3.252,3.079c1.229,1.896,2.584,2.109,4.748,2.251c4.12,0.264,5.508-4.021,10.01-2.676
	   c1.682,0.5,2.814,2.61,4.396,3.271c1.285,0.536,3.479,0.505,4.904,0.813c-0.826,1.125-2.398,2.271-1.916,3.882
	   c2.259-1.061,4.764-1.775,7.604-1.623c2.893,0.159,6.129,0.123,8.938-0.396c2.748-0.51,4.987-2.146,7.638-2.871
	   c2.126-0.586,3.833-0.554,6.01-1.396c2.262-0.88,4.342-1.298,6.596-1.988c3.063-0.942,3.063-2.667,3.123-5.555
	   c2.569-0.161,5.885-0.601,8.281-0.389c1.99,0.18,3.575,1.261,5.265,2.398c1.663,1.127,4.146,2.734,5.993,3.456
	   c2.479,0.966,5.563,0.294,8.236,0.461c2.413,0.146,4.85,0.442,7.247,0.708c2.431,0.268,2.763-0.771,5.017-1.521
	   c1.896-0.636,3.293,0.272,5.134,0.517c2.736,0.352,6.431,0.271,8.847-0.813c-0.207-1.867,0.778-2.593,2.271-3.207
	   c0.475-0.19,1.772-0.759,2.188-0.812c0.837-0.106,1.784,0.396,2.772,0.354c0.063,1.043,0.021,2.127,0.063,3.177
	   c2.481,0.479,3.74-1.499,5.97-1.979c2.229-0.478,5.313,0.993,7.021-0.735c1.053-1.063,1.021-3.032,3.507-2.25
	   c1.729,0.55,1.238,1.854,1.529,3.66c1.951-1.229,1.521-2.38,1.521-4.229c0.005-0.952-0.764-1.009,0.438-1.693
	   c0.61-0.354,2.353,0.078,2.959,0.31c-0.024,0.271,0.105,0.646,0.075,0.92c2.521,0.169,5.652,0.063,6.464-2.463
	   c1.071-3.36-1.168-5.396-1.287-8.455c-1.59-0.406-4.979-2.193-5.47-3.795c-0.277-0.923,0.016-3.935,0.543-4.688
	   c0.6-0.853,1.804-0.654,2.271-1.559c0.404-0.771-0.172-1.813,0.175-2.519c0.34-0.689,1.729-0.693,1.979-1.274
	   c0.441-1.055-0.875-2.24-1.521-2.965c-1.075-1.204-2.271-2.494-3.146-3.731c-1.209-1.706-1.237-3.317-3.558-2.006
	   c-1.84,1.041-2.418,1.838-4.774,1.988c-2.688,0.181-3.829-0.404-5.229,1.981c-1.086-2.009-0.646-2.649-2.938-3.731
	   c-1.313-0.612-3.156-0.936-4.063-2.243c-0.646-0.938-0.534-2.71-0.929-3.82c-0.438-1.252-1.754-2.453-2.035-3.642
	   c2.779-0.396,2.132-4.301,2.257-6.258c2.552-0.16,5.19-0.063,7.757-0.038c2.663,0.022,5.092,0.649,7.525,1.206
	   c1.022,0.229,2.018,0.577,2.929-0.143c0.901-0.709,0.979-1.873,1.75-2.83c0.806-0.984,1.743-1.083,2.809-1.664
	   c2.021-1.104,3.454-0.956,5.905-1.105c0.041-0.801,0.041-1.625-0.005-2.42c-0.179-0.084-0.354-0.177-0.465-0.232
	   c0.979-0.167,2.016-0.065,2.967,0.232c1.146,3.53,1.604,1.729,3.788,0.394c2.154-1.32,5.035,0.428,6.964-0.979
	   c-0.716-4.266,12.474-5.646,8.985-10.712c-0.723-1.051-2.346-1.459-3.404-2.021c-0.592-1.854,1.279-2.237,2.229-3.403
	   c0.921-1.138,0.423-1.979,1.021-3.011c0.932-1.572,4.421-2.069,5.949-3.061c0.813-0.521,1.724-0.875,2.492-1.492
	   c1.114-0.896,1.215-1.891,2.051-2.771c0.677-0.719,2.207-0.966,3.013-1.669c0.935-0.813,0.935-1.464,1.771-2.491
	   c0.582-0.711,1.313-0.889,1.918-1.642c0.604-0.753,0.963-1.915,1.515-2.936c1.17-2.146,1.25-3.754,1.25-6.25
	   c0-2.146-0.767-4.854,1.313-5.507c2.236-0.696,4.361,0.226,6.618-0.812c2.248-1.021,4.62-1.896,6.813-2.942
	   c1.104-0.523,1.836-1.053,3.002-1.239c1.632-0.271,3.438,0.392,5.021-0.188c1.356-0.483,2.271-1.944,3.168-3.006
	   c0.863-1.021,1.479-1.396,2.563-2.126c1.468-0.992,4.729-2.396,4.281-4.646c1.213-0.271,5.869-2.269,6.226-3.521
	   c0.362-1.301-2.188-2.749-1.332-3.836c0.495-0.637,3.745-0.159,4.525-0.224c0.981-0.073,2.021-4.425,2.27-5.249
	   c0.616-2.08,2.25-3.316,3.813-4.699c2.104-1.855,2.805-4.123,5.477-5.274c2.188-0.938,4.655-0.8,6.743-1.674
	   c2.688-1.124,2.621-2.642,2.771-5.521c4.096-0.255,7.666,3.028,10.854,5.271c2.856,2.018,4.304,2.333,7.604,1.925
	   c2.183-0.271,3.983-0.883,6.267-0.739c2.396,0.146,4.207,0.471,6.239,1.706c2.313,1.411,4.479,3.041,7.209,2.729
	   c1.521-0.176,3.673-0.303,4.802-1.438c1.289-1.294,1.438-3.721,0.53-5.203c0.88-0.063,1.807-0.021,2.688-0.081
	   c0.022-0.524,0.139-1.181,0.037-1.712c-0.146-0.805-1.16-1.264-1.195-1.812c-0.097-1.364,2.229-2.38,3.183-3.257
	   c2.178-2.002,5.012-3.493,7.714-5.009c2.521-1.413,5.095-2.916,7.485-4.582c0.743-0.521,1.594-0.521,2.276-1.354
	   c0.466-0.563,0.104-1.128,0.787-1.771c1.109-1.042,1.859-0.171,1.848-2.396c2.104,0.479,1.568,2.725,2.709,3.92
	   c0.854,0.9,2.207,1.146,3.146,2.146c0.813,0.86,0.543,0.569,1.104,1.646c1.125,2.148,2.129,3.706,4.505,3.258
	   c1.438-0.271,2.563-0.99,4.163-0.264c-0.057,0.98,0.938,2.247,0.525,3.201c-0.639,1.478-2.035,0.16-3.197,0.799
	   c-0.807,0.438-3.783,5.239-3.846,6.158c-0.486-0.103-1.185,0.173-1.668,0.072c-0.351,1.113-1.439,1.688-1.514,2.928
	   c1.438,0.11,2.779,0.438,4.163,0.563c1.034,2.271-0.913,4.001-0.22,5.979c0.354,1.01,1.242,1.729,2.268,1.198
	   c1.354-0.705,0.993-2.188,1.008-3.457c0.037-4.889,5.354-7.206,9.957-6.969c0.688,1.472,0.338,2.955,0.854,4.482
	   c0.563,1.646,2.113,3.746,3.369,5.17c0.854,0.961,5.01,2.87,4.832,4.063c-0.176,1.223-1.147,0.459-1.521,0.979
	   c-0.368,0.521-0.188,1.354-0.479,1.779c-1.265,1.854-4.957,1.907-5.021,5.229c-0.041,2.271,1.104,1.417-0.567,3.231
	   c-0.839,0.908-1.547,2.259-3.132,2.313c-0.597,1.121-1.385,5.45,0.419,5.493c0.5,2.34-3.863,2.522-3.191,5.669
	   c1.264,0.311,2.482,0.11,3.729,0.294c1.028,0.146,1.968,0.638,2.957,0.72c0.627-1.56-0.271-2.63,0.922-3.803
	   c0.896-0.882,3.188-2.097,4.377-2.729c1.681-0.896,4.065-2.188,5.994-1.938c1.729,0.227,4.166,2.359,5.733,3.234
	   c2.695,1.5,3.457,0.979,6.207,0.206c0.685-0.188,1.304-0.563,2.104-0.396c1.289,0.273,1.854,1.886,3.198,1.959
	   c1.688,0.093,2.479-1.644,4.179-2.064c1.125-0.282,4.609-0.694,5.896-0.153c0.748,0.313,1.328,1.703,1.91,2.211
	   c0.765,0.662,1.521,1.047,2.471,1.354c0.188,1.783,1.276,2.058,2.716,2.941c1.918,1.188,2.093,1.521,2.079,3.706
	   c-0.006,1.044-0.396,3.063,0.037,4c0.761,1.654,3.181,1.511,3.174,3.714c-0.229,0.021-0.438,0.054-0.668,0.08
	   c-0.905,1.908-0.196,5.038-0.332,7.168c-1.713,0.107-3.354-0.285-4.963-0.211c-2.114,0.104-3.026,1.119-4.455,2.043
	   c0.709,4.146-5.28,6.857-6.588,9.664c-1.524,0.065-2.689,2.521-3.252,3.749c-3.916-0.068-0.689,10.278,0.104,12.034
	   c0.171,0.377,1.771,0.461,2.173,0.813c0.595,0.521,0.649,1.278,1.015,1.938c0.446,0.824,1.47,1.139,1.707,1.979
	   c0.007,0.021,2.156,1.56,2.446,1.997c0.727,1.097,1.407,1.62,2.136,2.563c1.229,1.604,3.976,4.122,4.188,6.168
	   c-1.302,0.406-1.371,2.174-2.454,2.563c-1.143,0.417-3.099-1.212-4.063-1.703c-2.57-1.304-4.771-2.44-7.647-2.604
	   c-0.115-1.613,0.438-3.666-0.729-4.979c-0.553-0.619-1.688-0.675-2.39-1.16c-0.625-0.438-0.962-1.244-1.604-1.623
	   c-1.196-0.698-3.563-0.771-4.771,0.053c-1.288,0.876-0.434,1.75-2.288,1.396c-0.976-0.188-2.103-1.163-2.317-2.115
	   c-1.263,1.424-0.646,3.334-2.438,4.17c-1.628,0.756-3.854,0.777-5.501,1.418c-0.959,0.372-1.779,1.332-2.738,1.646
	   c-0.81,0.264-1.954,0.059-2.791,0.229c-1.44,0.302-3.395,0.938-4.651,1.565c-1.063,0.521-2.45,0.866-3.369,1.437
	   c-3.234,1.979-6.687,7.182-7.943,10.521c-0.968,2.559-1.175,3.728-4.297,3.992c-4.16,0.356-4.754,5.334-7.78,7.838
	   c-0.677,0.563-1.255,0.708-2.035,1.153c-1.188,0.679-1.313,0.579-2.631,0.843c-1.727,0.349-3.395,1.893-4.084,3.47
	   c-1.293,2.952-4.344,4.563-4.438,7.837c-1.043,0.495-2.646,0.154-3.807,0.363c-1.868,0.341-3.099,1.643-4.413,2.953
	   c-1.271,1.271-2.438,2.678-3.313,4.252c-0.416,0.753-0.593,1.85-1.063,2.521c-0.298,0.43-0.799,0.41-1.139,1.006
	   c-1.2,2.11-0.313,4.516,0.619,6.436c0.502,1.032,0.412,2.018,0.489,3.146c0.524,0.035,1.688-0.209,2.137,0.046
	   c1.021,0.59,0.841,2.313,0.959,3.317c0.241,2.008,0.806,4.307,0.183,6.298c-0.352,1.109-0.928,2.188-1.146,3.39
	   c-0.17,0.932-0.037,1.979-0.15,2.979c-0.104,0.872-0.223,2.242-0.827,2.836c-0.688,0.669-1.673,0.64-2.382,1.554
	   c-1.523,1.979-2.954,3.938-3.452,6.271c-0.368,1.729-1.898,2.91-2.005,4.839c-0.102,1.896,0.313,3.903,0.332,5.832
	   c0.021,1.668,0.816,3.765,0.125,5.282c-0.09,0.188-0.217,0.506-0.313,0.688c-1.95,0.688-1.901,3.726-3.672,4.499
	   c-0.728,0.313-1.859,0.519-2.64,0.704c-2.561,0.629-3.993,0.634-5,3.396c-1.043,2.866-0.577,6.201-0.733,9.188
	   c-0.058,0.936-0.521,2.321,0.034,3.167c0.738,1.13,3,1.333,4.202,1.396c1.385,0.065,3.966,0.021,4.979,1.048
	   c1.146,1.178,0.646,3.107,0.196,4.462c-0.688,2.063-0.014,4.244-0.5,6.323c-0.846,3.563-4.145,6.457-5.854,9.654
	   c-1.026,1.931-1.986,3.961-3.189,5.82c-1.063,1.641-1.938,2.935-2.099,5.054c-0.178,2.462-1.979,3.354-3.108,5.275
	   c-1.021,1.731-0.995,4.208-1.879,6.144c-3.604,7.919-5.194,14.131-5.619,23.65c-0.411,0.241-0.896,0.021-1.354,0.258
	   c0.242,2.854-0.282,5.462-2.159,7.229c-2.146-0.388-3.177-2.358-2.985-4.837c-4.283,0.279-6.229-1.979-9.845-2.486
	   c-3.343,6.761-7.422-1.538-10.498-2.548c-0.042,1.438-0.965,2.139-1.174,3.373c-2.688-0.108-5.38,0.363-8.021,0.767
	   c-1.78,0.271-4.373,0.813-5.438-1.188c-0.519-0.975,0.111-2.314-0.785-3.125c-0.552-0.493-2.816-0.604-3.54-0.368
	   c-1.906,0.615-1.344,2.548-0.224,3.695c1.197,1.229,1.206,1.173,1.428,2.92c0.126,1.009,0.195,2.135,0.509,3.047
	   c0.66,1.938,2.522,3.829,3.623,5.677c1.543,2.596,1.117,5.396,2.229,8.011c1.357,3.188,2.448,6.587,2.469,10.103
	   c0.021,4.227-0.095,8.462-0.438,12.673c-0.196,2.354-0.438,4.752-1.002,7.054c-0.286,1.156-0.688,1.688-1.354,2.582
	   c-1.101,1.466-1.104,2.979-1.525,4.716c-0.517,2.139-1.851,2.036-3.832,2.036c-1.438,0-2.75,0.687-4.18,0.305
	   c-1.514-0.397-1.938-1.133-3.465-0.271c-0.229,1.214,0.342,3.815,0.804,4.963c0.752,1.857,1.593,1.854,3.188,1.063
	   c-0.086,2.905,0.733,5.72-0.063,8.396c-0.655,2.217,0.438,4.314,0.709,6.539c0.263,2.151-0.157,4.617,1.541,6.143
	   c0.916,0.817,1.444,1.481,2.131,2.528c0.537,0.826,1.714,1.628,1.476,2.813c-2.077,0.901-0.563,6.196-1.137,8.021
	   c-0.188,0.575-0.439,0.771-0.701,1.306c-0.095,0.188-0.301,1.313-0.658,1.529c-1.688,1-3.119-2.285-5.1-0.322
	   c-1.285,1.273-0.689,2.635-0.88,4.451c-0.228,2.203-1.792,1.188-2.965,2.666c-1.271,1.604-1.123,3.547-1.729,5.354
	   c-1.229,0.181-3.035,0.634-4.268,0.48c-1.604-0.188-1.59-1.845-2.243-3.294c-0.845-1.854-1.536-3.016-3.14-4.305
	   c-0.646-0.521-1.418-0.933-2.015-1.533c-0.677-0.688-0.672-1.467-1.778-1.498c-1.738-0.053-1.479,2.809-1.37,4.164
	   c0.146,1.869,1.034,3.24-1.167,3.793c-2.047,0.521-1.985-0.146-2.167-1.959c-0.188-1.906-1.807-2.752-2-4.666
	   c-0.484-4.75-1.333-9.716-1.333-14.517c0-2.012-1.314-3.617-1.799-5.524c-0.267-1.047-0.552-2.137-1.024-3.12
	   c-0.576-1.188-1.362-2.286-1.806-3.55c-0.354-1.005-0.396-1.995-0.829-3.008c-1.098-2.567-1.993-4.96-3.353-7.46
	   c-0.534-0.989-1.396-1.736-2.002-2.68c-1.014-1.576-1.137-3.688-1.75-5.416c-0.688-1.938-1.612-3.268-1.604-5.436
	   c0.007-1.789,0.146-3.511,0.168-5.264c0.035-3.104,0.785-6.799,0.166-9.872c-0.396-1.923-2.23-2.491-3.202-4
	   c-0.771-1.188-0.492-2.878-0.339-4.292c0.188-1.648,0.437-3.063-0.401-4.533c-0.933-1.632-1.146-2.9-1.563-4.674
	   c-0.148-0.652-0.229-1.354-0.521-1.975c-2.701-0.26-5.438,1.146-5.844,3.919c-0.269-0.646-0.628-1.489-1.171-1.94
	   c-1.063-0.878-0.993-0.435-1.752,0.371c-1.041,1.104-2.264,2.899-2.729,4.438c-1.021,0.052-4.421-1.245-5.026-0.647
	   c-0.27,0.259-0.229,1.6-0.285,1.962c-0.182,1.202-0.314,2.438-0.788,3.558c-0.724,1.707-0.569,3.771-0.341,5.857
	   c0.229,2.119,0.117,2.648-2.188,2.8c-2.313,0.146-3.185,0.29-3.178,2.834c0.005,1.104-0.188,2.359-0.007,3.452
	   c0.274,1.729,1.586,3.063,2.132,4.664c0.577,1.692,0.934,4.83,0.339,6.508c-0.592,1.667-2.465,3.138-3.416,4.719
	   c-0.854,1.416-2.15,2.448-3.172,3.814c-1.496,2.014-2.146,2.436-3.542,0.181c-0.979-1.579-1.811-2.766-3.166-3.999
	   c-1.417-1.284-2.688-2.479-3.423-4.294c-1.281-3.169,0.719-7.591-2.744-9.549c-1.461-0.827-2.69-1.709-2.834,0.545
	   c-0.16,2.6-0.03,4.688,0.851,7.085c0.614,1.682,0.687,3.79,0.814,5.557c0.23,3.041-1.212,2.982-3.979,2.798
	   c-0.638-1.891-2.082-3.709-2.353-5.646c-0.209-1.498,0.296-3.108,0.166-4.501c-0.146-1.604-1.452-3.092-2.079-4.62
	   c-0.899-2.203-0.921-4.291-0.921-6.717c0-0.722,0.146-1.63-0.002-2.329c-0.161-0.771-0.813-1.604-1.202-2.339
	   c-0.979-1.873-2.115-3.622-3.475-5.204c-0.948-1.104-2.599-3.591-2.33-5.119c0.149-0.896,0.591-1.367,0.675-2.339
	   c0.078-0.905-0.127-1.8,0.166-2.666c0.536-1.588,1.467-2.769,2.131-4.334c0.8-1.878,1.438-3.707,1.668-5.875
	   c0.146-1.416,0.135-2.924,0.571-4.291c0.436-1.334,1.923-2.023,2.604-3.218c0.766-1.325,0.889-1.771,2.598-2.174
	   c3.146-0.73,6.063,0.643,8.777-1.396c0.921-0.688,2.135-0.899,2.828-1.722c0.113-0.138-0.021-0.606,0.141-0.823
	   c0.354-0.484,1.146-0.891,1.683-1.217c0.817-0.506,1.829-0.783,2.549-1.289c1.452-1.021,0.832-2.693,2.803-2.504
	   c0.941,0.096,1.812,0.297,2.62,0.837c0.995,0.661,1.673,1.896,2.543,2.722c2.882-2.5,2.518-6.281,5.521-8.604
	   c0.646-0.503,5.438-3.815,5.427-2.573c0.038-2.729,3.037-4.433,4.645-6.297c1.442-1.688,1.388-2.037,1.406-4.584
	   c0.021-1.747,0.125-3.063,0.729-4.604c1.688-1.757,4.232-2.579,2.543-5.999c-1.287-2.604-3.014-2.946-1.888-6.346
	   c3.224-0.133,9.827,5.949,12.23,2.624c0.688-0.949,0.395-3.775-0.375-4.628c-0.966-1.064-2.747-0.696-4.188-1.096
	   c-0.104-1.712,0.104-4.674-1.521-5.669c-1.74-1.063-5.432-0.189-7.467-0.343c-2.729-5.515-10.121-5.092-15.221-4.146
	   c-2.896,0.534-5.758,1.381-8.506,2.438c-1.25,0.479-2.438,1.255-3.787,1.12c-0.584-0.063-4.396-1.912-4.271-2.424
	   c-0.688,2.726-5.229,1.229-7.604,1.092c-1.803-0.104-7.938-0.164-8.401-1.639c-2.705-0.568-4.688,1.688-7.354,1.545
	   c-2.118-0.111-3.854-1.604-5.988-1.582c-1.813,0.02-3.856,0.688-5.813,0.701c-4.903,0.039-9.832-0.314-14.692,0.521
	   c-4.229,0.731-9.284,0.906-13.563,0.754c-2.989-0.104-4.421-1.027-7.067-1.729c-1.59-0.425-5.041-0.592-6.646-1.234
	   c-3.163-1.274-4.525-3.601-8.063-3.196c-2.557,0.282-6.031,1.933-7.756-0.935c-3.021-5.021-1.219-13.38-1.572-18.959
	   c-0.166-2.593-1.082-5.225-1-7.669c0.093-2.663,1.16-4.604,0.938-7.604c-4.173-1.604-0.979-16.113-7.942-12.062
	   c-1.164,0.68-1.273,1.397-1.98,2.009c-1.58,1.354-2.274,0.979-3.041,2.54c-0.104,0.208,0.084,1.475-0.039,1.896
	   c-0.239,0.828-1.329,1.586-1.704,2.429c-0.271,0.604-0.248,2.409-0.646,2.768c-1.188,1.067-6.063,0.26-7.593,0.063
	   c-3.479-0.455-6.667-3.063-9.646-4.688c-2.104-1.146-2.891-1.815-3.987-4.021c-0.824-1.643-0.733-2.479-1.002-4.676
	   c-0.129-1.047-0.396-4.132-0.992-5.009c-1.01-1.482-4.063-0.677-3.739-3.596c-1.935-0.122-3.884-0.271-5.563,0.679
	   c-0.668,2.646,1.601,3.586,2.938,5.342c1.18,1.541,2.112,3.273,3.313,4.864c-1.043,0.087-2.238,0.188-3.304,0.063
	   c-1.771-0.201-1.646-0.827-2.729-1.331c-1.31-0.604-1.405-1.83-2.886,0c-0.395,0.479-0.131,2.188-0.389,2.714
	   c-0.422-0.771-0.688-1.982-1.061-2.995c-2.771-0.173-0.657,4.096-2.558,5.007c0.069,1.44-0.229,2.863-0.464,4.25
	   c-0.599-1.389-0.2-3.854-0.313-5.591c-1.228,0.153-2.595,0.468-3.896,0.229c-0.159-1.845,1.521-2.939,1.953-4.611
	   c0.354-1.384,0.028-3.563-0.061-4.949c-1.804-0.12-3.5-0.173-5.25-0.441c0.38-0.792,0.709-1.695,0.938-2.561
	   c-1.511-0.095-3.071-0.005-4.584-0.104c0.071-0.812-0.179-1.762-0.104-2.563c-1.802,0.295-5.775-2.104-5.679-3.988
	   c-0.771-0.164-1.354-0.564-2.229-0.428c0.002-0.854-0.26-2.156-0.383-2.353c0.179,1.527-0.757,2.055-1.013,3.375
	   c-0.375,1.965,0.508,2.563,1.259,4.102c1.479,3.04,1.922,3.063,5.355,3.294c0.326,1.447,1.273,2.741,1.011,4.229
	   c-2.03-0.113-3.472,0.523-4.614,1.79c-1.654,1.813-0.813,4.028-2.795,5.597c-2.025,1.602-4.729,1.505-6.438,3.763
	   c-1.11,1.469-1.946,2.354-1.521,4.319c0.332,1.505,1.644,2.063,1.362,3.854c-4.442,0.875-3.119,8.495-2.896,12.011
	   c1.854,0.367,3.429-0.456,5.188,0.146c1.373,0.468,2.771,0.783,4.107,1.228c1.643,0.539,2.732,1.538,3.966,2.75
	   c0.748,0.736,2.229,1.614,2.636,2.604c0.332,0.813-0.222,1.867,0.035,2.688c1.021,3.271,4.771,4.571,7.436,5.896
	   c2.021,1.005,2.771,1.328,5.25,0.494c2.226-0.746,2.629-1.896,4.26-3.367c0.494,1.479,1.507,2.847,2.146,4.228
	   c0.748,1.625,0.873,3.063,1.938,4.405c0.896,1.128,3.043,3.227,4.262,2.602c1.436-0.736,0.229-3.438,3.021-2.884
	   c0.326,1.432-1.267,8.767-2.411,9.646c-1.495,1.148-5.938-1.966-6.596,0.928c-2.938,0.186-5.786-0.481-8.629,0.051
	   c-2.134,0.396-5.652,0.142-7.593,1.061c-0.553,3.438,1.238,5.25,0.895,8.563c-3.882,0.134-3.108,1.147-3.332,4.666
	   c-1.396,0.091-2.843,0.017-4.229,0.104c-0.384,1.887,0.563,2.713,1.923,3.55c-0.896,0.104-2.563,0.383-3.237-0.26
	   c-0.893-0.839,0.13-2.207-0.709-3.028c-1.004-0.979-5.271-0.349-6.646-0.261c-0.196,3.17,0.513,6.245-1.136,8.866
	   c-0.502,0.8-1.202,1.229-1.666,2.083c-0.397,0.746,0.036,1.563-0.313,2.259c-0.718,1.422-2.479,1-1.625,3.091
	   c0.438,1.075,2.852,1.979,3.602,3.066c0.75,1.085,0.798,2.455,1.479,3.51c1.397,2.177,4.957,2.563,6,4.354
	   c2.065,0.229,4.312,1.281,3.99,3.678c2.321,0.146,4.698,0.021,6.875,0.791c1.868,0.656,2.905,1.71,5.073,1.927
	   c2.271,0.228,4.506-0.4,6.313,0.658c3.271,1.914,4.896,8.903,4.602,12.411c-0.264,3.048-2.061,5.03-3.104,7.938
	   c-0.521,1.449,0.104,2.128-1.305,2.98c-1.264,0.77-2.939-0.454-4.067,0.438c-0.932,0.74-0.969,3.153-1.065,4.203
	   c-0.315,3.313,0.146,6.666,0.354,9.977c0.699,0.052,2.354-0.271,2.967,0.027c0.783,0.4,0.521,1.298,0.979,1.691
	   c1.307,1.146,2.604,2.162,4.355,2.905c1.83,0.771,3.923,0.589,3.4,3.093c-0.196,0.973-1.146,0.946-1.502,1.92
	   c-0.283,0.777-0.104,1.536-0.254,2.402c-0.397,2.34-1.57,6.459-0.563,8.772c1.524,3.519,3.688-1.396,6.916-1.461
	   c1.339-0.021,6.104,1.366,7.216,2.021c-2.105-0.572-2.88,1.311-3.288,2.938c-3.257,1.471-2.018,7.356-2.814,10.081
	   c1.063,0.158,1.766,0.947,2.271,1.918c0.435,0.83,1.72,0.992,2.188,2.495c0.447,1.438,0.141,3.379,0.031,4.838
	   c-2.101,0.822-0.229,2.641,0.06,4.396c0.341,2.067,0.276,3.738,1,5.646c1.473,3.889,3,6.283,3,10.688
	   c0,4.586,1.073,6.563,3.438,10.26c3.813,5.955,2.589,10.617,1.412,17.199c-0.979,5.486,1.166,10.5,4.043,15.228
	   c11.038,18.073,4.381,68.499,2.606,89.09c-2.649,30.874-10.673,60.84-22.938,89.27c-27.35,63.365-72.865,113.431-112.61,168.763
	   c-44.229,61.565-88.371,125.297-136.474,183.887C862.128,1536.479,838.763,1559.833,811.083,1578.01z"/>
 <path id="water_1_" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="3.5433" d="M1123.899,836.75c-1.188-0.548-2.438-0.966-3.755-1
	   c-1.614-0.042-3.237-0.002-4.854,0c1.127,0.258,2.297,0.27,3.463,0.5c1.229,0.242,2.25,0.967,3.457,1.209
	   c0.98,0.196,2.123,0.178,2.892,0.916c0.679,0.642,1.127,1.206,1.888,1.781c1.435,1.098,2.896,2.02,4.555,2.813
	   c1.667,0.813,3.128,1.528,4.603,2.747c0.813,0.688,1.562,0.813,2.401,1.372c0.916,0.604,1.224,1.492,2.286,1.838
	   c1.141,0.369,2.239,0.662,3.291,1.328c0.859,0.544,1.354,1.422,2.141,2.021c1.105,0.838,2.604,1.007,3.918,1.253
	   c1.063,0.188,2.262,0.309,3.107,1.038c0.725,0.606,0.954,1.482,1.725,2.067c1.986,1.521,5.238,2.599,7.644,3.229
	   c1.303,0.347,2.854,0.679,4.188,0.838c1.368,0.164,2.188,0.954,3.382,1.486c1.309,0.574,2.798,0.729,4.127,1.306
	   c2.707,1.162,5.457,2.354,7.875,4.063c1.093,0.771,2.161,1.271,3.291,1.969c1.438,0.872,2.591,1.406,4.104,2.093
	   c1.646,0.746,3.338,1.493,4.665,2.758c1.535,1.464,1.955,2.496,2.846,4.32c0.926,1.896,2.341,2.327,4.104,3.333
	   c1.918,1.099,3.562,2.371,5.771,2.869c2.043,0.461,4.438-0.072,6.301,1.01c1.518,0.879,3.092,1.918,4.607,2.833
	   c1.995,1.2,2.243,3.229,2.313,5.443c0.055,1.764-1.438,4.148-1.02,5.728c0.549,2.07,3.104,1.656,4.64,2.586
	   c4.688,2.854,2.31,6.58,2.729,10.739c-2.673,0.166-8.226-0.737-9.752,2.051c1.755,2.063,3.688,4.001,5.373,6.126
	   c2.082,2.641,3.112,4.669,4.462,7.698c2.329,5.247,1.488,11.416,1.418,17.119c-1.646,0.411-3.135,1.891-3.969,3.142
	   c-1.219,1.822-0.396,2.604-0.781,4.616c-1.063,0.438-2.357,0.761-3.589,0.521c-1.229-0.238-2.313-1.396-3.584-1.195
	   c-0.062,0.986,0.302,2.618-0.045,3.514c-0.459,1.197-1.679,1.363-2.507,2.24c-0.868,0.922-1.037,1.931-1.271,3.096
	   c-0.396,1.947-0.035,1.101-1.328,2.354c-0.528,0.521-1.174,0.827-1.524,1.545c-0.229,0.454,0.162,1.3-0.063,1.604
	   c-0.642,0.873-2.604,1.354-3.729,1.331c-2.771-0.059-2.539-3.604-5.023-3.259c-0.133-2.038,0.049-4.136-0.076-6.174
	   c-1.756-0.08-3.377-0.884-5.168-0.826c-0.123-0.911-0.688-1.67-1.088-2.424c-2.405-0.2-6.146,0.021-4.854,3.096
	   c0.498,1.188,1.396,1.422,1.443,2.574c0.026,0.632-0.511,2.362-0.587,3.248c-1.305,0.466-2.688,0.34-3.928,0.837
	   c-0.211,0.711-0.707,2.022-1.762,1.981c-1.459-0.063-1.438-2.11-2.006-2.684c-1.415-1.394-3.861-0.668-5.479-2.146
	   c-0.095-0.669-0.287-1.31-0.587-1.917c-0.493,0.084-1.179-0.168-1.663-0.083c-0.47-1.718-1.276-3.116-1.582-4.919
	   c-1.146-0.075-3.203-0.489-3.25,1.113c-2.565-1.023-3.197,0.771-5.427,1.143c-0.03,0.229-0.035,0.438-0.071,0.67
	   c-1.279-0.061-3.432-0.378-3.002-2.176c-2.209-0.156-3.173,0.139-4.016-2.259c-0.396-1.136-4.832-0.44-5.779-0.604
	   c-2.451-0.401-2.979-1.543-4.582-3.178c-1.104-1.124-3.604-3.451-5.239-4.083c-0.839-0.323-2.675-0.696-3.604-0.251
	   c-1.693,0.813-0.646,0.813-1.396,2.259c-1.229,2.35-2.233,2.896-4.613,4.061c0.265,3.729-4.854,2.839-7.344,2.991
	   c-0.077,2.284-1.041,3.039-1.393,4.949c-0.229,1.247,0.271,4.472,0.632,5.604c-3.896,0.298-3.744,0.092-4.012,4.01
	   c-0.73,0.153-1.827,0.153-2.563,0c0.229-2.443-0.892-3.746-3.396-2.637c-1.781,0.793-1.765,2.146-2.729,3.614
	   c-0.662,1.018-2.553,3.711-3.876,2.429c-0.443-0.438,0.066-2.401-0.052-3.021c-0.271-1.438-0.537-1.409-1.354-2.674
	   c-1.104-1.729-2.492-2.692-1.988-4.67c0.49-1.947,2.007-2.481,2.344-4.656c0.479-3.146,0.021-9.714-4.955-8.271
	   c0.446,1.646,2.271,2.331,2.646,4.262c0.346,1.771,0.043,4.177-0.063,5.969c-0.896,0.136-2.162,0.307-2.938,0.725
	   c-1.896,1.021-0.663,1.057-1.75,2.658c-1.213,1.795-1.396,0.403-2.938,1.396c-1.029,0.649-1.241,1.884-1.979,2.613
	   c-0.563,0.563-1.479,0.846-2.084,1.571c-0.732,0.896-1.07,2.091-1.688,3.063c-0.906,1.438-2.74,1.645-3.668,2.854
	   c-0.979,1.284-0.293,1.878-0.646,3.313c-0.941,3.791-3.916,3.604-7.181,4.466c-2.896,0.76-4.166,2.739-6.522,4.357
	   c-0.813,0.559-3.319,4.979-3.274,4.979c-1.957,0.38-3.938-1.079-5.938-1.283c-1.479-0.146-2.943-0.004-4.333,0.345
	   c-2.563,0.646-6.104,2.139-8.341,3.563c-2.332,1.483-4.021,4.12-6.326,6.02c-1.979,1.627-4.144,3.956-4.715,6.359
	   c-2.271,0.559-1.783,8.311-1.308,10.389c0.729,3.13,2.271,6.519,3.927,9.326c1.799,3.043,6.185,7.88,0.096,8.341
	   c-5.112,0.391-6.207,0.962-6.354,6.229c1.09-0.774,1.678-1.551,3.021-1.896c1.599-0.405,2.271-0.26,3.736-0.989
	   c0.48-0.235,1.156-1.043,1.584-1.36c0.307-0.229,1.332,0.026,1.771-0.191c0.771-0.396,0.021-1.164,1.231-1.456
	   c0.508-0.121,1.392-0.042,1.875,0.063c-1.563,4.098-4.977,8.479-8.886,10.873c-3.571,2.188-9.63,4.507-8.604,9.688
	   c1.017,0.004,1.888-0.237,2.896-0.229c0.129,2.025,0.479,5.104-1.021,6.556c-1.063,1.021-3.896,1.933-5.237,2.729
	   c-2.84,1.688-9.682,3.268-10.072,6.609c-2.838,0.548-3.219,3.698-3.939,6.057c-1.538,4.979-6.313,6.344-10.354,8.334
	   c-5.038,2.492-10.707,2.135-15.646,4.334c-4.487,2-9.259,4.271-13.596,6.406c-2.356,1.163-4.802,1.596-7.404,2.24
	   c-1.479,0.36-3.021,1.006-4.009,1.692c-1.051,0.73-0.775,2.125-2.604,1.938c-0.065-1.169-0.065-2.393,0-3.561
	   c-0.021,0.414,6.861-3.215,7.34-3.604c1.842-1.493,4.66-4.194,2.814-6.727c-3.189-4.375-7.305-0.563-10.1,1.459
	   c-2.402,1.733-5.417,2.521-7.525,4.725c-0.708,0.737-2.648,2.923-2.938,3.741c-0.826,2.36,0.805,8.188-3.188,8.28
	   c1.18-0.645,3.15-1.146,4.146-2.021c1.443-1.271,2.84-3.971,3.511-5.763c0.839,0.27,1.669,0.624,2.521,0.896
	   c-0.918,1.271-3.247,1.771-3.581,3.563c1.229-0.381,3.106,0.244,3.678-1.228c0.915,0.119,1.911,0.308,2.896,0.321
	   c0.076,0.437,0.089,0.8-0.008,1.229c-2.649,0.769-3.632,2.408-6.023,3.633c-2.646,1.352-2.416,2.938-4.322,4.688
	   c-1.855,1.709-4.765,2.146-6.26,3.813c-1.694,1.896-3.021,4.466-4.396,6.354c-1.197,1.646-1.313,3.12-2.278,4.95
	   c-1.301,2.471-4.456,3.612-5.74,6.543c-0.636,1.442-0.354,3.048-1.33,4.349c-1.486,1.979-3.417,3.554-5.265,5.143
	   c-1.563,1.342-3.565,3.188-4.647,4.918c-0.729,1.146-0.938,2.435-1.669,3.59c-0.783,1.248-2.085,1.979-3.008,3.096
	   c-1.601,1.938-2.616,4.201-3.726,6.273c-1.035,0.209-1.799,0.971-2,2.01c-2.036,0.302-4.729,3.416-6.75,4.632
	   c-1.307,0.78-3.104,1.021-3.783,2.491c-0.643,1.376,0.667,5.53-1.792,6.203c-2.3,0.627-2.979,3.063-4.521,4.474
	   c-1.979,1.813-5.013,2.608-7.354,3.836c-1.396,0.729-2.646,1.099-3.813,1.989c-1.188,0.912-1.995,1.951-3.262,2.84
	   c-4.835,3.396-10.033,5.252-14.009,9.313c-2.534,2.595-5.526,4.955-7.375,8.132c-0.917,1.573-0.813,3.782-1.624,5.179
	   c-0.798,1.355-2.871,1.844-4.039,3.006c-1.396,1.396-1.668,3.313-3.506,4.396c-1.938,1.139-4.234,1.739-6.396,2.305
	   c-3.396,0.881-6.677,2.591-9.783,4.086c-3.745,1.802-5.772,2.441-7.938,5.841c-1.419,2.233-3.063,3.021-5.342,4.426
	   c-2.845,1.76-4.848,4.14-7.646,5.937c-2.063,1.315-4.879,1.896-6.354,3.979c-1.059,1.484-5.326,14.705-0.396,13.282
	   c1.146-2.032,0.815-4.897,0.678-7.232c-0.308-0.024-0.602-0.063-0.897-0.101c-0.149-0.563-0.164-1.608,0-2.158
	   c1.372,0.26,3.414,2.516,3.626,3.866c0.379,2.429-1.082,3.339-1.798,5.313c-0.604,1.668-1.313,4.418-1.605,6.094
	   c-0.14,0.751,0.891,6.646,0.019,6.887c-0.423,0.091-0.813,0.091-1.229,0c-0.086-1.366-0.063-2.78-0.021-4.165
	   c-1.479,1.25-0.646,3.104-1.284,4.621c-0.566,1.35-1.236,1.678-2.49,2.511c-2.582,1.724-5.854,2.083-8.664,3.438
	   c-2.875,1.383-4.302,3.605-7.582,4.979c-2.639,1.104-6.266,2.82-9.281,2.281c-0.104-1.563,0.571-4.291-1.324-4.57
	   c-0.104,1.371-0.008,2.832-0.135,4.188c-0.031-0.279-0.232-0.826-0.313-1.188c-2-0.308-3.521-1.781-5.625-2.301
	   c-1.833-0.449-3.671-0.416-5.657-0.416c-2.401,0-8.997-0.531-9.624,2.271c3.032,0.334,2.934-1.219,5.291-1.959
	   c1.518-0.479,5.166-0.396,4.948,1.639c-2.29,0.772-4.841,1.454-7.281,1.716c-3.438,0.363-4.794,0.899-5,4.666
	   c-0.128,2.349,0.021,2.561-1.352,4.344c-0.952,1.24-2.479,1.899-3.323,3.324c-0.812,1.354-0.555,2.762-1.075,4.25
	   c-1.296,3.697-4.274,4.299-6.846,6.82c-1.396,1.37-2.001,4.707-0.021,5.262c-1.104,0.296-1.959,0.08-2.396-0.896
	   c0.181,0.685-0.063,1.517-0.033,2.188c-0.426,0-0.797,0.095-1.229,0c-0.032-0.309-0.021-0.604-0.104-0.897
	   c-2.484,0.475-1.953-2.313-2.875-3.688c-0.164,1.776,0.364,6.82-2.354,6.591c-0.209-1.438,0.44-2.479,0.229-3.913
	   c-1.771,0.396-1.768,2.063-1.666,3.579c-2.496,0.659-1.466-2.786-1.616-4.28c-0.19-1.897-1.149-3.376-1.052-5.277
	   c-3.633-0.229-7.932-0.646-10.896,1.342c-0.063,0.304-0.063,0.578-0.104,0.888c-1.35,0.507-2.146,1.686-3.619,2.141
	   c-1.405,0.438-2.938-0.105-4.342,0.243c-2.354,0.604-3.794,3.526-4.981,5.321c-2.093,3.146-1.776,7.041-5.013,9.688
	   c-3.607,2.959-4.322,8.611-5.453,12.695c-0.354,1.284-1.236,2.221-1.725,3.444c-1.375,3.512-1.646,8.156-1.16,11.854
	   c0.521,3.979,1.705,8.104,2.666,11.987c0.779,3.156,2.822,6.229,3.342,9.338c0.209,1.255,0,2.729,0,4.001
	   c0,2.907,0.395,6.229-0.325,8.999c-0.459,1.779-1.507,2.068-2.339,3.406c-0.92,1.479-0.985,2.021-1.055,3.875
	   c-1.815,0.063-4.089-0.28-3.207,2.354c0.325-1.141,1.597-1.633,2.875-1.258c0.26,2.574,1.563,4.553,1.719,7.281
	   c0.169,3.072,0.896,5.505,1.666,8.426c0.734,2.787,0.309,5.361,0.649,8.23c0.479,3.979,1.567,7.604,2.18,11.413
	   c0.308,1.897-0.604,4.396,0.053,6.191c0.185,0.487,2.047,1.304,0.929,2.268c-1.23,1.063-2.508-0.896-2.729-1.715
	   c-0.284-1.035,0.118-2.272-0.282-3.31c-0.526-1.354-1.235-1.896-1.47-3.44c-0.708-4.844-4.138-8.43-4.28-13.212
	   c-0.356-0.114-1.063-0.114-1.427,0c-0.147,2.418-0.646,6.117-0.036,8.47c0.242,0.938,4.497,6.979,1.03,6.778
	   c0.146,1.646,2.104,3.146,2.512,4.929c2.521-0.133,2.76,0.438,3.206,2.533c0.638,2.938,3.316,4.122,4.104,7.082
	   c1.019,3.813,1.071,7.793,0.896,11.707c-0.203,4.555-3.813,7.43-4,11.979c-0.096,2.328,0.104,4.674,0,7
	   c-0.119,2.795-1.313,4.063-2.019,6.666c-0.567,2.117-3.229,10.567-6.157,10.215c-0.396-0.049-0.979-0.726-1.491-0.844
	   c-0.646-0.147-1.44-0.033-2.114-0.033c0.612,0.063,1.221,0.737,1.746,1.021c1.146,0.604,1.836,0.375,2.303,1.562
	   c0.402,1.036,0.183,2.358-0.479,3.257c-0.584,0.791-1.405,1.393-1.777,2.327c-0.413,1.034-0.352,1.646-1.167,2.603
	   c-1.597,1.854-3.604,3.312-5.437,4.913c-0.544,0.479-1.317,1.107-1.708,1.716c-0.509,0.788-0.303,1.188-0.528,2.111
	   c-0.108,0.462-0.546,0.814-0.622,1.281c-0.047,0.271,0.209,0.695,0.146,0.908c-0.269,0.822-0.553,1.229-1.657,1.271
	   c0.393-0.021-0.354-1.911-0.938-2.091c-1.076-0.332-3.032,1.274-2.896,2.421c0.146,1.186,2.521-0.221,2.999,0.979
	   c0.229,0.563-0.385,2.135-0.479,2.719c-0.199,1.255-0.353,2.518-0.646,3.752c-0.443,1.896-1.633,3.563-2.063,5.416
	   c-0.441,1.896-0.508,4.387-0.508,6.337c0,2.181-0.199,3.959-0.631,6c-0.563,2.688-1.628,8.261,0.166,10.666
	   c0.576,0.772,0.932,0.597,1.131,1.657c0.164,0.863-0.269,1.97,0.021,2.802c0.178,0.517,0.675,0.709,0.813,1.371
	   c0.596,2.842,0.637,6.084,0.67,9.002c0.063,5.729-0.009,11.37,0.313,17.06c0.375,6.646,1.111,13.271,1.521,19.909
	   c0.209,3.44,0.339,6.896,0.279,10.343c-0.032,2.188,0.055,3.907-1.104,5.828c-0.9-1.505,0.021-3.324-2.347-3.643
	   c-1.139-0.146-1.396-0.09-2.313-0.698c-0.941-0.629-2.174-1.354-3.356-1.313c-1.104,0.041-2.016,0.816-3.154,0.854
	   c-1.105,0.023-2.021-0.225-2.995-0.338c-1.063-0.127-2.271-0.041-3.337,0.006c-0.927,0.035-3.021,0.396-2.502,1.744
	   c0.371-0.166,0.767-0.479,1.171-0.584c0.433-0.106,1.054,0.004,1.497,0.006c0.979,0.002,1.871-0.104,2.834-0.166
	   c0.928-0.063,1.901-0.041,2.832,0c1.896,0.084,4.325,0.978,6.169,1.5c1.378,0.396,3.174,0.732,3.938,2.143
	   c-0.915,0.063-2.021,0.15-2.938,0.021c-0.976-0.139-1.727-0.646-2.667-0.838c-2.299-0.477-4.302,0.137-6.556,0.137
	   c-3.563,0-6.793-1.465-10.336-1.459c-1.425,0.002-2.938,0.117-4.262,0.713c-1.204,0.546-2.906,2.785-3.563,3.906
	   c-0.534,0.924-0.42,1.805-0.48,2.854c-1.809-0.252-1.864,5.195-1.782,6.5c1.244,0.084,3.374,0.521,1.604,1.982
	   c-0.563,0.463-1.458,0.411-2.098,1.002c-0.637,0.595-1.13,1.495-1.652,2.196c-1.821,2.422-5.126,4.291-5.406,7.646
	   c-2.052,1.168-2.904,2.865-3.601,4.896c-0.866,2.549-3.766,3.889-4.873,6.313c-1.827,3.979-5.038,12.53,0.666,14.985
	   c1.606,0.688,2.896,1.354,4.313,2.238c1.105,0.688,2.699,0.717,3.047,2.229c1.137,0.188,2.311,0.273,3.476,0.359
	   c1.577,0.115,2.848,0.772,4.471,0.668c1.306-0.089,2.509-0.12,3.37-1c0.632-0.646,0.75-1.814,2.139-1.479
	   c0.144,2.197-0.453,3.797,1.688,4.975c0.945,0.521,1.813,0.604,2.5,1.507c0.544,0.711,0.695,1.579,1.274,2.18
	   c-1.613,0.229-2.183-0.799-3.239-1.688c-0.856-0.727-2.06-1.514-3.037-2.149c-2.198-1.438-5.094-0.854-7.68-1.334
	   c-1.764-0.321-3.809-0.166-5.666-0.166c-2.146,0-3.842-0.598-5.82-0.834c-3.271-0.396-5.767,0.635-8.68,1.345
	   c-0.709,0.174-1.451,0.084-2.154,0.334c-0.912,0.321-0.979,0.593-1.523,1.463c-1.006,0.096-2.646,0.563-3.604,1.063
	   c0.062,0.323-0.125,0.814-0.095,1.109c-1.219,0.076-1.878,0.087-2.979,0.521c-3.438,1.359-7.108,1.892-10.735,2.479
	   c-1.379,0.229-3.425,0.209-4.563,1.072c-1.184,0.896-1.873,2.619-2.993,3.646c-1.062,0.969-2.666,0.463-3.959,1.454
	   c-0.737,0.563-0.854,1.097-1.743,1.479c-0.532,0.229-1.354,0.149-1.792,0.563c-0.947,0.896-1.273,3.775-1.34,4.979
	   c-0.139,2.646,0.601,5.854-0.021,8.416c-0.238,0.99-1.146,2.132-1.807,2.905c-0.992,1.187-0.738,2.356-1.188,3.813
	   c-1.513,0.09-5.979-0.912-6.12,1.327c1.172,0.089,2.44,0.082,3.612,0.007c0.223-0.875,2.193-0.594,2.671,0.021
	   c0.437,0.561,0.294,2.467,0.194,3.172c-0.187,1.334-0.662,1.242-1.384,2.127c-0.62,0.763-0.854,1.896-1.132,2.707
	   c-0.624,1.826-1.521,3.422-2.861,4.813c-1.396,1.449-2.471,1.945-4.289,2.682c-0.745,0.301-1.442,1.067-2.172,1.315
	   c-0.604,0.207-1.375,0.038-2,0.229c-0.871,0.271-2.5,0.688-3.214,1.149c-1.337,0.89-1.72,2.425-2.405,3.646
	   c-0.545,0.967-1.371,1.563-2.381,1.954c-1.496,0.587-2.979,1.354-4.666,1.374c-1,0.012-2.761-0.367-3.671-0.018
	   c-1.135,0.438-1.584,1.979-1.854,2.982c-0.092,0.016-0.187,0.026-0.271,0.052c-0.146,0.034-0.604,1.026-0.941,1.188
	   c-0.503,0.233-1.169,0.035-1.709,0.021c-1.55-0.054-3.087-0.079-4.62-0.323c-3.594-0.576-7.088-2.207-10.483-3.457
	   c-2.354-0.864-5.267-1.855-7.282-3.381c-1.729-1.3-1.979-3.252-3.218-4.904c-0.916-1.229-2.27-2.613-3.675-3.243
	   c-2.335-1.036-3.333-0.704-4.314-3.44c-0.702-1.962-1.482-3.351-2.936-5.053c-2.833-3.332-6.016-6.3-8.563-9.75
	   c-1.521-2.059-6.663-6.813-6.413-9.471c0.821-0.024,1.415,0.272,2.174,0.426c0.019-0.563-0.072-1.364-0.249-1.924
	   c-0.115-0.354-3.116,0.021-3.523-0.088c-1.229-0.326-2.533-1.924-2.479-3.174c0.529,0.217,1.837-0.178,2.077-0.029
	   c-0.457-0.271-0.868-0.893-1.313-1.248c0.988-1.106,2.791-0.971,3.813-1.992c-0.529-0.934-2.479-2.773-3.729-2.207
	   c-0.869,0.396-0.238,1.396-0.781,1.91c-0.634,0.604-1.503-0.283-2.021,0.822c-0.646-1.021-0.194-3.021-1.72-3.586
	   c0.199-0.925,1.268-0.837,2.18-1.242c-0.032-1.318-1.106-2.217-2.425-2.179c0.068,0.694-0.044,1.521-0.288,2.005
	   c-0.735-1.382-0.636-3.688-1.438-5.396c-0.895-1.896-1.581-3.82-2.492-5.646c-0.789-1.588-1.985-3.426-2.329-5.233
	   c-0.396-2.063,0.063-3.731-0.739-5.75c-0.698-1.772-1.671-3.494-1.943-5.354c-0.313-2.097-0.473-4.354-0.473-6.47
	   c0-2.771-0.563-5.021-0.833-7.643c-0.467-4.511-3.175-8.049-3.165-12.65c-0.004,0.788,0.656,0.943,1.095,1.433
	   c0.501,0.558,0.757,1.291,1.104,1.938c0.63,1.153,1.417,1.826,1.604,3.16c0.206,1.453,0.482,2.709,1.021,4.092
	   c0.521,1.367,0.354,2.693,0.643,4.166c0.389,1.979,2.354,0.852,2.699,2.332c0.256,1.097-0.813,2.41-1.133,3.364
	   c-0.413,1.252-0.438,2.61-0.367,4.005c0.104,2.209,1.411,1.729,3.325,1.965c1.688,0.207,2.854,1.078,4.607,0.977
	   c0.329-2.112-0.938-2.729-2.443-3.793c-0.021,0.271-0.233,0.618-0.186,0.975c-0.74,0.028-1.571,0.063-2.28-0.047
	   c-0.188-2.969-0.118-5.762-0.355-8.771c-0.132-1.646-1.439-2.104-1.5-3.668c-0.05-1.345,0.397-2.771,0.167-4.166
	   c-0.246-1.459-1.501-2.067-2.214-3.155c-0.816-1.257-1.75-1.951-2.754-3.017c-0.979-1.03-1.544-2.479-2.542-3.531
	   c-1.348-1.418-1.455-2.137-1.691-3.963c-0.1-0.729-0.372-1.543-0.73-2.218c0.354-0.104,0.554-0.396,0.906-0.479
	   c0.188-0.778-0.812-2.896,0.838-2.438c-0.017,0.186,0.067,0.434,0.054,0.612c1.104,0.026,1.286,1.229,2.592,1.021
	   c-1.271,0.201-2.271-4.886-3.415-5.813c-0.081,1.036,0.307,1.865,0.271,2.791c-0.793,0.055-1.979-0.271-2.479,0.471
	   c0.021-1.482-0.254-3.438-0.854-4.782c-0.161-0.356-0.652-0.396-0.813-0.825c-0.128-0.348,0.037-0.953,0.015-1.332
	   c-0.059-0.795-0.129-1.729-0.365-2.464c-0.223-0.676-0.688-1.202-1.01-1.87c-0.396-0.834-0.365-1.479-0.621-2.334
	   c-0.458-1.522-1.811-2.521-1.979-4.143c0.242-0.078,0.702-0.073,0.943,0.001c0.143,2.056,0.348,2.29,2.513,2.104
	   c-0.658-0.88-1.021-2.063-1.689-2.933c-0.506-0.646-1.938-1.313-1.854,0.076c-1.192,0.249-1.638-1.609-1.964-2.446
	   c-0.271-0.686-0.229-1.51-0.503-2.171c-0.313-0.743-1.794-2.772-2.607-2.854c0.029-0.925-0.604-1.582-0.499-2.613
	   c0.819-0.084,1.718-0.028,2.403,0.32c-0.438-0.563-0.762-1.193-0.571-1.988c0.727-0.053,0.885-0.906,0.646-1.567
	   c-0.271-0.752-0.688-0.729-1.479-0.979c-0.098-0.281-0.215-0.313-0.328-0.476c-0.148,0.563-0.337,1.063-0.395,1.642
	   c-0.15,0.021-0.297,0.021-0.443,0.057c-0.559,0.729-0.313,1.718-0.396,2.625c-0.427-0.971-0.166-2.489-0.291-3.648
	   c-0.149-1.436-1.104-2.563-1.345-4c-0.218-1.3-0.104-2.6-0.505-3.834c-0.383-1.188-0.938-2.438-1.275-3.68
	   c-0.312-1.125-0.378-2.459-0.75-3.62c-0.385-1.188-0.271-2.45-0.632-3.7c-0.29-1.029-1.602-2.443-1.509-3.488
	   c0.104-1.246,2.329-1.146,2.146-2.481c-0.9-0.045-1.879,0.063-2.774,0.172c-0.188,0.352-0.278,0.229-0.506,0.416
	   c-0.221-1.698-1.024-3.094-1.021-4.938c0.002-0.804,0.085-1.479-0.327-2.16c-0.38-0.62-1.313-0.775-1.146-1.646
	   c0.917-0.063,1.862,0.013,2.779-0.054c0.202-1.536-3.188-0.382-3.938-1.015c-0.505-0.423-0.46-1.483-0.788-2.093
	   c-0.374-0.688-1.088-1.457-1.586-2.037c-0.785-0.913-0.457-0.479-1.663-0.832c-0.781-0.23-1.229-0.409-1.54-1.329
	   c-0.258-0.759,0.016-1.563-0.127-2.339c-0.188-1.066-1.112-1.521-1.313-2.479c0.589-0.037,1.2-0.012,1.79-0.053
	   c0.063-0.224,0.063-0.563,0-0.78c-1.282,0.28-1.514-1.354-2.021-2.148c-0.896-1.429-0.25-2.481-0.781-3.882
	   c-0.354-0.938-1.985-2.161-2.681-2.959c-0.922-1.063-1.723-1.821-2.188-3.174c-1.031-0.096-1.599-0.643-2.429-1.229
	   c-1.137-0.813-2.313-1.191-3.533-1.922c-1.507-0.896-0.842-1.422-1.715-2.834c-0.538-0.871-1.725-1.563-1.604-2.685
	   c0.922-0.062,1.881,0.021,2.797-0.063c-0.731-0.563-5.5-2.996-5.457-3.438c0.622-0.063,1.16-0.707,0.646-1.243
	   c-0.415-0.438-1.646,0.021-2.18-0.114c-0.767-0.193-1.098-0.523-1.846-0.511c-0.771,0.021-0.673,1.071-1.328-0.327
	   c-0.479-1.026-0.146-2.841-0.292-3.994c-0.182-1.438-0.64-2.7-1.411-3.963c-1.717-2.787-2.132-6.188-3.392-9.154
	   c-1.431-3.368-2.496-6.596-2.979-10.29c-0.517-3.939-2.933-7.097-5.021-10.347c-2.313-3.578-2.334-7.369-3.646-11.091
	   c-0.938-2.646-4.272-6.672-1.365-8.403c-1.544-1.188-2.434-0.681-3.192-2.252c-0.619-1.271-0.354-2.931-0.354-4.323
	   c0.002-1.563,0-3.113,0-4.677c0-2.146-0.248-2.813-1.021-4.405c-0.729-1.519-1.218-2.688-1.646-4.271
	   c-0.546-2.019-0.376-1.688-2.007-2.729c-0.77-0.486-2.775-0.707-2.604-1.854c0.096-0.612,3.333-1.662,3.894-1.804
	   c0.313-2.899,0.332-5.412-0.282-8.604c-0.628-3.257-3.891-5.104,0.615-6.729c0.492-2.084-2.104-2.117-3.563-1.99
	   c-0.114-1.875,0.331-4.104-0.051-5.942c-0.259-1.245-0.634-1.368-1.011-2.315c-0.4-1.014-0.568-2.48-0.981-3.354
	   c-1.313-2.771-5.018-7.146-7.715-8.646c1.229-1.498,3.642-8.3,0.092-8.394c0.038-0.396-0.063-0.813,0.011-1.229
	   c0.188-0.034,0.365-0.072,0.556-0.109c0.646-2.035-0.66-1.69-1.282-2.854c-0.521-0.979-0.886-1.706-1.25-2.821
	   c-0.307-0.938-1.297-2.434-1.068-3.457c0.25-1.146,2.083-1.525,1.606-2.762c-3.809,0.373-3.724-1.827-4.28-4.719
	   c-0.328-1.697-1.078-1.51-1.603-2.75c-0.414-0.987,0.123-3.287-0.47-4.105c-1.054-1.459-2.405-0.153-3.613-0.783
	   c-1.036-0.535-1.046-2.179-2.313-2.695c-1.146-0.477-2.894,0.501-4.026-0.044c-1.106-0.521-0.447-2.052-2.584-2.34
	   c-1.075-3.392,3.854-2.188,5.896-2.334c-0.362-1.493-2.831-1.604-3.643-3.271c-0.808-1.647-0.336-3.188-1.635-5
	   c-1.146-1.604-1.779-3.022-2.764-4.666c-0.805-1.351-2.919-2.262-2.536-3.938c0.188-0.035,0.368-0.073,0.561-0.111
	   c0.372-5.551-2.792-9.479-5.151-13.854c1.237-0.862,3.6-0.355,5.178-0.482c-1.438-2.016-4.731,0.2-6.228-1.345
	   c-2.729-2.834,2.127-2.869,3.556-2.992c-1.111,0.099-5.648-1.323-6.513-2.021c-1.938-1.591-1.903-4.041-2.794-6.229
	   c-1.212-2.981-2.521-5.809-3.907-8.762c-1.423-3.021-1.718-6.459-3.67-9.23c-0.898-1.278-1.917-2.526-2.999-3.424
	   c-1.28-1.061-2.771-1.301-3.029-3.203c0.951-1.069,2.904-2.182,2.55-3.985c-0.149-0.782-1.604-1.304-1.858-2.467
	   c-0.229-1.027,0.051-3.096-0.086-4.25c-0.318-2.688-0.682-4.255-1.665-6.668c-0.828-2.021-0.332-4.221-0.649-6.354
	   c-0.366-2.479-1.544-4.411-1.668-7.011c-0.092-1.938,0.45-4.271,0.354-5.979c-0.2-3.47,0.188-10.246-1.981-12.947
	   c1.355,0.104,2.938,0.025,2.574-1.68c-0.771-0.07-1.354-0.566-2.229-0.438c-0.132-2.025,2-7.146-0.667-6.998
	   c-0.435-1.396-0.077-2.764,1.563-2.666c0.687-2.088-1.021-2.569-2.562-3.014c-0.067-1.02-0.354-2.646-0.013-3.636
	   c0.376-1.091,1.969-0.354,1.564-2.259c-1.066-0.078-2.188-0.021-3.256-0.104c3.213-3.521,0.592-10.271-0.733-13.947
	   c0.897-0.589,2.317-0.903,3.089-1.668c-0.823-0.696-2.163-0.78-3.329-0.719c-0.532-4.536,1.502-8.308-1.396-12.281
	   c-1.753-2.399-5.083-7.479-0.438-8.916c-2.812,0.87-3.493-3.854-3.604-5.688c-0.603-0.063-0.917-0.438-1.566-0.438
	   c0.588-1.458,2.304-3.313,1.898-5.229c-2-1.447-4.188-0.995-3.562-4.339c2.164-0.141,5.937-0.87,6.283,1.662
	   c0.406-1.188-0.403-2.636,0.291-4.33c-1.188-0.226-2.096,0.396-2.348,1.563c-0.957,0.094-1.963,0.063-2.917-0.014
	   c0.941-1.043,0.685-2.754,0.583-4.218c-0.77-0.13-1.4-0.708-2.225-0.782c-0.172-2.725-0.377-5.957,0.333-8.561
	   c0.425,0,0.797-0.093,1.235-0.002c0.02,0.297,0.02,0.607,0.099,0.896c0.469,0.104,1.373,0.189,1.842,0.073
	   c-1.154-1.229-2.221-2.771-2.896-4.354c-0.371-0.868-0.154-1.745-0.659-2.688c-0.354-0.656-1.249-1.104-1.583-1.729
	   c-1.567-2.962-1.485-9.313,3.201-8.532c0.029,0.308,0.07,0.602,0.099,0.897c1.693,0.104,4.701,0.556,5.924-0.534
	   c-0.771-0.396-1.481-1.574-2.222-1.841c-1.137-0.401-2.076,0.23-3.375,0.038c0.104-0.538-0.225-1.357-0.108-1.896
	   c-3.201-1.034,0.033-3.729,0.983-4.799c0.792-0.894,0.039-1.316,1.401-1.937c0.749-0.338,2.457,0.012,3.292-0.043
	   c0.369-1.107,0.644-2.688,0.381-3.945c-0.278-1.368-1.271-2.342-1.049-3.946c-2.158-0.313-1.04,4.666-1.674,6.229
	   c-1.499,0.1-3.063,0.007-4.563,0.104c-0.365,2.385-1.536,3.752-2.442,5.896c-2.346,0.488-2.24-4.396-0.667-5
	   c0.428-1.601-1.516-2.952,0.333-3.666c0.064-1.063,0.064-2.159,0-3.223c-0.89-0.339-2-6.32-1.625-7.404
	   c0.839-2.432,5.66-0.92,7.673-2.238c-2.271-0.233-4.721,0.123-6.938-0.187c-0.088-1.403,0.227-3.134-0.117-4.491
	   c-0.305-1.207-1.656-1.354-1.266-3.063c0.563-2.479,4.779-1.968,6.299-3.918c-0.931-0.418-3.009-3.155-3.625-3.104
	   c-1.634,0.133-0.978,2.766-1.059,3.977c-0.943,0.088-1.956,0.088-2.901,0c-1.821-0.217,3.546-10.77-0.665-10.334
	   c-0.26-2.752,0.938-4.727,1-7.563c0.859,0.159,1.565-0.354,2.232-0.446c0.376-0.06-1.881-2.833-1.968-2.981
	   c-0.802-1.402-1.504-2.341-0.258-3.894c0.727-0.161,1.828-0.166,2.56-0.013c0.183,1.341,1.307,1.771,2.073,2.854
	   c0.468-3.539-4.945-5.396-3.03-9.229c1.094-2.188,2.781-0.582,3.34-3.334c0.332-1.634-1.748-2.962-1.394-4.271
	   c0.461-1.715,3.633-0.582,4.786-2.219c0.807-1.146,0.06-2.99,0.958-4.262c0.573-0.813,1.772-0.813,2.348-1.563
	   c0.841-1.106,0.563-2.104,0.972-3.354c0.271-0.827,0.771-1.577,1.009-2.313c1.297-4.086,1.063-7.952,1.39-12.293
	   c1.584-0.949,4.431-0.271,3.894-3.008c-1.66-0.104-3.03,0.188-4.208-0.725c-0.963-0.749-1.697-3.13-2.291-4.271
	   c2.079-0.604,3.697-1.229,5.833-1.447c-0.074-0.939-0.001-2.084,0.354-2.885c-1.988-0.354-4.188,0.33-6.25,0.219
	   c-0.104-1.696,0.563-3.959-1.271-4.866c1.255-0.927,2.646-1.217,4.177-1.134c0.093-0.425,0.093-0.813,0-1.229
	   c-2.194-0.146-4.488,0.465-6.573,0.229c0.269-1.25,1.904-2.521,3.249-2.665c-0.167-1.626-3.779-0.91-5.239-1.003
	   c-0.373-1.604,0.276-2.957,1.241-4.021c-0.96-0.563-1.125-1.146-1.291-2.264c-0.248-1.665,0.593-1.563,1.026-2.568
	   c0.798-1.858,1.076-3.149,0.917-5.369c-0.185-0.036-0.369-0.072-0.553-0.11c-0.686-2.183,1.172-1.736,2.202-2.69
	   c1.062-0.979,1.146-1.521,1.979-2.677c1.236-1.711,3.808-2.962,4.146-5.188c0.396-0.052,0.863-0.118,1.259-0.12
	   c-2.383-0.979-2.958,0.468-4.624,1.76c-1.813,1.403-3.948,1.717-6.299,1.6c0.048-0.865-0.423-1.396-0.44-2.229
	   c-0.692-0.27-0.8-0.605-1.251-1c2.916-0.805,6.217-0.25,9.253-0.438c-0.015-0.269,0.018-0.622,0.003-0.896
	   c-0.037-1.146-9.188-1.679-10.171-1.853c-0.478-1.573,0.952-3.838,0.926-5.646c-0.025-1.734-0.833-3.896-0.053-5.566
	   c1.076-2.313,4.605-1.243,6.513-1.37c2.83-0.188,4.698-1.829,7.42-2.855c-1.923-1.094-10.19-0.541-10.976,1.521
	   c-1.165,0.079-2.389,0.076-3.558,0.01c-0.108-1.811-0.068-7.313,1.898-7.676c0.15-1.283-1.1-1.892-1.988-2.604
	   c1.706-0.896,1.201-4.896,2.466-6.666c3.002-4.189,3.54-0.021,6.258,1.684c1.258,0.784,2.804,0.602,4.176,0.961
	   c1.869,0.492,1.732,1.354,3.729,0.353c1.688-0.854,4.396-4.943,5.502-4.936c-3.229,1.668-10.354,2.739-13.684,0.884
	   c-2.051-1.146-10.213-7.729-11.13-1.657c-1.327-0.115-2.704-0.052-3.241,1.313c1.725,0.146,3.52,0.01,5.249,0.117
	   c0.09,0.422,0.09,0.813,0,1.229c-2.73-0.243-2.153,1.729-4.616,1.722c-2.202-0.018-2.871-2.313-5.275-1.946
	   c-0.521,2.188-0.846,4.043-2.732,5.198c1.262,0.69,2.791,0.953,4.225,0.729c-0.521,0.511-0.559,0.734-1.16,1.077
	   c-0.263,1.706-1.962,3.303-2.781,4.607c-1.117,1.784-1.874,4.061-1.3,6.354c0.206,0.817,1.109,1.438,1.357,2.646
	   c0.257,1.252-0.08,2.729,0,4.011c0.107,1.707,1.424,5.837-0.942,6.384c-0.314,4.135,0.587,8.305-2.466,11.201
	   c-3.085,2.933-5.614,5.521-7.316,9.688c-0.303,0.03-0.591,0.063-0.894,0.104c-0.077,1.063-0.021,2.173-0.1,3.229
	   c-2.439-0.262-3.79,1.891-5.609,3.212c-1.808,1.313-3.503,2.141-5.68,2.534c-2.109,0.395-4.453,0.104-5.716,2.246
	   c-2.497,1.961-5.192,1.273-8.287,1.063c-1.486-0.104-7.481,1.021-5.656,3.703c0.559-1.88,2.609-1.87,4.281-1.998
	   c0.16,2.563-3.825,2.046-5.615,2.28c-2.672,0.354-3.734,1.533-5.057,3.615c-1.275,0.079-2.66-0.115-3.936,0.041
	   c-2.345,0.293-2.71,1.311-4.432,2.354c-2.271,1.375-4.972,0.848-7.852,1.053c-0.833,1.466-3.492,1.582-4.821,3.238
	   c-1.721-1.232-4.566-2.648-6.534-1.577c-1.567-0.584-2.285-1.818-4.042-1.729c-1.325,0.069-1.796,1.229-3.326,1.343
	   c-3.303,0.242-4.424-3.164-7.334-3.666c-1.963-0.34-2.42-0.021-3.99-1.071c-1.299-0.869-2.164-2.394-3.361-3.355
	   c-2.423-1.969-5.266-2.729-7.612-4.918c-1.207-1.127-2.245-2.396-3.363-3.611c-1.445-1.576-2.608-2.035-4.365-3.292
	   c-2.428-1.729-4.311-4.082-6.643-6.071c-3.85-3.291-10.856-8.769-11.282-14.271c0.709-0.372,0.542-0.638,0.907-1
	   c-2.851,0.313-3.87-1.911-5.216-4.062c-1.746-2.779-3.259-4.202-5.766-6.406c-2.363-2.077-3.976-4.455-6.649-6.343
	   c-2.674-1.892-3.563-3.405-5.4-5.918c-3.813-5.214-8.455-9.521-11.926-14.737c-1.452-2.186-2.418-4.661-3.742-6.854
	   c-1.534-2.539-8.055-9.86-2.974-11.797c0.286-1.025,0.871-0.979,1.333-1.941c0.374-0.781-0.312-1.627,0.377-2.342
	   c1.046-1.083,3.096-0.705,4.631-0.605c-0.026,1.938-1.922,0.896-3.021,1.854c-1.749,1.521-0.615,3.188,1.396,3.433
	   c1.406,0.171,2.178-1.146,3.32-1.349c1.634-0.278,2.955,1.025,4.371-0.198c-1.219,2.573-6.073,7.698-0.406,7.271
	   c0.414,2.11-1.937,1.563-2.233,3.229c1.265-0.407,2.019-1.563,3.128-2.048c1.472-0.64,3.307-0.595,4.813-1.159
	   c1.034-0.394,2.911-1.67,4.007-1.438c1.751,0.362,1.371,3.062,3.951,2.313c0.172-0.559,0.167-1.669,0.002-2.229
	   c-0.28-0.104-0.598-0.229-0.853-0.313c2.901-0.146,5.563-0.868,8.516-0.688c-0.16,0.854,0.352,1.563,0.453,2.229
	   c0.34-0.023,0.9-0.186,1.215-0.345c-0.439-2.245,1.048-1.191,2.05-1.938c0.342-0.254,0.994,0.097,1.431-0.229
	   c0.527-0.396-0.008-1.076,0.478-1.521c1.307-1.196,6.506-3.3,5.808,0.708c0.504,0.063,1.061,0.145,1.56-0.008
	   c0.038-0.188,0.076-0.368,0.114-0.558c0.782,0.021,1.44-0.462,2.227-0.438c0.15-2.301,3.962-3.828,4.34-6.229
	   c-1.041-0.078-2.113-0.05-3.172-0.041c1.235-0.795,2.447-1.655,3.865-2.03c0.583-0.154,2.09-0.505,2.684-0.321
	   c1.37,0.418,1.105,1.988,2.333,2.361c1.705,0.521,0.604-0.805,1.735-0.955c1.921-0.265,3.932,0.332,5.882,0.216
	   c0.343-1.261,0.121-2.817,0.691-3.958c0.581-1.156,2.548-2.153,3.433-2.979c2.15-2.017,4.201-5.355,6.875-6.396
	   c0.256-3.81,1.164-6.479,2.643-9.677c0.884-1.909,1.637-1.763,3.008-3.013c1.209-1.104,1.556-2.234,2.375-3.552
	   c-2.271,1.929-5.777,1.302-5.691-2.323c-3.149-0.408-7.666,1.546-7.333,5.229c-3.036,2.25-1.712-0.283-3.933-1.312
	   c-1.567-0.729-3.453,0.823-3.299,2.313c0.947,0.031,1.951,0.063,2.897,0.104c1.102,0.039-0.864,2.744-1.287,2.938
	   c-1.237,0.56-3.537-0.39-4.995,0.018c-2.32,0.646-2.324,2.902-4.408,3.688c-3.451,1.288-7.651-0.561-10.869,1.706
	   c-0.032,0.303-0.07,0.592-0.106,0.896c-1.96-0.183-2.809,0.777-4.526,1.062c-2.082,0.335-4.037-0.521-6.074-0.678
	   c-1.839-0.142-8.295-1.841-7.933,0.354c-1.032,0.428-2.234,0.37-3.369,0.262c-0.217-4.84-5.208-2.781-8.235-3.689
	   c-2.066-0.622-3.255-2.622-4.741-3.914c-1.366-1.188-2.987-2.342-4.415-3.584c-3.106-2.709-5.943-4.115-9.675-6.021
	   c-2.788-1.421-6.012-6.067-9.258-6.135c-0.732-2.541-1.859-3.271-3.357-5.209c2.497,0.324,1.403-3.932,4.248-4.112
	   c0.012-0.271-0.021-0.646,0-0.897c-2.154-0.709-3.886,2.472-5.64,3.25c-1.059-1.666,0.742-1.294,1.349-2.364
	   c0.685-1.21,0.764-2.027,0.626-3.558c-1.943,0.146-1.89,2.868-3.899,2.909c-0.65-2.487,3.856-4.423,1.299-5.633
	   c-1.678-0.794-3.996-1.771-5.924-1.72c1.522-1.831,2.871-0.658,2.232-2.865c-0.538-1.854-2.268-2.413-3.948-1.784
	   c-0.182-1.944-0.372-6.104,0.291-7.955c0.179-0.5,0.315-0.845,0.459-1.078c0.409-0.675,0.882-0.494,2.55-0.591
	   c2.241-0.122,2.149-0.307,3.632-1.271c1.072-0.696,2.104-2.163,3.095-2.663c1.25-0.63,3.116-0.137,4.092-1.326
	   c0.737-0.896,0.687-3.396,1.479-4.674c-1.848-0.531-2.514,1.738-3.717,2.581c-0.91,0.64-2.988,1.922-4,2.271
	   c-2.914,1.021-6.925-1.092-8.924,1.742c-2,2.838-0.405,6.911-5.334,6.666c-1.895-0.098-6.153-0.188-7.746-1.219
	   c-2.255-1.459-0.298-1.982,0.093-4.449c0.139-0.871-0.911-1.24-0.604-2.26c0.252-0.832,1.131-0.938,1.597-1.658
	   c1.828-2.813,2.209-5.921,1.935-9.688c-0.279-0.138-0.609-0.269-0.875-0.357c-0.514,2.935-2.838,12.497-6.341,12.919
	   c-1.095-2.184,0.515-2.271,1.04-3.936c0.481-1.521,0.47-3.422,0.569-5.021c0.108-1.744,0.183-2.95,0.659-4.25
	   c0.214-0.584,0.751-0.854,1.008-1.75c0.177-0.616,0.129-2.034,0-2.668c-0.612-3-2.726-4.963-6-5
	   c-1.788-0.021-21.98,1.093-21.985,0.972c-0.281-6.433,2.24-18.118-0.964-23.795c-1.069-1.896-4.179,0.409-5.176-1.396
	   c-1.058-1.919-0.094-3.734-0.626-5.764c-0.945-3.596-1.73-8.579-2.102-12.19c-3.813,0.514-8.3-0.146-10.013-3.314
	   c-4.908-0.843-8.547,2.686-13.801,1.8c-0.076-3.063,1.17-5.36,3.814-5.995c0.191-4.342-1.795-12.662,2.668-14
	   c-0.143-4.354,0.028-12.087-5.798-12.003c1.79-3.289,1.909-6.62-2.669-6.666c1.477-10.36-5.276-7.896-13.101-7.896l1,1133.596
	   H1592.6c0,0,0-658.93-0.005-658.93c-1.217,0.021-0.834-7.181-6.396-13.383c-0.587-0.651-5.546-2.947-6.146-3.271
	   c-2.473-1.334-2.748-2.549-6.336-2.049c3.856,0.846,5.051,5.143,4.354,8.584c-0.368,0.072-0.736,0.147-1.105,0.229
	   c-0.889,3.771,1.749,5.354,2.585,8.558c0.67,2.563,0.033,6.602-0.133,9.218c-3.088,0.389-3.307,7.528-4.589,10.104
	   c-1.914,3.832-3.195,7.438-5.959,10.271c-0.97,0.989-2.119,1.893-3.543,2.666c-1.896,1.03-3.459,1.073-5.569,1.082
	   c-2.164,0.012-7.502,0.948-9.113-0.429c-1.761-1.506-1.188-5.808-1.554-7.836c-0.563-3.143-2.683-5.138-2.725-8.207
	   c-0.036-2.612,0.632-5.063,0.446-7.755c-3.738,0.63-6.574,3.039-6.748,7.184c-1.564,0.102-2.146,0.021-3.344-0.73
	   c-0.563-0.358-0.438-1.143-1.043-1.451c-0.586-0.308-1.771,0.123-2.5-0.17c-0.854-0.354-1.252-1.256-2.149-1.567
	   c-2.479-0.861-3.271,0.716-4.333,2.406c-0.989,1.581-1.896,2.416-1.979,4.368c-0.063,1.53,0.543,3.271-0.094,4.762
	   c-0.585,1.375-2.15,2.382-2.984,3.646c-1.142,1.729-1.055,2.854-1.248,4.771c-0.166,1.635-1.151,3.038-0.905,4.663
	   c0.191,1.279,1.266,2.517,1.604,3.771c0.342,1.271,0.604,3.339,0.206,4.605c-0.455,1.438-1.575,1.963-1.479,3.684
	   c-2.271,0.653-2.53-2.245-4.074-3.156c-1.084-0.644-3.483-1.005-4.688-1.077c-2.396-0.146-7.343,1.354-6.994,4.229
	   c-0.14,0.024-0.271,0.063-0.411,0.087c-0.271,3.686-0.395,5.388-4.151,6.896c-2.179,0.87-3.074,0.646-4.249,3
	   c-0.487,0.979-0.672,3.387-1.604,3.528c-0.112-1.768-0.002-2.869-0.913-4.423c-0.729-1.245-2.679-2.672-2.337-4.261
	   c0.229-0.036,0.438-0.048,0.671-0.071c0.146-0.391,0.314-1.147,0.6-1.448c0.201-0.229,1.107-0.743,1.146-0.808
	   c0.517-0.771,0.535-1.688,0.979-2.446c0.472-0.824,3.941-3.813,4.787-3.798c0.192-1.85-1.467-3.607-1.25-5.679
	   c-3.244-0.313-2.439,2.44-3.558,4.45c-0.341,0.606-2.186,1.979-2.909,1.771c-1.188-0.346-0.658-1.688-0.742-2.646
	   c-0.188-2.161-1.498-3.428-2.063-5.551c-0.521-1.987-1.67-2.952-2.869-0.502c-0.813,1.659,0.018,3.798-1.178,5.396
	   c-1.373,1.854-5.064,2.914-7.146,4.229c-1.388,0.875-3.701,1.316-4.311,2.757c-0.857,2.058,0.354,3.09-2.143,4.566
	   c-1.958,1.159-2.879,0.725-4.303,2.563c-0.951,1.229-2.217,3.729-3.977,3.636c0.03-1.287,0.953-2.479,1.371-3.708
	   c0.438-1.278,0.646-2.712,1.098-3.979c0.979-2.798,0.998-5.188,1-8.271c0.006-5.553-0.521-10.934-0.508-16.432
	   c-0.16,3.429-1.017,6.646-1.021,10.146c-0.01,1.362,0.211,2.766-0.271,3.979c-0.355,0.917-1.604,3.438-2.423,4.108
	   c-1.146,0.939-1.979,0.621-2.906,1.938c-0.76,1.084-1.397,2.488-2.131,3.659c-1.437,2.312-4.396,3.803-6.854,5.678
	   c-1.152,0.882-2.839,1.61-3.619,2.658c-0.538,0.721-0.22,1.479-1.174,2.396c-0.728,0.694-1.796,1.679-2.808,1.313
	   c-0.313-4.998-0.281-9.798-0.281-14.848c-0.002-3.63-0.354-7.077-0.75-10.627c-0.2-1.803-0.319-5.063,0.572-6.563
	   c0.861-1.438,2.401-0.951,3.296-2.022c0.969-1.163,0.87-3.104,0.873-4.638c0.002-1.938,0.53-3.347,0.75-5.064
	   c0.241-1.927-0.445-3.707-1.109-5.416c-1.109-2.861-0.432-3.112,2.332-3.314c0.15-1.398,1.08-2.716,1.275-4.229
	   c0.188-1.438,0.646-2.739,0.755-4.153c0.146-1.838-0.727-2.307-1.271-3.85c-0.396-1.104-0.263-2.775-0.188-3.959
	   c1.646,0.021,2.107-1.683,2.738-2.909c1.13-2.212,0.726-2.913,0.396-5.392c-0.296-2.268-0.125-3.048,0.938-5.021
	   c0.854-1.599,1.063-2.756,0.683-4.569c-0.558-2.641,0.094-5.771-0.662-8.334c-0.539-1.827-2.188-2.896-2.666-4.813
	   c-1.104-4.441-3.187-8.271-3.957-12.696c-0.459-2.63,0.362-5.077-1.009-7.552c-0.771-1.396-2.198-2.241-3-3.729
	   c-0.604-1.127-0.604-2.979-2.216-3.305c-0.234-1.111,0.094-2.505,1.43-2.494c0.313-3.828-3.354-5.009-6.019-6.979
	   c-2.521-1.868-2.293-3.738-1.979-6.229c0.146-1.143,0.229-2.854-0.209-3.909c-0.688-1.61-1.41-1.451-1.498-3.354
	   c-0.104-2.229-0.265-4.654-0.298-6.947c-0.723-0.229-1.446-0.352-2.191-0.332c-0.095-2.313-0.257-2.907-1.979-4.584
	   c-0.75-0.729-4.56-3.496-2.091-4.422c-0.012-2.166,0.887-3.953,0.757-6.168c-1.659-0.113-2.688,0.314-3.409-1.479
	   c-0.811-1.981-0.188-3.854-1.216-5.896c-0.22-0.432-2.479-7.021-1.802-6.88c0.41,0.087,1.02-0.157,1.429-0.074
	   c0.7-3.146-2.282-2.944-3.804-4.417c-0.66-0.646-0.605-1.813-1.296-2.438c-0.924-0.854-1.335-0.271-2.476-0.586
	   c-1.104-0.313-1.607-1.438-3.043-1.438c-1.108-0.002-1.489,0.416-2.563,0.748c-1.854,0.571-4.716,0.896-3.988-2.037
	   c0.141-0.024,0.271-0.063,0.412-0.088c0.201-0.957,0.354-1.894,1.258-2.25c0.119-1.909,0.033-3.327-0.735-5.033
	   c-0.411-0.902-0.104-1.078-0.967-1.684c-0.775-0.541-1.488,0.502-2.021-0.786c-0.271-0.675,0.519-3.349,0.519-4.329
	   c0.005-2.007-0.906-2.563-1.293-4.337c-2.813,0.625-2.146-4.12-4.293-4.808c-2.526-0.809-2.32,2.82-2.2,4.479
	   c-1.761,0.404-2.787-1.31-3.688-2.604c-1.146-1.688-0.123-3.73-1.026-5.301c-0.362-0.627-0.935-1.354-1.86-1.071
	   c-1.098,0.319-0.547,1.094-1.148,1.688c-1.975,1.942-3.182,1.534-3.271,4.534c-2.005,0.147-2.918,0.234-4.271-1.209
	   c-1.166-1.243-1.862-2.757-2.938-4.034c-0.483,2.141-1.206,1.4-2.996,2.387c-1.362,0.74-2.6,1.875-4.179,2.547
	   c-1.93,0.813-2.357,1.063-2.514,3.18c-0.103,1.423-0.002,2.938-0.104,4.394c-3.968,0.527-3.216-4.351-3.5-7.177
	   c-1.875,0.386-1.5-1.512-1.424-2.75c0.813-0.149,1.562-0.316,2.424-0.323c0.396-1.438-1.125-2.118-1.468-3.341
	   c-0.313-1.099,0.104-2.267-0.286-3.332c-0.146-0.021-0.275-0.058-0.415-0.086c0.044-0.953-0.604-1.291-0.792-2.082
	   c-0.155-0.639-0.017-1.346-0.188-1.938c-0.461-1.527-0.948-2.49-1.107-4.254c0.284,0.236,0.822,0.381,1.104,0.631
	   c-0.347-1.166-0.006-2.91-0.552-3.854c-0.271,0.293-0.143,0.33-0.293,0.742c-0.146,0.023-0.275,0.061-0.413,0.085
	   c-0.181,2.464,0.513,5.438-0.058,7.834c-0.756,3.204-5.166,3.837-3.771,7.775c-1.857-0.488-3.979,0.393-5.438-1.254
	   c-1.035-1.161-1.315-3.613-1.32-5.106c-0.006-2.048-0.199-4.101-0.207-6.185c-0.014-3.569,0.351-9.839-4.93-9.069
	   c1.813,1.521,1.252,4.401,1.244,6.555c-0.005,1.021,0.419,6.07-0.686,6.025c-0.938-0.037-1.188-2.615-1.485-3.209
	   c-0.563-1.107-1.41-1.729-2.2-2.662c-1.313-1.557-3.188-2.996-4.318-4.62c-1.379-1.979-0.985-4.427-3.672-5.354
	   c-0.892-0.312-2.06,0.112-2.851-0.288c-1.021-0.523-1.237-1.923-1.944-2.732c-1.604-1.842-3.938-1.21-4.467-3.849
	   c-0.375-1.896-0.107-4.227-0.207-6.166c-0.105-2.271-1.125-3.678-1.896-5.74c-0.896-2.391-1.596-2.867-4.057-3.783
	   c-0.285-1.565-0.671-2.844-1.046-4.388c0.027,2.964,0.188,6.791,1.763,9.28c1.571,2.494,1.896,5.229,1.709,8.354
	   c-0.314,0.101-0.854,0.104-1.161,0.007c-0.702-1.314-0.813-2.271-1.036-3.688c-0.271-1.718-0.762-2.267-1.752-3.813
	   c-0.563-0.884-0.944-1.924-1.438-2.855c-0.829-1.604-1.707-2.563-3.041-4.147c-2.511-2.99-4.021-7.267-5.826-11.011
	   c-0.903-1.887-0.424-3.713-0.771-5.747c-0.41-2.455-2.469-4.835-3.728-6.968c-1.021-1.729-0.986-3.401-1.724-4.979
	   c-0.453-0.979-1.834-1.521-2.194-2.264c-0.354-0.714,0.026-1.959-0.037-2.771c-0.228-2.548-2.086-3.406-2.789-5.474
	   c-0.633-1.854,0.063-3.854-0.161-5.745c-0.207-1.706-0.919-3.723-1.732-5.216c-0.935-1.699-1.185-3.49-1.707-5.479
	   c-0.646-2.479-2.604-3.896-3.438-6.111c-0.362-0.964-0.021-1.982-0.479-2.938c-0.444-0.935-1.483-1.093-1.732-2.212
	   c-1.354-0.339-3.082-4.033-3.728-5.261c-0.449-0.865-0.598-2.002-0.988-2.784c-0.604-1.188-1.748-1.389-2.402-2.396
	   c-0.951-1.461,0.196-3.623-1.021-5.137c-0.953-1.182-3.135-1.808-4.323-2.771c-3.136-2.544-7.882-3.271-11.918-2.315
	   c-2.5,0.594-3.802-0.354-6.216-0.851c-2.127-0.438-4.541-0.011-6.646-0.566c-1.591-0.425-3.372-1.049-4.521-2.057
	   c-1.046-0.915-0.906-1.382-2.43-1.821c-1.102-0.315-1.966-0.186-2.804-0.774c-0.479-0.341-0.38-1.319-1.479-1.688
	   c-0.813-0.271-1.883-0.236-2.742-0.461c-1.506-0.384-3.232-0.999-4.196-1.941c-0.813-2.669-0.636-3.886-3.756-4.493
	   c-0.071-1.21,0-2.469-0.073-3.678c-0.498,0.091-1.178-0.164-1.675-0.073c-0.229,0.039-1.354-16.223-0.886-17.968
	   c0.188-0.723,0.444-1.112,0.516-1.995c0.068-0.977,0.204-1.479,0.672-2.332c0.898-1.646,0.88-2.813,0.995-4.668
	   c0.123-1.979,1.125-3.253,1.48-5.104c-2.495,0.694-2.227,4.912-2.979,6.771c-0.688,1.688-1.313,3.406-1.636,5.204
	   c-0.134,0.729-0.185,1.289-0.49,1.923c-0.262,0.521-0.807,0.812-0.979,1.438c-0.313,1.149,0.061,2.771-0.021,3.977
	   c-2.396,0.229-5.418-1.354-7.572-2.438c-1.722-0.864-3.595-0.687-5.311-1.496c-2.015-0.954-2.874-1.019-5.076-1.244
	   c-1.479-0.149-3.396-0.575-4.229-1.729c-0.957-1.317,0.021-3.354-0.903-4.648c-0.271-0.384-2.252-1.28-2.827-1.813
	   c-0.742-0.68-1.262-1.234-2.188-1.673c-2.7-1.271-6.646-0.903-8.771-3.188c-1.482-1.585-1.341-6.7-3.29-7.521
	   c-0.563-1.428-1.013-1.938-1.29-3.451c-0.859-4.643-0.693-9-0.688-13.727c0.022-8.383-0.076-16.902-2.396-25.023
	   c-0.729-2.565-1.871-5.064-2.787-7.596c-1.502-4.14-1.143-9.229-1.385-13.563c-0.274-4.896-0.74-10.109,0.094-14.976
	   c0.541-3.149,0.019-6.343,0-9.517c-0.006-1.421,0.271-2.839,0.248-4.232c-0.034-2.146-0.125-4.358,0.728-6.401
	   c0.44-1.069,0.834-1.943,1.132-3.125c0.27-1.065,0.422-2.023,0.476-3.125c0.021-0.532-0.071-1.104,0-1.625
	   c0.192-1.409,0.942-2.124,0.75-3.646c-0.823,2.244-1.129,5.396-1.616,7.896c-0.259,1.313-1.157,2.383-1.634,3.646
	   c-0.436,1.15-1.037,2.545-1.229,3.764c-0.168,1.076,0.031,2.229-0.146,3.337c-0.354,2.098-0.125,4.212-0.125,6.375
	   c0,2.106-0.375,3.897-0.375,6c0,2.084,0,4.169,0,6.25c0,4.508-0.366,8.993-0.375,13.5c-0.002,1.062,0.313,1.893,0.491,2.878
	   c0.396,2.177,0.5,4.428,0.909,6.613c0.193,1.059,0.568,2.271,1.225,3.139c0.418,0.552,0.627,0.646,0.75,1.37
	   c0.091,0.521-0.021,1.102,0,1.625c0.03,0.646,0.114,1.252,0.25,1.866c0.196,0.898,0.688,1.771,0.877,2.633
	   c0.146,0.637-0.038,1.133,0.226,1.77c0.207,0.515,0.684,0.931,0.907,1.434c0.983,2.151,0.614,4.641,0.615,6.932
	   c0.002,2.521,0.019,5.041,0,7.563c-0.016,2.307-0.534,4.585-0.534,6.907c0.063,0.896,0.25,1.604-0.162,2.549
	   c-0.229,0.515-1.916,1.896-1.93,2.063c-0.203,2.938,0.633,3.683,2.023,5.979c1.238,2.049,1.805,2.604,1.645,5.188
	   c-3.354,0.224-7.152,0.196-10.193-0.802c-1.688-0.558-3.194-1.153-4.879-1.66c-1.479-0.442-3.115-0.486-4.428-1.206
	   c-1.313-0.725-2.229-2.473-3.915-3.217c-1.282-0.563-2.692-0.915-4.095-1.672c-1.605-0.872-3.229-1.979-5.011-2.48
	   c-0.563-0.164-1.237-0.032-1.768-0.239c-0.531-0.21-0.979-1.5-1.284-1.564c-0.479-0.104-0.896-0.275-1.35-0.396
	   c-0.325-0.087-1.125-0.097-1.384-0.235c-0.959-0.534-1.409-1.979-2.366-2.661c-1.973-1.404-4.418-1.896-6.509-2.97
	   c-0.63-0.321-1.021-1.084-1.604-1.52c-0.854-0.636-1.866-0.852-2.799-1.331C1124.619,837.096,1124.261,836.917,1123.899,836.75z
	   M211.372,1533.566c0.004-1.123,0.881-0.249,1.195,0.263l-0.066-0.133c0.323,0.511,0.514,1.036,0.465,1.646
	   C212.37,1534.871,211.369,1534.427,211.372,1533.566z M224.476,1522.003c-0.963,0.283-3.271-1.541-2.986-2.47
	   c0.349-1.146,2.899-0.657,3.178,0.495C224.708,1520.712,224.646,1521.364,224.476,1522.003z M226.116,1491.741
	   c-0.009-0.544,0.292-0.739,0.468-1.212v0.5c0.347,0.313,0.721,0.271,0.974,0.689C227.084,1491.827,226.59,1491.783,226.116,1491.741
	   z M228.659,1495.637c-0.183-0.729,0.048-1.012,0.392-1.331c-0.076,0.021-0.152,0.031-0.218,0.063l0.333-0.166
	   c-0.042,0.035-0.076,0.063-0.116,0.104c0.3-0.06,0.659-0.063,0.923-0.085C230.102,1495.096,229.395,1495.417,228.659,1495.637z
	   M235.154,1555.886c1.272-1.116,2.892,0.712,1.846,1.979l0.5-0.667c-0.291,0.479-0.66,0.794-0.696,1.471
	   C235.775,1558.789,234.134,1556.782,235.154,1555.886z M238.784,1621.319c-0.03,0.396-1.35-0.04-1.52-0.19
	   c-0.81-0.68,0.27-0.76,0.84-0.75C238.833,1620.389,238.833,1620.609,238.784,1621.319z M239.217,1575.414
	   c0.566-0.143,1.331-0.108,1.899,0c0.062,0.611,0.13,1.324,0.05,1.949l-0.667-0.333c0.691,0.771,1.334,0.959,0.942,2.288
	   c-0.434-0.063-1.434-0.408-1.892-0.682C239.199,1577.768,239.055,1576.389,239.217,1575.414z M239.963,1616.989
	   c0.07-0.479,0.27-0.87,0.77-0.92c0.42-0.061,1.24,0.229,1.46,0.62C242.383,1617.039,240.133,1617.029,239.963,1616.989z
	   M242.164,1535.364l0.003-0.001c-0.004,0.003-0.007,0.004-0.012,0.007c-0.061,0.041-0.122,0.081-0.192,0.115
	   c-2.743,1.688-1.153-3.003-0.813-4.438C242.494,1531.911,243.526,1534.439,242.164,1535.364z M248.784,1570.979
	   c-0.92,0.24-2.49-0.899-1.34-1.72C248.664,1568.399,249.313,1570.838,248.784,1570.979z M260.692,1576.721
	   c1.278-0.093,2.002,1.623,2.115,1.616C261.042,1578.449,260.6,1578.552,260.692,1576.721z M261.218,1599.97
	   c0.157-1.323,0.235-2.646,0.505-3.933C269.316,1596.055,261.006,1601.75,261.218,1599.97z M273.371,1528.317
	   c0.456-0.048,0.997-0.104,1.462-0.038h-0.75c0.392,0.456,0.744,0.938,0.462,1.967
	   C273.353,1529.849,273.313,1529.604,273.371,1528.317z M274.833,1557.03v-1.572c-0.009-0.049-0.018-0.098-0.029-0.146
	   c-0.152,1.55-0.836,2.899-2.585,2.666c-0.09-1.393-0.088-2.854,0.006-4.229c1.411-0.532,2.295,0.326,2.579,1.563
	   c0.009-0.104,0.024-0.188,0.029-0.282v0.428C274.927,1555.952,274.931,1556.495,274.833,1557.03z M208.727,1025.668
	   c0.055,0.021,0.107,0.048,0.159,0.076c0.403,0.22,0.499,0.89-0.005,1.085c-0.521,0.205-0.617,0.113-1.187,0.078
	   c-0.272-0.021-1.067,0.003-1.109-0.325c-0.038-0.303,0.607-0.75,0.86-0.883C207.84,1025.489,208.318,1025.499,208.727,1025.668z
	   M278.923,1725.929h-0.01c0.62,0-0.5-6.854,2.36-6.051c0.08,0.881,0.06,1.761,0.06,2.65l0.83-0.5
	   C282.593,1724.509,281.414,1726.199,278.923,1725.929z M292.083,1542.659c-0.24,1.11-2.17,0.13-2.52,0.569
	   c0.61-0.779,0.09-1.859,1.15-1.899C291.253,1541.309,292.213,1542.079,292.083,1542.659z M320.164,1625.458
	   c-1.32-1.649-0.45-4.149,0.67-6.09c0,1.2-0.04,2.33,0.02,3.479C320.863,1623.039,320.403,1625.759,320.164,1625.458z
	   M643.883,1688.979c-0.35-0.939,0.146-0.67,0.62-0.939h-0.34c0.12-0.021,0.229-0.03,0.34-0.04c1.09-0.07,2.1,0.39,2.63,1.31
	   C645.661,1689.007,645.727,1689.128,643.883,1688.979z M650.883,1689.708c-0.37-0.01-0.67-0.029-1.02-0.09
	   c0.063-0.479,0.55-0.05,0.64-0.26C650.423,1689.559,651.403,1689.279,650.883,1689.708z M775.553,1769.409
	   c1.04-0.17,1.99,0.21,2.9,0.601c-0.354,2.84,2.83,4.489,2.33,7.301c-1.47,0-1.938,1.238-3.23,1.329
	   c-0.12-1.551,0.59-3.79-1.67-3.659C776.024,1773.128,775.444,1771.338,775.553,1769.409z M664.833,1660.699h0.33
	   c0.07,0.46,0.04,0.854-0.25,1.22c-0.37-0.13-1.03-0.42-1.72-0.62C663.604,1660.659,664.113,1660.789,664.833,1660.699z
	   M667.106,1691.535c1.984,0.465,3.644,2.789,3.646,4.706c-0.003-2.512-6.079-1.688-7.636-1.974c-1.69-0.313-3.146-1.114-4.53-1.479
	   c-1.009-0.263-2.571,0.403-2.308-1.309c0.583-0.035,1.271-0.146,1.771,0.13c0.567,0.303,0.497,0.808,1.191,1.011
	   c0.937,0.274,2.547-0.114,3.549-0.166c1.359-0.07,1.979-0.91,3.414-1C666.513,1691.438,666.813,1691.466,667.106,1691.535z
	   M670.566,1661.291c0.358-0.813,0.434-1.729,1.396-1.273c0.661,0.313,0.894,1.065,0.297,1.562
	   C671.987,1661.795,670.346,1661.776,670.566,1661.291z M670.276,1654.625c0.425-0.609,1.465-0.936,1.757,0.002
	   c0.457,1.463-1.789,1.859-1.938,0.612C670.073,1655.027,670.146,1654.813,670.276,1654.625z M668.055,1659.076
	   c-2.536-0.313-0.678-2.064,0.86-1.777C668.957,1657.811,669.253,1659.223,668.055,1659.076z M666.999,1660.919
	   c0.442,0.666,1.284,0.927,1.96,0.844C669.149,1664.412,666.843,1663.604,666.999,1660.919z M655.164,1690.699
	   c-0.28-0.313-0.9,0.26-0.62-0.63C655.443,1690.199,655.264,1690.798,655.164,1690.699z M657.414,1663.309
	   c0.16-0.229,0.41-0.438,0.75-0.604l-0.33,0.66c1.32,0.25,4.36,2.43,4.28,3.613c-0.313,0.041-0.59,0.041-0.9,0.104
	   c-0.12,1.359-0.36,2.88-2,2.563c-0.08-1.271-0.01-2.604-0.1-3.893c-0.36,0.03-0.86-0.14-1.21-0.1
	   C657.193,1664.878,656.963,1663.979,657.414,1663.309z M673.145,1721.496c0.188-3.36,1.659-6.516,1.776-9.865
	   c0.112-3.225,0.972-7.011-0.334-10.094c-0.151-0.355-1.116-1.893-1.325-2.252c-0.434-0.748-0.605-1.605-1.305-2.256
	   c0.419,0.396,2.46,2.458,3.032,2.726c1.686,0.787,4.104-0.319,3.646-2.404c2.613-0.762,6.479-1.772,6.95-4.392
	   c0.349-1.892-0.771-2.218-1.342-3.658c-0.899-2.271-0.258-2.035,0.685-3.916c1.521-3.02,0.273-5.259-1.339-7.923
	   c-0.427-0.705-0.438-1.334-0.834-2.007c-0.469-0.8-1.438-0.515-0.161-1.166c0.479-0.239,1.209-0.034,1.694-0.319
	   c0.699-0.411,1.101-1.396,1.626-1.975c0.604-0.665,1.953-2.694,2.646-2.728c0.146-1.392-0.713-3.738-1.977-4.45
	   c-0.464-0.263-1.454-0.149-1.996-0.364c-0.741-0.293-1.405-1.068-2.308-1.024c-0.295-0.547-0.384-1.19-0.521-1.796
	   c1.425,0.971,3.131,0.42,4.491,1.816c1.122,1.152,1.13,1.7,2.833,1.843c1.763,0.147,5.096,0.933,4.646,3.313
	   c-0.688,0.188-1.404,0.224-2.101,0.521c0.541-0.021,1.258-0.126,1.741,0.146c0.708,0.393,0.729,1.4,1.683,1.32
	   c0.729-1.271,1.722-1.323,3.154-1.479c1.037-0.104,2.772-0.113,3.357-0.969c-0.42-0.115-0.563-0.414-0.962-0.563
	   c-0.061-1.834-1.724-3.301-3.521-3.974c-0.765-0.286-1.588-0.146-2.241-0.671c-0.729-0.602-0.941-1.725-1.729-2.313
	   c-0.581-0.438-1.712-0.599-2.479-0.483c0.146,0.582,0.113,1.184,0.078,1.774c-1.396-0.166-1.805-1.198-2.813-1.957
	   c-2.387,0.911-5.124,0.178-7.646,0.125c-0.289-1.346-0.857-1.971-1.711-2.81c-0.854-0.854-1.471-1.325-2.771-1.363
	   c-0.575-1.521-2.374-2.979-0.57-4.188c0.673-0.448,1.561-0.521,2.208-0.896c0.771-0.457,1.111-1.423,1.829-1.896
	   c1.022-0.682,2.182-0.076,3.172,0.438c1.281,0.672,1.885,0.901,3.379,0.899c1.585,0,2.979-0.223,4.479-0.658
	   c0.75-0.229,1.852-0.531,2.604-0.146c1.256,0.646,0.843,2.091,1.524,3.13c1.001,1.521,2.541,2.907,4.029,3.979
	   c2.683,1.912,4.548,3.896,6.479,6.56c0.784,1.084,0.858,1.021,2,1.479c0.771,0.312,1.146,0.537,1.833,1.13
	   c0.844,0.729,3.03,1.896,3.313,3.018c-1.854-0.666-2.52-1.731-4.521-2.188c-1.61-0.365-3.438-0.396-5.104-0.256
	   c0.896,1.144,1.635,1.854,3.148,1.973c1.288,0.096,2.727-0.114,3.833,0.652c0.725,0.505,0.995,1.689,1.843,2.025
	   c0.795,0.314,1.938-0.313,2.673-0.368c4.273-0.318,6.066,4.811,8.646,7.2c1.179,1.104,3.802,3.776,2.204,5.905
	   c-0.896,1.188-4.475,0.993-5.854,1.022c1.573,1.679,12.854,7.546,5.604,8.018c1.521,1.212,2.325,3.003,2.689,4.896
	   c1.552-0.076,2.382-2.273,3.253-2.313c1.896-0.069,2.896,1.981,4,3.005c3.271,3.021,5.29,3.78,4.957,8.626
	   c-2.269,0.751-1.542,5.604,0.688,6.021c-0.21-0.987,0.254-2.256,0.094-3.245c4.116-1.156,4.829,3.375,4.949,6.289
	   c0.171,4.146-1.979,4.101-2.949,6.938c2.563,0.396,3.768,3.285,6.563,2.66c-0.224-1.238,0.389-2.396,0.438-3.563
	   c2.671-1.095,3.979,1.314,3.94,3.875c-0.028,2.438-1.483,3.199-1.979,5.354c3.51-0.771,2.992,3.077,3.739,5.321
	   c0.554,1.657,1.994,1.59,1.688,3.619c-0.094,0.604-3.767,4.166-3.816,4.134c1.188,0.67,6.388,7.688,5.415,2.025
	   c4.843-0.896,5.711,4.464,7.688,7.945c1.354,2.393,6.188,8.61,5.543,10.944c-1.614-0.076-3.438-0.131-4.667,0.699
	   c2.271,2.57,4.479,5.188,6.364,7.667c0.925,1.202,2.729,2.691,3.438,3.999c0.646,1.203,0.354,3.088,0.922,4.021
	   c1.521,2.479,3.946,1.021,5.342,3.322c1.146,1.905-0.5,6.438-0.664,8.355c-0.249,2.918,0.702,3.979,1.322,6.979
	   c1.073,5.219-0.604,12.065-2.413,16.667c-2.106,5.349-2.909,11.711-7.229,15.354c-1.854,1.563-4.662,2.176-6.421,3.564
	   c-2.153,1.711-4.146,3.771-6.25,5.749c-1.141,1.065-2.188,2.04-3.021,3.32c-0.632,0.979-1.146,3.399-1.646,4.012
	   c-2.337,2.825-3.525,1.228-7.02,1.988c-4.922,1.084-10.313,3.912-14.771,6.242c-2.183,1.145-4.298,1.646-7.229,2.438
	   c-2.43,0.646-4.615,2.233-7.198,2.385c-1.002,1.729-1.748,4.735-3.448,5.636c-4.674,2.438-16.271-0.761-21.019-2.029
	   c-3.589-0.963-3.825-0.917-6.639-3.896c-2.387-2.527-3.55-4.229-5.271-7.521c-1.286-2.444-2.938-6.491-4.354-8.235
	   c-2.521-3.127-4.813-1.459-5.737-5.668c-0.813-3.646,2.212-13.918-4.997-10.938c-2.771-3.603-3.234-4.673-3.342-8.729
	   c-0.068-2.799-1.031-4.353-1.666-6.909c-1.063-4.313-0.495-9.929-0.271-14.396c0.726,0.646,1.854,0.729,2.632,1.354
	   c2.151-2.005-0.311-7.866-0.688-10.696c-0.5-3.704-1.697-6.992-2-10.752c-0.357-4.466-0.26-8.054-1.333-12.188
	   c-1.833-7.025-0.883-14.021-0.58-21.168c0.147-3.688,1.365-7.688,3.604-10.553c0.114,1.881-0.396,2.967-0.604,4.563
	   c-0.1,0.729,0.188,1.627,0.006,2.334c-0.314,1.172-1.29,1.302-1.623,2.513c-0.626,2.273,0.506,4.381,1.063,6.521
	   c0.497,1.906,0.334,3.688,0.659,5.515c2.864,0.132,2.233-4.666,2.578-6.521c0.417-2.238,0.039-4.492,0.337-6.713
	   c0.33-2.458,1.959-4.505,2.417-6.938c0.396-2.091-0.1-4.03-0.17-6.141C669.788,1728.346,669.559,1721.301,673.145,1721.496z
	   M1101.332,982.146c-0.386,1.229-0.678,3.003-0.536,4.345c-0.99,0.203-1.886,0.28-2.924,0.25c-0.856-0.025,2.166-3.854,2.192-3.916
	   c0.791-1.956,0.222-4.44,0.308-6.507C1105.828,973.865,1101.779,980.729,1101.332,982.146z M1109.045,985.741
	   c-4.764,0.919-2.379-4.688-1.307-7.149c-0.133,0.069-0.271,0.146-0.405,0.188l0.75-1c-0.076,0.188-0.199,0.477-0.345,0.813
	   c0.188-0.1,0.379-0.204,0.556-0.294c-0.456,1.241-0.938,2.485-0.649,4.003C1107.919,983.75,1109.271,984.04,1109.045,985.741z
	   M1118.045,985.991c-2.6,0.229-4.063-10.066,1.038-10.212l-0.75,0.25C1120.239,976.508,1118.5,983.849,1118.045,985.991z
	   M1128.083,978.195c-0.356,2.768-0.118,5.188-1.812,7.479c-0.9,1.229-2.479,1.934-3.9,1.813c0.139-1.175,0.208-16.171,0.25-16.175
	   c2.679-0.209,5.111-2.763,6.332,0.728C1129.58,973.832,1128.314,976.407,1128.083,978.195z M1141.046,954.075
	   c-0.218,1.063-0.258,2.104-0.331,3.263c-1,0.177-1.825,0.19-2.077,1.266c-1.64,0.404-1.54-1.142-2.393-1.988
	   c-0.892-0.896-2.054-0.688-3.204-0.771c-0.764-3.3,2.282-2.01,3.738-2.964c1.033-0.678,0.829-3.282,2.681-3.209
	   c-0.602-0.024,2.132,2.31,2.104,2.241c0.337,0.828-0.333,1.313-0.49,2.04C1141.064,953.988,1141.055,954.032,1141.046,954.075z
	   M1132.287,960.327c-0.338,0.99-0.112,1.854-1.717,2.68c-1.424,0.729-4.072-0.338-4.401,1.287c-0.164,0.022-0.807-0.001-0.872-0.216
	   c-0.13-0.423-0.13-1.238,0-1.66c1.669-0.805,0.336-3.646,1.982-4.648c1.185-0.721,5.063-1.049,6.437-0.854
	   C1134.768,957.06,1132.362,960.105,1132.287,960.327z M1138.958,963.587c-0.085,1.05-0.072,2.589-0.449,3.293
	   c-0.422,0.784-1.713,1.354-2.049,0.031c-2.74-0.17-4.747-0.879-7.182-1.586c0.642-0.698,1.7-0.42,2.682-0.488
	   c0.468-0.658,0.963-1.185,1.501-1.756c0.858-0.911,0.055-4.211,1.938-4.557c0.715-0.142,2.632,1.352,3.813,1.387
	   C1139.422,961.452,1139.083,962.068,1138.958,963.587z M1148.42,962.69c-0.111,0.831-0.275,1.646-0.425,1.881
	   c-0.758,1.18-1.899,1.079-3.188,0.753c-0.228-0.063-1.646-0.771-1.805-0.938c-0.581-0.604-0.49-1.604-0.983-2.024
	   c-0.88-0.771-2.827,0.168-2.229-1.944c2.06-0.131,7.466-2.34,8.709,0.263C1148.597,960.879,1148.541,961.792,1148.42,962.69z
	   M1142.515,966.9c-0.019,0.232-0.04,0.476-0.056,0.681c-1.521,0.525-1.909,2.32-2.825,0.063c-0.446-1.104-0.145-3.069,1.188-3.35
	   C1142.599,963.942,1142.612,965.59,1142.515,966.9z M1132.456,969.512c-0.104,0.061-0.21,0.105-0.32,0.168
	   c-0.438,0.268-1.063,1.451-1.644,1.402c-1.83-0.153-1.723-4.163,0.074-4.528c1.119-0.228,0.937,0.537,1.604,0.789
	   c0.915,0.345,1.784,0.489,3.042,0.569c0.199,0.013,0.007,1.031-0.039,1.138C1134.08,969.099,1133.358,969.079,1132.456,969.512z
	   M1128.265,968.153c-0.019,0.241-0.04,0.474-0.056,0.678c-0.111,1.458-4.873,1.091-5.668,1.006
	   c-0.162-0.751-0.049-1.508,0.256-2.168c0.739-0.063,1.729,0.025,2.391-0.38c0.496-0.307,0.696-1.438,1.084-1.584
	   C1128.079,965.01,1128.375,966.696,1128.265,968.153z M1147.637,954.563c0.532,2.448,0.25,4.076-2.387,4.063
	   c-1.188-0.007-3.406-0.521-3.753,0.919c0.478-3.132,1.738-5.561,0.962-8.631c-0.602,0.056-1.314-0.133-1.918-0.076
	   c-0.064-0.707-0.066-1.466-0.001-2.173c2.101,0.055,2.525,1.47,3.949,2.565c0.976,0.75,2.168,0.854,2.763,2.146
	   C1147.396,953.688,1147.54,954.112,1147.637,954.563z M1139.795,983.241c-1.95,0.137-2.734,0.419-3.234,2.291
	   c-0.438,1.661,0.103,3.676-2.188,3.964c-0.132-2.006,0.235-3.756,0.207-5.76c-0.041-2.979-1.096-2.521-3.712-2.744
	   c0.057-0.815,0.873-0.924,1.688-0.751c-0.854-0.188,0.577-9.521,0.931-10.449c0.776,0.786,2.998,0.287,4.229,0.377
	   c0.703,1.953,1.659,3.564,1.829,5.667C1139.593,976.51,1140.16,983.215,1139.795,983.241z M1149.795,984.741
	   c-0.83,0.081-3.847,0.188-4.556-0.188c-1.365-0.716-0.985-2.877-1.156-4.317c-0.288-2.453-1.451-1.979-2.259-3.94
	   c-0.479-1.155,0.488-3.99-1.204-4.046c-0.078-1.54-0.734-2.86,0.983-3.771c1.293-0.688,2.854-0.074,3.898,0.688
	   c2.36,1.714,1.282,6.035,2.79,8.41c0.526,0.816,1.581,1.056,2.084,1.895C1151.404,981.158,1149.953,982.793,1149.795,984.741z
	   M1250.882,919.749c0.862,0.144,1.658,0.229,2.618,0.281h-0.334c2.573,0.354,1.369,6.512,0.075,7.641
	   c-0.148-1.392-0.033-2.854-0.125-4.257C1250.498,923.9,1250.755,921.592,1250.882,919.749z M1239.466,943.173
	   c-2.438,3.505-3.435,4.204-7.576,3.806c-1.754-2.611-0.271-5.646,0.218-8.021c0.539-2.599,0.771-5.179,0.729-7.905
	   c-0.056-3.741-2.417-4.808-3.012-8.045c-0.289-1.578,0.021-3.014-0.271-4.264c-0.336-1.45-0.767-2.229-0.675-3.993
	   c0.027-0.509,3.979,2.521,4.324,2.886c1.604,1.704,2.563,4.045,3.583,6.12c1.438,2.938,4.421,5.671,4.78,8.954
	   C1241.938,936.02,1241.359,940.452,1239.466,943.173z M1245.881,930.319c0.008-1.917-2.697-1.567-3.997-2.354
	   c-0.078-1.059-0.021-2.168-0.102-3.227c-0.364,0.036-0.867-0.146-1.232-0.104c-0.084-1.392-0.012-2.841-0.101-4.229
	   c-0.021-0.316-3.336-1.044-3.012-3.161c0.271-1.783,1.731-1.875,3.354-2.023c2.582-0.229,6.835,0.367,7.004,3.689
	   C1247.903,920.808,1247.325,929.928,1245.881,930.319z M1256.484,938.746c-0.236,2.4,0.018,4.58-1.078,6.799
	   c-0.992,2.007-1.803,3.386-2.289,5.768c-0.949,0.074-1.951,0.101-2.899,0c-0.174-2.803-1.093-21.191,1.412-21.922
	   c-0.146-0.104-0.298-0.228-0.463-0.354l0.667,0.333c-0.071-0.006-0.138,0.009-0.204,0.021c1.357,1.038,2.077,1.402,3.247,3.188
	   c0.456,0.688,2.058,1.975,2.233,2.591C1257.381,936.113,1256.588,937.685,1256.484,938.746z M1261.675,927.564
	   c-3.604,0.772-3.489-4.035-2.112-5.934c0.104-0.141,0.229-0.271,0.35-0.396c-0.44-1.85-0.396-3.375,1.265-3.537l-0.333-0.334
	   c2.178,1.599,0.296,2.52-0.932,3.871C1260.464,923.584,1261.828,926.435,1261.675,927.564z M1276.45,934.979
	   c-0.55,0.154-1.688,0.157-2.232,0c0.078-4.718-5.188-2.937-7.567-5.087c-1.89-1.71-0.896-7.729-0.063-9.818
	   c0.707,0.271,1.507,0.588,2.251,0.939c-0.114-0.104-0.215-0.214-0.336-0.313l1,0.667c-0.213-0.123-0.438-0.238-0.664-0.354
	   c2.259,2.102,3.141,4.479,5.021,6.854C1275.934,930.498,1276.662,931.532,1276.45,934.979z M1342.164,1518.699
	   c-0.563,0.949,0,1.93-1.9,1.229c-0.238-1.279-0.354-3.261,0.03-4.511c0.91,0.54,1.43,1.58,1.87,2.61V1518.699z M1354.734,1538.599
	   c-0.896,0.271-2.25,0.271-3.146,0c-0.64-1.896-0.02-2.854,1.24-3.896h1.33C1354.904,1535.859,1355.133,1537.199,1354.734,1538.599z
	   M1406.109,1082.414c0.678,3.165,1.979,11.406-3.229,9.232c-0.078-1.277-0.017-2.618-0.104-3.896
	   c-0.188-0.037-0.369-0.075-0.563-0.113c-0.097-1.584-0.038-3.087,0.277-4.604h-0.334
	   C1402.663,1081.949,1404.756,1082.325,1406.109,1082.414z M1382.426,1444.288c0.604-3.808,1.583-6.731,1.407-10.926
	   c-0.157-3.751-0.854-7.979,0.058-11.608c3.104-0.377,1.506-4.828,2.609-6.976c4.068-7.921,6.152,1.685,6.332,5.25
	   c0.098,1.959,0.806,0.594-0.656,2.752c-0.621,0.917-3.202,1.044-3.041,2.563c0.189,1.81,2.951,1.238,3.631,2.41
	   c0.563,0.965,0.116,3.799,0.067,4.938c-0.142,3.291,0.41,6.159,0.283,9.273c-0.8,0.229-2.438,0.229-3.232,0
	   c0.171-1.104-0.271-2.451-0.102-3.563c-0.957-0.221-2.607-0.221-3.565,0c-0.638,3.033,3.386,7.854,1.29,10.945
	   c-0.738,1.09-3.942,1.86-5.291,0.263C1381.124,1448.317,1382.221,1445.583,1382.426,1444.288z M1378.492,1581.627
	   c-0.334,2.447,0.212,1.256-2.658,2.735c-1.475,0.761-2.506,0.847-3.392,2.271c-5.492,1.489-2.021-9.979-1.896-12.892
	   c0.578,0.03,1.329-0.188,1.898-0.104c0.051-0.517,0.021-1.047,0.104-1.558c2.979-0.931,2.67-4.469,4.284-6.438
	   C1380.177,1569.684,1379.151,1576.798,1378.492,1581.627z M1384.117,1536.313c-1.506,0.061-3.063,0.061-4.566,0
	   c-0.684-3.31,1.813-4.605,1.334-7.897c1.107,0.178,2.503,0.563,3.559,1.015c0.062,1.016-0.313,1.938-0.563,2.227
	   C1384.146,1533.112,1384.37,1534.758,1384.117,1536.313z M1382.092,1525.694c-0.58-0.896-0.113-2.048-0.563-2.992
	   c-0.613-1.271-2.466-2.085-3.053-3.267c-0.832-1.688,0.521-3.521-1.596-4.474c-0.076-1.499-0.021-3.061-0.102-4.561
	   c-0.854,0.093-1.496-0.454-2.229-0.441c-0.188-1.271,0.021-2.118,0.941-2.998c2.047,2.772,3.641-0.63,1.958-2.604
	   c1.337-2.189,0.366-4.832,0.709-7.334c0.335-2.448,1.979-4.479,1.716-6.946c1.599,0.149,2.149,1.657,2.532,3.083
	   c-0.089-0.371-0.174-0.747-0.248-1.137l0.667,2.666c-0.147-0.441-0.271-0.979-0.419-1.529c0.708,2.964,1.771,5.464,1.751,8.529
	   c-0.026,2.824-2.311,7.623-0.332,10.041c1.951-1.746,2.646-4.688,5.944-4.322c0.017,2.979-0.948,5.77-0.944,8.949
	   c0.004,2.994,1.172,6.479,0.61,9.281c-1.525,0.352-2.936,1.502-4.373,1.625C1382.253,1527.509,1383.454,1527.792,1382.092,1525.694z
	   M1386,1486.118c0.346-1.719,1.2-2.908,3.174-1.779c1.078,0.616,1.331,6.63-0.142,6.964c-0.313,0.071-3.131,0.38-3.147,0.008
	   C1385.849,1490.509,1385.621,1487.998,1386,1486.118z M1391.864,1667.889c0.01,0.92-0.65,2.84-1.063,3.689
	   c-0.146,0.29-2.5,2.41-2.54,1.7c-0.196-3.15-0.196-6.53,0-9.66c0.78,0.18,1.75,0.063,2.32,0.66c0.01,0.02,0.03,0.04,0.05,0.06
	   c0.44,0.511,0.32,1.341,0.79,1.87c0.48,0.551,1.23,0.721,1.75,1.141C1392.803,1667.588,1392.314,1667.699,1391.864,1667.889z
	   M1391.783,1471.979c-0.979-0.192-2.258,0.313-3.232,0.104c-0.42,3.088,0.956,5.63,0.899,8.563c-2.819,0.112-5.746,0.112-8.565,0
	   c0.146-3.52-1.813-6.418-1.718-9.613c0.091-2.814,1.969-4.784,2.667-7.316c0.713-2.584-1.089-7.728-0.34-8.688
	   c1.098-1.411,7.346-2.416,8.788-1.236c2.487,2.035,0.219,7.217,0.951,9.919c0.495,1.827,1.921,2.271,1.938,4.342
	   C1393.199,1469.209,1391.476,1470.181,1391.783,1471.979z M1400.466,1123.008c-0.59,1.421,0.252,3.729-0.2,5.254
	   c-0.836-1.916-2.896-0.793-2.813-3.515c-0.546,0.116-1.354-0.214-1.9-0.103c0.021-1.021,0.188-2.973-0.478-3.828
	   c-0.954-1.25-2.688-0.668-3.729-1.708c-0.931-0.938-1.097-2.483-0.396-3.563c1.229-1.887,1.77-0.827,3.223-0.255
	   c1.604,0.635,1.503,1.313,3.343,0.746c1.6-0.484,0.66-1.379,2.936-0.984c1.924,0.332,3.804,1.563,3.644,3.788
	   C1403.901,1121.35,1401.29,1121.023,1400.466,1123.008z M1405.807,1113.223c-1.544-1.854-2.434-1.415-4.917-1.576
	   c-1.536-1.969-0.805-5.666-2.055-7.802c-0.484-0.826,0.062-0.969-0.64-1.729c-0.319-0.354-1.534-0.23-2.021-0.49
	   c-1.631-0.887-2.127-1.534-2.68-3.099c-0.488-1.394-0.012-2.354-1.229-3.59c-0.938-0.959-3.146-1.063-3.854-1.938
	   c-1.476-1.816-1.011-5.592-0.867-7.919c5.947-0.371,5.908,5.559,7.743,10.17c0.258,0.647,4.688,5.157,4.823,3.063
	   c0.088-1.341-0.117-2.688,0.438-3.896c0.485-0.156,1.396-0.149,1.887,0c0.521,1.329,1.729,3.424,3.334,3.229
	   c0.377-2.063,1.209-3.44,3.334-3.572c0.229,3.353,0.444,5.984,2.063,8.988c0.683,1.271,2.034,1.772,2.679,2.854
	   c0.646,1.074,0.354,3.064,0.271,4.396c-1.271,0.188-2.574,0.521-3.899,0.436c-0.089,1.501-0.003,3.064-0.101,4.563
	   c-0.729,0.052-2.696,0.427-3.31,0.063C1405.892,1114.82,1406.426,1113.968,1405.807,1113.223z M1410.064,1709.949
	   c-1.313-0.08-2.146-0.78-2.604-1.96c-0.49-1.261,0.34-2.04,0.87-0.58C1408.883,1708.939,1410.833,1707.849,1410.064,1709.949z
	   M1416.734,1722.599c-0.9,0.271-2.24,0.271-3.146,0c-0.021-3.721-2.84-5.579-2-9.801c0.854-0.18,1.62-0.18,2.479,0
	   c-0.16-0.039,0.17,2.53,0.229,2.75c0.25,0.881,0.67,1.711,1.2,2.461C1416.543,1719.489,1417.503,1720.569,1416.734,1722.599z
	   M1418.164,1344.699l2,2c0.7,0.729,1.55,0.5,1.25,1.87c-0.63,0.35-1.75,0.62-2.43,0.729
	   C1417.414,1347.859,1417.204,1346.378,1418.164,1344.699z M1421.383,1719.949c-2.34,0.061-2.279-3.396-1.063-3.03
	   c-0.08,0.891,0.8,0.69,1.148,1.229C1421.664,1718.429,1421.744,1719.939,1421.383,1719.949z M1439.494,1488.699l-0.66,0.67
	   c0.78,0.37,1.55,0.891,2.32,1.359c-0.98,0.063-1.979,0-2.9-0.149C1437.954,1489.289,1438.704,1489.338,1439.494,1488.699z
	   M1427.604,1735.939c-0.021-0.61-0.021-1.2,0-1.811c1.869-0.101,3.771,0.529,5.359,1.479c0.51,0.301,1.73,0.642,1.98,1.156
	   C1434.753,1736.899,1427.583,1735.409,1427.604,1735.939z M1439.513,1734.499c-0.8-0.899-1.6-1.688-2.563-2.58
	   c0.14-1.59-0.37-3.51-0.21-5.1c-3.063-0.761-2.4-5.771-0.602-7.53c1.291,1.351,1.291,3.04,2.178,4.48
	   c0.054,0.09,0.104,0.18,0.152,0.26c0.604,0.96,1.12,1.58,1.291,2.854C1440.114,1729.429,1439.494,1731.958,1439.513,1734.499z
	   M1442.793,1706.599c-1.16,2.061-2.12,0.354-2.22-1.101c-0.05-0.859,0.021-5.37,1.63-2.729c0.34,0.55,0.54,1.149,0.64,1.779
	   C1442.933,1705.149,1443.104,1706.059,1442.793,1706.599z M1455.217,1759.645c-0.254-2.521,2.456-2.307,3.673-3.89
	   c0.591,0.084,0.944,0.167,1.562,0.331c-0.479,0.521-0.289,1.075-1.231,1.677c0.566,0.571,0.898,1.712,1.604,2.199
	   c-0.932,0.076-2.037,0.209-2.979,0.067l0.333,0.333C1457.322,1760.05,1456.625,1759.427,1455.217,1759.645z M1472.841,1785.363
	   c0.235,1.701-0.313,4.438-0.392,6.283c-2.051,0.088-4.188,0.087-6.232,0c-0.103-4.356-2.081-8.652-3.771-12.566
	   c-1.352-0.449-2.25-0.729-3.896-1.108c-0.146-3.239,0.423-6.387,0.341-9.551c1.275-0.448,2.813-0.536,4.219-0.449
	   c1.105-3.128,4.114-2.672,7.018-2.558c-0.544-0.021-1.188,6.945-0.543,7.943c1.104,1.717,4.021,1.108,4.177,3.594
	   c0.062,0.953-1.518,2.128-1.854,3.063C1470.913,1782.78,1472.538,1783.172,1472.841,1785.363z M1476.459,1261.696
	   c2.095-1.804,1.113-3.563,4.215-4.354c2.801-0.709,4.247-0.396,5.154-3.638c-0.104-0.017-0.212-0.021-0.329-0.017h0.334
	   c-0.002,0.006-0.004,0.011-0.005,0.017c1.316,0.218,1.463,2.41,0.892,3.563c-0.571,1.146-2.013,1.685-3.185,2.216
	   C1481.416,1260.45,1478.939,1264.134,1476.459,1261.696z M1486.163,1263.693c-0.51,1.807,0.239,3.851-0.377,5.604
	   c-2.614,0.864-0.563,7.146-1.619,9.104c-0.989-1.896-0.684-5.688-0.835-8.042c-0.098-1.523-0.557-2.873-0.843-3.911
	   c-0.3-1.095-0.913-1.979-0.604-3.379c2.794-0.273,3.705-3.374,5.949-4.39v0.334
	   C1489.205,1260.887,1486.658,1261.933,1486.163,1263.693z M1518.109,1263.638c-2.041,0.604-2.324,5.339-3.066,7.007
	   c-0.454,0.146-1.039,0.118-1.491,0c-0.179-2.521,0.778-5.33-1.79-6.604c-1.979-0.989-5.279-0.233-7.545-0.396
	   c-0.902-5.559,5.948-8.104,9.771-4.969C1515.237,1259.703,1518.597,1262.063,1518.109,1263.638z M1527.416,1235.092
	   c0.771-1.313-0.452-2.507-0.694-3.552c-0.329-1.43-1.271-6.316,1.778-5.511v0.333c0,1.882,0.139,3.768,0.156,5.646
	   c0.009,0.99,0.494,3.241,0.251,4.104c-0.826,2.896-4.749,0.688-5.38,1.854C1524.576,1236.027,1526.556,1236.561,1527.416,1235.092z
	   M1529.5,1240.696c0.012,3.188-1.02,5.012-1.689,7.862c-0.543,2.31-0.971,6.979-3.928,5.089c-0.045-1.729-0.256-9.983-1.667-10.341
	   c-0.146-0.732-0.155-1.828,0.001-2.563c2.063-0.127,5.717,0.566,7.283-0.384V1240.696z M1536.829,1246.822
	   c-0.583,1.127-1.202,0.766-1.662,2.13c-0.234,0.696,0.001,1.904,0.007,2.644c-0.37-0.787-0.853-1.313-1.396-1.843
	   c-0.396-0.001-0.832-0.063-1.229-0.104c-0.146-0.162-0.674-1.082-0.764-1.283c0.618-1.272,1.813-1.04,2.535-1.83
	   c0.813-0.896,1.264-2.423,1.839-3.504l-0.667-0.667c0.539-0.229,1.396-0.231,1.951-0.281
	   C1537.561,1243.811,1537.612,1245.311,1536.829,1246.822z M1531.234,1244.93c-0.104-1.464,0.313-2.885,0.6-4.229l0.333,0.334
	   c0.663-0.041,1.323,0.208,1.95,0.381C1534.146,1242.756,1532.167,1244.085,1531.234,1244.93z M1537.99,1237.355
	   c-1.086,1.401-7.592,1.266-8.26-0.438c-0.478-1.188,0.854-2.827,1.063-3.989c0.313-1.669-0.005-3.54,0.029-5.229l0.333-0.333
	   C1532.921,1222.825,1541.306,1233.043,1537.99,1237.355z M1542.773,1257.177c-1.599-1.603-0.332-5.229-0.349-7.188
	   c-0.011-3.438-0.099-7.104-0.313-10.575c-3.535,0.199-3.252-0.859-2.876-3.579c0.385-2.788,0.722-5.438,1.593-8.139l-0.168,0.252
	   c-0.229,0.354-0.412,0.628-0.499,0.748l0.499-0.748c0.797-1.236,2.146-3.487,1.899-3.896c2.511,4.114,3.219,9.449,4.021,14.146
	   c0.357,2.063,0.229,4.452,1.075,6.395c0.893,2.029,3.079,2.701,4.076,4.479C1553.792,1252.72,1545.53,1259.957,1542.773,1257.177z"
	   />
 <path id="border_4_" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M1286.333,683.279c1.074-3.366-1.167-5.396-1.289-8.457
	   c-1.588-0.41-4.977-2.197-5.466-3.793c-0.282-0.921,0.011-3.938,0.543-4.688c0.596-0.85,1.8-0.656,2.271-1.556
	   c0.396-0.774-0.181-1.813,0.173-2.512c0.339-0.696,1.729-0.698,1.979-1.281c0.444-1.049-0.875-2.243-1.518-2.962
	   c-1.077-1.206-2.271-2.496-3.146-3.737c-1.209-1.706-1.239-3.318-3.554-2.006c-1.838,1.042-2.418,1.838-4.777,1.993
	   c-2.688,0.176-3.831-0.409-5.225,1.979c-1.086-2.009-0.646-2.646-2.938-3.729c-1.313-0.618-3.157-0.938-4.063-2.245
	   c-0.646-0.938-0.534-2.71-0.926-3.824c-0.439-1.252-1.753-2.453-2.036-3.638c2.78-0.396,2.131-4.298,2.255-6.256
	   c2.549-0.161,5.194-0.063,7.757-0.038c2.664,0.021,5.09,0.646,7.528,1.207c1.021,0.229,2.015,0.574,2.927-0.146
	   c0.903-0.709,0.974-1.873,1.75-2.83c0.803-0.979,1.744-1.083,2.805-1.665c2.021-1.104,3.455-0.955,5.907-1.104
	   c0.041-0.798,0.042-1.624-0.004-2.419c-0.176-0.084-0.358-0.178-0.463-0.237c0.979-0.167,2.013-0.068,2.966,0.237
	   c1.146,3.523,1.598,1.729,3.789,0.389c2.156-1.321,5.036,0.427,6.963-0.976c-0.715-4.271,12.47-5.646,8.987-10.712
	   c-0.729-1.058-2.345-1.459-3.406-2.025c-0.591-1.855,1.28-2.238,2.224-3.404c0.924-1.137,0.424-1.979,1.027-3.01
	   c0.928-1.573,4.419-2.07,5.949-3.056c0.812-0.522,1.723-0.875,2.493-1.493c1.108-0.898,1.214-1.896,2.05-2.775
	   c0.675-0.718,2.207-0.965,3.012-1.669c0.928-0.812,0.928-1.463,1.771-2.493c0.581-0.71,1.313-0.886,1.917-1.639
	   c0.603-0.753,0.962-1.915,1.514-2.931c1.169-2.15,1.25-3.763,1.25-6.25c0-2.149-0.766-4.858,1.313-5.517
	   c2.23-0.688,4.355,0.229,6.61-0.807c2.248-1.025,4.621-1.898,6.818-2.945c1.104-0.521,1.835-1.05,3.001-1.231
	   c1.631-0.271,3.438,0.387,5.021-0.188c1.359-0.487,2.271-1.947,3.179-3.006c0.854-1.021,1.479-1.396,2.561-2.126
	   c1.466-0.992,4.729-2.394,4.282-4.648c1.212-0.271,5.871-2.265,6.224-3.521c0.364-1.299-2.188-2.749-1.333-3.836
	   c0.497-0.632,3.746-0.159,4.528-0.219c0.979-0.076,2.021-4.432,2.267-5.249c0.618-2.081,2.251-3.321,3.814-4.702
	   c2.104-1.859,2.804-4.123,5.476-5.276c2.188-0.942,4.656-0.8,6.743-1.674c2.684-1.124,2.621-2.637,2.776-5.521
	   c4.091-0.254,7.655,3.032,10.848,5.275c2.859,2.016,4.3,2.333,7.604,1.924c2.187-0.27,3.986-0.882,6.271-0.742
	   c2.396,0.147,4.207,0.479,6.238,1.707c2.313,1.412,4.479,3.042,7.209,2.731c1.521-0.174,3.674-0.3,4.803-1.438
	   c1.289-1.296,1.434-3.721,0.529-5.202c0.881-0.063,1.807-0.021,2.688-0.077c0.026-0.529,0.136-1.188,0.038-1.719
	   c-0.146-0.805-1.16-1.264-1.197-1.81c-0.095-1.366,2.229-2.379,3.183-3.256c2.181-2.002,5.017-3.494,7.718-5.008
	   c2.521-1.414,5.094-2.917,7.48-4.583c0.741-0.521,1.596-0.521,2.278-1.354c0.464-0.563,0.104-1.129,0.788-1.771
	   c1.112-1.042,1.862-0.17,1.844-2.396c2.104,0.479,1.572,2.722,2.708,3.917c0.859,0.903,2.207,1.146,3.146,2.147
	   c0.81,0.857,0.543,0.566,1.104,1.646c1.126,2.153,2.13,3.707,4.507,3.258c1.438-0.271,2.563-0.986,4.161-0.263
	   c-0.051,0.983,0.944,2.249,0.53,3.205c-0.64,1.474-2.035,0.161-3.199,0.795c-0.804,0.438-3.785,5.243-3.843,6.16
	   c-0.489-0.104-1.188,0.173-1.669,0.073c-0.349,1.109-1.443,1.688-1.515,2.927c1.438,0.11,2.775,0.438,4.166,0.563
	   c1.029,2.271-0.916,4-0.225,5.979c0.354,1.007,1.244,1.729,2.271,1.199c1.354-0.704,0.994-2.188,1.007-3.456
	   c0.038-4.895,5.353-7.206,9.957-6.974c0.682,1.479,0.337,2.955,0.854,4.484c0.563,1.646,2.115,3.745,3.371,5.168
	   c0.854,0.961,5.006,2.871,4.832,4.063c-0.176,1.22-1.146,0.459-1.521,0.979c-0.368,0.521-0.188,1.354-0.479,1.78
	   c-1.263,1.854-4.957,1.908-5.017,5.229c-0.041,2.271,1.104,1.418-0.571,3.233c-0.838,0.91-1.546,2.258-3.131,2.313
	   c-0.599,1.12-1.382,5.448,0.419,5.491c0.5,2.341-3.865,2.526-3.192,5.668c1.266,0.313,2.483,0.113,3.729,0.296
	   c1.024,0.146,1.966,0.64,2.956,0.722c0.627-1.563-0.271-2.632,0.922-3.806c0.896-0.882,3.188-2.096,4.377-2.729
	   c1.679-0.896,4.063-2.188,5.995-1.938c1.729,0.229,4.166,2.36,5.729,3.234c2.697,1.501,3.457,0.979,6.207,0.206
	   c0.688-0.188,1.31-0.563,2.104-0.396c1.289,0.276,1.851,1.89,3.2,1.959c1.686,0.097,2.479-1.642,4.177-2.063
	   c1.125-0.283,4.612-0.696,5.896-0.155c0.748,0.314,1.328,1.704,1.91,2.211c0.771,0.663,1.521,1.047,2.477,1.354
	   c0.188,1.782,1.272,2.054,2.717,2.938c1.919,1.19,2.091,1.521,2.076,3.707c-0.006,1.043-0.396,3.063,0.037,4
	   c0.764,1.654,3.184,1.51,3.179,3.713c-0.229,0.021-0.442,0.057-0.673,0.08c-0.903,1.909-0.193,5.039-0.327,7.168
	   c-1.716,0.109-3.354-0.284-4.966-0.21c-2.113,0.104-3.025,1.119-4.453,2.042c0.643,3.75-4.207,6.333-6.104,8.868"/>
 <path id="path3927" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M645.056,341.488c1.702,1.35,3.646,2.303,5.444,2.541
	   c3.777,0.496,14.398-0.548,10.025,6.426c-1.434,2.27-3.104,4.201-2.366,7.574c0.58,2.676,3.163,4.493,4.6,6.741
	   c0.653,1.021,0.922,2.252,1.667,3.259c0.706,0.955,1.756,1.577,2.498,2.602c1.471,2.032,0.533,4.369,2.209,6.326
	   c-1.43,0.503-2.771,1.509-4.299,2.156c-1.905,0.806-2.215,1.047-3.083,2.834c-0.755,1.554-0.584,3.012-2.25,3.414
	   c-1.533,0.37-3.325-1.145-3.398-2.631c-2.188,1.291-4.455,3.891-4.313,6.583c0.002,0.036-3.61,0.384-4.021,0.632
	   c-0.874,0.541-0.913,1.299-1.513,1.955c-0.279,0.306,0.093,0.978-0.275,1.264c-0.385,0.298-1.026-0.077-1.381,0.181
	   c-1.521,1.143-3.021,1.216-2.813,3.968c0.104,1.471-3.938-2.417-3.998-2.5c-1.354-1.577-2.623-3.177-4.875-3.252
	   c-0.095-1.154-0.05-2.317-0.127-3.477c-1.002-0.331-1.871-0.598-2.899-0.766c-0.221-3.726,1.146-6.74,0.899-10.566
	   c-0.438-0.079-0.798-0.087-1.229,0.008c-0.603,1.244-1.927,1.781-2.104,3.226c-3.226,0.908-9.002,1.01-10.007,5.001
	   c-1.312,0.15-3.407,0.788-3.041,2.147c0.209,0.781,2.291,1.091,2.771,1.486c1.203,0.985,1.938,2.244,2.339,3.697"/>
 <path id="path3929" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M421.892,365.42c-0.065,0.472-0.374,0.745-0.439,1.217
	   c-5.229,1.206-3.166-5.061-5.937-6.633c-1.189-0.683-3.002,0.169-4.354-0.644c-1.361-0.813-1.712-2.779-3.271-3.047
	   c-1.227-4.709-11.423-4.464-14.673-4.669c0.535-4.287-2.868-4.923-6.332-5c0.229-1.867,0.697-3.507,0.563-5.559
	   c-0.188-0.038-0.369-0.076-0.563-0.114c-0.083-1.164,0.274-2.822-0.051-3.942c-0.371-1.277-1.45-1.019-1.354-2.684
	   c0.043-0.769,1.751-1.938,2.021-2.984c0.274-1.021-0.001-2.592-0.016-3.659c-0.024-1.75-0.146-3.252-0.594-4.934
	   c-0.21-0.786-1.047-2.397-1.093-3.057c-0.154-2.308,1.354-4.517,1.354-7.017c-0.001-0.627,0.123-1.395,0.006-2.007
	   c-0.141-0.743-0.964-0.721-1.026-1.31c-0.146-1.264,0.683-1.962,0.778-2.925c0.251-2.286-0.646-4.602-1.408-6.775
	   c-1.646-4.729-1.408-9.461-1.729-14.6c-0.309-0.05-0.6-0.069-0.903-0.097c-1.036-2.742-0.896-5.533-1.097-8.554
	   c-1.624-0.657,0.249-4.955,0.383-6.731c0.074-0.976-0.063-3.27,0.66-4.006c1.368-1.4,6.874-0.366,8.673-0.344
	   c2.129,0.026,1.448,0.523,2.675-1.966c0.824-1.67,1.104-2.467,1.325-4.351c0.146-1.217-0.572-3.691,0.229-4.69
	   c0.683-0.849,3.348-0.615,4.358-1.044c0.395-0.162,0.979-1.044,1.741-1.339c0.813-0.313,1.467-0.202,2.333-0.26
	   c1.418-0.096,2.874,0.044,4.271-0.058c0.375-0.673,0.808-2.122,1.375-2.625c0.736-0.654,2.337-0.659,2.777-1.292
	   c0.653-0.932,0.001-2.341,0.223-3.374c0.229-1.079,0.813-1.666,1.271-2.641c0.765-1.632,2.257-4.055,1.424-6.009
	   c-0.896-2.116-3.354-1.24-5.614-1.383c-0.902-2.328-3.224-2.605-4.967-3.684c-1.177-0.728-0.889-1.973-2.426-2.542
	   c-0.92-0.341-2.1,0.266-3-0.114c-3.146-1.323-2.297-9.792,1.271-9.992c0.025-1.018,0.452-1.754,1.346-2.008
	   c0.148-0.727,0.148-1.818-0.002-2.543c-3.413-2.426-7.4-0.62-11.282-1.399c-1.116-0.224-2.126-0.391-3.073-1.057
	   c-1.063-0.748-1.47-2.016-2.584-2.633c-1.592-0.882-3.938,0.313-4.729-1.594c-2.607,0.564-1.7-1.654-3.188-2.814
	   c-1.47-1.15-2.539,0.458-3.431-1.902c-0.536-1.417-0.104-3.142-0.652-4.333c-0.566-1.238-2.271-2.461-2.391-4.283
	   c-1.048-0.066-2.243,0.123-3.284-0.05c-0.498-0.083-1.215,0.196-1.674,0.041c-0.656-0.221-0.469-1.257-0.979-1.407
	   c-2.479-0.727-3.938,1.51-6.295,0.976c-0.035-0.184-0.071-0.368-0.108-0.552c-2.813-0.753-3.021,2.353-5.222,2.242
	   c0.146-3.17-4.354-1.999-3.771-4.916c-0.553-0.039-2.86,0.271-3.219-0.118c-1.064-1.17,0.35-1.398,0.521-2.332
	   c0.38-1.978,0.729-3.497,0.064-5.395c-0.45-1.303-1.326-1.156-1.107-2.396c0.077-0.437,1.745-1.977,1.996-3.115
	   c0.271-1.226-0.188-2.558,0.53-3.699c1.863-2.938,3.438,0.237,5.863-0.387c0.273-0.372,0.394-0.371,0.667-0.667
	   c0.372-5.628,8.849-4.733,8.438-10.56c1.729-0.109,3.514,0.008,5.229-0.101c0.416-1.971,0.947-3.946,1.437-5.9
	   c2.504-0.045,3.442-1.126,3.343-3.659c1.063-0.613,2.104-2.809,3.264-3.34c1.23-0.571,3.646,0.02,5.021-0.05
	   c3.297-0.169,6.424-1.084,9.667-0.341c3.369,0.772,5.473,2.716,9.333,2.024c1.813-0.324,3.059-0.961,5-1.016
	   c1.563-0.044,2.882,0.013,4.271-0.725c0.101-0.936,0.103-1.953,0.007-2.894c-0.991-0.327-1.612-0.771-2.564-1.097
	   c-1.111-4.954-4.271-2.586-7.429-4.284c2.438-1.402,9.077,0.229,11.786,0.918c4.058,1.032,6.43,2.313,10.875,2.032
	   c0.107-1.043,0.215-1.898,0.436-2.899c3.275-0.205,5.292-1.063,8.283-2.05c2.838-0.937,4.646-2.61,7.999-2.016
	   c1.229,0.218,2.229,1.695,3.686,0.966c1.438-0.717,1.225-2.583,2.982-3.265c1.071-0.415,3.5-0.768,4.606-0.277
	   c1.196,0.532,1.23,1.848,2.667,1.974c1.37,4.502,3.891,2.399,7.061,1.333c1.371-0.462,2.864-0.382,4.333-0.382
	   c0.637,0,1.752-0.222,2.341-0.008c0.625,0.228,0.729,0.867,1.063,1.018c2.514,1.159,4.907,0.945,7.938,0.99
	   c3.575,0.054,5.354-0.204,5.333,3.667c-0.011,2.239-0.797,6.27-0.008,8.333c0.435,1.138,1.729,2.338,3.34,1.674
	   c1.415-0.585,0.802-1.703,2.328-2.339c5.434-2.268,9.97,2.124,12.747,5.924c1.429,1.957,1.853,4.382,2.926,6.741
	   c0.81,1.774,2.168,4.714,3.497,6.106c1.124,1.178,2.944,1.431,4.077,2.634c1.126,1.202,1.75,3.083,3.344,3.934
	   c3.157,1.684,7.464-1.413,9.771,2.326c1.854,3.014,2.191,6.203,6.646,7.008c2.612,0.472,4.105-0.375,6.255,1.763
	   c1.509,1.501,2.611,3.798,2.993,5.881c0.715,3.911-0.418,6.83,2.672,10.001c2.729,2.792,3.829,2.681,7.747,2.681
	   c2.188,0,6.063-0.722,7.758,0.575c0.917,0.702,0.953,2.25,1.992,3.025c0.707,0.527,2.363,0.962,3.25,1.083
	   c3.041,0.413,4.785-0.312,7.104,1.89c0.438,0.423,0.361,1.425,0.806,1.784c0.479,0.405,1.354,0.049,1.779,0.552
	   c0.915,1.093,1.268,1.768,0.937,3.365c-1.689,0.387-11.073,4.688-6.624,6.398c1.122,0.431,4.223-0.987,5.674-1.007
	   c1.777-0.024,3.563,0,5.333,0c1.82,0,3.964,0.302,5.688-0.234c2.416-0.754,2.264-1.472,4.729-0.514
	   c1.981,0.769,2.759,1.865,4.595-0.234c1.61-1.842,0.641-3.353,3.479-3.971c2.745-0.598,6.271,0.418,9.139,0.237
	   c-0.031-0.787,0.461-1.439,0.436-2.225c1.074-0.385,2.23-0.21,3.209-0.792c0.856-0.513,1.407-1.941,2.396-2.291
	   c0.961-0.34,2.333,0.258,3.341,0.042c1.448-0.31,2.111-0.974,3.333-1.758c2.271-1.454,4.089-1.871,6.667-2.591
	   c2.454-0.686,4.104-2.706,6.333-3.341c4.028-1.147,9.672,0.266,13.6,0.755c1.57,0.196,5.027,0.917,6.666,0.202
	   c1.979-0.867,1.647-3.171,2.471-4.893c2.036,0.214,3.205-2.114,5.683-1.408c1.963,0.56,2.79,1.852,2.646,3.966
	   c3.092-0.111,8.176,2.849,11.195,3.799c4.271,1.338,6.813,2.971,11.416,1.819c4.604-1.151,6.266-0.004,8.75,3.683
	   c1.063,1.565,2.151,4.132,3.923,5.015c0.854,0.425,2.093,0.031,2.993,0.402c0.688,0.279,1.207,0.78,1.944,1.056
	   c0.396,1.923,1.671,2.632,2.464,4.202c1.563,3.094-0.813,2.979-1.748,5.076c-1.594,3.582,0.967,8.364-1.05,11.951
	   c-4.377,0.916-2.763,7.808-2.993,11.324c-1.498,0.727-1.353,2.505-1.959,4.056c-0.561,1.434-1.058,2.117-1.979,3.41
	   c-1.954,2.738-1.521,5.111-1.729,8.541c-3.021,0.191-5.723-0.353-8.266,1.143c-2.107,1.239-5.209,3.184-5.692,5.566
	   c-0.232,1.177,0.612,3.452-0.302,4.365c-0.796,0.795-3.646,0.311-4.698,0.31c-2.788-0.003-4.768,0.648-7.292,1.065
	   c1.071,1.106,2.438,3.479,2.646,4.927c0.239,1.724-0.729,2.502-0.938,4.008c-0.17,1.255,0.479,2.207,0.526,3.065
	   c0.169,2.697-1.263,4.644-3.604,6.193c-1.264,0.836-2.313,0.235-2.599,2.009c-0.044,0.281,0.827,2.434,0.89,3.015
	   c-2.271-0.147-4.018,0.121-6.291,0.4c-2.761,0.338-4.05-0.882-6.33-1.35c-1.063-0.219-2.271,0.222-3.334,0.034
	   c-1.188-0.21-1.805-1.221-3.269-0.968c-1.354,0.234-3.521,2.292-4.352,2.989c0.104,0.224,0.219,0.449,0.313,0.677
	   c2.313,5.054,3.023,10.963,5.552,15.953c0.698,1.382,1.521,1.504,0.688,3.598c-0.254,0.016-7.38,0.439-7.242,0.711
	   c1.367,2.679,0.168,6.25,0.708,9.265c0.462,2.587,2.406,5.29,4.814,7.2"/>
 <path id="path3931" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M465.889,391.138c-0.337-0.62-0.894-1.188-1.729-1.698
	   c-1.106-0.671-2.438-2.407-3.646-2.768c-1.188-0.356-3.047,0.053-4.3-0.026c0.241-1.94-1.662-2.477-1.767-4.233
	   c-0.941-0.091-1.957-0.088-2.896,0.007c-0.039,0.185-0.065,0.369-0.104,0.554c-1.116-0.033-1.701,0.554-1.659,1.672
	   c-0.731,0.16-1.833,0.153-2.563-0.007c-0.035-0.184-0.065-0.369-0.104-0.553c-0.36,0.009-0.862-0.022-1.229-0.115
	   c-0.504-1.06-1.063-2.033-1.104-3.225c-2.967-0.187-8.17-0.969-9.958,1.657c-0.883-0.918-0.688-2.328-0.707-3.649
	   c-2.871-0.736,0.289-2.721,0.646-3.45c0.924-1.856,0.521-3.018,0.351-4.885c-0.188-0.038-0.369-0.076-0.563-0.114
	   c-0.511-2.603,1.492-4.699,1.229-7.559c-1.396-0.135-2.438,0.314-3.563,1.008c-0.088,1.053-0.021,2.167-0.104,3.225
	   c-0.987,0.063-1.868-0.021-2.697-0.179"/>
 <path id="border_3_" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M693.274,483.837c0.729,0.815,0.347,1.253,0.818,1.956
	   c0.896,1.305,1.694,2.872,3.688,2.952c-0.664,2.562-0.197,6.991,1.428,9.203"/>
 <path id="border_2_" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M634.396,456.483c1.146,0.521,2.67,0.062,3.524-1.355
	   c1.146-1.866-0.555-3.344,1.479-4.782c0.697-0.496,2.007,0.315,2.71-0.628c0.588-0.801,0.032-2.66,0.188-3.563
	   c1.576,0.256,7.438,6.709,5.104,7.298c1.103-0.278,2.729,0.417,3.837,0.146c1.142,3.609-1.109,7.813,3.194,8.481
	   c0.363,0.327,0.599,0.668,0.734,1.021"/>
 <path id="border_1_" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M621.553,410.575c0.068,0.954,0.359,1.833,1.208,2.521
	   c1.123,0.916,1.741-0.026,2.604,1.235c0.534,0.789,0.295,2.333,0.438,3.249c0.86,5.324,5.243,9.32,5.694,14.777
	   c0.045,0.544,0.104,1.208,0.151,1.92"/>
 <path id="path3936" fill="none" stroke="#FFFFFF" stroke-width="3.5433" d="M619.516,392.349c-0.253,0.014-0.508,0.024-0.762,0.025
	   c-1.958,0.01-1.992-0.069-3.062-1.438c-0.906-1.159-0.904-1.863-2.688-2.062c-1.314-0.146-3.312,0.237-4.211,1.175
	   c0.259-1.367,0.777-3.241,2.674-2.963c0.709-3.178,4.479-16.443-3.463-12.212c-0.644,0.343-1.066,1.21-1.556,1.457
	   c-0.628,0.316-1.365,0.029-1.943,0.294c-1.249,0.573-1.219,2.09-2.751,2.505c-1.366,0.37-2.869-0.647-4.25-0.756
	   c-1.476-0.117-2.993,0.055-4.462-0.038c-0.112-1.771,0.239-3.769-0.226-5.468c-0.452-1.648-2.025-3.397-3.124-4.682
	   c-1.281-1.498-3.864-2.074-4.944-3.563c-0.953-1.314-0.428-3.574-0.532-5.212c-2.51-0.552-5.288,2.256-7.462,2.963
	   c-2.954,0.961-6.181,2.145-9.25,2.512c-3.638,0.435-6.725,0.208-9.063-2.694c-1.129-1.402-1.375-2.371-3.188-2.568
	   c-1.697-0.185-3.67,0.333-5.462,0.207c-0.439-1.998-2.592-2.964-3.494-4.519c-1.179-2.032-0.671-2.311-3.293-2.688
	   c-1.619-0.232-3.716-0.144-5.063-1.188c-1.684-1.293-0.771-3.027-1.479-4.774c-4.175-0.28-8.353-0.538-12.713-0.538
	   c-4.084,0-8.701-1.031-10.036,3.458c-2.118,1.438-1.244,4.734-3.542,6.085c-1.958,1.151-5.18,0.355-7.372,0.494
	   c-0.396,1.113-0.494,2.424-1.294,3.217c-0.342,0.339-0.911,0.386-1.304,0.697c-0.563,0.444-0.854,1.027-1.396,1.548
	   c-1.041,0.996-1.13,1.296-2.854,0.563c-1.445-0.612-1.749-1.281-2.487-2.525c-0.811-0.095-1.613,0.133-2.412,0.25
	   c-0.521,1.677-1.188,2.893-1.008,4.675c2.165,0.144,3.238-0.127,3.712,2.288c0.366,1.863-0.391,3.739-0.5,5.5
	   c-0.212,3.427,0.111,6.407-2.249,8.744c-0.597,0.591-1.365,0.945-2,1.524c-0.103,0.094-0.71,0.107-0.95,0.282
	   c-0.331,0.242,0.238,0.905-0.272,1.162c-2.241,1.103-2.604-0.932-3.513,1.8c-0.646,1.978-0.264,2.469-2.516,2.737
	   c-1.703,0.203-3.508-0.07-5.212,0.038c0.086,2.032-2.542,1.678-2.325,4.175c-2.604,0.165-3.661-0.67-5.962-1.407
	   c-0.762-0.244-1.555-0.321-2.358-0.283"/>
 </svg>   </div>
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
<!---	 <div class="fltrht respcontSigninup showinMob">
	  <input type="button" class="btnSignUp btnsgnupfn btnBg btnStyle" value="Sign Up" />
	  <input type="button" class="btnSignIn btnsgninfn btnStyle relPostn" value="Sign In" />
	 </div>-->
<!--          <button type="button" class="respSignupBtn btnsgnupfn fltlft"></button>
          <button type="button" class="respSigninBtn btnsgninfn fltlft"></button>-->
         </div>
         <div class="fltlft hidInMob contSubscrib">
          <form action="javascript:void(0)" id="formsearch" method="get">
           <div class="divField">
		   <span class="fldTitle">Newsletter Subscription</span>
            <input type="text" class="txtSearch" placeholder='Provide your email ID' />
            <input type="submit" class="btnSubmit btnBg btnStyle relPostn" value="Submit" />
           </div>
          </form>
         </div>
	 <div class="fltrht contSigninup hidInMob">
	  <input type="button" class="btnSignUp btnsgnupfn btnBg btnStyle" value="Sign Up" />
	  <input type="button" class="btnSignIn btnsgninfn btnBg btnStyle relPostn" value="Sign In" />
	 </div>
	 <div class="clear"></div>
         <div class="relPostn">
             <ul class="ulMainMenu center hidInMob absPostn dispTable">
	 <li>
	  <a href="index.php" class="home" id="index">
	   <span>Home</span>
	  </a>
	 </li>
	 <li>
          <a href="aboutus.php" class="group" id="aboutus">
	   <span>About Us</span>
	  </a>
      <!--<div class="submenuCont">-->
	   <ul class="ulSub mrgnpdng">
      <li>
      <a href="javascript:void(0)">Leadership</a>
      </li>
            <li>
      <a href="javascript:void(0)">Our Mission</a>
      </li>
            <li>
      <a href="javascript:void(0)">Public Forum</a>
      </li>
      </ul>
	  <!--</div>-->
	 </li>
	 <li>
          <a href="events.php" class="event" id="events">
	   <span>Events</span>
	  </a>
	 </li>
	 <li>
          <a href="livetv.php" class="liveTv" id="livetv">
	   <span>Live TV</span>
	  </a>
	 </li>
	 <li>
          <a href="contactus.php" class="contact" id="contactus">
	   <span>Contact Us</span>
	  </a>
	 </li>
   	<div class="clear"></div>
	</ul>
         </div>
        </div>
    	 <div class="clear"></div>
   </div>
    	 <div class="clear"></div>
  </header>
<div class="divGaltop"></div>
  <a class="link2Top fa fa-eject" style="color: #2B64B5 !important;"></a>
  <!-----------------------Facebook comment plugin--------------------------->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!--================================popup section=========================-->   <style>
                .jssorb21 {
                    position: absolute;
                }
                .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 19px;
                    height: 19px;
                    text-align: center;
                    line-height: 19px;
                    color: white;
                    font-size: 12px;
                    background: url(../img/b21.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb21 div { background-position: -5px -5px; }
                .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
                .jssorb21 .av { background-position: -65px -5px; }
                .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
            </style>
            <!--#endregion Bullet Navigator Skin End -->
            <style>
                /* jssor slider arrow navigator skin 21 css */
                /*
                .jssora21l                  (normal)
                .jssora21r                  (normal)
                .jssora21l:hover            (normal mouseover)
                .jssora21r:hover            (normal mouseover)
                .jssora21l.jssora21ldn      (mousedown)
                .jssora21r.jssora21rdn      (mousedown)
                */
                .jssora21l, .jssora21r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 55px;
                    height: 55px;
                    cursor: pointer;
                    background: url(../img/a21.png) center center no-repeat;
                    overflow: hidden;
                }
                .jssora21l { background-position: -3px -33px; }
                .jssora21r { background-position: -63px -33px; }
                .jssora21l:hover { background-position: -123px -33px; }
                .jssora21r:hover { background-position: -183px -33px; }
                .jssora21l.jssora21ldn { background-position: -243px -33px; }
                .jssora21r.jssora21rdn { background-position: -303px -33px; }
            </style>
<div class="divGallery">
 <div style="max-height: 340px; overflow: hidden;">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin: 0 auto;
        top: 0px; left: 0px; max-width: 1600px; height: 340px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            <!-- Slides Container -->
            <div u="slides" style="cursor: default; position: absolute; left: 0px; top: 0px; width: 1600px; height: 340px; overflow: hidden;">
             <div>
              <img src="images/img-1.jpg" style="max-width: 100%; width: 100%; min-height: 100px;" />
             </div>
             <div>
              <img src="images/img-2.jpg" style="max-width: 100%; width: 100%; min-height: 100px;" />
             </div>
             <div>
              <img src="images/img-3.jpg" style="max-width: 100%; width: 100%; min-height: 100px;" />
             </div>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
           
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div>
        <!-- Jssor Slider End -->
        
                    <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="../js/jquery-1.9.1.min.js"></script>-->
    <!--<script src="bootstrap.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="ie10-viewport-bug-workaround.js"></script>-->

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>  
  <div class="maincontainer">
   <div class="lftContnr col-xs-12 col-sm-12 col-md-8">
    <div>
     <div class="hanger relPostn">
      <h3 class="fltlft hangerHdng mrgnpdng absPostn">News</h3>
<!--	 <span class="fltrht nxtPrvCont relPostn">
       <a href="javascript:void(0)" class="fltlft prvIco"></a>
       <a href="javascript:void(0)" class="fltlft nxtIco"></a>
      </span>	 -->
     </div>
     <div class="clear"></div>
    </div>
        <div class="contentDiv contentDivPdng"><!--------changed by soumya------->
     <div id="slider_container">
      <div id="slider_content">
       <div  id="slider" class="galleryContnr">
        <ul>
         <!--<li class="col-md-6 col-sm-12 col-xs-12">-->
         <li>
          <!--<div class="col-xs-6 col-sm-6 col-md-6">-->
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>1. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>2. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Consectetuer adipiscing elit, sed diam nonummy Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>3. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy Lorem nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>4. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Diam nonummy nibh euismod tincidunt ut laoreet Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>5. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Lorem ipsum dolor sit  laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>6. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
          <!--<div class="clear"></div>-->
        </ul></div>
      </div>
     </div>
    </div><!--------changed by soumya end------->
    <div class="contentDiv mrgnTop">
     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <h4 class="hdngBlogs">
       <div class="hdngSpn"><span>Blogs</span> <button type="button" class="fltrht btnviewAll">Read all</button></div>
      </h4>
      <ul class="ulBlogs mrgnpdng">
       <li>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet... <a href="javascript:void(0)" class='fullEvent'>Read More</a></p>
       </li>
       <li>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet... <a href="javascript:void(0)" class='fullEvent'>Read More</a></p>
       </li>
       <li>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet... <a href="javascript:void(0)" class='fullEvent'>Read More</a></p>
       </li>
      </ul>
     </div>
     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style='min-height: 337px !important;'>
      <h4 class="hdngPolls">
       <div class="hdngSpn"><span>Polls</span> <a href="polls.php" class="fltrht btnviewAll">View all</a></div>
      </h4>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet?</p>
      <div class="selPolls">
       <label>
        <input type="radio" name="polls"/> Lorem ipsum dolor
       </label>
       <label>
        <input type="radio" name="polls"/> Molesite consequat
       </label>
       <label>
        <input type="radio" name="polls"/> Consecteture adipiscing elit
       </label>
      </div>
      <br />
      <p class='paraCasturvote absPostn'>
       Please <a href="javascript:void(0)" class="linkSignin">Sign in</a> to vote
       &nbsp;<button type="button" class="voteurCast">Cast your Vote</button>
      </p>
      <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div>
    <div class="contentDiv mrgnTop">
     <div class="divtask divWid">
      <h4 class="hdngVideos">
       <div class="hdngSpn"><span>Videos</span> <button type="button" class="fltrht btnviewAll">View all</button></div>
      </h4>
      <ul class="ulVideo mrgnpdng">
       <li class="col-xs-12 col-sm-4 col-md-4">
        <div class="center">
         <img src="images/video1.png" width="100%" style="max-width: 300px; cursor: pointer;" />
         <!--<video width="100%" height="122" src="https://youtu.be/-ymAZUDcsA4"></video>-->
         <!--<embed width="100%" height="122" src="https://youtu.be/-ymAZUDcsA4" type="screen" />-->
        </div>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
        <button type="button" class="voteCast center">Watch Now</button>
       </li>
       <li class="col-xs-12 col-sm-4 col-md-4">
        <div class="center">
         <img src="images/video1.png" width="100%" style="max-width: 300px; cursor: pointer;" />
         <!--<video width="100%" height="122" src="https://youtu.be/W3KAGoDBK8M"></video>-->
         <!--<embed width="100%" height="122" src="https://youtu.be/W3KAGoDBK8M" type="screen" />-->
        </div>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
        <button type="button" class="voteCast center">Watch Now</button>
       </li>
       <li class="col-xs-12 col-sm-4 col-md-4">
        <!--<div><embed width="100%" height="122" src="https://www.youtube.com/watch?feature=player_embedded&v=kPGfHx0_aqk" /></div>-->
        <div class="center">
         <img src="images/video1.png" width="100%" style="max-width: 300px; cursor: pointer;" />
         <!--<video width="100%" height="122" src="https://youtu.be/Mx9lRnMv1C8"></video>-->
         <!--<embed width="100%" height="122" src="https://www.youtube.com/watch?feature=player_detailpage&v=Mx9lRnMv1C8" type="screen" />-->
        </div>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,?</p>
        <button type="button" class="voteCast center">Watch Now</button>
       </li>
       <div class="clear"></div>
      </ul>
     </div>
    </div>
    <div class="mrgnTop">
     <div class="mrgnTop">
      <div class="hanger relPostn">
       <h3 class="fltlft upcomEvent mrgnpdng absPostn">Upcoming Events</h3>
       <span class="fltrht nxtPrvCont relPostn">
        <a href="javascript:void(0)" class="fltlft prvIco"></a>
        <a href="javascript:void(0)" class="fltlft nxtIco"></a>
       </span>	 
      </div>
     </div>
    </div>
    <div class="clear"></div>
    <div class="contentDiv">
     <div class="divtask divWid">
      <ul class="ulVideo ulEvent mrgnpdng">
       <li class="col-xs-12 col-sm-4 col-md-4">
        <div class="fltlft eventLeft">
         <div class="calMonth">MAY</div>
         <div class="calDate">17</div>
        </div>
        <div class="fltrht evntRight">
         <p>Jayalalitha's acquittal: A Travesty of Justice <br />-Swaraj Abhiyan Press Note</p>
         <p class="time mrgnpdng">@ 8:00 am - 11:00 am</p>
         <a href="singleevent.php" class="fullEvent fltrht">Full View</a>
         <div class='clear'></div>
        </div>
       </li>
       <li class="col-xs-12 col-sm-4 col-md-4">
        <div class="fltlft eventLeft">
         <div class="calMonth">MAY</div>
         <div class="calDate">24</div>
        </div>
        <div class="fltrht evntRight">
         <p>Jayalalitha's acquittal: A Travesty of Justice <br />-Swaraj Abhiyan Press Note</p>
         <p class="time mrgnpdng">@ 8:00 am - 11:00 am</p>
         <a href="singleevent.php" class="fullEvent fltrht">Full View</a>
         <div class='clear'></div>
        </div>
       </li>
       <li class="col-xs-12 col-sm-4 col-md-4">
        <div class="fltlft eventLeft">
         <div class="calMonth">MAY</div>
         <div class="calDate">06</div>
        </div>
        <div class="fltrht evntRight">
         <p>Jayalalitha's acquittal: A Travesty of Justice <br />-Swaraj Abhiyan Press Note</p>
         <p class="time mrgnpdng">@ 8:00 am - 11:00 am</p>
         <a href="singleevent.php" class="fullEvent fltrht">Full View</a>
         <div class='clear'></div>
        </div>
       </li>
       <div class="clear"></div>
      </ul>
     </div>
    </div>
   </div>
   <!-- *******************  include rightpannel.php ************************ -->  
   <div class="rhtContnr col-xs-12 col-sm-12 col-md-4">
 <ul class="rhtButn mrgnpdng col-xs-12 col-md-12 col-sm-12" style="padding: 0px;">
  <li class="col-sm-5 col-xs-12 col-md-12 col-sm-offset-1 col-md-offset-0">
   <a href='javascript:void(0)' class="btnsgnupfn">
    <div class='fltlft'>
     <h5 class='mrgnpdng'>To Spr...e..ad</h5>
     <h3 class='mrgnpdng'>JOIN US NOW</h3>
    </div>
    <span class='fltrht rhtArow fa fa-angle-right'></span>
    <div class='clear'></div>
   </a>
  </li>
  <li class="col-sm-5 col-xs-12 col-md-12 col-sm-offset-1 col-md-offset-0">
   <a href='javascript:void(0)'>
    <div class='fltlft'>
     <h5 class='mrgnpdng'>To discuss & share ideas</h5>
     <h3 class='mrgnpdng'>GO TO FORUMS</h3>
    </div>
    <span class='fltrht rhtArow fa fa-angle-right'></span>
    <div class='clear'></div>
   </a>
  </li>
  <li class="col-sm-5 col-xs-12 col-md-12 col-sm-offset-1 col-md-offset-0">
   <a href='donation.php'>
    <div class='fltlft'>
     <h5 class='mrgnpdng'>Click here</h5>
     <h3 class='mrgnpdng'>DONATE NOW</h3>
    </div>
    <span class='fltrht rhtArow fa fa-angle-right'></span>
    <div class='clear'></div>
   </a>
  </li>
  <li class="col-sm-5 col-xs-12 col-md-12 col-sm-offset-1 col-md-offset-0">
   <a href='javascript:void(0)'>
    <div class='fltlft'>
     <h5 class='mrgnpdng'>See a list of</h5>
     <h3 class='mrgnpdng'>SWARAJ CENTERS</h3>
    </div>
    <span class='fltrht rhtArow fa fa-angle-right'></span>
    <div class='clear'></div>
   </a>
  </li>
  <li class="col-sm-5 col-xs-12 col-md-12 col-sm-offset-1 col-md-offset-0">
   <a href='javascript:void(0)'>
    <div class='fltlft'>
     <h5 class='mrgnpdng'>Participate in </h5>
     <h3 class='mrgnpdng'>AGENDA 4 INDIA</h3>
    </div>
    <span class='fltrht rhtArow fa fa-angle-right'></span>
    <div class='clear'></div>
   </a>
  </li>
 </ul>
 <!--==================Facebook=====================-->	
 <div class="col-xs-12 col-sm-6 col-md-12" style="padding: 0px;">
  <div class='socmrgnTop'>
   <div class="hanger relPostn">
    <h3 class="fltlft hangerHdng mrgnpdng absPostn">Facebook</h3>
   </div>
   <div class="clear"></div>
  </div>
  <div class="fbBlock">
   <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/swarajabhiyan&amp;width&amp;height=430&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=607545139264444" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:430px; width: 100%;" allowTransparency="true"></iframe>
  </div>
 </div>
 <!--==================Twitter=====================-->	
 <div class="col-xs-12 col-sm-6 col-md-12" style="padding: 0px;">
  <div class='socmrgnTop'>
   <div class="hanger relPostn">
    <h3 class="fltlft hangerHdng mrgnpdng absPostn">Twitter</h3>
   </div>
   <div class="clear"></div>
  </div>
  <div class='twrBlock'>
   <!--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><a class="twitter-timeline" href="https://twitter.com/swarajabhiyan" data-widget-id="352375736809693184" height = 430px></a>-->

   <a class="twitter-timeline" href="https://twitter.com/swaraj_abhiyan" data-widget-id="591375821736120321">Tweets
    by @swaraj_abhiyan</a>
   <script>
       !function (d, s, id) {
           var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/
                   .test(d.location) ? 'http'
                   : 'https';
           if (!d.getElementById(id)) {
               js = d.createElement(s);
               js.id = id;
               js.src = p
                       + "://platform.twitter.com/widgets.js";
               fjs.parentNode.insertBefore(js, fjs);
           }
       }(document, "script", "twitter-wjs");
   </script>
  </div>
 </div>
</div>
<div class="clear"></div>
</div>
     
  </div>
  <div class="footerContainer">
 <div class="ftrContnr center">
  <ul class="ulFtrMain ulFtrMain1 mrgnpdng">
   <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <h3>The Party</h3>
    <div class="ftrMenuCont">
     <ul class="ulftrMenu mrgnpdng">
      <li><a href="javascript:void(0)">About the party</a></li>
      <li><a href="javascript:void(0)">Leadership</a></li>
      <li><a href="javascript:void(0)">View Current Events</a></li>
      <li><a href="javascript:void(0)">Live TV</a></li>
      <li><a href="javascript:void(0)">Our Mission</a></li>
     </ul>
    </div>
   </li>
   <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <h3>Media Resources</h3>
    <div class="ftrMenuCont">
     <ul class="ulftrMenu mrgnpdng">
      <li><a href="javascript:void(0)">Press Releases</a></li>
      <li><a href="javascript:void(0)">Speeches</a></li>
      <li><a href="javascript:void(0)">Video Releases</a></li>
      <li><a href="javascript:void(0)">Public Forum</a></li>
      <li><a href="javascript:void(0)">Photo Gallery</a></li>
     </ul>
    </div>
   </li>
   <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <h3>Get Involved</h3>
    <div class="ftrMenuCont">
     <ul class="ulftrMenu  mrgnpdng">
      <li><a href="javascript:void(0)">Join the party</a></li>
      <li><a href="javascript:void(0)">Donate Now</a></li>
     </ul>
    </div>
    <h3 class='contacth3'>Contact Us</h3>
    <div class="ftrMenuCont">
     <ul class="ulContact mrgnpdng">
      <li>A-189, Sec-43, Noida, UP</li>
      <li>+917210222333</li>
     </ul>
    </div>
   </li>
   <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <ul class="ulftrMenu ulSocial mrgnpdng fltlft">
     <li>
      <a href="javascript:void(0)" class='fb'>
       Join on Facebook 
       <span>/swarajabhiyan</span>
      </a>
     </li>
     <li>
      <a href="javascript:void(0)" class='twr'>
       Follow on Twitter 
       <span>/swaraj_abhiyan</span>
      </a>
     </li>
     <li>
      <a href="javascript:void(0)" class='utube'>
       Subscribe on Youtube 
       <span>SWARAJ ABHIYAN</span>
      </a>
     </li>
     <div class="clear"></div>
    </ul>
   </li>
   <div class='clear'></div>
  </ul>
  <ul class="ulFtrMain ulFtrMain2 mrgnpdng">
   <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <h3>The Party</h3>
    <div class="ftrMenuCont">
     <ul class="ulftrMenu mrgnpdng">
      <li><a href="javascript:void(0)">About the party</a></li>
      <li><a href="javascript:void(0)">Leadership</a></li>
      <li><a href="javascript:void(0)">View Current Events</a></li>
      <li><a href="javascript:void(0)">Live TV</a></li>
      <li><a href="javascript:void(0)">Our Mission</a></li>
     </ul>
    </div>

    <h3>Media Resources</h3>
    <div class="ftrMenuCont">
     <ul class="ulftrMenu mrgnpdng">
      <li><a href="javascript:void(0)">Press Releases</a></li>
      <li><a href="javascript:void(0)">Speeches</a></li>
      <li><a href="javascript:void(0)">Video Releases</a></li>
      <li><a href="javascript:void(0)">Public Forum</a></li>
      <li><a href="javascript:void(0)">Photo Gallery</a></li>
     </ul>
    </div>

    <h3>Get Involved</h3>
    <div class="ftrMenuCont">
     <ul class="ulftrMenu  mrgnpdng">
      <li><a href="javascript:void(0)">Join the party</a></li>
      <li><a href="javascript:void(0)">Donate Now</a></li>
     </ul>
    </div>
    <h3 class='contacth3'>Contact Us</h3>
    <div class="ftrMenuCont">
     <ul class="ulContact mrgnpdng">
      <li>A-189, Sec-43, Noida, UP</li>
      <li>+917210222333</li>
     </ul>
    </div>
   </li>
   <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <ul class="ulftrMenu ulSocial mrgnpdng fltlft">
     <li>
      <a href="javascript:void(0)" class='fb'>
       Join on Facebook 
       <span>/swarajabhiyan</span>
      </a>
     </li>
     <li>
      <a href="javascript:void(0)" class='twr'>
       Follow on Twitter 
       <span>/swaraj_abhiyan</span>
      </a>
     </li>
     <li>
      <a href="javascript:void(0)" class='utube'>
       Subscribe on Youtube 
       <span>SWARAJ ABHIYAN</span>
      </a>
     </li>
    </ul>
    <div class="clear"></div>
   </li>
   <div class='clear'></div>
  </ul>
  <p class='copyRight'>&copy; Swaraj Abhiyan. All Rights Reserved</p>
 </div>
</div> </body>
</html>
