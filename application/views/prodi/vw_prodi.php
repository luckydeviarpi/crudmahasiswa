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
                            <a href="<?= base_url() ?>Prodi/tambah" class="btn btn-primary">Tambah
                                Prodi + </a>
                            <p class="text-uppercase text-sm">Informasi Mahasiswa</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-responsive table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Prodi</td>
                                                <td>Ruangan</td>
                                                <td>Jurusan</td>
                                                <td>Akreditasi</td>
                                                <td>Nama Kaprodi</td>
                                                <td>Tahun Berdiri</td>
                                                <td>Output Lulusan</td>
                                                <td>Gambar</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($prodi as $ps) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $ps['nama_prodi']; ?></td>
                                                    <td><?= $ps['ruangan']; ?></td>
                                                    <td><?= $ps['jurusan']; ?></td>
                                                    <td><?= $ps['akreditasi']; ?></td>
                                                    <td><?= $ps['kaprodi']; ?></td>
                                                    <td><?= $ps['tahun_berdiri']; ?></td>
                                                    <td><img src="<?= base_url('assets/img/prodi/') . $ps['gambar'];?>" style="width: 100px;" class="img-thumbnail"></td>
                                                    <td><?= $ps['output_lulusan']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Prodi/hapus/') . $ps['id']; ?>" class="btn btn-danger">Hapus</a>
                                                        <a href="<?= base_url('Prodi/edit/') . $ps['id']; ?>" class="btn btn-warning">Edit</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <!-- <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Contact Information</p> -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>