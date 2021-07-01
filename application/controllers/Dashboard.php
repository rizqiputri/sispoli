<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->cekLogin();
    $this->load->model("Poliumum_model");
    $this->load->model("Polianasthesi_model");
    $this->load->model("Poliurologi_model");
    $this->load->model("Polinefrologi_model");
    $this->load->model("Polihemodialisa_model");
    $this->load->model("Polikia_model");
    $this->load->model("Poligigi_model");
    $this->load->model("Polimata_model");
    $this->load->model("Polijantung_model");
    $this->load->model("Polikulit_model");
    $this->load->model("Poliparu_model");
    $this->load->model("Politht_model");
    $this->load->model("Poligizi_model");
    $this->load->model("Polisyaraf_model");
    $this->load->model("Polipsikologi_model");
    $this->load->model("Polilansia_model");
    $this->load->model("Polifisioterapi_model");
    $this->load->model("Polijiwa_model");
    $this->load->model("Polibedah_model");
    $this->load->model("Polipenyakitdalam_model");
    $this->load->model("Poliradiologi_model");
    $this->load->model("Poliortodonsia_model");
    $this->load->model("Poliorthopedi_model");
    $this->load->model("Poliperiodentia_model");


  }

  public function index()
  {
    $data['pageTitle'] = 'Dashboard';
        $data["jumlahpoliumum"] = $this->Poliumum_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('umum')->num_rows();
        $data["jumlahpolianasthesi"] = $this->Polianasthesi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('anasthesi')->num_rows();
        $data["jumlahpoliurologi"] = $this->Poliurologi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('urologi')->num_rows();
        $data["jumlahpolihemodialisa"] = $this->Polihemodialisa_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('hemodialisa')->num_rows();
        $data["jumlahpolinefrologi"] = $this->Polinefrologi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('nefrologi')->num_rows();
        $data["jumlahpolikia"] = $this->Polikia_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('kia')->num_rows();
        $data["jumlahpoligigi"] = $this->Poligigi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('gigi')->num_rows();
        $data["jumlahpolimata"] = $this->Polimata_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('mata')->num_rows();
        $data["jumlahpolijantung"] = $this->Polijantung_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('jantung')->num_rows();
        $data["jumlahpolikulit"] = $this->Polikulit_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('kulit')->num_rows();
        $data["jumlahpoliparu"] = $this->Poliparu_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('paru')->num_rows();
        $data["jumlahpolitht"] = $this->Politht_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('tht')->num_rows();
        $data["jumlahpoligizi"] = $this->Poligizi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('gizi')->num_rows();
        $data["jumlahpolisyaraf"] = $this->Polisyaraf_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('syaraf')->num_rows();
        $data["jumlahpolipsikologi"] = $this->Polipsikologi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('psikologi')->num_rows();
        $data["jumlahpolilansia"] = $this->Polilansia_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('lansia')->num_rows();
        $data["jumlahpolifisioterapi"] = $this->Polifisioterapi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('fisioterapi')->num_rows();
        $data["jumlahpolijiwa"] = $this->Polijiwa_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('jiwa')->num_rows();
        $data["jumlahpolibedah"] = $this->Polibedah_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('bedah')->num_rows();
        $data["jumlahpolipenyakitdalam"] = $this->Polipenyakitdalam_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('penyakitdalam')->num_rows();
        $data["jumlahpoliradiologi"] = $this->Poliradiologi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('radiologi')->num_rows();
        $data["jumlahpoliortodonsia"] = $this->Poliortodonsia_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('ortodonsia')->num_rows();
        $data["jumlahpoliorthopedi"] = $this->Poliorthopedi_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('orthopedi')->num_rows();
        $data["jumlahpoliperiodentia"] = $this->Poliperiodentia_model->getAll()->num_rows()."/".$this->model_pendaftaran->count('periodentia')->num_rows();





     $data['pageContent'] = $this->load->view('dashboard/main', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

   public function poliumum()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poliumum_model->insert($data);
         redirect('dashboard/poliumum','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poliumum');

        redirect('dashboard/poliumum','refresh');
      }

        $data["jumlahpoliumum"] = $this->Poliumum_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poliumum', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);

  }
  public function poliurologi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poliurologi_model->insert($data);
         redirect('dashboard/poliurologi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poliurologi');

        redirect('dashboard/poliurologi','refresh');
      }

        $data["jumlahpoliurologi"] = $this->Poliurologi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poliurologi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);

  }

  public function polianasthesi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polianasthesi_model->insert($data);
         redirect('dashboard/polianasthesi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polianasthesi');

        redirect('dashboard/polianasthesi','refresh');
      }

        $data["jumlahpolianasthesi"] = $this->Polianasthesi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polianasthesi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polihemodialisa()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polihemodialisa_model->insert($data);
         redirect('dashboard/polihemodialisa','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polihemodialisa');

        redirect('dashboard/polihemodialisa','refresh');
      }

        $data["jumlahpolihemodialisa"] = $this->Polihemodialisa_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polihemodialisa', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polinefrologi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polinefrologi_model->insert($data);
         redirect('dashboard/polinefrologi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polinefrologi');

        redirect('dashboard/polinefrologi','refresh');
      }

        $data["jumlahpolinefrologi"] = $this->Polinefrologi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polinefrologi', $data, TRUE);

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
         redirect('dashboard/polikia','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polikia');

        redirect('dashboard/polikia','refresh');
      }

        $data["jumlahpolikia"] = $this->Polikia_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polikia', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }


   public function poligigi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poligigi_model->insert($data);
         redirect('dashboard/poligigi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poligigi');

        redirect('dashboard/poligigi','refresh');
      }

        $data["jumlahpoligigi"] = $this->Poligigi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poligigi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polimata()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polimata_model->insert($data);
         redirect('dashboard/polimata','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polimata');

        redirect('dashboard/polimata','refresh');
      }

        $data["jumlahpolimata"] = $this->Polimata_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polimata', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }
 public function polijantung()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polijantung_model->insert($data);
         redirect('dashboard/polijantung','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polijantung');

        redirect('dashboard/polijantung','refresh');
      }

        $data["jumlahpolijantung"] = $this->Polijantung_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polijantung', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

   public function polikulit()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polikulit_model->insert($data);
         redirect('dashboard/polikulit','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polikulit');

        redirect('dashboard/polikulit','refresh');
      }

        $data["jumlahpolikulit"] = $this->Polikulit_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polikulit', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }


   public function poliparu()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poliparu_model->insert($data);
         redirect('dashboard/poliparu','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poliparu');

        redirect('dashboard/poliparu','refresh');
      }

        $data["jumlahpoliparu"] = $this->Poliparu_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poliparu', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

   public function politht()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Politht_model->insert($data);
         redirect('dashboard/politht','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('politht');

        redirect('dashboard/politht','refresh');
      }

        $data["jumlahpolitht"] = $this->Politht_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/politht', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }


   public function poligizi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poligizi_model->insert($data);
         redirect('dashboard/poligizi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poligizi');

        redirect('dashboard/poligizi','refresh');
      }

        $data["jumlahpoligizi"] = $this->Poligizi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poligizi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polisyaraf()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polisyaraf_model->insert($data);
         redirect('dashboard/polisyaraf','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polisyaraf');

        redirect('dashboard/polisyaraf','refresh');
      }

        $data["jumlahpolisyaraf"] = $this->Polisyaraf_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polisyaraf', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }


  public function polipsikologi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polipsikologi_model->insert($data);
         redirect('dashboard/polipsikologi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polipsikologi');

        redirect('dashboard/polipsikologi','refresh');
      }

        $data["jumlahpolipsikologi"] = $this->Polipsikologi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polipsikologi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }


  public function polilansia()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polilansia_model->insert($data);
         redirect('dashboard/polilansia','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polilansia');

        redirect('dashboard/polilansia','refresh');
      }

        $data["jumlahpolilansia"] = $this->Polilansia_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polilansia', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polifisioterapi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polifisioterapi_model->insert($data);
         redirect('dashboard/polifisioterapi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polifisioterapi');

        redirect('dashboard/polifisioterapi','refresh');
      }

        $data["jumlahpolifisioterapi"] = $this->Polifisioterapi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polifisioterapi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polijiwa()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polijiwa_model->insert($data);
         redirect('dashboard/polijiwa','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polijiwa');

        redirect('dashboard/polijiwa','refresh');
      }

        $data["jumlahpolijiwa"] = $this->Polijiwa_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polijiwa', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polibedah()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polibedah_model->insert($data);
         redirect('dashboard/polibedah','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polibedah');

        redirect('dashboard/polibedah','refresh');

      }

        $data["jumlahpolibedah"] = $this->Polibedah_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polibedah', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function polipenyakitdalam()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Polipenyakitdalam_model->insert($data);
         redirect('dashboard/polipenyakitdalam','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('polipenyakitdalam');

        redirect('dashboard/polipenyakitdalam','refresh');

      }

        $data["jumlahpolipenyakitdalam"] = $this->Polipenyakitdalam_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/polipenyakitdalam', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function poliradiologi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poliradiologi_model->insert($data);
         redirect('dashboard/poliradiologi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poliradiologi');

        redirect('dashboard/poliradiologi','refresh');

      }

        $data["jumlahpoliradiologi"] = $this->Poliradiologi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poliradiologi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }
  public function poliortodonsia()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poliradiologi_model->insert($data);
         redirect('dashboard/poliortodonsia','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poliortodonsia');

        redirect('dashboard/poliortodonsia','refresh');

      }

        $data["jumlahpoliortodonsia"] = $this->Poliortodonsia_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poliortodonsia', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function poliorthopedi()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poliorthopedi_model->insert($data);
         redirect('dashboard/poliorthopedi','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poliorthopedi');

        redirect('dashboard/poliorthopedi','refresh');

      }

        $data["jumlahpoliorthopedi"] = $this->Poliorthopedi_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poliorthopedi', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function poliperiodentia()
  {
    $data['pageTitle'] = 'Dashboard';

    if ($this->input->post('next')){
        $data = array(
          'nomor_antrian' => "1"
        );
        $this->Poliperiodentia_model->insert($data);
         redirect('dashboard/poliperiodentia','refresh');
      }

      if ($this->input->post('reset')){
        $this->db->empty_table('poliperiodentia');

        redirect('dashboard/poliperiodentia','refresh');

      }

        $data["jumlahpoliperiodentia"] = $this->Poliperiodentia_model->getAll()->num_rows();
     $data['pageContent'] = $this->load->view('dashboard/poliperiodentia', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }
  }
