/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        UTIL.replaceSvgImgWithInlineSvg();
        UTIL.windowScrollTimer();
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        $('#main-hero-home').vide({
          mp4: 'http://vodkabears.github.io/vide/video/ocean.mp4',
          webm: 'http://vodkabears.github.io/vide/video/ocean.webm',
          ogv: 'http://vodkabears.github.io/vide/video/ocean.ogv',
          poster: 'http://vodkabears.github.io/vide/video/ocean.jpg'
        }, {
          volume: 0,
          playbackRate: 1,
          muted: true,
          loop: true,
          autoplay: true,
          position: '50% 50%', // Similar to the CSS `background-position` property.
          posterType: 'jpg', // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
          resizing: true // Auto-resizing, read: https://github.com/VodkaBears/Vide#resizing
        });

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    },
    replaceSvgImgWithInlineSvg: function() {
      console.log('replacing all svg imgs with inline svg');
      jQuery('img[src$=".svg"]').each(function(){
          var $img = jQuery(this);
          var imgID = $img.attr('id');
          var imgClass = $img.attr('class');
          var imgURL = $img.attr('src');
  
          jQuery.get(imgURL, function(data) {
              // Get the SVG tag, ignore the rest
              var $svg = jQuery(data).find('svg');
  
              // Add replaced image's ID to the new SVG
              if(typeof imgID !== 'undefined') {
                  $svg = $svg.attr('id', imgID);
              }
              // Add replaced image's classes to the new SVG
              if(typeof imgClass !== 'undefined') {
                  $svg = $svg.attr('class', imgClass+' replaced-svg');
              }
              
              // Remove any invalid XML tags as per http://validator.w3.org
              $svg = $svg.removeAttr('xmlns:a');
              
              // Replace image with new SVG
              $img.replaceWith($svg);
          });

      });
    },
    windowScrollTimer: function() {
      var $window = $(window);
      $window.scroll(function() {
          clearTimeout($.data(this, 'scrollTimer'));
          $.data(this, 'scrollTimer', setTimeout(function() {
              console.log("Fired scrollTimer after 140ms");
              var $scrollTopPx = $(window).scrollTop();
              console.log($scrollTopPx);
              UTIL.editNavbarClassesOnScroll($scrollTopPx);
          }, 140));
      });
      $window.trigger('scroll');
    },
    editNavbarClassesOnScroll: function(scrollTopPx) {
      var stpx = (scrollTopPx) ? scrollTopPx : 0;
      var $headerNavbar = $('body > header .navbar').first();
      if(!$headerNavbar.length){console.log('no navbar to target');return false;}
      if (stpx > 75) {
        $headerNavbar.removeClass('navbar-lg navbar-transparent').addClass('navbar-fixed-top');
      }
      if (stpx < 76) {
        $headerNavbar.addClass('navbar-lg navbar-transparent').removeClass('navbar-fixed-top');
      }
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
