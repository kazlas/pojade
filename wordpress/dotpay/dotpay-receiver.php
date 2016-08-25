<?php
require_once ('../wp-load.php');
require_once ('../wp-content/plugins/user-access-manager/user-access-manager.php');

// Define allowed server IP to use this script: localhost and Dotpay
$ALLOWED_IP = array (
		//'::1', //localhost
		'195.150.9.37' //Dotpay
);

$USER_EMAIL_ADDRESS = $_POST ['email'];
$ACCESS_CATEGORY_KEY = $_POST ['control'];

checkOriginatorIP ( $ALLOWED_IP );
$userData = pojade_addUser ( $USER_EMAIL_ADDRESS );
$result = pojade_addUserAccess ( $userData->ID, $ACCESS_CATEGORY_KEY );

if ($result) {
	echo "OK";
} else
	echo "NOK";

/**
 * Add user or return existing one
 * Based on: https://tommcfarlin.com/create-a-user-in-wordpress/
 *
 * @param string $email_address        	
 * @return WP_User|false
 */
function pojade_addUser($email_address) {
	$user = get_user_by ( 'login', $email_address );
	
	if (! $user) {
		// Generate the password and create the user
		$password = wp_generate_password ( 12, false );
		$user_id = wp_create_user_notoolbar ( $email_address, $password, $email_address );
		$user = new WP_User ( $user_id );
		
		// Set the role empty
		$user->set_role ( '' );
		
		// Email the user
		wp_mail ( $email_address, 'Welcome!', 'Your Password: ' . $password );
	}
	
	return $user;
}

function wp_create_user_notoolbar ($username, $password, $email = '') {
	$user_login = wp_slash( $username );
	$user_email = wp_slash( $email    );
	$user_pass = $password;
	$show_admin_bar_front = 'false';

	$userdata = compact('user_login', 'user_email', 'user_pass', 'show_admin_bar_front');
	print_r($userdata);
	
	return wp_insert_user($userdata);
}


/**
 * Add user access to UAM category
 *
 * @param int $userId        	
 * @param string $accessCategoryKey        	
 * @return boolean if access added
 */
function pojade_addUserAccess($userId, $accessCategoryKey) {
	$oUserAccessManager = new UserAccessManager ();
	
	$oUamAccessHandler = $oUserAccessManager->getAccessHandler ();
	$aUamUserGroups = $oUamAccessHandler->getUserGroups ();
	
	$sObjectType = 'user';
	$iObjectId = $userId;
	
	foreach ( $aUamUserGroups as $sGroupId => $oUamUserGroup ) {
		
		if ($accessCategoryKey === $oUamUserGroup->getGroupName ()) {
			$oUamUserGroup->addObject ( $sObjectType, $iObjectId );
			$blRemoveOldAssignments = false;
			$oUamUserGroup->save ( $blRemoveOldAssignments );
			
			return true;
		}
	}
	
	return false;
}

/**
 * Allow requests only from predefined server IP's
 */
function checkOriginatorIP($allowed_server_ip) {
	if (! in_array ( $_SERVER ['REMOTE_ADDR'], $allowed_server_ip )) {
		exit ( 'You are not authorized to do this operation!' );
	}
}

?>