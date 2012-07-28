<?php

require_once '../model/User.php';
require_once '../model/managers/managersInterfaces/UserManager.php';
require_once '../model/managers/UserManagerImpl.php';


print 'start</br>';
print $_GET['formSubmit'];
 if(isset($_GET['formSubmit']))
{
	print 'entered formSubmit </br>';
	print '$_GET[formSubmit]: '.$_GET['formSubmit'] .'  </br>';
	if($_GET['formSubmit'] == "register-form"){
		print 'starting to fill user up </br>';
		$user = new User();
		print 'created user </br>';
		$password;
		
		if(isset($_GET['username']))
		{
			echo 'username: '. $_GET['username'] . "</br>";
			$user->setUserName($_GET['username']);
		}else{
			
			/* Add error string ti send back to the user  */
		}
		
		if(isset($_GET['password']))
		{
			echo 'password: '. $_GET['password'] . "</br>";
			$password = $_GET['password'];
		}else{
				
			/* Add error string ti send back to the user  */
		}
		
		if(isset($_GET['firstName']))
		{
			echo 'firstName: '.$_GET['firstName'] . "</br>";
			$user->setFirstName($_GET['firstName']);
		}else{
				
			/* Add error string ti send back to the user  */
		}
		
		if(isset($_GET['lastName']))
		{
			echo 'lastName: '.$_GET['lastName'] . "</br>";
			$user->setLastName($_GET['lastName']);
		}else{
				
			/* Add error string ti send back to the user  */
		}
		
		if(isset($_GET['email']))
		{
			echo 'email: '.$_GET['email'] . "</br>";
			$user->setEmail($_GET['email']);
		}else{
				
			/* Add error string to send back to the user  */
		}
		if(isset($_GET['email']))
		{
			echo 'email: '.$_GET['email'] . "</br>";
			$user->setEmail($_GET['email']);
		}else{
		
			/* Add error string to send back to the user  */
		}
		
		
		/* Add the rest of the user variables */
		$userManager = new UserManagerImpl();
		$userManager->registerNewUser($user, $password);
		
		
	}
	
	
}else{
	
	/* redirect back to home screen  */
}




?>