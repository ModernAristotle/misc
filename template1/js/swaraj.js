var $j = $.noConflict();
//---------------------Set Top Height---------------------
function topHeight() {
    setTimeout(function () {
        $j('.divGaltop').height($j('header').height() + 20);
    }, 10);
} 
//---------------------Menu active---------------------
function activeMenu() {

    var getPage = window.location.href;
    var temp = getPage.split('/');
    var pageName = temp[temp.length - 1].split('.php');
    if (pageName.length <= 1) {
        $j("#index").addClass("active");
    } else {
        $j('.ulMainMenu li a').removeClass('active');
        $j('.ulMainMenu li a#' + pageName[0]).addClass('active');
    }
}
$j(function () {
    activeMenu();
//    galWidth();
//        startLoader();
    topHeight();
//    -----------------------------gallery function---------------------
    $j("#slider").easySlider({
        auto: true,
        continuous: true,
        controlsShow: true
    });

//    -----------------------------Common function---------------------
//    $j(document).on('click', function () {
//        hideoverlay();
//    });
    $j('.memberName, .fnClose, .btnsgninfn, .btnsgnupfn, .contSubscrib').click(function (e) {
        e.stopPropagation();
    });
    $j(window).resize(function () {
        topHeight();
//        eventLiwidth();
//    galWidth()
        if ($j(this).width() <= 992) {
            $j('.ftrMenuCont').hide();
        } else {
            $j('.ftrMenuCont').show();
        }
        if ($j(this).width() <= 1200) {
            $j('.ulMainmenu').hide();
        } else {
            $j('.ulMainmenu').show();
        }
    });

//    -----------------------------Main menu function---------------------
    setTimeout(function () {
        $j('.fldTitle').fadeIn(800);
        if ($j(window).width() <= 992 && $j(window).width() > 768) {
            $j('.frmcntnr .divField .tblFldTitle').fadeIn(800);
        }
    }, 1000);
    $j('.ulMainMenu li a').on('click', function () {
        $j('.ulMainMenu li a').removeClass('active').not($j(this).addClass('active'));
    });
//    -----------------------------Main menu function---------------------
    $j('.respmenuBtn').click(function (e) {
        e.stopPropagation();
        hideoverlay();
        $j('.ulMainMenu').stop().slideToggle(500);
    });
    $j('.ulMainMenu>li').hover(function (e) {
        e.stopPropagation();
        $j(this).find('.ulSub').slideDown(500);

    }, function (e) {
        e.stopPropagation();
        $j(this).find('.ulSub').stop().slideUp(500);
    });
    $j('.ulMainMenu li').click(function (e) {
        e.stopPropagation();
    });
//    -----------------------------footer menu animation---------------------
    $j('.ulFtrMain li h3').click(function () {
        hideoverlay();
        if ($j(window).width() <= 992) {
            $j('.ftrMenuCont').stop().slideUp(500).not($j(this).next('.ftrMenuCont').stop().slideToggle(500));
        }
    });
//    -----------------------------link2top function---------------------
    $j('.link2Top').hide();
    $j(window).scroll(function () {
        if ($j(this).scrollTop() > 0) {
            $j('.link2Top').fadeIn(400);
        } else {
            $j('.link2Top').fadeOut(400);
        }
    });
    $j('.link2Top').click(function () {
        $j('html, body').animate({scrollTop: 0}, 800);
    });

//    -----------------------------show Map---------------------
    var ovrlyinout = 1;
    $j('.mapIco').click(function (e) {
        e.stopPropagation();
        hideoverlay();
            showoverlay();
//        if (ovrlyinout == 1) {
//            ovrlyinout = 0;
//            showoverlay();
//        } else {
//            ovrlyinout = 1;
//            hideoverlay();
//        }
        $j('.mapCont').fadeToggle(800).animate({top: $j(window).scrollTop() + 160}, 800);
    });
//    -----------------------------show popup---------------------
    $j('.btnsgnupfn').click(function (e) {
        hideoverlay();
        hideform();
        showoverlay();
        clearField();
        $j(this).addClass('active');
        $j('.entryGate').fadeToggle(800).animate({top: $j(window).scrollTop() + 160}, 800);
    });
    $j('.btnsgninfn').click(function(e){
    e.stopPropagation();
    hideoverlay();
        hideform();
    showoverlay();
    clearField();
    $j(this).addClass('active');
    $j('.signinformCont').stop().fadeIn(500).animate({top: $j(window).scrollTop()+160},80);
});
//    $j('.btnCancel').click(function () {
//        $j(this).closest('.fnClose').fadeOut(500);
//        hideoverlay();
//    });
    $j('.respSubscribeBtn').click(function (e) {
        e.stopPropagation();
        hideoverlay();
        showoverlay();
        $j('.contSubscrib').fadeIn(500).animate({top: $j(window).scrollTop() + 160}, 80);
    });
    $j('.closeicn,.sbmitbtn').click(function () {
        $j('.signupformCont, .signinformCont, .entryGate').fadeOut(500);
        hideoverlay();
    });
//    -----------------------------Polls view---------------------
    $j(document).on('click', '.accordian', function () {
        if ($j(this).hasClass('accoOff')) {
            $j(this).find('.plsVer').removeClass('plsVeract').attr('title', 'Expand');
            $j(this).removeClass('accoOff');
        } else {
            $j(this).find('.plsVer').addClass('plsVeract').attr('title', 'Collapse');
            $j('.accordian').removeClass('accoOff').not($j(this).addClass('accoOff'));
        }
        $j('.pollsCont').slideUp(500).not($j(this).next('.pollsCont').stop().slideToggle(500));
    });

    //    ----------------------------- Member detail popup ---------------------
    $j(document).on('mouseenter','.memberName', function(e){
        var getThsOffset=$j(this).offset();
        var getMembName=$j(this).closest('tr').find('.memberName').html();
        var getMembImg=$j(this).closest('td').find('input[type="hidden"]').attr('value');
        var getMembEmail=$j(this).closest('tr').find('.memberEmail').html();
        var getMembAddress=$j(this).closest('tr').find('.memberAddress').html();
        var getMembPhone=$j(this).closest('tr').find('.memberPhone').html();
        $j('.maincontainer').after('\n\
            <div class="membDtlPupup fnClose absPostn">\n\
            <div class="relPostn"><p class="closeicn">X</p></div>\n\
            <div style="display: table-row;">\n\
            <div class="tdMembdtls" style="display: table-cell; vertical-align: top;">\n\
            <div class="membPhoto center"><div><img src="'+getMembImg+'" alt="No Image" /></div></div>\n\
            </div>\n\
            <div class="tdMembdtls" style="display: table-cell; vertical-align: top; padding-left: 10px">\n\
            <h3 class="nameMrgnTp">'+getMembName+'</h3>\n\
            <p>'+getMembEmail+'</p>\n\
            <p>'+getMembAddress+'</p>\n\
            <p>'+getMembPhone+'</p>\n\
            </div>\n\
            </div>\n\
            </div>\n\
            </div>'
        );
                        $j('.membDtlPupup').css({left: getThsOffset.left+20, top: getThsOffset.top+30}).stop().fadeIn(500);
    });
    $j(document).on('mouseout','.memberName', function(){
        $j('body').find('.membDtlPupup').remove();
    });
    $j('ul.ulSub li ul').prev('a').addClass('hvSbMenu');
});
//    -----------------------------show popup in javascript---------------------
function showmsg(){
    $('.loginMessage').animate({top: 180},800).delay(4000).fadeOut(800).animate({top: -50},'fast');
}
function clearField() {
    $j('.signupformCont, .signinformCont, .entryGate').find('\
        input[type="email"], \n\
        input[type="text"],  \n\
        input[type="number"],  \n\
        input[type="password"],\n\
        textarea').val('');
}
function showoverlay() {
    $j('.fnClose').fadeOut();
    $j('.bdyovrly').fadeIn('fast');
}
function hideoverlay() {
    $j('.bdyovrly').fadeOut(500);
    if ($j(window).width() <= 600) {
        $j('.contSubscrib').fadeOut(500);
    }
        $j('.btnSignIn, .btnSignUp').removeClass('active');
    if ($j(window).width() <= 1200) {
     $j('.ulMainMenu').slideUp(500);
    }
}
function hideform() {
    $j('.fnClose').fadeOut(500);
}



//    -----------------------------Banner Slider---------------------
jQuery(document).ready(function ($) {

    var options = {
        $FillMode: 2, //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
        $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlayInterval: 4000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

        $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideEasing: $JssorEasing$.$EaseOutQuint, //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
        $SlideDuration: 800, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
        //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
        //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
        $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
        $DisplayPieces: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
        $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

        $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
            $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
            $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
            $Lanes: 1, //[Optional] Specify lanes to arrange items, default value is 1
            $SpacingX: 8, //[Optional] Horizontal space between each item in pixel, default value is 0
            $SpacingY: 8, //[Optional] Vertical space between each item in pixel, default value is 0
            $Orientation: 1, //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            $Scale: false                                   //Scales bullets navigator or not while slider scale
        },
        $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
            $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 1, //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
        }
    };

    //Make the element 'slider1_container' visible before initialize jssor slider.
    $("#slider1_container").css("display", "block");
    var jssor_slider1 = new $JssorSlider$("slider1_container", options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizes
    function ScaleSlider() {
        var bodyWidth = document.body.clientWidth;
        if (bodyWidth)
            jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
        else
            window.setTimeout(ScaleSlider, 30);
    }
    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    //responsive code end
});
