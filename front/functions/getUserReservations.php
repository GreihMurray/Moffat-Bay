<?php
	function userReservations($email){
		$curl = curl_init();
		
// 		$email = "fake@fake.fake";//$_SESSION["userEmail"];
		
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, "http://localhost:8081/moffat/bay/reservations?email={$email}");
		
		$result = curl_exec($curl);
		curl_close($curl);
		
		if($result != NULL){
			$_SESSION["reservations"] = $result;
			//header("Location: ../mainPages/landing.php");
		} else{
			header("Location: ../mainPages/account.php");
		}
	}
?>