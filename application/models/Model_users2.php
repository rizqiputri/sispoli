<?php

class Model_users extends CI_Model
{
	public $table = 'users';

	public function cekAkun($username, $password)
    {
      // Get data user yang mempunyai username == $username dan active == 1
      $this->db->where('username', $username);
      $this->db->where('active', '1');

      // Jalankan query
      $query = $this->db->get($this->table)->row();

      // Jika query gagal atau tidak menemukan username yang sesuai
      // maka return false
      if (!$query) return false;

      // Ambil data password dari database
      $hash = $query->password;

      // Jika $hash tidak sama dengan $password maka return false
      if (!password_verify($password, $hash)) return false;

      $last_login = $this->update($query->id, array('last_login' => date('Y-m-d H:i:s')));

      // Jika username dan password benar maka return data user
      return $query;
    }

    public function activate($token, $data)
    {
      // Jalankan query
      $query = $this->db
        ->where('verifikasi', $token)
        ->update($this->table, $data);

      // Return hasil query
      return $query;
    }


	 public function get(){

    	$query = $this->db->get($this->table);
    	return $query;
    }

    public function getKelastahfidz(){
      $this->db->like('prodi','tahfidz');
      $query = $this->db->get($this->table);
      return $query;
    }
    public function getKelassains(){
      $this->db->like('prodi','sains');
      $query = $this->db->get($this->table);
      return $query;
    }
    public function getKelasreguler(){
      $this->db->like('prodi','reguler');
      $query = $this->db->get($this->table);
      return $query;
    }
    public function getKelaskitabsalaf(){
      $this->db->like('prodi','kitabsalaf');
      $query = $this->db->get($this->table);
      return $query;
    }
		public function getKelaminLaki(){
			$this->db->like('jenis_kelamin', 'L');
			$query = $this->db->get($this->table);
			return $query;
		}
		public function getKelaminPerempuan(){
			$this->db->like('jenis_kelamin', 'P');
			$query = $this->db->get($this->table);
			return $query;
		}
    public function getAdmin(){
      $this->db->where('level','administrator');
      $query = $this->db->get($this->table);
      return $query;
    }

     public function getUsers(){
     $this->db->where('level','users');
      $query = $this->db->get($this->table);
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

	public function insert($data){
		$query = $this->db->insert($this->table, $data);
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

    public function cekPasswordLama($id, $password)
    {
      // Get data user yang mempunyai id == $id dan active == 1
      $this->db->where('id', $id);
      $this->db->where('active', '1');

      // Jalankan query
      $query = $this->db->get($this->table)->row();

      // Jika query gagal atau tidak menemukan data yang sesuai
      // maka return false
      if (!$query) return false;

      // Ambil data password dari database
      $hash = $query->password;

      // Jika $hash tidak sama dengan $password maka return false
      if (!password_verify($password, $hash)) return false;

      // Jika username dan password benar maka return data user
      return $query;
    }

		public function jumlahproditahfidz(){
			$this->db->where('prodi', "tahfidz");
			$query = $this->db->get($this->table);
			return $query;
		}
		public function jumlahprodisains(){
			$this->db->where('prodi', "sains");
			$query = $this->db->get($this->table);
			return $query;
		}
		public function jumlahprodikitab(){
			$this->db->where('prodi', "kitabsalaf");
			$query = $this->db->get($this->table);
			return $query;
		}

		public function jumlahprodireguler(){
			$this->db->where('prodi', "reguler");
			$query = $this->db->get($this->table);
			return $query;
		}
		public function jumlahKelaminLaki(){
			$this->db->where('level','users');
			$this->db->where('jenis_kelamin', "L");
			$query = $this->db->get($this->table);
			return $query;
		}
		public function jumlahKelaminPerempuan(){
			$this->db->where('level','users');
			$this->db->where('jenis_kelamin', "P");
			$query = $this->db->get($this->table);
			return $query;
		}
}
