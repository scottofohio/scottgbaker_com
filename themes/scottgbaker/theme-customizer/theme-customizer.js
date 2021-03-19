(function( $ ) {
    "use strict";

    //
    // Kill body animations
    //
    $('html > body').css('-webkit-animation-delay' , 0)
    .css('-moz-animation-delay' , 0)
    .css('-o-animation-delay' , 0)
    .css('-ms-animation-delay' , 0)
    .css('animation-delay' , 0);



    //
    // Logo images
    //

    wp.customize( 'meanthemes_logo_image', function( value ) {
        value.bind( function( to ) {

            0 === $.trim( to ).length ?
                $( 'header .logo img' ).remove() :
                $( 'header .logo' ).prepend( '<img src="' + to + '" />' );

        });
    });


    //
    // Background images
    //

    wp.customize( 'header_image', function( value ) {
        value.bind( function( to ) {

            0 === $.trim( to ).length ?
                $( 'header.header' ).css( 'background-image', '' ) :
                $( 'header.header' ).css( 'background-image', 'url( ' + to + ')' );

        });
    });

    wp.customize( 'body_background_tile_image', function( value ) {
        value.bind( function( to ) {

            0 === $.trim( to ).length ?
                $( 'body' ).css( 'background-image', '' ) :
                $( 'body' ).css( 'background-image', 'url( ' + to + ')' );

        });
    });


    wp.customize( 'body_background_cover_image', function( value ) {
        value.bind( function( to ) {


        if ( true === to ) {

     		$( 'body' ).css( 'background-image', 'url( ' + to + ')' );
     		$( 'body' ).css( 'background-size', 'cover' );
     		$( 'body' ).css( 'background-position', 'center center' );

     	} else {

                $( 'body' ).css( 'background-image', '' );
				$( 'body' ).css( 'background-size', 'none' );
				$( 'body' ).css( 'background-position', '0 0' );

        }

        });
    });


    // Display Options

    wp.customize( 'drawer_menu', function( value ) {
        value.bind( function( to ) {

        	if ( true === to ) {

        		$( 'html' ).removeClass('menu-default').addClass('menu-drawer');

        	} else {

	        	$( 'html' ).removeClass('menu-drawer').addClass('menu-default');

        	}

        } );
    } );

    wp.customize( 'show_home_hero', function( value ) {
        value.bind( function( to ) {

          if ( true === to ) {

            $( '.home-article' ).show();

          } else {

            $( '.home-article' ).hide();

          }

        } );
    } );





})( jQuery );
