
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tuition extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['judul'] = 'Halaman Tuition';
    $data['Tuition'] = $this->session->userdata('mahasiswas');
    $data['user'] = $this->userrole->getBy();
    $this->load->view('layout/header', $data);
    $this->load->view('tuition/vw_tuition', $data);
    $this->load->view('layout/footer');
  }

  public function create()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('tuition/vw_add_tuition');
    } else {
      $mahasiswas = $this->session->userdata('mahasiswas') ?? [];

      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim')
      ];

      $mahasiswas[] = $data;
      $this->session->set_userdata('mahasiswas', $mahasiswas);

      redirect('Tuition');
    }
  }
  public function edit($id)
  {
    $data['Tuition'] = $this->session->userdata('mahasiswas');
    $mahasiswa = $data['Tuition'][$id];

    $this->load->view('tuition/vw_edit_tuition', array('id' => $id, 'nama' => $mahasiswa['nama'], 'nim' => $mahasiswa['nim']));
  }


  public function update($id)
  {
    $data['Tuition'] = $this->session->userdata('mahasiswas');

    $data['Tuition'][$id]['nama'] = $this->input->post('nama');
    $data['Tuition'][$id]['nim'] = $this->input->post('nim');

    $this->session->set_userdata('mahasiswas', $data['Tuition']);

    redirect('Tuition');
  }

  public function delete($id)
  {
    $data['Tuition'] = $this->session->userdata('mahasiswas');
    unset($data['Tuition'][$id]);

    $this->session->set_userdata('mahasiswas', $data['Tuition']);

    redirect('Tuition');
  }
}




/* End of file Tuition.php */
/* Location: ./application/controllers/Tuition.php */