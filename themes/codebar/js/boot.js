$(document).ready(function() {

	// jquery to control navigation toggles

	$( '.main-nav ul' ).parent().prepend( '<button class="menu-toggle"></button>' );
		

	$( document.body ).on( 'click', '.menu-toggle', function () {
		$( this ).parent().toggleClass( 'menu-open' );
		
	});

	$( '.navicon' ).on( 'click', function (event) {
		$( document.body ).toggleClass( 'show-nav' );
		event.preventDefault();
		
	});

}); // end doc ready	