<?php
require_once ('../wp-load.php');
require_once ('../wp-content/plugins/user-access-manager/user-access-manager.php');

// define temp user name
define ( 'USER_EMAIL_ADDRESS', 'user@localhost.pl' );

$userData = pojade_addUser ( USER_EMAIL_ADDRESS );

$categories = pojade_addUserAccess ( $userData->ID );

echo "\nCategories for user id: " .  $userData->ID;
print_r ( $categories );

/**
 * Add user
 * Based on: https://tommcfarlin.com/create-a-user-in-wordpress/
 */
function pojade_addUser($email_address) {
	$user = get_user_by ( 'login', $email_address );
	
	if (! $user) {
		// Generate the password and create the user
		$password = wp_generate_password ( 12, false );
		$user_id = wp_create_user ( $email_address, $password, $email_address );
		$user = new WP_User ( $user_id );
		
		// Set the role empty
		$user->set_role ( '' );
		
		// Email the user
		wp_mail ( $email_address, 'Welcome!', 'Your Password: ' . $password );
	}
	
	return $user;
}

/**
 * Add user access
 */
function pojade_addUserAccess($userId, $accessCategoryId = null) {
	$aUserGroupsForObject = array ();
	$sObjectType = 'user';
	
	$oUserAccessManager = new UserAccessManager ();
	if (isset ( $userId )) {
		$aUserGroupsForObject = $oUserAccessManager->getAccessHandler ()->getUserGroupsForObject ( $sObjectType, $userId );
	}
	
	return $aUserGroupsForObject;
}

?>