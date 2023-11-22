<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpustakaan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Perpustakaan_model');
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['active']="Perpustakaan";
    $data['judul'] = "Halaman Perpustakaan";
    $data['perpustakaan'] = $this->Perpustakaan_model->get();
    $data['user'] = $this->userrole->getBy();
    $this->load->view("layout/header", $data);
    $this->load->view("Perpustakaan/vw_perpustakaan", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['active']="Perpustakaan";
    $data['judul'] = "Halaman Tambah Peminjaman";
    $data['user'] = $this->userrole->getBy();
    $this->load->view("layout/header", $data);
    $this->load->view("Perpustakaan/vw_tambah_peminjaman", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id)
  {
    $result = $this->Perpustakaan_model->delete($id);
    redirect('Perpustakaan');
  }
  public function upload(){
    $data=[
      'nama_buku'=> $this->input->post('nama_buku'),
      'genre_buku'=> $this->input->post('genre_buku'),
      'tanggal_peminjaman'=> $this->input->post('tanggal_peminjaman'),
      'tanggal_pengembalian'=> $this->input->post('tanggal_pengembalian'),
      'nomor_anggota'=> $this->input->post('nomor_anggota'),
      'nama_peminjam'=> $this->input->post('nama_peminjam'),
    ];
    $this->Perpustakaan_model->insert($data);
    redirect('Perpustakaan');
  }
  public function edit($id){
    $data['active']="Perpustakaan";
    $data['judul']="Halaman Edit Peminjaman";
    $data['user'] = $this->userrole->getBy();
    $data['perpustakaan']=$this->Perpustakaan_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("Perpustakaan/vw_ubah_peminjaman", $data);
    $this->load->view("layout/footer");
  }
  public function update(){
    $data=[
      'nama_buku'=> $this->input->post('nama_buku'),
      'genre_buku'=> $this->input->post('genre_buku'),
      'tanggal_peminjaman'=> $this->input->post('tanggal_peminjaman'),
      'tanggal_pengembalian'=> $this->input->post('tanggal_pengembalian'),
      'nomor_anggota'=> $this->input->post('nomor_anggota'),
      'nama_peminjam'=> $this->input->post('nama_peminjam'),
    ];
    $id=$this->input->post('id');
    $this->Perpustakaan_model->update(['id'=>$id], $data);
    redirect('Perpustakaan');
  }


}


/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */