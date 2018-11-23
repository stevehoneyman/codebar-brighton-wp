
jQuery(document).ready(function($){
		
	// nav toggle(s)

	// happens on load if child list is present
	$( '.main-nav ul' ).parent().prepend( '<button class="menu-toggle"></button>' );
		

	// adds toggle to ul that shows / hides child elements 
	$( document.body ).on( 'click', '.menu-toggle', function () {
		$( this ).parent().toggleClass( 'menu-open' );
		
	});

	// loads style on body when main navicon is clicked. class attached to body so that we can style navicon transforms
	$( '.navicon' ).on( 'click', function (event) {
		$( document.body ).toggleClass( 'show-nav' );
		event.preventDefault();
		
	});


}); // end no conflict doc ready
