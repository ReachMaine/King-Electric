<?php 
/* languages customizations  
- add require_once(get_stylesheet_directory().'/custom/language.php'); to functions.php to make this work.
*/
	if ( !function_exists('eai_change_theme_text') ){
		function eai_change_theme_text( $translated_text, $text, $domain ) {
			 /* if ( is_singular() ) { */
			    switch ( $translated_text ) {
		            /* case 'Category' :
		                $translated_text = __( '',  $domain  );
		                break; */
		            /*case 'Type here...':
		            	$translated_text = __( 'Search...',  $domain  );
		            	break;
		            case 'BLOG CATEGORIES':
		            	$translated_text = __( 'Found in',  $domain  );
		            	break;
		            case 'Share this post:':
		            	$translated_text = __('Share', ' $domain );
		            	break; */
		            case 'Back to services':
		            	$translated_text = __( 'All Our Services',  $domain  );
		        }
		    /* } */

	    	return $translated_text;
		}
		add_filter( 'gettext', 'eai_change_theme_text', 20, 3 );
	}

?>