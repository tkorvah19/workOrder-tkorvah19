<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdministratorDB
 *
 * @author koivo
 */
class AdministratorDB {
    //put your code here
    
    public static function select_all() {
        $db = Database::getDB();

        $query = 'SELECT * FROM admin ORDER BY lastName';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();


        $admins = array();
        foreach ($results as $row) {
            $admin = new Administrator($row['firstName'], $row['lastName'], $row['userName'], $row['password'], $row['role'], $row['phone'], $row['email'], $row['admID']);
            $admins[] = $admin;
        }
        return $admins;
    }

    public static function getAdministrator($userName) {
        $db = Database::getDB();

        $query = 'SELECT * FROM admin WHERE userName = :userName';
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $r = $statement->fetch();
        $statement->closeCursor();

        $admin = new Administrator($r['firstName'], $r['lastName'], $r['userName'], $r['password'], $r['role'], $r['phone'], $r['email'], $r['admID']);
        return $admin;
    }

    public static function checkUsername($userName) {
        $db = Database::getDB();

        $query = 'SELECT * FROM admin WHERE username=:userName';
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $userOne = $statement->fetch();
        $statement->closeCursor();

        $user_name = $userOne['userName'];

        return $user_name;
    }

    public static function checkEmail($email) {
        $db = Database::getDB();
        $query = 'SELECT * FROM admin WHERE email=:email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $eMail = $statement->fetch();
        $statement->closeCursor();

        $user_email = $eMail['email'];

        return $user_email;
    }

    public static function addAdmin($admin) {
        $db = Database::getDB();

        $firstName = $admin->getFirstName();
        $lastName = $admin->getLastName();
        $userName = $admin->getUserName();
        $password = $admin->getPassword();
        $role = $admin->getRole();
        $phone = $admin->getPhone();
        $email = $admin->getEmail();

        $query = 'INSERT INTO admin
                 (firstName, lastName, userName, password, role, phone, email)
              VALUES
                 (:firstName, :lastName, :userName, :password, :role, :phone, :email)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':userName', $userName);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':role', $role);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function checkPassword($userName) {
        $db = Database::getDB();
        $query = 'SELECT * FROM admin WHERE userName=:userName';
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $passwordOne = $statement->fetch();
        $statement->closeCursor();

        $user_password = $passwordOne['password'];

        return $user_password;
    }
    

    
    public static function updatePassword($userName, $password)
    {
        $db = Database::getDB();
        
        $query = 'UPDATE admin
                SET password = :password
                WHERE userName = :userName';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function updateName($userName, $firstName, $lastName) {
        $db = Database::getDB();
        
        $query = 'UPDATE admin
                SET firstName = :firstName, lastName = :lastName
                WHERE userName = :userName';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function updateEmail($userName, $email) {
        $db = Database::getDB();
        
        $query = 'UPDATE admin
                SET email = :email
                WHERE userName = :userName';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function updateRole($userName, $role) {
        $db = Database::getDB();
        
        $query = 'UPDATE admin
                SET role = :role
                WHERE userName = :userName';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':role', $role);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function updatePhone($userName, $phone) {
        $db = Database::getDB();
        
        $query = 'UPDATE admin
                SET phone = :phone
                WHERE userName = :userName';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $statement->closeCursor();
    }
}
