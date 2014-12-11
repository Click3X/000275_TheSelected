// OUR SERVICES 
jQuery(document).ready(function($) {
    
    // DECLARE VARIABLES
    var heartLinks = [
        '#black1',
        '#gold6',
        '#gold5',
        '#gold4',
        '#gold3',
        '#gold2',
        '#gold1',
        '#black7',
        '#black6',
        '#black5',
        '#black4',
        '#black3',
        '#black2'
    ];

    // STORE NODELIST IN ITEM VAR
    var item = document.querySelectorAll(heartLinks);

    // SSTORE THE NODE LIST IN A NEW ARRAY FOR SORTING LATER
    var arr = [];
    for (var i = 0, ref = arr.length = item.length; i < ref; i++) {
        arr[i] = item[i];
    }

    // REVERSE ORDER OF ARRAY
    arr.reverse();
    // SHIFT ELEMENT ORDER SO BUSINESS STRATEGY IS FIRST
    for (var i =0; i < 4; i++) {
        var last = arr.pop();
        arr.unshift(last);    
    }

    // console.log('This is your array: ');
    // console.dir(arr);
    
    // ANIMATE FUNCTION
    (function animate(counter) {
      
      setTimeout(function() {

        arr[counter].classList.remove('js-hide');
        arr[counter].classList.add('js-show');

        counter++;

        if(counter < arr.length) animate(counter);

      }, 400);
      
    })(0);

    // ANIMATE CIRCLE
    var circle = $('#circle');
    circle.addClass('around');

});