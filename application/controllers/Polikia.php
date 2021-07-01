<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Polikia extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->cekLogin();
    $this->load->model("Polikia_model");
  }

  public function index()
  {
    $data['pageTitle'] = 'Dashboard';

     $data['pageContent'] = $this->load->view('dashboard/main', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

   public function polikia()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polikia_model->insert($data);
         redirect('polikia/polikia','refresh');
      }

        $data["jumlahpolikia"] = $this->Polikia_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polikia', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }


   

     
   public function poligigi()
  {
    $data['pageTitle'] = 'Dashboard';

     $data['pageContent'] = $this->load->view('dashboard/poligigi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }
 
}
  