<!DOCTYPE html>
<html>
 <!-- **********************  include common.php ************************ -->
 <?php
 include 'common.php';
 ?>
 <body>
  <!-- **********************  include header.php ************************ -->
  <?php
  include 'header.php';
  ?>
  <?php
  /*******  include gallery.php ************/ 
  include 'gallery.php';
  ?>  
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
         <li class="col-md-6 col-sm-12 col-xs-12">
          <div class="col-xs-6 col-sm-6 col-md-6">
           <h4 class='mrgnpdng'>Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
           <h4 class='mrgnpdng'>Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Consectetuer adipiscing elit, sed diam nonummy Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
         <li class="col-md-6 col-sm-12 col-xs-12">
          <div class="col-xs-6 col-sm-6 col-md-6">
           <h4 class='mrgnpdng'>Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy Lorem nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
           <h4 class='mrgnpdng'>Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Diam nonummy nibh euismod tincidunt ut laoreet Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
         <li class="col-md-6 col-sm-12 col-xs-12">
          <div class="col-xs-6 col-sm-6 col-md-6">
           <h4 class='mrgnpdng'>Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Lorem ipsum dolor sit  laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
           <h4 class='mrgnpdng'>Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
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
         <video width="100%" height="122" src="https://youtu.be/-ymAZUDcsA4"></video>
         <!--<embed width="100%" height="122" src="https://youtu.be/-ymAZUDcsA4" type="screen" />-->
        </div>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
        <button type="button" class="voteCast center">Watch Now</button>
       </li>
       <li class="col-xs-12 col-sm-4 col-md-4">
        <div class="center">
         <video width="100%" height="122" src="https://youtu.be/W3KAGoDBK8M"></video>
         <!--<embed width="100%" height="122" src="https://youtu.be/W3KAGoDBK8M" type="screen" />-->
        </div>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
        <button type="button" class="voteCast center">Watch Now</button>
       </li>
       <li class="col-xs-12 col-sm-4 col-md-4">
        <!--<div><embed width="100%" height="122" src="https://www.youtube.com/watch?feature=player_embedded&v=kPGfHx0_aqk" /></div>-->
        <div class="center">
         <video width="100%" height="122" src="https://youtu.be/Mx9lRnMv1C8"></video>
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
         <a href="events.php" class="fullEvent fltrht">Full View</a>
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
         <a href="events.php" class="fullEvent fltrht">Full View</a>
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
         <a href="events.php" class="fullEvent fltrht">Full View</a>
         <div class='clear'></div>
        </div>
       </li>
       <div class="clear"></div>
      </ul>
     </div>
    </div>
   </div>
   <!-- *******************  include rightpannel.php ************************ -->  
   <?php
   include 'rightpannel.php';
   ?>     
  </div>
  <?php
  /*******************  include footer.php ************************/  
  include 'footer.php';
  ?>
 </body>
</html>
