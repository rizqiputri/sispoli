<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Polinefrologi_model extends CI_Model 
  {
    public $table = 'polinefrologi';
    public function getAll()
    {
        return $this->db->get($this->table);
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["polinefrologi" => $id])->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("polinefrologi}" => $id));
    }
     public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    }