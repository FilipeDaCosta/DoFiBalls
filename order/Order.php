<?php

class Order
{
    private int $orderId;
    private array $boxes;

    public function __construct($orderId)
    {
        $this->orderId = $orderId;
        $this->boxes = array();
    }
}