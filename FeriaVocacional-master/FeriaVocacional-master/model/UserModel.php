<?php

class UserModel {

    private $db;

    function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    function insertUser($email, $name, $lastName) {
        $query = $this->db->prepare("call sp_insert_user('$email', '$name', '$lastName')");
        $query->execute();
        $result = $query->fetch();
        return $result;
    }
    
     function getEmail() {
        $query = $this->db->prepare("call sp_submit_email");
        $query->execute();
        return $query;
      
    }
    
          
    
    
    


}
