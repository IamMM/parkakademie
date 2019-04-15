//// When the user scrolls the page, execute myFunction 
//window.onscroll = function() {myFunction()};
//
//// Get the navbar
//var navbar = document.getElementById("main-nav");
//var main_container = document.getElementById("main-container");
//
//// Get the offset position of the navbar
//var sticky = navbar.offsetTop;
//
//// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
//function myFunction() {
//  if (window.pageYOffset >= sticky) {
//    navbar.classList.add("sticky");
//    main_container.setAttribute('style','padding-top: 38px;');
//  } else {
//    navbar.classList.remove("sticky");
//    main_container.setAttribute('style','padding-top: 0;');
//  }
//
//}

// SEARCH
jQuery(function($) {
	var tbSearch = $('.tb-menu-search');
    $('#tb-search-item').click(function(e) {
        e.preventDefault();
        $('.tb-menu-search').addClass('tb-search-active').fadeIn(200);
    });
    $('.tb-close').click(function() {
        $('.tb-menu-search').fadeOut(200);
    });
	$(document).on('keyup',function(evt) {
	    if ($( '#tb-search' ).hasClass('tb-search-active') && evt.keyCode == 27) {
	       $('.tb-menu-search').fadeOut(200);
	    }
	});
});