<?php
require_once ('../wp-load.php');

// define temp user name
define ( 'USER_EMAIL_ADDRESS', 'user@localhost' );

$password = pojade_adduser ( USER_EMAIL_ADDRESS );

echo "hello" . $email_address;
echo $password;


function pojade_adduser($email_address) {
	// https://tommcfarlin.com/create-a-user-in-wordpress/
	if (null == username_exists ( $email_address )) {
		
		// Generate the password and create the user
		$password = wp_generate_password ( 12, false );
		$user_id = wp_create_user ( $email_address, $password, $email_address );
		
		// Set the nickname
		wp_update_user ( array (
				'ID' => $user_id,
				'nickname' => $email_address 
		) );
		
		// Set the role
		$user = new WP_User ( $user_id );
		$user->set_role ( '' );
		
		// Email the user
		wp_mail ( $email_address, 'Welcome!', 'Your Password: ' . $password );
		return $password;
	}
}

// add user access

?>