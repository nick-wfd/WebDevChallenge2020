<?php
/**
*plugin Name: Form
*/

function example_form_plugin()
{
	$content ='';
	$content .= '<h2>contact us</h2>';
	$content .= '<form method="post" action="http://localhost/wordpress/thank-you/">';
	$content .='<label for="your_name">Name</label>';
	$content .='<input type="text" name="your _name" class="form-control" placeholder="Enter your name" />';

	$content .='<label for="your_email">Email</label>';
	$content .='<input type="email" name="your _email" class="form-control" placeholder="Enter your email" />';	

	$content .='<label for="your_phone">Phone</label>';
	$content .='<input type="number" name="your _phone" class="form-control" placeholder="Enter your phone" />';	

	$content .='<label for="your_comments">Question</label>';
	$content .='<textarea name="your_comments" class="form-control" placeholder="enter your question"></textarea>';

	$content .= '<br /><input type="submit" name="form_submit" class="btn btn-md btn-primary" value="send yourinfo">';
	$content .= '</form>';

	return $content;
}
add_shortcode('example_form','example_form_plugin');

function form_capture()
{
	if(isset($POST['form_submit']))
	{
		$name = sanitize_text_field($_POST['your_name']);
		$name = sanitize_text_field($_POST['your_email']);
		$name = sanitize_text_field($_POST['your_phone']);
		$comments = sanitize_textarea_field($_POST['your_comments']);

		$to = 'chavanprasad023@gmail.com';
		$subject = 'test form submission';
		$message = ''.$name.' - '.email.' - '.$comments;

		wp_mail($to,$subject,$message);
	}
}
add_action('wp_head','form_capture');




?>