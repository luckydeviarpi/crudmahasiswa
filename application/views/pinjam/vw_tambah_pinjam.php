        <div class="card-body p-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="min-height: 80vh;">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Form</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Informasi Prodi</p>
                            <div class="row">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Ruangan</label>
                                                <input value="<?= set_value('ruangan') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="ruangan" id="ruangan" placeholder="Ruangan">
                                                <?= form_error('ruangan', '<small class="text-danger" pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Peminjam</label>
                                                <input value="<?= set_value('peminjam') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="peminjam" id="peminjam" placeholder="Peminjam">
                                                <?= form_error('peminjam', '<small class="text-danger" pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alasan</label>
                                                <input value="<?= set_value('alasan') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="alasan" id="alasan" placeholder="Alasan">
                                                <?= form_error('alasan', '<small class="text-danger" pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Pakai</label>
                                                <input value="<?= set_value('tanggal_pakai') ?>" class="form-control" type="date" onfocus="focused(this)" onfocusout="defocused(this)" name="tanggal_pakai" id="tanggal_pakai" placeholder="Tanggal Pakai">
                                                <?= form_error('tanggal_pakai', '<small class="text-danger" pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Waktu Pakai</label>
                                                <input value="<?= set_value('waktu') ?>" class="form-control" type="time" onfocus="focused(this)" onfocusout="defocused(this)" name="waktu" id="waktu" placeholder="Waktu Pakai">
                                                <?= form_error('waktu', '<small class="text-danger" pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?= base_url('Pinjam') ?>" class="btn btn-secondary">Batal</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                        Peminjaman</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </main>