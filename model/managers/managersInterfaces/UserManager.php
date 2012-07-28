<?php

interface UserManager{
	public function registerNewUser($newUser);
	public function getUserById($userId);
	public function getUserByName($firstName, $familyName);	
}

?>
