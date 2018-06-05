<?php
  class Transaction {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function addTransaction($data){
      // Prepare Query -> a secure way when dealing with database
      $this->db->query('INSERT INTO transactions (id, customer_id, product, amount, currency, status) VALUES(:id, :customer_id, :product, :amount, :currency, :status)');

      // We call bind method so we can bind data
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':customer_id', $data['customer_id']);
      $this->db->bind(':product', $data['product']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':currency', $data['currency']);
      $this->db->bind(':status', $data['status']);

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
