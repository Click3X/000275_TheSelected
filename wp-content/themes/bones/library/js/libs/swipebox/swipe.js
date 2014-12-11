// SWIPE JS - LIGHTBOX AND TOUCH SLIDER FOR SINGLE CASE STUDY PAGES
jQuery(document).ready(function($) {
    // console.log('This is swipe js!');

    // BIND SWIPBOX
    // $( '.swipebox' ).swipebox();

    // TAKE OUT LIGHTBOX (TEMPORARIALY) AND DISABLE CLICK THRU's
    $( '.swipebox' ).click(function(event) {
        event.preventDefault();
    });
    
});