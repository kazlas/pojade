<?php
require_once ('../wp-load.php');
require_once ('../wp-content/plugins/user-access-manager/user-access-manager.php');

// define temp user name
define ( 'USER_EMAIL_ADDRESS', 'user@localhost' );

$userData = pojade_addUser ( USER_EMAIL_ADDRESS );
echo "User: ";
print_r ( $userData );

$categories = pojade_addUserAccess ( $userData->ID );
echo "\nCategories: ";
print_r ( $categories );

/**
 * Add user
 */
function pojade_addUser($email_address) {
	// https://tommcfarlin.com/create-a-user-in-wordpress/
	if (null == username_exists ( $email_address )) {
		
		// Generate the password and create the user
		$password = wp_generate_password ( 12, false );
		$user_id = wp_create_user ( $email_address, $password, $email_address );
		
		// Set the role
		$user = new WP_User ( $user_id );
		$user->set_role ( '' );
		
		// Email the user
		wp_mail ( $email_address, 'Welcome!', 'Your Password: ' . $password );
		
		return $user;
	}
}

/**
 * Add user access
 */
function pojade_addUserAccess($userId, $accessCategoryId = null) {
	$aUserGroupsForObject = array ();
	$sObjectType = 'user';
	
	$oUserAccessManager = new UserAccessManager ();
	
	if (isset ( $userId )) {
		$oEditUserData = get_userdata ( $userId );
		$aUserGroupsForObject = $oUserAccessManager->getAccessHandler ()->getUserGroupsForObject ( $sObjectType, $userId );
	}
	
	return $aUserGroupsForObject;
}

?>