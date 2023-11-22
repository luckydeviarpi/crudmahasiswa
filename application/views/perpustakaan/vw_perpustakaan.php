
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
                        <div style="overflow-y: scroll;">
                            <a href="<?= base_url() ?>Perpustakaan/tambah" class="btn btn-primary">Tambah Peminjaman + </a>
                            <p class="text-uppercase text-sm">Informasi Peminjaman Buku</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-responsive table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Buku</td>
                                                <td>Genre Buku</td>
                                                <td>Tanggal Peminjaman</td>
                                                <td>Tanggal Pengembalian</td>
                                                <td>Nomor Anggota</td>
                                                <td>Nama Peminjam</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($perpustakaan as $ps) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $ps['nama_buku']; ?></td>
                                                    <td><?= $ps['genre_buku']; ?></td>
                                                    <td><?= $ps['tanggal_peminjaman']; ?></td>
                                                    <?php if ($ps['tanggal_pengembalian']=="0000-00-00"){$ps['tanggal_pengembalian']="Belum Kembali";} ?>
                                                    <td><?= $ps['tanggal_pengembalian']; ?></td>
                                                    <td><?= $ps['nomor_anggota']; ?></td>
                                                    <td><?= $ps['nama_peminjam']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('Perpustakaan/hapus/') . $ps['id']; ?>" class="btn btn-danger">Hapus</a>
                                                        <a href="<?= base_url('Perpustakaan/edit/') . $ps['id']; ?>" class="btn btn-warning">Edit</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>