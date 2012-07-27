<?php

require_once 'managersInterfaces/DBManager.php';

class NativeDBManager implements DBManager {
	
	private static final $dbName = "rentdb";
	private static final $userName = "root";
	private static final $password = "";
	
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
		$con =  getConnection();
		@mysql_select_db($dbName) or die( "Unable to select database");
	}
	
}

?>