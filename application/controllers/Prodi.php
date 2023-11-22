<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    $data['active']="Prodi";
    $data['judul'] = "Halaman Prodi";
    $data['user'] = $this->userrole->getBy();
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['active']="Prodi";
    $data['user'] = $this->userrole->getBy();
    $data['judul'] = "Halaman Tambah Prodi";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', [
      'required' => 'Please enter Nama Prodi'
    ]);
    $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
      'required' => 'Please enter Nomor Ruangan'
    ]);
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
      'required' => 'Please enter Nama Jurusan'
    ]);
    $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
      'required' => 'Please enter Akreditasi Prodi'
    ]);
    $this->form_validation->set_rules('kaprodi', 'Nama Kaprodi', 'required', [
      'required' => 'Please enter Nama Kaprodi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|integer', [
      'required' => 'Please enter Tahun Berdiri Prodi',
      'integer' => 'Please enter a Tahun'
    ]);
    $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
      'required' => 'Please enter Output Lulusan'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("prodi/vw_tambah_prodi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_prodi' => $this->input->post('nama_prodi'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akreditasi' => $this->input->post('akreditasi'),
        'kaprodi' => $this->input->post('kaprodi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'output_lulusan' => $this->input->post('output_lulusan'),
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/prodi/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Prodi_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data successfully added!</div>');
      redirect('Prodi');
    }
  }

  public function hapus($id)
  {
    $result = $this->Prodi_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data unable to remove, [RELATED]!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data successfully removed!</div>');
    }
    redirect('Prodi');
  }
  public function edit($id)
  {
    $data['active']="Prodi";
    $data['judul'] = "Halaman Edit Prodi";
    $data['prodi'] = $this->Prodi_model->get();
    $data['user'] = $this->userrole->getBy();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->getById($id);

    $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', [
      'required' => 'Please enter Nama Prodi'
    ]);
    $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
      'required' => 'Please enter Nomor Ruangan'
    ]);
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
      'required' => 'Please enter Jurusan'
    ]);
    $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
      'required' => 'Please enter Akreditasi'
    ]);
    $this->form_validation->set_rules('kaprodi', 'Nama Kaprodi', 'required', [
      'required' => 'Please enter Nama Kaprodi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|integer', [
      'required' => 'Please enter Tahun Berdiri Prodi',
    ]);
    $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
      'required' => 'Please enter Output Lulusan'
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("prodi/vw_ubah_prodi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_prodi' => $this->input->post('nama_prodi'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akreditasi' => $this->input->post('akreditasi'),
        'kaprodi' => $this->input->post('kaprodi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'output_lulusan' => $this->input->post('output_lulusan'),
        'gambar' => $this->input->post('gambar')
      ];
      $id = $this->input->post('id');
      $this->Prodi_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data successfully modified!</div>');
      redirect('Prodi');
    }
  }
  public function update()
  {
    $data = [
      'nama_prodi' => $this->input->post('nama_prodi'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'kaprodi' => $this->input->post('kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'output_lulusan' => $this->input->post('output_lulusan'),
      'gambar' => $this->input->post('gambar')
    ];
    $id = $this->input->post('id');
    $this->Prodi_model->update(['id' => $id], $data);
    redirect('Prodi');
  }
  public function upload()
  {
    $data = [
      'nama_prodi' => $this->input->post('nama_prodi'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'kaprodi' => $this->input->post('kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'output_lulusan' => $this->input->post('output_lulusan'),
      'gambar' => $this->input->post('gambar')
    ];
    $this->Prodi_model->insert($data);
    redirect('Prodi');
  }

}


/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */