<!-- MESSAGE BOX-->
                 
<script type="text/javascript">
    var tpj=jQuery;
    tpj.noConflict();
    tpj(document).ready(function() {
        if (tpj.fn.cssOriginal!=undefined)
            tpj.fn.css = tpj.fn.cssOriginal;
            var api = tpj('.fullwidthbanner').revolution({
                delay:12000,
                startwidth:1170,
                startheight:500,
                onHoverStop:"on", 
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:3,
                hideThumbs:0,
                navigationType:"no",
                navigationArrows:"solo",
                navigationStyle:"round",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:30,
                navigationVOffset:-40,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                touchenabled:"on",
                stopAtSlide:-1,
                stopAfterLoops:-1,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                hideSliderAtLimit:0,
                fullWidth:"on",
                shadow:1
        });
        api.bind("revolution.slide.onloaded",function (e) {
            jQuery('.tparrows').each(function() {
                var arrows=jQuery(this);
                var timer = setInterval(function() {
                    if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
                        arrows.fadeOut(300);
                    },3000);
            })
        jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
            jQuery('.tp-simpleresponsive').addClass("mouseisover");
            jQuery('body').find('.tparrows').each(function() {
                jQuery(this).fadeIn(300);
            });
        }, function() {
            if (!jQuery(this).hasClass("tparrows"))
                jQuery('.tp-simpleresponsive').removeClass("mouseisover");
        })
    });
});
</script>
<script>
$(function(){
  var $ppc = $('.progress-pie-chart'),
    percent = parseInt($ppc.data('percent')),
    deg = 360*percent/100;
  if (percent > 50) {
    $ppc.addClass('gt-50');
  }
  $('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
  $('.ppc-percents span').html(percent+'%');
});
</script>




<script type="text/javascript" src="build/js/jquery.min.js"></script>
<script src="build/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="build/js/jqBootstrapValidation.js"></script>
<script src="build/js/contact_me.js"></script>
<script type="text/javascript" src="build/js/_myscript.js"></script>
<script src="build/js/freelancer.min.js"></script>

<script type="text/javascript" src="build/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="build/js/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="build/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="build/js/plugins.js"></script>        
<script type="text/javascript" src="build/js/actions.js"></script>