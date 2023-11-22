
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
                            <p class="text-uppercase text-sm">Informasi Mahasiswa</p>
                            <div class="row">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                <input class="form-control" value="<?= set_value('nama') ?>" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="nama" id="nama" 
                                                    placeholder="Nama Lengkap">
                                                    <?= form_error('nama','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NIM</label>
                                                <input class="form-control" value="<?= set_value('nim') ?>" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="nim" id="nim" 
                                                    placeholder="Nomor Induk Mahasiswa">
                                                    <?= form_error('nim','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jenis
                                                    Kelamin</label>
                                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?= set_value('jenis_kelamin') ?>"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                    <option selected disabled>Jenis Kelamin</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <?= form_error('jenis_kelamin','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Email</label>
                                                <input class="form-control" value="<?= set_value('email') ?>" type="email" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="email" id="email" 
                                                    placeholder="Email PCR">
                                                    <?= form_error('email','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Prodi</label>
                                                <select name="prodi" id="prodi" class="form-control"
                                                    onfocus="focused(this)" onfocusout="defocused(this)" value="<?= set_value('prodi') ?>" >
                                                    <option selected disabled>Program Studi</option>
                                                    <?php foreach ($prodi as $p): ?>
                                                        <option value="<?= $p['id']; ?>">
                                                            <?= $p['nama_prodi']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?= form_error('prodi','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Asal
                                                    Sekolah</label>
                                                <input class="form-control" value="<?= set_value('asal_sekolah') ?>" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="asal_sekolah" id="asal_sekolah"
                                                     placeholder="Sekolah Terakhir">
                                                    <?= form_error('asal_sekolah','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">No
                                                    HP</label>
                                                <input class="form-control" value="<?= set_value('no_hp') ?>" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="no_hp" id="no_hp" 
                                                    placeholder="Nomor Telepon">
                                                    <?= form_error('no_hp','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Alamat</label>
                                                <input class="form-control" value="<?= set_value('alamat') ?>" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="alamat" id="alamat" 
                                                    placeholder="Alamat Lengkap">
                                                    <?= form_error('alamat','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-secondary">Batal</a>
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                        Mahasiswa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>