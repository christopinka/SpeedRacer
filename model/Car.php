<?php

class Car {
	
	private $carId;
	private $manufacturer;
	private $brand;
	private $year;
	private $mileage;
	private $rate_per_day;
	private $status;
	private $current_dealership_id;
	
	/**
	 * @return the $carId
	 */
	public function getCarId() {
		return $this->carId;
	}

	/**
	 * @return the $manufacturer
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}

	/**
	 * @return the $brand
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * @return the $year
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * @return the $mileage
	 */
	public function getMileage() {
		return $this->mileage;
	}

	/**
	 * @return the $rate_per_day
	 */
	public function getRate_per_day() {
		return $this->rate_per_day;
	}

	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return the $current_dealership_id
	 */
	public function getCurrent_dealership_id() {
		return $this->current_dealership_id;
	}

	/**
	 * @param field_type $carId
	 */
	public function setCarId($carId) {
		$this->carId = $carId;
	}

	/**
	 * @param field_type $manufacturer
	 */
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	/**
	 * @param field_type $brand
	 */
	public function setBrand($brand) {
		$this->brand = $brand;
	}

	/**
	 * @param field_type $year
	 */
	public function setYear($year) {
		$this->year = $year;
	}

	/**
	 * @param field_type $mileage
	 */
	public function setMileage($mileage) {
		$this->mileage = $mileage;
	}

	/**
	 * @param field_type $rate_per_day
	 */
	public function setRate_per_day($rate_per_day) {
		$this->rate_per_day = $rate_per_day;
	}

	/**
	 * @param field_type $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @param field_type $current_dealership_id
	 */
	public function setCurrent_dealership_id($current_dealership_id) {
		$this->current_dealership_id = $current_dealership_id;
	}

	
	
	
	
}

?>