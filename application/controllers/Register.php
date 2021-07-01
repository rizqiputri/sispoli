<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

public function add()
  {
    // Jika form di submit jalankan blok kode ini
    if ($this->input->post('submit')) {

      // Mengatur validasi data username,
      // # required = tidak boleh kosong
      // # min_length[5] = username harus terdiri dari minimal 5 karakter
      // # is_unique[users.username] = username harus bernilai unique,
      //   tidak boleh sama dengan record yg sudah ada pada tabel users
      $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

      // Mengatur validasi data level,
      // # required = tidak boleh kosong
      // # in_list[administrator, alumni] = hanya boleh bernilai
      //   salah satu di antara administrator atau alumni
      $this->form_validation->set_rules('level', 'Level', 'required|in_list[administrator,alumni]');

      // Mengatur validasi data active,
      // # required = tidak boleh kosong
      // # in_list[0, 1] = hanya boleh bernilai
      // salah satu di antara 0 atau 1
      $this->form_validation->set_rules('active', 'Active', 'required|in_list[0,1]');

      // Mengatur pesan error validasi data
      $this->form_validation->set_message('required', '%s tidak boleh kosong!');
      $this->form_validation->set_message('min_length', '%s minimal %d karakter!');

      // Jalankan validasi jika semuanya benar maka lanjutkan
      if ($this->form_validation->run() === TRUE) {

        $data = array(
          'username' => $this->input->post('username'),
          'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
          'level' => $this->input->post('level'),
          'active' => $this->input->post('active')
        );

        // Jalankan function insert pada model_users
        $query = $this->model_users->insert($data);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Berhasil menambahkan user');
        else $message = array('status' => true, 'message' => 'Gagal menambahkan user');

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        // refresh page
        redirect('users/add', 'refresh');
      }
    }

    // Data untuk page users/add
    $data['pageTitle'] = 'Tambah Data User';
    $data['pageContent'] = $this->load->view('users/userAdd', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }