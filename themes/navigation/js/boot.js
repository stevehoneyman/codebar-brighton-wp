
// no-conflict document ready function, ensures scripts run!
jQuery(document).ready(function($){
		
	// nav toggle(s)

	// toggles the class .show-nav onto body element when main navicon is clicked 
	// .show-nav is attached to the body rather than parent so that we can use descendent selectors to style navicon transforms
	
	$( '.navicon' ).on( 'click', function (event) {
		$( document.body ).toggleClass( 'show-nav' );
	
	// for lolz you could disable the statement above and enable the one below, 
	// notice the transforms on the main navicon no longer work 
	
	// $( '.main-nav-container' ).toggleClass( 'show-nav' );
		
		event.preventDefault();
		
	});

	// main-nav-ul class is added on site load if a child list is present, ie; if a child ul of ul li exists
	// doing this allows us to add buttons & toggles to sub nav elements without knowing how many of these exist
	
	$( '.main-nav ul' ).parent().prepend( '<button class="menu-toggle"></button>' );
		

	// adds menu-open to child ul that toggles list element visibility & allows us to style toggle
	
	$( document.body ).on( 'click', '.menu-toggle', function () {
		$( this ).parent().toggleClass( 'menu-open' );
		
	});

	
}); // end no conflict doc ready



