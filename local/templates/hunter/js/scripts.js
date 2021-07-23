window.onload = function() {

    console.log('work');




    $('#deals-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '.hot-deals .next_btn',
        prevArrow: '.hot-deals .prev_btn',
    });

    $('#brands-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '.our-brands .next_btn',
        prevArrow: '.our-brands .prev_btn',
    });

    $('#blog-block').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '.blog-block .next_btn',
        prevArrow: '.blog-block .prev_btn',
    });

};