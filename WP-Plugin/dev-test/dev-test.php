<?php
/*
  Plugin Name: Dev Test Form Plugin
  Plugin URI: https://safe2choose.org
  Description: Creates new contact in HubSpot using the HubSpot REST API.
  Version: 1.0
  Author: Joe Mumford
  Author URI: https://www.linkedin.com/in/joemumford
 */

function contact_form() {

  	$message = (count( $_POST ) > 0) ? '<p>Thank you for your submission!</p>' : null;
 
    echo '
    <form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">
	    <fieldset>
	    	<input type="hidden" name="c_company" id="c_company" value="Company Number ' . get_the_ID() . '">
			<label for="c_firstname">First Name</label>
			<input type="text" name="c_firstname" id="c_firstname" required>
			<label for="c_lastname">Last Name</label>
			<input type="text" name="c_lastname" id="c_lastname" required>
			<label for="c_email">Email Address</label>
			<input type="email" name="c_email" id="c_email" required>
			<input type="submit" value="Create Contact" name="c_submit">
		</fieldset>
    </form>
    ' . $message . '
    ';
}

function create_contact() {

	require 'vendor/autoload.php';

	$firstname = sanitize_user( $_POST['c_firstname'] );
	$lastname = sanitize_user( $_POST['c_lastname'] );
	$company = sanitize_user( $_POST['c_company'] );
	$email = sanitize_email( $_POST['c_email'] );
 
	$hubspot = SevenShores\Hubspot\Factory::create('7b74cd5c-61ab-49c1-8b6d-3a73140d5238');
	$err_page_id = get_option('error_page_id');

	$properties = [
		[
			'property' => 'firstname',
			'value' => $firstname
		],
		[
			'property' => 'company',
			'value' => $company
		],
		[
			'property' => 'lastname',
			'value' => $lastname
		]
	];
	$email = sanitize_email( $_POST['c_email'] );

	try {
		$hubspot->contacts()->createOrUpdate($email, $properties);
	} catch (ClientException $e) {
		$resp = $e->getResponse();
		// if error redirect to page
		wp_redirect( get_permalink( $err_page_id ) );
	}
}

function contact_form_function() {

	if ( isset($_POST['c_submit'] ) ) {
		create_contact();
	}
	contact_form();
}

// Register a new shortcode: [hubspot_contact_form]
add_shortcode( 'hubspot_contact_form', 'contact_form_shortcode' );
 
// The callback function that will replace [book]
function contact_form_shortcode() {
    ob_start();
    contact_form_function();
    return ob_get_clean();
}

// register plugin settings
add_action( 'admin_init', 'myplugin_register_settings' );
add_action('admin_menu', 'register_options_page');

function myplugin_register_settings() {
	add_option( 'error_page_id', '2');
	register_setting( 'plugin_options_group', 'error_page_id', 'myplugin_callback' );
}

function register_options_page() {
	add_options_page('Page Title', 'HubSpot Plugin Options', 'manage_options', 'myplugin', 'options_page');
}

function options_page() {
?>
<div>
	<h2>HubSpot Plugin Options</h2>
	<form method="post" action="options.php">
		<?php settings_fields( 'plugin_options_group' ); ?>
		<h3>Error page redirect</h3>
		<p>Add the ID of the page to redirect on submission error.</p>
		<table>
			<tr valign="top">
				<th scope="row"><label for="error_page_id">Page ID</label></th>
				<td><input type="text" id="error_page_id" name="error_page_id" value="<?php echo get_option('error_page_id'); ?>" /></td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>
<?php } 
