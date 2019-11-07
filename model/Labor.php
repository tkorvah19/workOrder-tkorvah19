<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Labor
 *
 * @author koivo
 */
class Labor {
    //put your code here
    
    private $laborID, $workorderID, $description, $numHours, $rate, $amount;
    
    public function __construct($laborID, $workorderID, $description, $numHours, $rate, $amount) {
        $this->laborIDID = $laborID;
        $this->workorderID = $workorderID;
        $this->description= $description;
        $this->numHours = $numHours;
        $this->rate = $rate;
        $this->amount = $amount;
        
    }
    
    
    public function getLaborID() {
        return $this->laborID;
    }

    public function getWorkorderID() {
        return $this->workorderID;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getNumHours() {
        return $this->numHours;
    }

    public function getRate() {
        return $this->rate;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setLaborID($laborID) {
        $this->laborID = $laborID;
    }

    public function setWorkorderID($workorderID) {
        $this->workorderID = $workorderID;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setNumHours($numHours) {
        $this->numHours = $numHours;
    }

    public function setRate($rate) {
        $this->rate = $rate;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }


}
