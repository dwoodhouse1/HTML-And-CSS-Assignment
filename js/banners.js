// ==========================================================================
// JavaScript Banners
// ==========================================================================


$(document).ready(function() {
    // Header Banner Slider using Slick
    $('.container-banner').slick({
        // arrows: false,
        //autoplay: true,
        // dots: true
        nextArrow: false,
        prevArrow: false
    });
    
    
    
    
    
    
    
    
    
    // Partner Banner Slider using Slick
    $('.carousell-partners-content').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        prevArrow: false,
        nextArrow: false,
        draggable: false,
        swipe: false
    });
    
    // Client Banner Slider using Slick
    $('.carousell-clients-content').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        prevArrow: false,
        nextArrow: false,
        draggable: false,
        swipe: false
    });
});

