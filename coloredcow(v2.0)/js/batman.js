$(document).ready(function(){
    $(".outer").each(function() {
            var innerheight = $(".inner").height();
          // alert(innerheight);
             var outerheight = $(".outer").height();
           //alert(outerheight);
             var topspace=(outerheight-innerheight)/2.0;

        //alert(topspace);
             $(".inner").css("padding-top", topspace);

         });
             });
                       $(document).ready(function(){
                     var fixmeTop = $('.fixme').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('.fixme').css({
            position: 'fixed',
            top: '0',
            width: '30%',
            margin: '10px'
        });
    } else {
        $('.fixme').css({
            position: 'static',
            width: '100%',
            margin: '0'
        });
    }
});
 });