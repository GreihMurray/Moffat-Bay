<?php
	function userLogin(){
		$curl = curl_init();
		
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$payload = json_encode(array("email"=>$email, "password"=>$password));
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, "http://localhost:8081/moffat/bay/login");
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
		
		$result = curl_exec($curl);
		curl_close($curl);
		
		if($result != NULL){
			header("Location: ../mainPages/landing.php");
		} else{
			header("Location: ../mainPages/account.php");
		}
	}
	
	if(isset($_POST["email"])){
		userLogin();
	}
?>