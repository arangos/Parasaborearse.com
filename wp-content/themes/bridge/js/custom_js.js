
var $j = jQuery.noConflict();

$j(document).ready(function() {
	"use strict";

	$j(function() {
	  $j('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $j(this.hash);
	      target = target.length ? target : $j('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $j('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});});
