    <div class="card-body p-3">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="min-height: 80vh;">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Tabel</p>
              </div>
            </div>
            <div class="card-body">
            <?= $this->session->flashdata('message'); ?>  
              <div style="overflow-y: scroll;">
                <a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa + </a>
                <p class="text-uppercase text-sm">Informasi Mahasiswa</p>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-responsive table-striped table-bordered">
                    <thead>
                        <tr>
                          <td>No</td>
                          <td>Nama</td>
                          <td>Nim</td>
                          <td>Email</td>
                          <td>Aksi</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $us): ?>
                          <tr>
                            <td>
                              <?= $i; ?>
                            </td>
                            <td>
                              <?= $us['nama']; ?>
                            </td>
                            <td>
                              <?= $us['nim']; ?>
                            </td>
                            <td>
                              <?= $us['email']; ?>
                            </td>
                            <td>
                              <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                              <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                              <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
                            </td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Contact Information</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>