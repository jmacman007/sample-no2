// This is the cleaner code per request of a thread in the LinkedIn group "WordPress"

/*!
loadCSS: load a CSS file asynchronously.
[c]2014 @scottjehl, Filament Group, Inc.
Licensed MIT
*/

function loadCSS( href, before, media ){
"use strict";
var ss = window.document.createElement( "link" );
var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];
ss.rel = "stylesheet";
ss.href = href;
ss.media = "only x";
ref.parentNode.insertBefore( ss, ref );
setTimeout( function(){
ss.media = media || "all";
} );
return ss;
}

// here's where you specify the CSS files to be loaded asynchronously

// load Google Web Font
// loadCSS( "https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic|Nothing+You+Could+Do=sublatin" );
// load Font Awesome from CDN
loadCSS( "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" );