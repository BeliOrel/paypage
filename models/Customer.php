<?php
  class Customer {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function addCustomer($data){
      // Prepare Query -> a secure way when dealing with database
      $this->db->query('INSERT INTO customers (id, first_name, last_name, email) VALUES(:id, :first_name, :last_name, :email)');

      // We call bind method so we can bind data
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);

      // execute
      // if this is executed then return true else return false
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

  }


?>
