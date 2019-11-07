<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeeDB
 *
 * @author koivo
 */
class EmployeeDB {
    //put your code here
    
    
    public static function select_all() {
        $db = Database::getDB();

        $query = 'SELECT * FROM users ORDER BY lastName';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();


        $users = array();
        foreach ($results as $row) {
            $user = new User($row['firstName'], $row['lastName'], $row['userName'], $row['email'], $row['userID']);
            $users[] = $user;
        }
        return $users;
    }

    public static function getUser($userName) {
        $db = Database::getDB();

        $query = 'SELECT * FROM users WHERE userName = :userName';
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $r = $statement->fetch();
        $statement->closeCursor();

        $user = new User($r['firstName'], $r['lastName'], $r['userName'], $r['email'], $r['password'], $r['userID']);
        return $user;
    }

    public static function checkUsername($userName) {
        $db = Database::getDB();

        $query = 'SELECT * FROM users WHERE username=:userName';
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
        $query = 'SELECT * FROM users WHERE email=:email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $eMail = $statement->fetch();
        $statement->closeCursor();

        $user_email = $eMail['email'];

        return $user_email;
    }

    public static function addUser($user) {
        $db = Database::getDB();

        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $userName = $user->getUserName();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $query = 'INSERT INTO users
                 (firstName, lastName, userName, email,password)
              VALUES
                 (:firstName, :lastName, :userName, :email,:password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':userName', $userName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function checkPassword($userName) {
        $db = Database::getDB();
        $query = 'SELECT * FROM users WHERE userName=:userName';
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
        
        $query = 'UPDATE users
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
        
        $query = 'UPDATE users
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
        
        $query = 'UPDATE users
                SET email = :email
                WHERE userName = :userName';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $statement->closeCursor();
    }
}
