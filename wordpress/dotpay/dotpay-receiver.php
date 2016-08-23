<?php
require_once ('../wp-load.php');
require_once ('../wp-content/plugins/user-access-manager/user-access-manager.php');

// define temp user name
define ( 'USER_EMAIL_ADDRESS', 'user@localhost.pl' );

// define temp category key
define ( 'ACCESS_CATEGORY_KEY', 'stapajac_po_wygaszonych_weglach' );
// define ( 'ACCESS_CATEGORY_KEY', 'lato_w_bergamo' );
//define ( 'ACCESS_CATEGORY_KEY', 'NONEXISTING' );

$userData = pojade_addUser ( USER_EMAIL_ADDRESS );

$result = pojade_addUserAccess ( $userData->ID, ACCESS_CATEGORY_KEY );

if ($result) {
	echo "ok " . ACCESS_CATEGORY_KEY;
}
else echo "NOK";


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

?>