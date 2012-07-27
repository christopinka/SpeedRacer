<?php

class Order {
	
	private $id;
	private $userId;
	private $carId;
	private $startDate;
	private $endDate;
	private $offerId;
	private $orderStatus;
	private $startKm;
	private $endKm;
	private $startDealership;
	private $endDealership;
	
	public function getId() {
		return $this->id;
	}
	public function getUserId() {
		return $this->userId;
	}
	public function getCarId() {
		return $this->carId;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function getEndDate() {
		return $this->endDate;
	}
	public function getOfferId() {
		return $this->offerId;
	}
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	public function getStartKm() {
		return $this->startKm;
	}
	public function getEndKm() {
		return $this->endKm;
	}
	public function getStartDealership() {
		return $this->startDealership;
	}
	public function getEndDealership() {
		return $this->endDealership;
	}
	public function setId($x) {
		$this->id = $x;
	}
	public function setUserId($x) {
		$this->userId = $x;
	}
	public function setCarId($x) {
		$this->carId = $x;
	}
	public function setStartDate($x) {
		$this->startDate = $x;
	}
	public function setEndDate($x) {
		$this->endDate = $x;
	}
	public function setOfferId($x) {
		$this->offerId = $x;
	}
	public function setOrderStatus($x) {
		$this->orderStatus = $x;
	}
	public function setStartKm($x) {
		$this->startKm = $x;
	}
	public function setEndKm($x) {
		$this->endKm = $x;
	}
	public function setStartDealership($x) {
		$this->startDealership = $x;
	}
	public function setEndDealership($x) {
		$this->endDealership = $x;
	}
	
	
	
	
}

?>