(function($) {
    wp.customize('starttheme_colors', function (value) {
        value.bind(function (newval) {
            $('header').css('background', newval);
        });
    });

    wp.customize('blogname', function (value) {
        value.bind(function (newval) {
            $('header>nav>a').html(newval);
        });
    });
})(jQuery)