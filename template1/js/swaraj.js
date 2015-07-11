//var $j = $.noConflict();
//---------------------Set Top Height---------------------
function topHeight() {
    setTimeout(function () {
        $('.divGaltop').height($('header').height() + 20);
    }, 10);
} 
//---------------------Menu active---------------------
function activeMenu() {

    var getPage = window.location.href;
    var temp = getPage.split('/');
    var pageName = temp[temp.length - 1].split('.php');
    if (pageName.length <= 1) {
        $("#index").addClass("active");
    } else {
        $('.ulMainMenu li a').removeClass('active');
        $('.ulMainMenu li a#' + pageName[0]).addClass('active');
    }
}
$(function () {
    activeMenu();
//    galWidth();
//        startLoader();
    topHeight();
//    -----------------------------gallery function---------------------
    $("#slider").easySlider({
        auto: true,
        continuous: true,
        controlsShow: true
    });

//    -----------------------------Common function---------------------
//    $(document).on('click', function () {
//        hideoverlay();
//    });
    $('.memberName, .fnClose, .btnsgninfn, .btnsgnupfn, .contSubscrib').click(function (e) {
        e.stopPropagation();
    });
    $(window).resize(function () {
        topHeight();
//        eventLiwidth();
//    galWidth()
        if ($(this).width() <= 992) {
            $('.ftrMenuCont').hide();
        } else {
            $('.ftrMenuCont').show();
        }
        if ($(this).width() <= 1200) {
            $('.ulMainmenu').hide();
        } else {
            $('.ulMainmenu').show();
        }
    });

//    -----------------------------Main menu function---------------------
    setTimeout(function () {
        $('.fldTitle').fadeIn(800);
        if ($(window).width() <= 992 && $(window).width() > 768) {
            $('.frmcntnr .divField .tblFldTitle').fadeIn(800);
        }
    }, 1000);
    $('.ulMainMenu li a').on('click', function () {
        $('.ulMainMenu li a').removeClass('active').not($(this).addClass('active'));
    });
//    -----------------------------Main menu function---------------------
    $('.respmenuBtn').click(function (e) {
        e.stopPropagation();
        hideoverlay();
        $('.ulMainMenu').stop().slideToggle(500);
    });
    $('.ulMainMenu>li').hover(function (e) {
        e.stopPropagation();
        $(this).find('.ulSub').slideDown(500);

    }, function (e) {
        e.stopPropagation();
        $(this).find('.ulSub').stop().slideUp(500);
    });
    $('.ulMainMenu li').click(function (e) {
        e.stopPropagation();
    });
//    -----------------------------footer menu animation---------------------
    $('.ulFtrMain li h3').click(function () {
        hideoverlay();
        if ($(window).width() <= 992) {
            $('.ftrMenuCont').stop().slideUp(500).not($(this).next('.ftrMenuCont').stop().slideToggle(500));
        }
    });
//    -----------------------------link2top function---------------------
    $('.link2Top').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.link2Top').fadeIn(400);
        } else {
            $('.link2Top').fadeOut(400);
        }
    });
    $('.link2Top').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
    });

//    -----------------------------show Map---------------------
    var ovrlyinout = 1;
    $('.mapIco').click(function (e) {
        e.stopPropagation();
//        hideoverlay();
            showoverlay();
//        if (ovrlyinout == 1) {
//            ovrlyinout = 0;
//            showoverlay();
//        } else {
//            ovrlyinout = 1;
//            hideoverlay();
//        }
        $('.mapCont').stop().fadeToggle(800).animate({top: $(window).scrollTop() + 160}, 80);
    });
//    -----------------------------show popup---------------------
    $('.btnsgnupfn').click(function (e) {
        showoverlay();
        $('.entryGate').stop().fadeIn(800).css({top: $(window).scrollTop() + 160}, 80);
        $(this).addClass('active');
        clearField();return false;
    });
    $('.btnsgninfn').click(function(e){
    e.stopPropagation();
//    hideoverlay();
//        hideform();
    showoverlay();
    clearField();
    $(this).addClass('active');
    $('.signinformCont').stop().fadeIn(500).animate({top: $(window).scrollTop()+160},80);
});
//---------------------------previous btn function----------------
    $('#cardType').change(function(){
        $(this).next('input').val('');
        if($(this).val()>0){
            $(this).next('input').removeAttr('disabled');
        }else{
            $(this).next('input').attr('disabled','disabled');
        }
    });
