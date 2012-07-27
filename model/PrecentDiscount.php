<?php

require_once('offers.php');

class PrecentDiscount extends offer{
	
	private $discountAmount;
	/**
	 * @return the $discountAmount
	 */
	public function getDiscountAmount() {
		return $this->discountAmount;
	}

	/**
	 * @param field_type $discountAmount
	 */
	public function setDiscountAmount($discountAmount) {
		$this->discountAmount = $discountAmount;
	}

}

?>