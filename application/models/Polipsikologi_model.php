<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Polipsikologi_model extends CI_Model 
  {
    public $table = 'polipsikologi';
    public function getAll()
    {
        return $this->db->get($this->table);
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["polipsikologi" => $id])->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("polipsikologi}" => $id));
    }
     public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    }
