/**
 * Quick nav and controls
 *
 */

$( document ).ready(function() {

    if( !window.location.hash ) { return; }

    var hash = window.location.hash;

    console.log( hash, $( "#page-links a[href='#" + hash + "']" ) );

    $( "#page-links a[href='" + hash + "']" ).tab( "show" );

});
