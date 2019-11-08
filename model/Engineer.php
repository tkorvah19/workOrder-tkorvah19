<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of engineer
 *
 * @author koivo
 */
class Engineer extends User {

    private $engID;
    
    
    
     public function __construct($firstName, $lastName, $userName, $password, $phone, $role, $email, $engID = -1) {
		
        parent::__construct($firstName, $lastName, $userName, $password, $phone, $role, $email);
        $this -> engID = $engID;
	}


    //put your code here

    public function getEngID() {
        return $this->engID;
    }

    public function setEngID($engID) {
        $this->engID = $engID;
    }

}
