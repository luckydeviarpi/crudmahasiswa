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
                    <p class="text-uppercase text-sm">Pendaftaran</p>
                    <div class="row">
                    <?php echo form_open('Quiz/create'); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pilih Program</label>
                                        <select name="program" id="program" class="form-control" value="<?= set_value('program') ?>" onfocus="focused(this)" onfocusout="defocused(this)">
                                            <option selected disabled>Program</option>
                                            <option value="Reguler">Reguler</option>
                                            <option value="D4">D4</option>
                                            <option value="Magister">Magister</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger" pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama</label>
                                        <input value="<?= set_value('nama') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="nama" id="nama" placeholder="Nama">
                                        <?= form_error('nama', '<small class="text-danger" pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NISN</label>
                                            <input value="<?= set_value('nisn') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="nisn" id="nisn" placeholder="nisn ">
                                            <?= form_error('nisn', '<small class="text-danger" pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NIK</label>
                                            <input value="<?= set_value('nik') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="nik" id="nik" placeholder="nik ">
                                            <?= form_error('nik', '<small class="text-danger" pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email</label>
                                            <input value="<?= set_value('email') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="email" id="email" placeholder="Email">
                                            <?= form_error('email', '<small class="text-danger" pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">No HP</label>
                                            <input value="<?= set_value('no_hp') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="no_hp" id="no_hp" placeholder="No HP">
                                            <?= form_error('no_hp', '<small class="text-danger" pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tempat Lahir</label>
                                            <input value="<?= set_value('lahir') ?>" class="form-control" type="text" onfocus="focused(this)" onfocusout="defocused(this)" name="lahir" id="lahir" placeholder="lahir ">
                                            <?= form_error('lahir', '<small class="text-danger" pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                                            <input value="<?= set_value('tgl_lahir') ?>" class="form-control" type="date" onfocus="focused(this)" onfocusout="defocused(this)" name="tgl_lahir" id="tgl_lahir" placeholder="tgl_lahir ">
                                            <?= form_error('tgl_lahir', '<small class="text-danger" pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?= base_url('Quiz') ?>" class="btn btn-secondary">Batal</a>
                                <button type="submit" name="create" class="btn btn-primary float-right">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>