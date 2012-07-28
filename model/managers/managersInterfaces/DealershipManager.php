<?php

interface DealershipManager{

public function releaseOrder($orderId);
public function finalizeOrder($orderId);

}
?>
