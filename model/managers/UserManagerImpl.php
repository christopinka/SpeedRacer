<?php

require_once 'NativeDBManager.php';

class UserManagerImpl {
	
	private $dbManager;
	
	public function UserManagerImpl(){
		$this->dbManager = NativeDBManager::getInstance();
		
	}
	
	public function registerNewUser($newUser, $hashedPassword){
		
		/* 
		 * TODO Validation checks
		 * TODO SQL injection tests
		 * TODO logging
		 *  
		 *  */
		
		echo 'register new user </br> ';
		echo 'values: ' .$newUser->getUserName().",".$hashedPassword.",".$newUser->getFirstName().",".$newUser->getLastName().",".$newUser->getEmail().",".$newUser->getBillingAddress().",".$newUser->getMailingAddress().", 1, 1234, 1234, \"israel\"";
		
		
		$sqlQuery = "INSERT INTO user (user_name, password, first_name, last_name, email, billing_address, mailing_address, user_type, ssid, license_number, country)
									 VALUES (
									 	'".$newUser->getUserName()."', 
									 	'".$hashedPassword."', 
										'".$newUser->getFirstName()."', 
										'".$newUser->getLastName()."', 
										'".$newUser->getEmail()."','somebillingaddress', 'somemailingaddress', 1, '1234', '1234', 'israel')";
		
		
		$this->dbManager->sendSQL($sqlQuery);
		/*  
		 * TODO Exception handling
		 * 
		 * */
		
	}
}

?>