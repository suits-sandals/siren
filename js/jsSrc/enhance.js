/*! EnhanceJS: a progressive enhancement boilerplate. Copyright 2014 @scottjehl, Filament Group, Inc. Licensed MIT */
(function( window, undefined ) {

    // Enable JS strict mode
    "use strict";

    // expose the 'enhance' object globally. Use it to expose anything in here that's useful to other parts of your application.
    window.enhance = {};

    // Define some variables to be used throughout this file
    var doc = window.document,
        docElem = doc.documentElement,
        head = doc.head || doc.getElementsByTagName( "head" )[ 0 ],
        // this references a meta tag's name whose content attribute should define the path to the enhanced JS file for the site (delivered to qualified browsers)
        fullJSKey = "fulljs",
        // classes to be added to the HTML element in qualified browsers
        htmlClasses = [ "enhanced" ];

    /* Some commonly used functions - delete anything you don't need! */

    // loadJS: load a JS file asynchronously. Included from https://github.com/filamentgroup/loadJS/
    function loadJS( src ){
        var ref = window.document.getElementsByTagName( "script" )[ 0 ];
        var script = window.document.createElement( "script" );
        script.src = src;
        ref.parentNode.insertBefore( script, ref );
        return script;
    }

    // expose it
    enhance.loadJS = loadJS;


    // getMeta function: get a meta tag by name
    // NOTE: meta tag must be in the HTML source before this script is included in order to guarantee it'll be found
    function getMeta( metaname ){
        var metas = window.document.getElementsByTagName( "meta" );
        var meta;
        for( var i = 0; i < metas.length; i ++ ){
            if( metas[ i ].name && metas[ i ].name === metaname ){
                meta = metas[ i ];
                break;
            }
        }
        return meta;
    }

    // expose it
    enhance.getMeta = getMeta;

    // cookie function from https://github.com/filamentgroup/cookie/
    function cookie( name, value, days ){
        // if value is undefined, get the cookie value
        if( value === undefined ){
            var cookiestring = "; " + window.document.cookie;
            var cookies = cookiestring.split( "; " + name + "=" );
            if ( cookies.length == 2 ){
                return cookies.pop().split( ";" ).shift();
            }
            return null;
        }
        else {
            // if value is a false boolean, we'll treat that as a delete
            if( value === false ){
                days = -1;
            }
            if ( days ) {
                var date = new Date();
                date.setTime( date.getTime() + ( days * 24 * 60 * 60 * 1000 ) );
                var expires = "; expires="+date.toGMTString();
            }
            else {
                var expires = "";
            }
            window.document.cookie = name + "=" + value + expires + "; path=/";
        }
    }

    // expose it
    enhance.cookie = cookie;

    /* Enhancements for qualified browsers - “Cutting the Mustard”
        Add your qualifications for major browser experience divisions here.
        For example, you might choose to only enhance browsers that support document.querySelector (IE8+, etc).
        Use case will vary.
        */
    if( !( "querySelector" in doc ) ){
        // basic browsers: last stop here!
        return;
    }

    // From here on we're dealing with qualified browsers.

    // Add scoping classes to HTML element: useful for upgrading the presentation of elements that will be enhanced with JS behavior
    docElem.className += " " + htmlClasses.join(" ");

    /* Load JavaScript enhancements in one request.
        Your DOM framework and dependent component scripts should be concatenated and minified into one file that we'll load dynamically (keep that file as small as possible!)
        A meta tag with a name matching the fullJSKey should have a content attribute referencing the path to this JavaScript file.
        */
    var fullJS = getMeta( fullJSKey );
    if( fullJS ){
        loadJS( fullJS.content );
    }


}( this ));