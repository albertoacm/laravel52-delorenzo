// normativa cookie
$(document).ready(function() {
    function cookieController() {
        // Load Google Analytics to head
        $.cookiesDirective.loadScript({
            uri:'js/app/google-analytics.js',
            appendTo: 'head'
        });

        // Load Google Maps to body
        if ($("#mapWrapper").length)
        {
            $.cookiesDirective.loadScript({
                uri:'js/app/google-maps.js',
                appendTo: 'body'
            });
        }
    }

    $.cookiesDirective({
        cookieScripts: 'Google Analytics, Google Maps', 
        scriptWrapper: cookieController,
        position: 'bottom',
    });
});