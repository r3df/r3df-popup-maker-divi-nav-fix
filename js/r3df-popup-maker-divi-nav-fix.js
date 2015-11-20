(function($){
    $(document).ready( function($) {
        //$( '#mobile_menu [class^="popmake"] a' ).unbind( "click" );
        $( '#mobile_menu [class^="popmake"] a' ).on('click', function(event) {
            event.preventDefault();  // block link
            $( '[data-popmake*="'+$(this).parent().attr('class').match(/popmake-([^ ]*)/)[1]+'"]' ).popmake('open');
        });
    });
} )( jQuery );
