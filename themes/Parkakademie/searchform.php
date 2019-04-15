<?php if (!is_search()) {
  // Default search text
  $search_text = "Suche eingeben ...";
} else { $search_text = "$s"; }
?>

<div id="search">
  <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div class="search-box">
      <input type="text" name="s" id="s"
             value="<?php echo wp_specialchars($search_text, 1); ?>"
             onFocus="clearInput('s', '<?php echo wp_specialchars($search_text, 1); ?>')" 
             onBlur="clearInput('s', '<?php echo wp_specialchars($search_text, 1); ?>')"
             />
      <button id="search-button" style="display: flex;">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16.67 16.76"><defs><style>.cls-1,.cls-5{fill:none;}.cls-2{opacity:0.8;}.cls-3{clip-path:url(#clip-path);}.cls-4{fill:#fff;}.cls-5{stroke:#1d1d1b;}.cls-6{clip-path:url(#clip-path-2);}</style><clipPath id="clip-path" transform="translate(-1 -1)"><rect class="cls-1" x="3.94" width="14.72" height="14.72"/></clipPath><clipPath id="clip-path-2" transform="translate(-1 -1)"><rect class="cls-1" y="9.82" width="8.94" height="8.94"/></clipPath></defs><title>Asset 3</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g class="cls-2"><g class="cls-3"><path class="cls-4" d="M11.3,13.22A5.86,5.86,0,1,0,5.45,7.36a5.86,5.86,0,0,0,5.86,5.86" transform="translate(-1 -1)"/><circle class="cls-5" cx="10.31" cy="6.36" r="5.86"/></g></g><g class="cls-2"><g class="cls-6"><line class="cls-5" x1="6.59" y1="10.17" x2="0.35" y2="16.41"/></g></g></g></g></svg>
      </button>
    </div>
  </form>
</div>


<script>
/************************************************************
 ** Clears a field
 ** By: 	Joshua Sowin (fireandknowledge.org)
 ** HTML: <input type="text" value="Search" name="search"
 **			id="search" size="25" 
 ** 		onFocus="clearInput('search', 'Search')" 
 ** 		onBlur="clearInput('search', 'Search')" />
 ***********************************************************/
function clearInput(field_id, term_to_clear) {
	
	// Clear input if it matches default value
	if (document.getElementById(field_id).value == term_to_clear ) {
		document.getElementById(field_id).value = '';
	}
	
	// If the value is blank, then put back term
	else if (document.getElementById(field_id).value == '' ) {
		document.getElementById(field_id).value = term_to_clear;
	}
}

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
</script>