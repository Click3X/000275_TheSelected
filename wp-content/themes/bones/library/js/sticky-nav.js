// STICKY NAV JS
jQuery(document).ready(function($) {

    // DECLARE VARIABLES
    var siteHeader = $('#site-header').get(0),
    $window = $(window),
    body = $('body').get(0),
    siteHeaderScrollTop,
    distance,
    windowScroll,
    viewportWidth,
    isMobile;

    function testMobile(viewportWidth, isMobile) {
        var viewportWidth = viewportWidth;
        var isMobile = isMobile;

        if(viewportWidth < 768) {
            isMobile = true;
        } else {
            isMobile = false;
        }

        return isMobile;
    }

    // TEST MOBILE INITIALLY
    isMobile = testMobile(viewportWidth, isMobile);

    // GET OFFSET TOPS TO WORK WITH
    distance = siteHeader.offsetTop;
    windowScroll = $window.scrollTop();
    viewportWidth = $(window).width();


    // IF WINDOW RESIZE - GET NEW DISTANCE FOR OFFSET TOP OF HEADER
    $( window ).resize(function() {
        viewportWidth = $(window).width();
        windowScroll = $window.scrollTop();    
        distance = siteHeader.offsetTop;

        isMobile = testMobile(viewportWidth, isMobile);
    });


    // ON SCROLL FUNCTION
    if(isMobile === false) {
        $( window ).scroll(function() {
        console.log('This is isMobile:')
        console.log(isMobile);
        // if(isMobile === false) {
            windowScroll = $window.scrollTop();   
            distance = siteHeader.offsetTop;

            console.log('this is windowScroll: '+windowScroll);
            console.log('this is distance: '+distance);

            if ( windowScroll >= distance ) {
                $(body).addClass('fixed-header');
            } else if ( windowScroll < distance ) {
                $(body).removeClass('fixed-header');
            }
        });
    };



});