<?php

class User_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    //insert data
    public function insert($data){
       return $this->db->insert('User', $data);
    }

    //get all users data
    public function getAll(){
       return $this->db->get('user')->result_array();
    }

    //get single user data using id
    public function get($id){
        $this->db->where('id', $id);
        return $this->db->get('user')->row_array();
    }

    //delete data using id
    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete('user', $id);        
    }

    public function update($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }
}

?>