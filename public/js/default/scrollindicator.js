(function ($) {
    'use strict';
    // :: 24.0 Page Scroll Indicator Active Code
    var newLocal = window.onscroll = function () {
        scrollIndicatorFunction();
    };

    function scrollIndicatorFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("scrollIndicator").style.width = scrolled + "%";
    }
})(jQuery);