<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of administrator
 * Date: 11/04/2019
 * @author koivo
 */
class Administrator extends User {

    //put your code here
    private  $admID;
    
    public function __construct($firstName, $lastName, $userName, $password, $phone, $role, $email, $admID = -1) {
		
        parent::__construct($firstName, $lastName, $userName, $password, $phone, $role, $email);
        $this -> admID = $admID;
	}

    public function getAdmID() {
        return $this->admID;
    }

    public function setAdmID($admID) {
        $this->admID = $admID;
    }

}
