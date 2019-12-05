$(document).ready(function() {
    
    // Scroll location
    $(document).scroll(function() {
        var currScroll = $(this).scrollTop();
        var scrollInfo = $(".scroll");
    
        scrollInfo.css("width", (currScroll / ($(document).height() - $(window).height()) ) * 100 + "%");
    });

});