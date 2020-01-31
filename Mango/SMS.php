<?php
	function Send_SMS($mobile_no,$otp,$message){
			$apiKey = urlencode("xj+lQ87dR+0-y5gp7oFN26UH7Lkp9Ho2FjNlAS97mt");
        						// Mobile number of user on which sms will be sent
			$numbers = array($mobile_no);
			$sender = urlencode("TXTLCL");
			//generating random value for otp
			
			//stor otp in session to verify onto other page
			$_SESSION["otp"]=$otp;
			//$msg=$message.$otp;
			//$message = rawurlencode($msg);
			 
			//$numbers = implode(",", $numbers);
			 
			// Prepare data for POST request
			//$data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
			// Send the POST request with cURL
			//$ch = curl_init(‘https://api.textlocal.in/send/’);
			//curl_setopt($ch, CURLOPT_POST, true);
			//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//$response = curl_exec($ch);
			//curl_close($ch);
			// Process your response
	}
?>