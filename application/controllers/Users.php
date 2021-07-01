<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->cekLogin();
		$this->load->model('Model_users');
	}

	public function index()
	{
		$data['pageTitle'] = 'Users';
		/*$data['users'] = $this->Model_users->getAdmin()->result();*/
		$data['users'] = $this->Model_users->get()->result();
      	$data['pageContent'] = $this->load->view('users/userlist.php', $data, TRUE);

      	$this->load->view('template/layout', $data);
	}

	public function add()
	{

		if ($this->input->post('submit')) {

			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('level', 'Level', 'required|in_list[administrator,perawat,users]');
			$this->form_validation->set_rules('active', 'Active', 'required|in_list[0,1]');
			$this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('notelp', 'No Telp', 'required');


			$this->form_validation->set_message('required', '%s tidak boleh kosong!');
      $this->form_validation->set_message('min_length', '%s minimal %d karakter!');

      		if ($this->form_validation->run() === TRUE) {

      			$data = array(
		          'username' => $this->input->post('username'),
		          'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		          // 'level' => $this->input->post('level'),
		          'level' => 'administrator',
		          'nama_lengkap' => $this->input->post('namalengkap'),
		          'email' => $this->input->post('email'),
		          'no_telp' => $this->input->post('notelp'),
		          'alamat' => $this->input->post('alamat'),
		          'active' => $this->input->post('active')
		        );

		        $query = $this->Model_users->insert($data);

		        if ($query) $message = array('status' => true, 'message' => 'Berhasil menambahkan user');
        		else $message = array('status' => false, 'message' => 'Gagal menambahkan user');

        		$this->session->set_flashdata('message', $message);

        		redirect('users/add', 'refresh');
      		}

		}

		$data['pageTitle'] = 'Tambah Users';
    	$data['pageContent'] = $this->load->view('users/useradd.php', $data, TRUE);

  	$this->load->view('template/layout', $data);
	}

	public function edit($id = null)
	{
		if ($this->input->post('update-password')) {
			// $this->form_validation->set_rules('oldpassword', 'Password Lama', 'required|callback_cekpasswordlama');
			$this->form_validation->set_rules('newpassword', 'Password Baru', 'required|min_length[5]');
			// $this->form_validation->set_rules('renewpassword', 'Konfirmasi Password', 'required|matches[newpassword]');

			$this->form_validation->set_message('required', '%s tidak boleh kosong!');
      		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
      		$this->form_validation->set_message('matches', '{field} tidak sama dengan {param}.');

      		if ($this->form_validation->run() === TRUE) {

      			$data = array(
		          'password' => password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT)
		        );

		        $userId = $this->input->post('idusers');

		        $query = $this->Model_users->update($userId, $data);

		        if ($query) {
 		        	$message = array('status' => true, 'message' => 'Berhasil memperbarui password');
 		        } else {
 			        $message = array('status' => false, 'message' => 'Gagal memperbarui password');
 				}

 				$this->session->set_flashdata('message', $message);
 				redirect('users/edit/' . $id, 'refresh');
      		}
		}

		if ($this->input->post('update-profile')) {

			// $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			// $this->form_validation->set_rules('level', 'Level', 'required|in_list[administrator,users,operator,psikolog]');
			$this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('notelp', 'No Telp', 'required');
			$this->form_validation->set_rules('active', 'Active', 'required|in_list[0,1]');

			$this->form_validation->set_message('required', '%s tidak boleh kosong!');
      		$this->form_validation->set_message('min_length', '%s minimal %d karakter!');

      		if ($this->form_validation->run() === TRUE) {

      			$data = array(
		          // 'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		          'nama_lengkap' => $this->input->post('namalengkap'),
		          'email' => $this->input->post('email'),
							'level' => $this->input->post('level'),
		          'no_telp' => $this->input->post('notelp'),
		          'alamat' => $this->input->post('alamat'),
		          'active' => $this->input->post('active')
		        );

		        $query = $this->Model_users->update($id, $data);

		        if ($query) $message = array('status' => true, 'message' => 'Berhasil mengupdate user');
        		else $message = array('status' => false, 'message' => 'Gagal mengupdate user');

        		$this->session->set_flashdata('message', $message);

        		redirect('users/edit/' . $id, 'refresh');
      		}

		}

		$user = $this->Model_users->get_where(array('id' => $id))->row();

		if (!$user) show_404();

		$data['pageTitle'] = 'Edit Users';
		$data['user'] = $user;
      	$data['pageContent'] = $this->load->view('users/useredit.php', $data, TRUE);

      	$this->load->view('template/layout', $data);
	}

	public function delete($id)
	{
		$user = $this->Model_users->get_where(array('id' => $id))->row();

		if (!$user) show_404();

		$query = $this->Model_users->delete($id);

		if ($query) $message = array('status' => true, 'message' => 'Berhasil menghapus users');
    	else $message = array('status' => true, 'message' => 'Gagal menghapus users');

    	$this->session->set_flashdata('message', $message);

    	redirect('users', 'refresh');
	}

}
