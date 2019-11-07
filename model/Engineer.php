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

    //put your code here

    public function getEngID() {
        return $this->engID;
    }

    public function setEngID($engID) {
        $this->engID = $engID;
    }

}
