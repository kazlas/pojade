<?php
require_once (__DIR__.'/../wp-load.php');
require_once (__DIR__.'/../wp-content/plugins/user-access-manager/user-access-manager.php');
require_once (__DIR__.'/dotpay-get-signature.php');
require_once (__DIR__.'/emails/email-new-user.php');
require_once (__DIR__.'/emails/email-add-access.php');

// Define allowed server IP to use this script: localhost and Dotpay
$ALLOWED_IP = array (
		//'::1', //localhost
		'195.150.9.37' //Dotpay
);

$USER_EMAIL_ADDRESS = $_POST ['email'];
$ACCESS_CATEGORY_KEY = $_POST ['control'];

checkOriginatorIP ( $ALLOWED_IP );
checkSignature($_POST, USER_PIN);

$userData = pojade_addUser ( $USER_EMAIL_ADDRESS );
$result = pojade_addUserAccess ( $userData->ID, $ACCESS_CATEGORY_KEY, $USER_EMAIL_ADDRESS );

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
		email_new_user($email_address, $password);
	}
	
	return $user;
}

function wp_create_user_notoolbar ($username, $password, $email = '') {
	$user_login = wp_slash( $username );
	$user_email = wp_slash( $email    );
	$user_pass = $password;
	$show_admin_bar_front = 'false';

	$userdata = compact('user_login', 'user_email', 'user_pass', 'show_admin_bar_front');
	
	return wp_insert_user($userdata);
}


/**
 * Add user access to UAM category. Notify user by e-mail.
 *
 * @param int $userId        	
 * @param string $accessCategoryKey   
 * @param string $userEmail       	
 * @return boolean if access added
 */
function pojade_addUserAccess($userId, $accessCategoryKey, $userEmail) {
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

			email_add_access ($userEmail, $oUamUserGroup->getGroupDesc());
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

function checkSignature($post, $pin) {
	if ($post['signature'] != getSignature($pin, $post)) {
		exit ( 'You are not authorized to do this operation!' );
	}
}


?>