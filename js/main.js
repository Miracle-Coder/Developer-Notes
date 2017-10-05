$(document).ready(function(){

    /* Image slider */
    $('#image_slider').everslider({
        mode: 'normal',
        maxVisible: 1,
        slideEasing: 'easeInOutQuart',

        slideDuration: 500
    });

    /* Featured slider	*/
    $('#featured_slider').everslider({
        mode: 'circular',
        itemKeepRatio: false,
        navigation: false,
        mouseWheel: true
    });

    /* Fullwidth slider */
    $('#fullwidth_slider').everslider({
        mode: 'carousel',
        moveSlides: 1,

        slideEasing: 'easeInOutCubic',
        slideDuration: 1500,
        navigation: true,
        keyboard: true,
        nextNav: '<span class="alt-arrow">Next</span>',
        prevNav: '<span class="alt-arrow">Next</span>',
        ticker: true,
        itemHeight:400,
        itemWidth:385,
        tickerAutoStart: true,
        tickerHover: true,
        tickerTimeout: 3000,
    });

    /* Fullwidth slider with "fade" effect */
    $('#fullwidth_slider_fade').everslider({
        mode: 'carousel',
        effect: 'fade',
        moveSlides: 1,
        fadeEasing: 'linear',
        fadeDuration: 500,
        fadeDelay: 200,
        fadeDirection: 1,
        navigation: true,
        keyboard: true,
        swipeThreshold: 10,
        nextNav: '<span class="alt-arrow">Next</span>',
        prevNav: '<span class="alt-arrow">Next</span>',
        ticker: true,
        tickerAutoStart: false,
        tickerTimeout: 2000
    });
    /* Slider animation hover */
    $('a.link-animated').hover(
        function() {
            $(this).addClass('rubberBand animated'); // Добавляем класс bounce
        },
        function() {
            $(this).removeClass('rubberBand animated'); // Убираем класс
        }
    )
    $('li.slider-image').hover(
        function() {
            $(this).addClass('jello animated'); // Добавляем класс bounce
        },
        function() {
            $(this).removeClass('jello animated'); // Убираем класс
        }
    )


    /* Windi js code */

    $(function() {

        var $el = $( '#wi-el' ),
            windy = $el.windy(),
            allownavnext = false,
            allownavprev = false;

        $( '#nav-prev' ).on( 'mousedown', function( event ) {

            allownavprev = true;
            navprev();

        } ).on( 'mouseup mouseleave', function( event ) {

            allownavprev = false;

        } );

        $( '#nav-next' ).on( 'mousedown', function( event ) {

            allownavnext = true;
            navnext();

        } ).on( 'mouseup mouseleave', function( event ) {

            allownavnext = false;

        } );

        function navnext() {
            if( allownavnext ) {
                windy.next();

            }
        }

        function navprev() {
            if( allownavprev ) {
                windy.prev();

            }
        }

    });

    /* Accordian js code*/


    $('#accordian li').hover(function () {
        $(this).find('ul').stop(true, true).slideDown()
    }, function () {
        $(this).find('ul').stop(true, true).slideUp()
    }).find('ul').hide()


    /* Login modal window animation*/


    var modalTrigger = $('.cd-modal-trigger'),
        transitionLayer = $('.cd-transition-layer'),
        transitionBackground = transitionLayer.children(),
        modalWindow = $('.cd-modal');

    var frameProportion = 1.78, //png frame aspect ratio
        frames = 25, //number of png frames
        resize = false;

    //set transitionBackground dimentions
    setLayerDimensions();
    $(window).on('resize', function(){
        if( !resize ) {
            resize = true;
            (!window.requestAnimationFrame) ? setTimeout(setLayerDimensions, 300) : window.requestAnimationFrame(setLayerDimensions);
        }
    });

    //open modal window
    modalTrigger.on('click', function(event){
        event.preventDefault();
        transitionLayer.addClass('visible opening');
        var delay = ( $('.no-cssanimations').length > 0 ) ? 0 : 600;
        setTimeout(function(){
            modalWindow.addClass('visible');
        }, delay);
    });

    //close modal window
    modalWindow.on('click', '.modal-close', function(event){
        event.preventDefault();
        transitionLayer.addClass('closing');
        modalWindow.removeClass('visible');
        transitionBackground.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
            transitionLayer.removeClass('closing opening visible');
            transitionBackground.off('webkitAnimationEnd oanimationend msAnimationEnd animationend');
        });
    });

    function setLayerDimensions() {
        var windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            layerHeight, layerWidth;

        if( windowWidth/windowHeight > frameProportion ) {
            layerWidth = windowWidth;
            layerHeight = layerWidth/frameProportion;
        } else {
            layerHeight = windowHeight*1.2;
            layerWidth = layerHeight*frameProportion;
        }

        transitionBackground.css({
            'width': layerWidth*frames+'px',
            'height': layerHeight+'px',
        });

        resize = false;
    }


    /* Login js code*/


    window.onload = function () {
        'use strict';
        /* prevent placeholder from sliding on input content */
        var inp = document.getElementsByTagName('input'),
            il = inp.length;

        while(--il) {
            inp[il].addEventListener('blur', function () {
                var t = this;
                (t.value.length > 0) ? t.classList.add('have-content') : t.classList.remove('have-content');
            });
        }

        /* trigger click event on checkbox when click on text */
        var i = 0,
            remember = document.getElementsByClassName("remember-me")[0],
            rememberCB = remember.getElementsByTagName("input")[0],
            rememberTxt = remember.getElementsByClassName("remember-me-txt")[0];


    };





/* Preloader code js */
    $('body').addClass('loader');


    setTimeout(function () {
        $('#preloader').fadeOut()
    }, 9000);



    var offset = $(".windy-main").offset();
    var topPadding = 40,
        bottomPadding = 1100; //высота над которой остоновится
    $(window).scroll(function() {
        if ($(window).scrollTop() > offset.top) {
            if ($(document).height() - bottomPadding > $(window).scrollTop() + $(".windy-main").height()) $(".windy-main").stop().animate({
                marginTop: $(window).scrollTop() - offset.top + topPadding
            });
        } else {
            $(".windy-main").stop().animate({
                marginTop: 30
            });
        };
    });

    jQuery("abbr.timeago").timeago();









});


