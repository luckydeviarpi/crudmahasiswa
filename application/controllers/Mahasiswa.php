<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 */

class Mahasiswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['active']="Mahasiswa";
    $data['judul'] = "Halaman Mahasiswa";
    $data['user'] = $this->userrole->getBy();
    $data['mahasiswa'] = $this->Mahasiswa_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_mahasiswa", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['active']="Mahasiswa";
    $data['judul'] = "Halaman Tambah Mahasiswa";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
      'required' => 'Please enter Nama Mahasiswa'
    ]);
    $this->form_validation->set_rules('nim', 'NIM', 'required', [
      'required' => 'Please enter NIM Mahasiswa'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required', [
      'required' => 'Please enter Email Mahasiswa'
    ]);
    $this->form_validation->set_rules('prodi', 'Prodi', 'required', [
      'required' => 'Please enter Prodi Mahasiswa'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
      'required' => 'Please enter Alamat Mahasiswa'
    ]);
    $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
      'required' => 'Please enter Asal Sekolah Mahasiswa'
    ]);
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
      'required' => 'Please enter No HP Mahasiswa',
      'integer' => 'Please enter a valid phone number'
    ]);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
      'required' => 'Please enter Jenis Kelamin Mahasiswa'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'no_hp' => $this->input->post('no_hp'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),
      ];
      $this->Mahasiswa_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data successfully added!</div>');
      redirect('Mahasiswa');
    }
  }
  public function detail($id)
  {
    $data['active']="Mahasiswa";
    $data['judul'] = "Halaman Detail Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id)
  {
    $result = $this->Mahasiswa_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data successfully removed!</div>');
    redirect('Mahasiswa');
  }
  public function edit($id)
  {
    $data['active']="Mahasiswa";
    $data['judul'] = "Halaman Edit Mahasiswa";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);

    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
      'required' => 'Please enter Nama Mahasiswa'
    ]);
    $this->form_validation->set_rules('nim', 'NIM', 'required', [
      'required' => 'Please enter NIM Mahasiswa'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required', [
      'required' => 'Please enter Email Mahasiswa'
    ]);
    $this->form_validation->set_rules('prodi', 'Prodi', 'required', [
      'required' => 'Please enter Prodi Mahasiswa'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
      'required' => 'Please enter Alamat Mahasiswa'
    ]);
    $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
      'required' => 'Please enter Asal Sekolah Mahasiswa'
    ]);
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
      'required' => 'Please enter No HP Mahasiswa',
      'integer' => 'Please enter a valid phone number'
    ]);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
      'required' => 'Please enter Jenis Kelamin Mahasiswa'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'no_hp' => $this->input->post('no_hp'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),
      ];
      $id = $this->input->post('id');
      $this->Mahasiswa_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data successfully modified!</div>');
      redirect('Mahasiswa');
    }
  }
  public function upload()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
    ];
    $this->Mahasiswa_model->insert($data);
    redirect('Mahasiswa');
  }

  public function update()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
    ];
    $id = $this->input->post('id');
    $this->Mahasiswa_model->update(['id' => $id], $data);
    redirect('Mahasiswa');
  }
}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */