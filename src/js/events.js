/**
 * -- EVENTS
 */
import { viewport_width, is_in_view } from "./globals";

/**
  * These functions execute in order.
  */
(function(){

})();

/**
  * Events that fire when the page is loaded.
  */
$(document).ready(function(){

  setTimeout(function(){
    $('body').addClass('is-loaded');
  },200);

}); // /.ready


/**
 * Events that fire on Window Scroll
 */

$(window).scroll(() => {

}); // /.scroll
