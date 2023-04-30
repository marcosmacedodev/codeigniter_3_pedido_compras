<?php

class Produto extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function find($id){
        $this->db->where(array("id" => $id));
        $query = $this->db->get("produto");
        return $query->row_array();
    }

    public function findAll(){
        $query = $this->db->get("produto");
        return $query->result_array();
    }

    public function page($limit, $offset){
        $this->db->limit($limit, $offset);
        $query = $this->db->get("produto");
        return $query->result_array();
    }

    public function count(){
        return count($this->findAll());
     }
    
}