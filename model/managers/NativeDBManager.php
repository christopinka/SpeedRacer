<?php

require_once 'managersInterfaces/DBManager.php';

class NativeDBManager implements DBManager {
	
	private static $instance = null;
	
	private static $dbName = "rentdb";
	private static $userName = "root";
	private static $password = "";
	
	private function NativeDBManager(){
		
	}
	
	public static function getInstance(){
		if (self::$instance == null){
			
			self::$instance = new NativeDBManager();
		}
		return self::$instance;
	}
	
	
	/**
	 * //TODO Implement a connection pull like C3PO.
	 */
	private static function getConnection(){
		$con = mysql_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}else{
			return $con;
		}
	}
	
	public static function sendSQL($sqlStatement) {
		$con =  self::getConnection();
		print 'selecting databse </br>';
		mysql_select_db("rentdb", $con);
		print 'sending sql statement </br>';
		print $sqlStatement. "</br>";
		if (!mysql_query($sqlStatement,$con))
 		{
 		 die('Error: ' . mysql_error());
 		}
		echo "1 record added";
		
		mysql_close($con);
		
		
		
		
	}
	
}

?>