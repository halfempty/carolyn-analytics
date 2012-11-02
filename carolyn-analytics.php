<?php

/*
Plugin Name: Carolyn Google Analytics
*/

add_action( 'admin_menu', 'carolyn_ga_menu' );

function carolyn_ga_menu() {
	add_options_page( 'Google Analytics', 'Google Analytics', 'manage_options', 'carolyn_google_analytics', 'carolyn_ga_options' );
}

function carolyn_ga_options() {

	    //must check that the user has the required capability 
	    if (!current_user_can('manage_options'))
	    {
	      wp_die( __('You do not have sufficient permissions to access this page.') );
	    }

	    // variables for the field and option names 
	    $opt_name = 'carolyn_ga_code';
	    $hidden_field_name = 'carolyn_ga_submit_hidden';
	    $data_field_name = 'carolyn_ga_code';

	    // Read in existing option value from database
	    $opt_val = get_option( $opt_name );




	    // See if the user has posted us some information
	    // If they did, this hidden field will be set to 'Y'
	    if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
	        // Read their posted value
//	        $opt_val = $_POST[ $data_field_name ];
// 	        $opt_val = stripslashes(wp_filter_post_kses(addslashes($_POST[ $data_field_name ])));
 	        $opt_val = stripslashes($_POST[ $data_field_name ]);

	        // Save the posted value in the database
	        update_option( $opt_name, $opt_val );

			
			

	        // Put an settings updated message on the screen

	?>
	<div class="updated"><p><strong><?php _e('Settings saved.', 'carolyn_ga_menu' ); ?></strong></p></div>
	<?php

	    }

	    // Now display the settings editing screen

	    echo '<div class="wrap">';

	    // header

	    echo "<h2>" . __( 'Google Analytics Code', 'carolyn_ga_menu' ) . "</h2>";

	    // settings form

	    ?>

	<form name="form1" method="post" action="">
	<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

	<p><?php _e("Google Analytics Code:", 'carolyn_ga_menu' ); ?></p>

	<textarea name="<?php echo $data_field_name; ?>" rows="20" style="width: 100%"><?php echo $opt_val; ?></textarea>
	
	<p class="submit">
	<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
	</p>

	</form>
	</div>

	<?php

	}


add_action('wp_head', 'carolyn_google_analytics');
function carolyn_google_analytics() {

if (!is_user_logged_in()) :
	echo get_option('carolyn_ga_code');
else: ?>
<!-- No Google Analytics -->
<?php endif;

}


?>