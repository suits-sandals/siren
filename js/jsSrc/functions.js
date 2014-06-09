/**
* This file contains core functions used in the Siren Framework
* @module Siren-Core
*/


/**
Methods related to testing and addition browser support
@class browserSupport
@static
*/


/**
Test if a css selector can be used
@method upportsSelector
@param selector {string} 
*/
function supportsSelector(selector) {
    var doc = document,
        el = doc.createElement('style'),
        supported = false,
        theRules;
    
    // IE seems to need a type to recognise a stylesheet.
    el.type = 'text\/css';
    
    // This ASSUMES that IE will always give stylesheets a styleSheet method.
    // Watch this space for errors.
    if (el.styleSheet) {
        el.styleSheet.cssText = selector + '{}';
        // May as well save some typing.
        theRules = el.styleSheet.rules;
        // IE7 and 8 map '::before' to ':before' so we can't simply 
        // check that our selector is the same as the returned one.
        // The selectorText of any unrecognised selector is 'UNKNOWN' and 
        // unrecognised Pseudo-elements come back as ':unknown', so we can
        // check for that.
        supported = (theRules && theRules[0].selectorText && theRules[0].selectorText.toLowerCase().indexOf('unknown') < 0);
    } else {
    
        // Standards-based browsers need the stylesheet to be appended to the
        // DOM, but they will allow us to simply give the style tag some text.
        el.appendChild(doc.createTextNode(selector + '{}'));
        doc.body.appendChild(el);
        supported = !!el.sheet.cssRules.length;
        doc.body.removeChild(el);
    }

    // Clean up after ourselves and give us the results.    
    el = null;
    return supported;
}

/**
Checks if touch device
@method is_touch_device
@param url {string} 
*/
function is_touch_device() {
  return 'ontouchstart' in window || 'onmsgesturechange' in window;
}


/**
Polyfill for querySectorAll
@method querySelectorAll
@param seclector {object} 
*/
if (!document.querySelectorAll) {
    document.querySelectorAll = function(selector) {
        var doc = document,
            head = doc.documentElement.firstChild,
            styleTag = doc.createElement('STYLE');
        head.appendChild(styleTag);
        doc.__qsaels = [];
 
        styleTag.styleSheet.cssText = selector + "{x:expression(document.__qsaels.push(this))}";
        window.scrollBy(0, 0);
 
        return doc.__qsaels;
    };
}


/**
Methods related to manipulating classes in the HTML
@class classManipulation
@static
*/


/**
Used to add a class "active" to triggers and related targets. ie8+
@method activeState
@param trigger {string} The name of the trigger
*/
function activeState(trigger) {
  var targetName = trigger.getAttribute('href').replace('#', '');
  var target = document.getElementById(targetName);
  
  if (!target) {
    return;
  }
  
  trigger.classList.toggle('active');
  target.classList.toggle('active');
}


/**
Methods related to manipulating style manipulation
@class styleManipulation
@static
*/

/**
Used to remove an inline propert
@method removeStyle
@param elem {object} 
@param style {string} 
*/
function removeStyle(elem,style){
  if (elem.style.removeProperty) {
    elem.style.removeProperty(style);
  } else {
    elem.style.removeAttribute(style);
  }
}

/**
Methods related to assyncronous calls
@class assyncronous
@static
*/

/**
Used to assyncronously load a javascript file. Based on article by Chris Lu (https://chris.lu/article/read/506de698268c420f0d000004)
@method loadScript
@param src {string} The path to the file from target HTML file
@param callback {function} 
*/

function loadScript(src, callback){
  var scriptTag = document.createElement('script'); 
  scriptTag.src = src; 
  scriptTag.type = 'text/javascript'; 
  scriptTag.async = true; 
  var headTag = document.getElementsByTagName('head')[0];
  headTag.appendChild(scriptTag);

  
  scriptTag.onload = function(){
    if(callback){
      callback();
    }
  };
}

