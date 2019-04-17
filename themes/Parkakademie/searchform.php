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
      <button id="search-button" style="display: flex;"></button>
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