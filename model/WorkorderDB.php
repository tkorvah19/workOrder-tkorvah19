<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WorkorderDB
 *
 * @author koivo
 */
class WorkorderDB {
    //put your code here
    
    
    public static function add_incident($customer_id, $product_code, $title, $description) {
        $db = Database::getDB();
        $date_opened = date('Y-m-d');  // get current date in yyyy-mm-dd format
        $query = 'INSERT INTO incidents
            (customerID, productCode, dateOpened, title, description)
        VALUES (
               :customer_id, :product_code, :date_opened,
               :title, :description)';
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->bindValue(':product_code', $product_code);
        $statement->bindValue(':date_opened', $date_opened);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function get_incidents() {
        $db = Database::getDB();
        $query = 'SELECT * 
              FROM incidents
              JOIN customers
              ON
              incidents.customerID=customers.customerID
              and incidents.techID is NULL';
        $statement = $db->prepare($query);
        $statement->execute();
        $incidents = $statement->fetchAll();
        $statement->closeCursor();
        return $incidents;
    }

    public static function getTechnicians() {
        $db = Database::getDB();

        $query = 'SELECT * FROM technicians
                  ORDER BY lastName';
        $statement = $db->prepare($query);
        $statement->execute();
        $technicians = $statement->fetchAll();
        //$rows = $statement->fetchAll();
        $statement->closeCursor();


        return $technicians;
    }

        public static function getTechnician($techID) {
        $db = Database::getDB();

        $query = 'SELECT * FROM technicians
                  WHERE technicians.techID = :techID;
                  ORDER BY lastName';
        $statement = $db->prepare($query);
        $statement->bindValue(":techID", $techID); 
        $statement->execute();
        $technicians = $statement->fetch();
        //$rows = $statement->fetchAll();
        $statement->closeCursor();

        return $technicians;
    }

    //get_Assign_Incident will help display the selected incident on the on the assign incident page
    function get_Asssign_Incident($incidentID) {
        $db = Database::getDB();
        $query = 'SELECT * 
              FROM incidents
              JOIN customers
              ON
              incidents.customerID=customers.customerID
              and incidents.techID is NULL
              WHERE incidents.incidentID = :incidentID';
        $statement = $db->prepare($query);
        $statement->bindValue(":incidentID", $incidentID);
        $statement->execute();
        $aIncident = $statement->fetch();
        $statement->closeCursor();
        return $aIncident;
    }

    //updateIncident function will update the database
    public static function updateIncident($incidentID, $techID) {
        $db = Database::getDB();
        $query = 'UPDATE incidents
                SET techID = :techID
                WHERE incidentID = :incidentID';

        $statement = $db->prepare($query);
        $statement->bindValue(':incidentID', $incidentID);
        $statement->bindValue(':techID', $techID);
        $statement->execute();
        $statement->closeCursor();
    }

}
