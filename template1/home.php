<!DOCTYPE html>
<html>
 <!-- **********************  include common.php ************************ -->
 <?php
 include 'common.php';
 ?>
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
         <!--<li class="col-md-6 col-sm-12 col-xs-12">-->
         <li>
          <!--<div class="col-xs-6 col-sm-6 col-md-6">-->
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>1. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'><?php echo substr("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",0,100)."...";?></p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>2. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'><?php echo substr("Consectetuer adipiscing elit, sed diam nonummy Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",0,100)."...";?></p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>3. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'><?php echo substr("Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy Lorem nibh euismod tincidunt ut laoreet.",0,100)."...";?></p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>4. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'><?php echo substr("Diam nonummy nibh euismod tincidunt ut laoreet Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed.",0,100)."...";?></p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
          <div class="clear"></div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>5. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'><?php echo substr("Amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Lorem ipsum dolor sit  laoreet.",0,100)."...";?></p>
           <a href="singlenews.php" class="fullEvent">Read more...</a>
          </div>
         </li>
         <li>
          <div class="col-xs-12">
           <h4 class='mrgnpdng'>6. Lorem Ipsum dolar</h4>
           <br />
           <p class='paraNews'><?php echo substr("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.",0,100)."...";?></p>
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
      <ul class="ulVideo videoGal mrgnpdng">
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
     <div class="divtask divWid eventcont relPostn">
      <ul class="ulVideo ulEvent mrgnpdng absPostn">
       <!--<li class="col-xs-12 col-sm-4 col-md-4">-->
       <li>
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
       <li>
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
       <li>
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
       <li>
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
       <li>
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
       <li>
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
       <li>
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
<!--       <li>
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
       <li>
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
       <li>
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
       <li>
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
       <li>
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
       <li>
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
       <li>
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
       </li>-->
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
  <script type="text/javascript">
  $j(function(){
     //    ----------------------------- upcoming event animation---------------------
var getLftPos, evntLiWdth, evntUlWidth, lastIndex;
function eventLiwidth(){
    getLftPos = $j('.ulEvent').position().left;
    if($j(window).width()<=450){
        evntLiWdth = parseInt($j('.eventcont').width()-20);
    }else if($j(window).width()<=480){
        evntLiWdth = parseInt($j('.eventcont').width()-26) / 2;
    }else if($j(window).width()<=600){
        evntLiWdth = parseInt($j('.eventcont').width() - 30) / 2;
    }else if($j(window).width()<=768){
        evntLiWdth = parseInt($j('.eventcont').width() - 50) / 3;
    }else if($j(window).width()>600){
        evntLiWdth = parseInt($j('.eventcont').width() - 55) / 3;
    }
    $j('.ulEvent li').width(evntLiWdth);
    evntUlWidth = parseInt(evntLiWdth + 20) * parseInt($j('.ulEvent li').length);
    $j('.ulEvent').width(evntUlWidth);
    lastIndex = evntUlWidth - parseInt(evntLiWdth + 20) * 3;
}eventLiwidth();

//    ----------------------------- upcoming event next button function ---------------------
    $j('.nxtIco').on('click', function () {
        if (getLftPos >= lastIndex) {
            $j('.ulEvent').stop().animate({left: '-' + lastIndex}, 800);
        } else {
            getLftPos = getLftPos + parseInt($j('.ulEvent li').width() + 20);
            $j('.ulEvent').stop().animate({left: '-' + parseInt(getLftPos)}, 800);
        }
    });

//    ----------------------------- upcoming event prev button function ---------------------
$j('.prvIco').on('click',function(){
    if(getLftPos<=0){
    $j('.ulEvent').stop().animate({left: 0},800);
    }else{
    getLftPos=getLftPos-parseInt($j('.ulEvent li').width()+20);
    $j('.ulEvent').stop().animate({left: '-'+parseInt(getLftPos)},800);
    }
});
 
  });
  </script>
 </body>
</html>
