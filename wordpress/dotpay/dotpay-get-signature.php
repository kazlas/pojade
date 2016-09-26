<?php 

function getSignature($pin, $post) {

	$sign= $pin. 
	$post['id']. 
	$post['operation_number']. 
	$post['operation_type']. 
	$post['operation_status']. 
	$post['operation_amount']. 
	$post['operation_currency']. 
	$post['operation_withdrawal_amount']. 
	$post['operation_commission_amount']. 
	$post['operation_original_amount']. 
	$post['operation_original_currency']. 
	$post['operation_datetime']. 
	$post['operation_related_number']. 
	$post['control']. 
	$post['description']. 
	$post['email']. 
	$post['p_info']. 
	$post['p_email']. 
	$post['credit_card_issuer_identification_number']. 
	$post['credit_card_masked_number']. 
	$post['credit_card_brand_codename']. 
	$post['credit_card_brand_code']. 
	$post['credit_card_id']. 
	$post['channel']. 
	$post['channel_country']. 
	$post['geoip_country']; 
	
	$signature=hash('sha256', $sign); 
	
	return $signature;
}

?>