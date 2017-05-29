$(document).ready(function() {
    //Hidden menu
    $(".btn_menu, .hidden_menu a").click(function(){
        if ($(".hidden_menu").is(":hidden")){
            $(".hidden_menu").show();
        } else {
            $(".hidden_menu").hide();
        }
    });

    //Page scroll
    $("a[rel='m_PageScroll2id']").mPageScroll2id({
        offset: 30
    });

    //Slider
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        loop: true,
        items: 3,
        margin: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,3]
    });

    //Responsive tabs
        $('#responsiveTabsDemo').responsiveTabs({
            startCollapsed: 'tabs'
        });

});
