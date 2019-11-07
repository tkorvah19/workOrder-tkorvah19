<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Materials
 *
 * @author koivo
 */
class Materials {
    //put your code here
    
    private $matID, $workorderID, $description, $unitPrice, $quantity, $amount;
    
    public function __construct($matID, $workorderID, $description, $unitPrice, $quantity, $amount) {
        $this->matID = $matID;
        $this->workorderID = $workorderID;
        $this->description= $description;
        $this->unitPrice = $unitPrice;
        $this->quantity = $quantity;
        $this->amount = $amount;
        
    }
    public function getMatID() {
        return $this->matID;
    }

    public function getWorkorderID() {
        return $this->workorderID;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setMatID($matID) {
        $this->matID = $matID;
    }

    public function setWorkorderID($workorderID) {
        $this->workorderID = $workorderID;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }


    
    
}
