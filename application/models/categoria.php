<?php

class Categoria extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function find($id){
        $this->db->where(array("id" => $id));
        $query = $this->db->get("categoria");
        return $query->row_array();
    }

    public function findAll(){
        $query = $this->db->get("categoria");
        return $query->result_array();
    }

    public function page($limit, $offset){
        $this->db->limit($limit, $offset);
        $query = $this->db->get("categoria");
        return $query->result_array();
    }

    public function count(){
        return count($this->findAll());
    }

    public function delete($id){
        $this->deleteProdCatByCatId($id);
        $this->db->where(array("id" => $id));
        $this->db->delete("categoria");
        //return $query->row_array();
    }

    public function exists(){
        $nome = $this->input->post("nome");
        $this->db->where("nome", $nome);
        $query = $this->db->get('categoria');
        return $query->row_array() <> NULL;
    }

    public function add(){
        $data = array(
            "nome" => $this->input->post("nome")
        );
        $this->db->insert("categoria", $data);
    }

    // Tabela produto_categoria

    public function findAllProdCatByCatId($categoria_id){
        $this->db->where('categoria_id', $categoria_id);
        $query = $this->db->get('produto_categoria');
        return $query->result_array();
    }

    public function findByProdIdCatId($categoria_id, $produto_id)
    {
        $this->db->where('categoria_id', $categoria_id);
        $this->db->where('produto_id', $produto_id);
        $query = $this->db->get('produto_categoria');
        return $query->row_array();
    }

    public function addProdCatByCatId($categoria_id){
        $data = array(
            "categoria_id" => $categoria_id,
            "produto_id" => $this->input->post("produto_id")
        );
        $this->db->insert("produto_categoria", $data);
    }

    private function deleteProdCatByCatId($categoria_id){
        $this->db->where(array("categoria_id" => $categoria_id));
        $this->db->delete('produto_categoria');
    }
    
}