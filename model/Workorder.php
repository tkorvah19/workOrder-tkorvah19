<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Workorder
 *
 * @author koivo
 */
class Workorder {
    //put your code here
    
    private $workorderID, $empID, $engID, $dateOpened, $dateClosed, $description, $category, $status, $location, $total;
    
    public function __construct($workorderID, $empID, $engID, $dateOpened, $dateClosed, $description,  $category, $status, $location, $total) {
        $this->workorderID = $workorderID;
        $this->empID = $empID;
        $this->engID = $engID;
        $this->dateOpened = $dateOpened;
        $this->dateClosed = $dateClosed;
        $this->description = $description;
        $this->category = $category;
        $this->status = $status;
        $this->location = $location;
        $this->total = $total;
    }
    
    public function getWorkorderID() {
        return $this->workorderID;
    }

    public function getEmpID() {
        return $this->empID;
    }

    public function getEngID() {
        return $this->engID;
    }

    public function getDateOpened() {
        return $this->dateOpened;
    }

    public function getDateClosed() {
        return $this->dateClosed;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setWorkorderID($workorderID) {
        $this->workorderID = $workorderID;
    }

    public function setEmpID($empID) {
        $this->empID = $empID;
    }

    public function setEngID($engID) {
        $this->engID = $engID;
    }

    public function setDateOpened($dateOpened) {
        $this->dateOpened = $dateOpened;
    }

    public function setDateClosed($dateClosed) {
        $this->dateClosed = $dateClosed;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setTotal($total) {
        $this->total = $total;
    }
    
    
    public function Calculate_Total($mat_total, $lab_total) {
        $final;
     
        return $final;
    }


}
