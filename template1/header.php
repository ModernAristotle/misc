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
  <?php include 'imap.php'; ?>
 </div>
</div>
  <?php 
  $page = explode("/",$_SERVER['REQUEST_URI']);
  if($page['2'] != 'events.php'){
  include 'signin_up.php'; 
  }
  ?>
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
     <div class="bdyovrly">&nbsp;</div>
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
        $('.mapCont').fadeOut(800);
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
