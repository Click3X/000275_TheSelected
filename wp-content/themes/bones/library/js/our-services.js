// OUR SERVICES 
jQuery(document).ready(function($) {
    console.log('The our services script is here man!');
    
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
    // MAKE LAST ELEMENT THE FIRST
    var last = arr.pop();
    arr.unshift(last);

    // ANIMATE FUNCTION
    (function animate(counter) {
      
      setTimeout(function() {

        arr[counter].classList.remove('js-hide');
        arr[counter].classList.add('js-show');

        console.log('This is counter '+counter+' and this is arr: ');
        console.log(arr[counter]);
        console.dir(arr[counter]);

        counter++;

        if(counter < arr.length) animate(counter);

      }, 400);
      
    })(0);

    // ANIMATE CIRCLE
    var circle = $('#circle');
    console.log('This is circle');
    console.dir(circle);
    circle.addClass('around');

});