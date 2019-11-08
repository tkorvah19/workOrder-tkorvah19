<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author koivo
 */
class User {
    //put your code here
    private $firstName, $lastName, $userName, $password, $phone, $role, $email;
    
    public function __construct($firstName, $lastName, $userName, $password, $phone, $role, $email) {
        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->password = $password;
        $this->phone = $phone;
        $this->role = $role;
        $this->email = $email;
    }
    
    
   
    
   
    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getEmail() {
        return $this->email;
    }
    
     public function getPassword(){
        return $this->password;
    }    
    
    public function getRole(){
        return $this->role;
    }
    
     public function getPhone(){
        return $this->password;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function setRole($role) {
        $this->role = $role;
    }
    
    public function setPhone($phone) {
        $this->phone = $phone;
    }


}
