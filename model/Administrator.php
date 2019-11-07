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


    public function getAdmID() {
        return $this->admID;
    }

    public function setAdmID($admID) {
        $this->admID = $admID;
    }

}
