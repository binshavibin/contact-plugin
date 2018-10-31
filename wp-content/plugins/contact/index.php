<?php
/*
Plugin Name: Contact form
Author : Binsha MB (binsham03@gmail.com)
Created On : 31 oct ,2018
Description : Add contact form tp website

*/
add_shortcode('contact_form','contact_part');
register_activation_hook( __FILE__, 'contact_install' );
function contact_part() {
	ob_start();
	display_form();
	submit_form();
	return ob_get_clean();
}
function display_form() {

	echo '<form action="#" method="post"> ';
	echo '<label for="name">Name</label><input type="text" name="name" pattern="[a-zA-Z]+" value="'.(isset($_POST['name']) ? esc_attr($_POST['name']):'').'">';
	echo '</br><label for="email">Email</label><input type="email" name="email" value="'.(isset($_POST['email']) ? esc_attr($_POST['email']):'').'">';
	echo '</br><input type="submit" name="contact_save" value="Save">';
	echo '</form>';
}

function submit_form() {
	if(isset($_POST['contact_save'])) {
		$name = sanitize_text_field($_POST['name']);
		$email = sanitize_email($_POST['email']);
		global $wpdb;  
		$wpdb->insert('wp_subscribers',array('name'=>$name,'email'=>$email,'created_datetime'=>date('Y-m-d H:i:s'))); 
	}
}

function contact_install() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'subscribers';
	$sql = "CREATE TABLE $table_name  (
			  id int(11) NOT NULL,
			  name varchar(255) NOT NULL,
			  email varchar(255) NOT NULL,
			  created_datetime datetime NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;ALTER TABLE wp_subscribers
			  ADD PRIMARY KEY (id);ALTER TABLE wp_subscribers
			  MODIFY id int(11) NOT NULL AUTO_INCREMENT;";

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}
?>