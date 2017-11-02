(function($) {
    "use strict";

    // ______________ RESPONSIVE MENU
    $(document).ready(function() {

        $('#navigation').superfish({
            delay: 300,
            animation: {
                opacity: 'show',
                height: 'show'
            },
            speed: 'fast',
            dropShadows: false
        });

        $(function() {
            $('#navigation').slicknav({
                closedSymbol: "&#8594;",
                openedSymbol: "&#8595;"
            });
        });

    });

 // ______________ STATS
jQuery(document).ready(function() {
 $('#myStat1').circliful();
 $('#myStat2').circliful();
 $('#myStat3').circliful();
 $('#myStat4').circliful();
});

})(jQuery);
