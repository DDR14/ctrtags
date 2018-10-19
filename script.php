<!-- 
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://184.168.239.248/orthorewardsinc/build/js/bootstrap.js"></script>
<script src="http://184.168.239.248/orthorewardsinc/build/js/jquery.prettyPhoto.js"></script>
<script src="http://184.168.239.248/orthorewardsinc/build/js/jquery.flexslider.js"></script>
<script src="http://184.168.239.248/orthorewardsinc/build/js/jquery.custom.js"></script>
<script type="http://184.168.239.248/orthorewardsinc/build/text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script> -->

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="build/js/bootstrap.js"></script>
<script src="build/js/jquery.prettyPhoto.js"></script>
<script src="build/js/jquery.flexslider.js"></script>
<script src="build/js/jquery.custom.js"></script>
<script src="build/js/owl.carousel.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>
<script>
   $(document).ready(function() {
      $("#owl-demo").owlCarousel({
      items : 4,
        lazyLoad : true,
        autoPlay : true,
        navigation : true,
      navigationText : ["",""],
      rewindNav : false,
      scrollPerPage : false,
      pagination : false,
        paginationNumbers: false,
    });
  });
</script>