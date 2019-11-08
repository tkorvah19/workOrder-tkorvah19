<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of employee
 *
 * @author koivo
 */
class Employee extends User{
    //put your code here
    private $empID;
    
     public function __construct($firstName, $lastName, $userName, $password, $phone, $role, $email, $empID = -1) {
		
        parent::__construct($firstName, $lastName, $userName, $password, $phone, $role, $email);
        $this -> admID = $empID;
	}
    
    
    
    
     public function getEmpID() {
        return $this->empID;
    }

    public function setEmpID($empID) {
        $this->empID = $empID;
    }
    
    
}
