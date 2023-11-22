<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quiz extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Quiz_model');
        $this->load->model('User_model', 'userrole');
    }

    public function index()
    {
        $data['active'] = "Semua";
        $data['judul'] = "Halaman Quiz Semua";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/head", $data);
        $this->load->view("quiz/vw_quiz_reguler", $data);
        $this->load->view("quiz/vw_quiz_magister", $data);
        $this->load->view("quiz/vw_quiz_d4", $data);
        $this->load->view("layout/foot");
    }
    public function reguler()
    {
        $data['active'] = "Reguler";
        $data['judul'] = "Halaman Quiz Reguler";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/head", $data);
        $this->load->view("quiz/vw_quiz_reguler", $data);
        $this->load->view("layout/foot");
    }
    public function magister()
    {
        $data['active'] = "Magister";
        $data['judul'] = "Halaman Quiz Magister";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/head", $data);
        $this->load->view("quiz/vw_quiz_magister", $data);
        $this->load->view("layout/foot");
    }
    public function d4()
    {
        $data['active'] = "D4";
        $data['judul'] = "Halaman Quiz D4";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/head", $data);
        $this->load->view("quiz/vw_quiz_D4", $data);
        $this->load->view("layout/foot");
    }
    public function daftar(){
        $data['active'] = "hide";
        $data['judul'] = "Halaman Daftar";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/head", $data);
        $this->load->view("quiz/vw_daftar", $data);
        $this->load->view("layout/foot");
    }
    public function pendaftaran(){
        $data['active'] = "hide";
        $data['judul'] = "Halaman List Pendaftaran";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/head", $data);
        $this->load->view("quiz/vw_pendaftaran", $data);
        $this->load->view("layout/foot");
    }
    public function create()
    {
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nisn', 'NIK', 'required|numeric');
  
      if ($this->form_validation->run() === FALSE) {
        $this->load->view('Quiz/daftar');
     } else {
        $pendaftaran = $this->session->userdata('pendaftaran') ?? [];
  
        $data = [
          'nama' => $this->input->post('nama'),
          'nim' => $this->input->post('nim')
        ];
  
        $pendaftaran[] = $data;
        $this->session->set_userdata('pendaftaran', $pendaftaran);
  
        redirect('Quiz');
     }
    }
  
}
