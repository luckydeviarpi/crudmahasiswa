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
                                <a href="<?= base_url() ?>Pinjam/tambah" class="btn btn-primary">Tambah
                                    Pinjam + </a>
                                <p class="text-uppercase text-sm">Informasi Peminjaman</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-responsive table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Ruangan</td>
                                                    <td>Peminjam</td>
                                                    <td>Alasan</td>
                                                    <td>Tanggal Pakai</td>
                                                    <td>Waktu</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($pinjam as $pjm) : ?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?= $pjm['ruangan']; ?></td>
                                                        <td><?= $pjm['peminjam']; ?></td>
                                                        <td><?= $pjm['alasan']; ?></td>
                                                        <td><?= $pjm['tanggal_pakai']; ?></td>
                                                        <td><?= $pjm['waktu']; ?></td>
                                                        <td>
                                                            <a href="<?= base_url('Pinjam/hapus/') . $pjm['id']; ?>" class="btn btn-danger">Hapus</a>
                                                            <a href="<?= base_url('Pinjam/edit/') . $pjm['id']; ?>" class="btn btn-warning">Edit</a>
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