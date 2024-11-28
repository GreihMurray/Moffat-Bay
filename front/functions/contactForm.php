<?php
	function contactUs(){
		$curl = curl_init();
		
		$email = $_POST["email"];
		$name = $_POST["name"];
		$contact = $_POST["contact"];
		
		$payload = json_encode(array("email"=>$email, "name"=>$name, "reason"=>$contact));
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, "http://localhost:8081/moffat/bay/contact");
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
		
		$result = curl_exec($curl);
		curl_close($curl);
		
		if($result == NULL){
			header("Location: ../mainPages/landing.php");
		} else{
			header("Location: ../mainPages/about.php");
		}
	}
	
	if(isset($_POST["email"])){
		contactUs();
	}
?>