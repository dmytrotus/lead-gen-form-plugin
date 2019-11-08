<?php 

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists('lead_gen_admin') ) :

class lead_gen_admin{

	function __construct() {
        add_action( 'admin_menu', array( $this, 'lead_gen_plugin_menu') );
    }

   	//add options to admin page
	public function lead_gen_plugin_menu() {
	add_menu_page( 'Lead Gen Form Options', 'Lead Gen Form', 'administrator', 'lead_gen_from_options', array( $this ,'lead_gen_plugin_options') );
	}

	function lead_gen_plugin_options(){
		ob_start();
			?>

			<!-- html for the options page -->
			<h1>Lead Gen Form Plugin Options</h1>
			<h3>Change Labels/Placeholders</h3>
			<form method="post" action="#">

			<input type='hidden' name='option_page' value='general' />
			<input type="hidden" name="action" value="update" />
			<input type="hidden" id="_wpnonce" name="_wpnonce" value="66e88d2cce" />
			<input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php" />

			<table class="form-table">

			<tr>
				<th scope="row">
					<label for="name">Name</label>
				</th>
				<td>
					<input name="name" type="text" id="name" value="" class="regular-text" />
					<p class="description" id="tagline-description">For each field maximum length in 25 symbols</p>
				</td>
			</tr>

			<tr>
				<th scope="row">
					<label for="phone">Phone</label>
				</th>
				<td>
					<input name="phone" type="text" id="phone" value="" class="regular-text" />
				</td>
			</tr>

			<tr>
				<th scope="row">
					<label for="email">Email</label>
				</th>
				<td>
					<input name="email" type="text" id="email" value="" class="regular-text" />
				</td>
			</tr>

			<tr>
				<th scope="row">
					<label for="budget">Budget</label>
				</th>
				<td>
					<input name="budget" type="text" id="budget" value="" class="regular-text" />
				</td>
			</tr>

			<tr>
				<th scope="row">
					<label for="message">Your Message</label>
				</th>
				<td>
					<input name="message" type="text" id="message" value="" class="regular-text" />
				</td>
			</tr>

			
			<!-- html for the options page //-->
		

			<?php
			echo ob_get_clean();
	}



}

$admin = new lead_gen_admin();

endif; // class_exists check