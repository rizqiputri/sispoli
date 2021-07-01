<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Polikulit_model extends CI_Model 
  {
    public $table = 'polikulit';
    public function getAll()
    {
        return $this->db->get($this->table);
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["polikulit" => $id])->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("polikuli}" => $id));
    }
     public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    }