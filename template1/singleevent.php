<html>
 <!-- **********************  include common.php ************************ -->
 <?php
 include 'common.php';
 ?>
 <script src="http://maps.googleapis.com/maps/api/js?sensor=true" type="text/javascript"></script>
 <script type="text/javascript">
 function initialize() {
      var myLatlng = new google.maps.LatLng(20.525839,85.904185);
  	var myOptions = {
    zoom: 19,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.SATELLITE
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }
 </script>
 <body onload="initialize();"> 
  <div class="mapCont center fnClose">
   <img src="mapimages/map-lines.png" style="max-width: 421px; width: 100%;" class="mapBorder" />
  </div>
 <!-- **********************  include header.php ************************ -->
 <?php
 include 'header.php';
 ?>
 <div id="slider1_container"></div>
 <div class="maincontainer center">
   <div class="lftContnr col-xs-12 col-sm-12 col-md-8">
    <div>
     <div class="hanger relPostn">
      <h3 class="fltlft hangerHdng mrgnpdng absPostn">Event</h3>
     </div>
     <div class="clear"></div>
    </div>
    <div class="contentDiv contentDivPdng">
 <h3 class="event_head mrgnpdng">Lorem Ipsum Doluar algame</h3>
<div class="event_date">
    <div class="evnt_date fltlft">MAY 17, 2015</div>
    <div class="evnt_time fltlft">@ 8:am-11:am</div>
    <a class="evnt_location fltrht" href="javascript:void(0)"><span class="fa fa-map-marker gglMapIco"></span>&nbsp; Harjart Hall,Lorem Ipsum dolaarda-B/34</a>
    <div class="clear"></div>
    <!--<div class="clear"></div>-->
    <div class="evnt_txt">
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>
 <div class="col-xs-12 col-sm-6 col-md-6">
  <h5 style="font-weight: 600; margin-top: 0px; font-size: 16px;">For any query please contact :</h5>
  <table width="100%" class="tblcont">
   <tr>
    <td width="30" valign="top"><span class="fa fa-phone" style="padding: 3px; border: 1px solid #333333; color: #4C4C4C;"></span></td>
    <td valign="top">
     <div>
      <span class="quryContact">+91 9876543210,</span>
      <span class="quryContact">+91 9876543210</span>
      <div class="clear"></div>
     </div>
     <div>
      <span class="quryContact">+91 9876543210,</span>
      <span class="quryContact">+91 9876543210</span>
      <div class="clear"></div>
     </div>
   </tr>
   <tr>
    <td><span class="fa fa-envelope" style="padding: 3px; border: 1px solid #333333; color: #4C4C4C;"></span></td>
    <td class="quryContact">emailid@email.com</td>
   </tr>
   <tr>
    <td colspan="2" style="padding-top: 30px;"><br /><a href="javascript:void(0)" class="eventFbLink"></a></td>
   </tr>
  </table>
 </div>
 <div class="col-xs-12 col-sm-6 col-md-6" style="padding: 0px 10px; border-left: 1px solid #cecece;">
  <h5 style="font-weight: 600; margin-top: 0px; font-size: 16px;">Event Location :</h5>
     <div id="map_canvas" style="width: 100%; height: 207px;"></div>
 </div>
 <div class="clear"></div>
 <hr />
    <div class="newsCont">
        <div class="frmHdng">
              <h3 align="left">Other Events</h3>
    </div>
     <div class="divOtherNews">
      <ul class="ulOtherNews">
       <li>
          <h4 class="">Lorem Ipsum is simply dummy text of the printing...</h4>
          <div class="">
           <div class="evnt_date fltlft">MAY 17, 2015</div>
           <div class="evnt_time fltlft">@ 8:am-11:am</div>
           <a class="evnt_location fltrht" href="javascript:void(0)"><span class="fa fa-map-marker gglMapIco"></span>&nbsp; Harjart Hall,Lorem Ipsum dolaarda-B/34</a>
           <div class="clear"></div>
           <p>Lorem Ipsum is simply dummy text industry... <a href="javascript:void(0)" class="fullEvent">Read more</a></p>
          </div>
       </li>
       <li>
          <h4 class="">Lorem Ipsum is simply dummy text of the printing...</h4>
          <div class="">
           <div class="evnt_date fltlft">MAY 17, 2015</div>
           <div class="evnt_time fltlft">@ 8:am-11:am</div>
           <a class="evnt_location fltrht" href="javascript:void(0)"><span class="fa fa-map-marker gglMapIco"></span>&nbsp; Harjart Hall,Lorem Ipsum dolaarda-B/34</a>
           <div class="clear"></div>
           <p>Lorem Ipsum is simply dummy text industry... <a href="javascript:void(0)" class="fullEvent">Read more</a></p>
          </div>
       </li>
       <li>
          <h4 class="">Lorem Ipsum is simply dummy text of the printing...</h4>
          <div class="">
           <div class="evnt_date fltlft">MAY 17, 2015</div>
           <div class="evnt_time fltlft">@ 8:am-11:am</div>
           <a class="evnt_location fltrht" href="javascript:void(0)"><span class="fa fa-map-marker gglMapIco"></span>&nbsp; Harjart Hall,Lorem Ipsum dolaarda-B/34</a>
           <div class="clear"></div>
           <p>Lorem Ipsum is simply dummy text industry... <a href="javascript:void(0)" class="fullEvent">Read more</a></p>
          </div>
       </li>
      </ul>
      <a href="events.php" class="fltrht btnviewAll">See all</a>
      <div class="clear"></div>
      <br />
     </div>
    </div>
    </div>
    </div>
<?php
   include 'rightpannel.php';
   ?>     
  </div>
  <br /><br />
  <?php
  /*******************  include footer.php ************************/  
  include 'footer.php';
  /*******************  include signin_up.php ************************/  
  include 'signin_up.php';
  ?>  
  <a class="link2Top fa fa-eject" style="color: #2B64B5 !important;"></a>
  <!--================================popup section=========================-->
 </body>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
</html>
