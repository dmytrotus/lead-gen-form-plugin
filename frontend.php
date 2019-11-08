<?php 

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists('lead_gen_front') ) :

class lead_gen_front{
	
	public $tag  = 'lead_form';
    public $func = 'form';

	function __construct() {
        add_shortcode( $this->tag, array( $this, $this->func ) );
        add_action( 'wp_enqueue_scripts',  array( $this, 'form_css') );
    }

	// register and enqueue CSS
	public function form_css(){
		wp_register_style( 'lead_gen_plugin', plugin_dir_url( __FILE__ ) . 'css/style.css', false );
		wp_enqueue_style( 'lead_gen_plugin' );
	}


	public function form() {

		ob_start();
			?>



			<form class="lead_form" action="#" method="POST">
				<h2>Form</h2>
				<label for="name">Name</label>
				<input required="" name="name" class="form-control" type="text" placeholder="Name">
				<label for="phone">Phone</label>
				<input required="" name="phone" class="form-control" type="tel" placeholder="Phone Number">
				<label for="email">Email</label>
				<input required="" name="email" class="form-control" type="enail" placeholder="Email Adress">
				<label for="budget">Budget</label>
				<input required="" name="budget" class="form-control" type="number" min="1" step="any" placeholder="Desired Budget (USD)">
				<label for="message">Your Message</label>
				<textarea name="message" rows="7" placeholder="Your Message" cols="90"></textarea>
			</form>

		

			<?php
			return ob_get_clean();
	}

}

$form = new lead_gen_front();

endif; // class_exists check