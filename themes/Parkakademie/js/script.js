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
    $('#search-button').click(function(e) {
        e.preventDefault();
        $('.menu-search').addClass('search-active').fadeIn(200);
    });
    $('.close').click(function() {
        $('.menu-search').fadeOut(200);
    });
	$(document).on('keyup',function(evt) {
	    if ($( '#search' ).hasClass('search-active') && evt.keyCode == 27) {
	       $('.menu-search').fadeOut(200);
	    }
	});
});