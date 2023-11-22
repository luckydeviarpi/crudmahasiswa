<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pinjam extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pinjam_model');
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['active']="Pinjam";
    $data['judul'] = "Halaman Peminjaman";
    $data['pinjam'] = $this->Pinjam_model->get();
    $data['user'] = $this->userrole->getBy();
    $this->load->view("layout/header", $data);
    $this->load->view("pinjam/vw_pinjam", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['active']="Pinjam";
    $data['judul'] = "Halaman Peminjaman";
    $data['pinjam'] = $this->Pinjam_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('ruangan', 'Nomor Ruangan', 'required', [
      'required' => 'Please enter Nomor Ruangan'
    ]);
    $this->form_validation->set_rules('peminjam', 'Nama/NIM Peminjam', 'required', [
      'required' => 'Please enter Nama/NIM Peminjam'
    ]);
    $this->form_validation->set_rules('alasan', 'Alasan Pemakaian', 'required', [
      'required' => 'Please enter Alasan Pemakaian'
    ]);
    $this->form_validation->set_rules('tanggal_pakai', 'Tanggal Pakai', 'required', [
      'required' => 'Please enter Tanggal Pakai'
    ]);
    $this->form_validation->set_rules('waktu', 'Waktu Pakai', 'required', [
      'required' => 'Please enter Waktu Pakai',
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("pinjam/vw_tambah_pinjam", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'ruangan' => $this->input->post('ruangan'),
        'peminjam' => $this->input->post('peminjam'),
        'alasan' => $this->input->post('alasan'),
        'tanggal_pakai' => $this->input->post('tanggal_pakai'),
        'waktu' => $this->input->post('waktu'),
      ];
      $this->Pinjam_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data successfully added!</div>');
      redirect('Pinjam');
    }
  }
  public function hapus($id)
  {
    $result = $this->Pinjam_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data unable to remove, [RELATED]!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data successfully removed!</div>');
    }
    redirect('Pinjam');
  }
  public function edit($id)
  {
    $data['active']="Pinjam";
    $data['judul'] = "Halaman Edit Pinjam";
    $data['pinjam'] = $this->Pinjam_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pinjam'] = $this->Pinjam_model->getById($id);

    $this->form_validation->set_rules('ruangan', 'Nomor Ruangan', 'required', [
      'required' => 'Please enter Nomor Ruangan'
    ]);
    $this->form_validation->set_rules('peminjam', 'Nama/NIM Peminjam', 'required', [
      'required' => 'Please enter Nama/NIM Peminjam'
    ]);
    $this->form_validation->set_rules('alasan', 'Alasan Pemakaian', 'required', [
      'required' => 'Please enter Alasan Pemakaian'
    ]);
    $this->form_validation->set_rules('tanggal_pakai', 'Tanggal Pakai', 'required', [
      'required' => 'Please enter Tanggal Pakai'
    ]);
    $this->form_validation->set_rules('waktu', 'Waktu Pakai', 'required', [
      'required' => 'Please enter Waktu Pakai',
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("pinjam/vw_ubah_pinjam", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'ruangan' => $this->input->post('ruangan'),
        'peminjam' => $this->input->post('peminjam'),
        'alasan' => $this->input->post('alasan'),
        'tanggal_pakai' => $this->input->post('tanggal_pakai'),
        'waktu' => $this->input->post('waktu'),
      ];
      $id = $this->input->post('id');
      $this->Pinjam_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data successfully modified!</div>');
      redirect('Pinjam');
    }
  }
}