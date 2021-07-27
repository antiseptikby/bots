<?php
	$auth_token = '4db9fcad9c67df1a-a1aad3b1bf967aa5-8f92c4ab9b4a67e7';
	$webhook = 'https://github.com/the-lans/bots/edit/master/Viberbot/index.php';
	
	$jsonData = 
	'{
		"auth_token": "'.$auth_token.'",
		"url": "'.$webhook.'",
		"event_types": ["subscribed", "unsubscribed", "delivered", "message", "seen"]
	}';
	
	$ch = curl_init('https://chatapi.viber.com/pa/set_webhook');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$response = curl_exec($ch);
	$err = curl_error($ch);
	curl_close($ch);
	if($err) {echo($err);}
	else {echo($response);}
?>