//---------------------------previous btn function----------------
             $('.prevBtn').click(function () {
                 var getName = $(this).attr('name');
                 $('.khammanKlass').removeClass('active').not($('.' + getName).addClass('active'));
                 $('.crntlvng').slideUp(500, function () {
                     $('.prsnldtl').slideDown(500);
                 });
             });
             $('.prevBtn1').click(function () {
                 var getName = $(this).attr('name');
                 $('.khammanKlass').removeClass('active').not($('.' + getName).addClass('active'));
                 $('.rgstrvtr').slideUp(500, function () {
                     $('.crntlvng').slideDown(500);
                 });
             });
             
//    ----------------------------- resp subscription btn ---------------------
    $('.respSubscribeBtn').click(function (e) {
        e.stopPropagation();
        hideoverlay();
        showoverlay();
        $('.contSubscrib').fadeIn(500).animate({top: $(window).scrollTop() + 160}, 80);
    });
    $('.closeicn,.sbmitbtn').click(function () {
        $('.signupformCont, .signinformCont, .entryGate').fadeOut(500);
        hideoverlay();
    });
    $('.closeicn').click(function(){
       var getUrl=window.location.href;
       window.location.href=getUrl;
    });
//    -----------------------------Polls view---------------------
    $(document).on('click', '.accordian', function () {
        if ($(this).hasClass('accoOff')) {
            $(this).find('.plsVer').removeClass('plsVeract').attr('title', 'Expand');
            $(this).removeClass('accoOff');
        } else {
            $(this).find('.plsVer').addClass('plsVeract').attr('title', 'Collapse');
            $('.accordian').removeClass('accoOff').not($(this).addClass('accoOff'));
        }
        $('.pollsCont').slideUp(500).not($(this).next('.pollsCont').stop().slideToggle(500));
    });

    //    ----------------------------- Member detail popup ---------------------
    $(document).on('mouseenter','.memberName', function(e){
        var getThsOffset=$(this).offset();
        var getMembName=$(this).closest('tr').find('.memberName').html();
        var getMembImg=$(this).closest('td').find('input[type="hidden"]').attr('value');
        var getMembEmail=$(this).closest('tr').find('.memberEmail').html();
        var getMembAddress=$(this).closest('tr').find('.memberAddress').html();
        var getMembPhone=$(this).closest('tr').find('.memberPhone').html();
        $('.maincontainer').after('\n\
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
                        $('.membDtlPupup').css({left: getThsOffset.left+20, top: getThsOffset.top+30}).stop().fadeIn(500);
    });
    $(document).on('mouseout','.memberName', function(){
        $('body').find('.membDtlPupup').remove();
    });
    if($(window).width<=1200){
        $('ul.ulMainMenu li ul').prev('a').addClass('hvSbMenu');
    }else{
        $('ul.ulSub li ul').prev('a').addClass('hvSbMenu');
    }
    $('ul.ulSub li').hover(function(){
        $(this).find('.subLavelul').show(600);
    },
    function(){
        $(this).find('.subLavelul').stop().hide(600);
    });
});
//    -----------------------------show popup in javascript---------------------
function clearField() {
    $('.signupformCont, .signinformCont, .entryGate').find('\
        input[type="email"], \n\
        input[type="text"],  \n\
        input[type="number"],  \n\
        input[type="password"],\n\
        textarea').val('');
}
function showoverlay() {
    $('.fnClose').fadeOut();
    $('.bdyovrly').fadeIn('fast');
}
function hideoverlay() {
    $('.bdyovrly').fadeOut(500);
    if ($(window).width() <= 600) {
        $('.contSubscrib').fadeOut(500);
    }
        $('.btnSignIn, .btnSignUp').removeClass('active');
    if ($(window).width() <= 1200) {
     $('.ulMainMenu').slideUp(500);
    }
}
function hideform() {
    $('.fnClose').fadeOut(500);
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

