// about
console.log('about');

$(document).ready(function () {
    var $imggraphic1 = $('.img-graphic-home-1');
    var $imggraphic2 = $('.img-graphic-home-2');
    var $imggraphic3 = $('.img-graphic-home-3');
    var $imggraphic4 = $('.img-graphic-home-4');
    var $imggraphic5 = $('.img-graphic-home-5');
    var $imggraphic6 = $('.img-graphic-home-6');
    var $imggraphic7 = $('.img-graphic-home-7');


    $( ".show-g-1" ).mouseover(function() {
        console.log('mouseover');
        $imggraphic1.addClass('d-block');
    });
    $( ".show-g-1" ).mouseleave(function() {
        console.log('mouseover');
        $imggraphic1.removeClass('d-block');
    });

    $( ".show-g-2" ).mouseover(function() {
        console.log('mouseover');
        $imggraphic2.addClass('d-block');
    });
    $( ".show-g-2" ).mouseleave(function() {
        console.log('mouseover');
        $imggraphic2.removeClass('d-block');
    });

    $( ".show-g-3" ).mouseover(function() {
        console.log('mouseover');
        $imggraphic3.addClass('d-block');
    });
    $( ".show-g-3" ).mouseleave(function() {
        console.log('mouseover');
        $imggraphic3.removeClass('d-block');
    });

    $( ".show-g-4" ).mouseover(function() {
        console.log('mouseover');
        $imggraphic4.addClass('d-block');
    });
    $( ".show-g-4" ).mouseleave(function() {
        console.log('mouseover');
        $imggraphic4.removeClass('d-block');
    });

    $( ".show-g-5" ).mouseover(function() {
        console.log('mouseover');
        $imggraphic5.addClass('d-block');
    });
    $( ".show-g-5" ).mouseleave(function() {
        console.log('mouseover');
        $imggraphic5.removeClass('d-block');
    });

    $( ".show-g-6" ).mouseover(function() {
        console.log('mouseover');
        $imggraphic6.addClass('d-block');
    });
    $( ".show-g-6" ).mouseleave(function() {
        console.log('mouseover');
        $imggraphic6.removeClass('d-block');
    });

    $( ".show-g-7" ).mouseover(function() {
        console.log('mouseover');
        $imggraphic7.addClass('d-block');
    });
    $( ".show-g-7" ).mouseleave(function() {
        console.log('mouseover');
        $imggraphic7.removeClass('d-block');
    });


}); //document.ready