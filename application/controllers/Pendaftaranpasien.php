<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaranpasien extends MY_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->cekLogin();
	    $this->load->model('model_pendaftaran');
			//$this->load->model('model_master');
			// $this->load->model('model_upload');
			// $this->load->library('csvreader');

  }

  public function index()
  {
      $data['pageTitle'] = 'Pendaftaran Pasien';
			if (empty($this->uri->segment('3'))) {
			  $data['pendaftaran'] = $this->model_pendaftaran->get()->result();
				$data['pageContent'] = $this->load->view('pendaftaran/listpasien', $data, TRUE);
			} else {
				$jenispoli = $this->uri->segment('3');

				$this->db->select('daftarpoli.id, daftarpoli.nik, pendaftaran.nama, daftarpoli.poli, daftarpoli.urutan, daftarpoli.waktu, pendaftaran.tanggal_lahir, pendaftaran.jenis_kelamin');
				$this->db->from('daftarpoli');
				$this->db->join('pendaftaran', 'daftarpoli.nik = pendaftaran.nik','left');
				if($jenispoli != 'poli') {
					$date = new DateTime("now");
		      $curr_date = $date->format('Y-m-d ');

				  $this->db->where('daftarpoli.poli',$jenispoli);
					$this->db->where('DATE(waktu)',$curr_date);
				}
				$this->db->order_by('daftarpoli.poli', 'ASC');
				$this->db->order_by('daftarpoli.waktu', 'ASC');
				$this->db->order_by('daftarpoli.urutan', 'ASC');

				$data['pendaftaran'] = $this->db->get()->result();
				$data['pageContent'] = $this->load->view('pendaftaran/listantrian', $data, TRUE);
			}
			//print_r($data['pendaftaran']);

      $this->load->view('template/layout', $data);
  }

	public function add($id = null)
	{

		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nik','NIK','required');
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('poli','Poli','required');
			$this->form_validation->set_rules('jeniskelamin','Jenis Kelamin','required|in_list[L,P]');
			$this->form_validation->set_rules('tanggallahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('alamat','alamat','required');
			$this->form_validation->set_rules('kelurahan','Kelurahan','required');
			$this->form_validation->set_rules('kecamatan','Kecamatan','required');
			$this->form_validation->set_rules('kabupaten','Kabupaten','required');
			$this->form_validation->set_rules('provinsi','Provinsi','required');

				$created = date('YmdHis');

				$this->form_validation->set_message('required', '%s tidak boleh kosong!');
	      		// $this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
	      		// $this->form_validation->set_message('matches', '{field} tidak sama dengan {param}.');

				if ($this->form_validation->run() == TRUE) {
					$data = array(
						'nik' => $this->input->post('nik'),
						'nama' => $this->input->post('nama'),
						'poli' => $this->input->post('poli'),
						'jenis_kelamin' => $this->input->post('jeniskelamin'),
						'tanggal_lahir' => $this->input->post('tanggallahir'),
						'alamat' => $this->input->post('alamat'),
						'kelurahan' => $this->input->post('kelurahan'),
						'kecamatan' => $this->input->post('kecamatan'),
						'kabupaten' => $this->input->post('kabupaten'),
						'provinsi' => $this->input->post('provinsi'),
						'date_create' => $created
					);

					$query = $this->model_pendaftaran->insert($data);

					if ($query) $message = array('status' => true, 'message' => 'Berhasil menambahkan data');
					else $message = array('status' => false, 'message' => 'Gagal menambahkan data');

					$this->session->set_flashdata('message', $message);

					redirect('Pendaftaranpasien/add', 'refresh');
				}

			}

			$data['pageTitle'] = 'Tambah Data pasien';
	    $data['pageContent'] = $this->load->view('pendaftaran/pendaftaran.php', $data, TRUE);

	  	$this->load->view('template/layout', $data);
  }

	public function daftarpoli($id = null)
	{

		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nik','NIK','required');

			$this->form_validation->set_rules('poli','Poli','required');


				$created = date('YmdHis');

				$this->form_validation->set_message('required', '%s tidak boleh kosong!');
						// $this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
						// $this->form_validation->set_message('matches', '{field} tidak sama dengan {param}.');

				if ($this->form_validation->run() == TRUE) {
					$last_row = 0;
					$this->db->select('*');
					$this->db->from('daftarpoli');
					$this->db->where('poli',$this->input->post('poli'));
					$last_row=$this->db->order_by('urutan','desc')->limit(1)->get()->row();

					$data = array(
						'nik' => $this->input->post('nik'),

						'poli' => $this->input->post('poli'),

						'waktu' => $created,
						'urutan' => (int)($last_row->urutan+1)
					);

					$query = $this->model_pendaftaran->insertpoli($data);

					if ($query) $message = array('status' => true, 'message' => 'Berhasil menambahkan data');
					else $message = array('status' => false, 'message' => 'Gagal menambahkan data');

					$this->session->set_flashdata('message', $message);

					redirect('Pendaftaranpasien/index/poli', 'refresh');
				}

			}

			$data['pageTitle'] = 'Tambah Data pasien';
			$data['pageContent'] = $this->load->view('pendaftaran/poli.php', $data, TRUE);

			$this->load->view('template/layout', $data);
	}

	public function edit($id = null)
	{
		if ($this->input->post('update')) {
			$this->form_validation->set_rules('nik','NIK','required');
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('poli','Poli','required');
			$this->form_validation->set_rules('jeniskelamin','Jenis Kelamin','required|in_list[L,P]');
			$this->form_validation->set_rules('tanggallahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('alamat','alamat','required');
			$this->form_validation->set_rules('kelurahan','Kelurahan','required');
			$this->form_validation->set_rules('kecamatan','Kecamatan','required');
			$this->form_validation->set_rules('kabupaten','Kabupaten','required');
			$this->form_validation->set_rules('provinsi','Provinsi','required');

			$created = date('YmdHis');
			$this->form_validation->set_message('required', '%s tidak boleh kosong!');
			// $this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');

					if ($this->form_validation->run() === TRUE) {

						$data = array(
							'nik' => $this->input->post('nik'),
							'nama' => $this->input->post('nama'),
							'poli' => $this->input->post('poli'),
							'jenis_kelamin' => $this->input->post('jeniskelamin'),
							'tanggal_lahir' => $this->input->post('tanggallahir'),
							'alamat' => $this->input->post('alamat'),
							'kelurahan' => $this->input->post('kelurahan'),
							'kecamatan' => $this->input->post('kecamatan'),
							'kabupaten' => $this->input->post('kabupaten'),
							'provinsi' => $this->input->post('provinsi'),
							'date_create' => $created
						);

						$id = $this->input->post('id');

						$query = $this->model_pendaftaran->update($id, $data);

						if ($query) {
							$message = array('status' => true, 'message' => 'Berhasil memperbarui data');
						} else {
							$message = array('status' => false, 'message' => 'Gagal memperbarui data');
				}

				$this->session->set_flashdata('message', $message);
				redirect('Pendaftaranpasien/edit/'. $id, 'refresh');

					}
		}
		// $data['kelurahan'] = $this->model_master->getKelurahan()->result();
		// $data['kecamatan'] = $this->model_master->getKecamatan()->result();
		// $data['kabupaten'] = $this->model_master->getKabupaten()->result();
		// $data['provinsi'] = $this->model_master->getProvinsi()->result();
		//
		$pendaftaran = $this->model_pendaftaran->get_where(array('id' => $id))->row();


		if (!$pendaftaran) show_404();

		$data['pageTitle'] = 'Edit Data pasien';
    $data['pendaftaran'] = $pendaftaran;
		$data['pageContent'] = $this->load->view('pendaftaran/edit.php', $data, TRUE);
		$this->load->view('template/layout', $data);
}

public function cetak($id = null){
		$pendaftaran = $this->model_pendaftaran->get_where(array('id' => $id))->row();
		$data['pendaftaran'] = $pendaftaran;
		$data['pageTitle'] = 'cetak kartu pendafataran';
		$this->load->view('pendaftaran/kartupendaftaran',$data);
}

public function cetakantrian($id = null){
		$this->db->select('*');
		$this->db->from('daftarpoli');
		$this->db->join('pendaftaran', 'daftarpoli.nik = pendaftaran.nik');
		$this->db->where('daftarpoli.id',$id);
		$pendaftaran = $this->db->get()->row();
		$data['pendaftaran'] = $pendaftaran;
		$data['pageTitle'] = 'cetak kartu antrian';
		$this->load->view('pendaftaran/kartuantrian',$data);
}

public function delete($id)
{
	$pendaftaranId = $this->model_pendaftaran->get_where(array('id' => $id))->row();

	if (!$pendaftaranId) show_404();

	$query = $this->model_pendaftaran->delete($id);

	if ($query) $message = array('status' => true, 'message' => 'Berhasil menghapus Data');
		else $message = array('status' => true, 'message' => 'Gagal menghapus Data');

		$this->session->set_flashdata('message', $message);

		redirect('Pendaftaranpasien', 'refresh');

}

}
