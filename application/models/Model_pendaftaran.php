<?php
  class model_pendaftaran extends CI_Model {

    public $table = 'pendaftaran';

    public function get()
    {
      // Jalankan query
      $query = $this->db->get($this->table);

      // Return hasil query
      return $query;
    }

    public function count($data=null)
    {
      $date = new DateTime("now");

      $curr_date = $date->format('Y-m-d ');
      // Jalankan query
      $this->db->where('poli',$data);
      $this->db->where('DATE(waktu)',$curr_date);
      $query = $this->db->get('daftarpoli');

      // Return hasil query
      return $query;
    }

    public function get_offset($limit, $offset)
    {
      // Jalankan query
      $query = $this->db
        ->limit($limit, $offset)
        ->get($this->table);

      // Return hasil query
      return $query;
    }

    public function get_where($where)
    {
      // Jalankan query
      $query = $this->db
        ->where($where)
        ->get($this->table);

      // Return hasil query
      return $query;
    }

    public function insert($data)
    {
      // Jalankan query
      $query = $this->db->insert($this->table, $data);

      // Return hasil query
      return $query;
    }

    public function insertpoli($data)
    {
      // Jalankan query
      $query = $this->db->insert('daftarpoli', $data);

      // Return hasil query
      return $query;
    }

    public function update($id, $data)
    {
      // Jalankan query
      $query = $this->db
        ->where('id', $id)
        ->update($this->table, $data);

      // Return hasil query
      return $query;
    }

    public function delete($id)
    {
      // Jalankan query
      $query = $this->db
        ->where('id', $id)
        ->delete($this->table);

      // Return hasil query
      return $query;
    }

  }
