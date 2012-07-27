<?php

class User {
	
	private $userId;
	private $firstName;
	private $lastName;
	private $email;
	private $billingAddress;
	private $mailingAddress;
	private $userType;
	private $ssid;
	private $licenseNumber;
	private $country;
	
	public function getUserId() {
		return $this->userId;
	}
	public function getFirstName() {
		return $this->firstName;
	}
	public function getLastName() {
		return $this->lastName;
	}
	public function getEmail() {
		return $this->email;
	}
	public function getBillingAddress() {
		return $this->billingAddress;
	}
	public function getMailingAddress() {
		return $this->mailingAddress;
	}
	public function getUserType() {
		return $this->userType;
	}
	public function getSsid() {
		return $this->ssid;
	}
	public function getLicenseNumber() {
		return $this->licenseNumber;
	}
	public function getCountry() {
		return $this->country;
	}
	public function setUserId($x) {
		$this->userId = $x;
	}
	public function setFirstName($x) {
		$this->firstName = $x;
	}
	public function setLastName($x) {
		$this->lastName = $x;
	}
	public function setEmail($x) {
		$this->email = $x;
	}
	public function setBillingAddress($x) {
		$this->billingAddress = $x;
	}
	public function setMailingAddress($x) {
		$this->mailingAddress = $x;
	}
	public function setUserType($x) {
		$this->userType = $x;
	}
	public function setSsid($x) {
		$this->ssid = $x;
	}
	public function setLicenseNumber($x) {
		$this->licenseNumber = $x;
	}
	public function setCountry($x) {
		$this->country = $x;
	}
	
	
}

?>