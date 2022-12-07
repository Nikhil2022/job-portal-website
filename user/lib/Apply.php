<?php

class Apply{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getJob($id){
        $this->db->query("SELECT * FROM apply WHERE id = :id");
        
        $this->db->bind(':id', $id);
        
        // assign row
        $row = $this->db->single();
        return $row;
   }
    
       //Create Job
       public function create($data){
        $this->db->query("INSERT INTO apply (first_name,last_name,descr,
        email,address,contact_num)
        VALUES (:first_name,:last_name,:descr,
        :email,:address,:contact_num)");
        //Bind Data
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':descr', $data['descr']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact_num', $data['contact_num']);
        //Execute
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }
       }
       
}