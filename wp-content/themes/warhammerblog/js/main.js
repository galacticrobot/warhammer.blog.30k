jQuery(function($) {

    $('.accordion-tabs').each(function() {
        $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    });

    $('.accordion-tabs').on('click', 'li > a', function(event) {
        if (!$(this).hasClass('is-active')) {
            event.preventDefault();
            var accordionTabs = $(this).closest('.accordion-tabs');
            accordionTabs.find('.is-open').removeClass('is-open').hide();

            $(this).next().toggleClass('is-open').toggle();
            accordionTabs.find('.is-active').removeClass('is-active');
            $(this).addClass('is-active');
        } else {
            event.preventDefault();
        }
    });

    //$('.accordion-tabs').each(function(index) {

    // --------------------------------------------------------------------------
    //  nav menu
    // --------------------------------------------------------------------------

    var menu = $('.main-top-nav');

    $('.nav-trigger').on('click', function( e ){
        e.preventDefault();
        menu.slideToggle('fast');
    });

    //fix issues with menu on window resize.
    $(window).resize( function() {
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });

})();