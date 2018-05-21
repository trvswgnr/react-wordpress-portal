/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(2);
__webpack_require__(5);

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


// click user to show user details
$('.user').click(function () {
  var $this = $(this);
  $('.user').not(this).removeClass('is-active');
  $this.toggleClass('is-active');
  $('.user').not(this).next('.user__details').slideUp(150);
  $this.next('.user__details').slideToggle("fast");
});

// close user details
$('.section.for-users').on('click', '.user__close, .user__details', function () {
  $('.user__details').slideUp("fast");
  $('.user').removeClass('is-active');
});

// hide categories that contain nothing
$('.category').has('.nothing').hide();

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
/**
 * Global Variables and Methods
 */

var viewport_width = exports.viewport_width = $(window).width();

/**
 * Determine if the target element is in view and if so return true
 */
var is_in_view = exports.is_in_view = function is_in_view(target) {
  var el_offset = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;

  var amount_scrolled = $(window).scrollTop();
  var el_position = $(target).offset();
  el_position = el_position ? el_position.top : '';

  var offset = el_offset;
  var trigger_position = el_position - offset;
  if (amount_scrolled >= trigger_position) {
    return true;
  }
};

/**
 * Adds the :onScreen pseudo selector to jQuery to affect elements visible in the viewport.
 */
(function ($) {
  $.expr[":"].onScreen = function (elem) {
    var $window = $(window);
    var viewport_top = $window.scrollTop();
    var viewport_height = $window.height();
    var viewport_bottom = viewport_top + viewport_height;
    var $elem = $(elem);
    var top = $elem.offset().top;
    var height = $elem.height();
    var bottom = top + height;

    return top >= viewport_top && top < viewport_bottom || bottom > viewport_top && bottom <= viewport_bottom || height > viewport_height && top <= viewport_top && bottom >= viewport_bottom;
  };
})(jQuery);

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _globals = __webpack_require__(4);

/**
  * These functions execute in order.
  */
(function () {})();

/**
  * Events that fire when the page is loaded.
  */
/**
 * -- EVENTS
 */
$(document).ready(function () {

  setTimeout(function () {
    $('body').addClass('is-loaded');
  }, 200);
}); // /.ready


/**
 * Events that fire on Window Scroll
 */

$(window).scroll(function () {}); // /.scroll

/***/ })
/******/ ]);
