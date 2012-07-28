<?php

interface OrderManager{
	public function addNewOrder($order);
	public function closeOrder($order);
	public function getAllOpenOrder();
	public function getAllOrders();
	public function getAllClosedOrders();
}

?>
