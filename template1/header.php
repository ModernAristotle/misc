<?php
 include 'signin_up.php';
 ?>
<div class="mapCont center fnClose">
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
            <span class="fldTitle" style="top: -5px;">Newsletter Subscription</span>
            <input type="text" class="txtSearch" placeholder='Provide your email ID' />
            <input type="submit" class="btnSubmit btnBg btnStyle relPostn" value="Submit" />
           </div>
          </form>
         </div>
<!--	 <div class="fltrht contSigninup hidInMob">
	  <input type="button" class="btnSignUp btnsgnupfn btnBg btnStyle" value="Sign Up" />
	  <input type="button" class="btnSignIn btnsgninfn btnBg btnStyle relPostn" value="Sign In" />
	 </div>-->
	 <div class="clear"></div>
         <?php include 'menu.php'; ?>
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
  <!--================================popup section=========================-->