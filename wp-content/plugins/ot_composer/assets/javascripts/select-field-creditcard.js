!( function($) {
	'use strict';

	// career
	$( function() {
		var $selectCat_career = $( '.select-creditcard_cat-post' ),
			$inputCat_career = $( '.wpb-input-creditcard_cat' );

		if( ! $( 'body' ).find( $selectCat_career ).length > 0 )  {
			return;
		}

		$( 'body' ).find( '.wpb_el_type_select_category_creditcard' ).each( function( ) {
						
			$( this ).find( $selectCat_career ).attr( 'multiple', 'multiple' );
		
			$( this ).find( $selectCat_career ).select2();

			var creditcard_cat = [],
				mutiValue = $(this).find( $inputCat_career ).val();

			if( mutiValue.indexOf( ',' ) ) {
				mutiValue = mutiValue.split( ',' );
			}
			if( mutiValue.length > 0 ) {
				for( var i = 0; i < mutiValue.length; i++ ) {
					creditcard_cat.push( mutiValue[i] );
				}
			}

			$(this).find( $selectCat_career ).val( creditcard_cat ).trigger("change");

			$(this).find( $selectCat_career ).on( 'change', function( e ) {
				$(this).parent().find( $inputCat_career ).val( $(this).val() );
			} );
		} );
	} );

} )(window.jQuery);
