<?php

class Crud_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->get('table', $data);
    }

    public function gatAll()
    {
        return $this->db->get("table")->result_array();
    }

    public function get($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('table')->row_array();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('table', $id);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('table', $id);
    }
}

?>