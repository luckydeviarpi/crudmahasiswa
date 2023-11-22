        <div class="card-body p-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="min-height: 80vh;">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Detail</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Informasi Mahasiswa</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card" style="min-height: 80vh;">
                                        <div class="card-header pb-0">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0">Detail Mahasiswa</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">Nama</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['nama'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">NIM</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['nim'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">Jenis Kelamin</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['jenis_kelamin'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">Email</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['email'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">Prodi</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['prodi'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">Asal Sekolah</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['asal_sekolah'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">Nomor Telpon</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['no_hp'] ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">Alamat</div>
                                                <div class="col-md-1">:</div>
                                                <div class="col-md-8"><?= $mahasiswa['alamat'] ?></div>
                                            </div>
                                            <hr>
                                            <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-secondary">Tutup</a>
                                        </div>
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