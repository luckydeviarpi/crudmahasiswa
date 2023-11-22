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
                            <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama
                                                    Prodi</label>
                                                <input value="<?= $prodi['nama_prodi'] ?>" class="form-control" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="nama_prodi" id="nama_prodi" 
                                                    placeholder="Program Studi" value="<?= $prodi['nama_prodi']; ?>">
                                                    <?= form_error('nama_prodi','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Ruangan</label>
                                                <input value="<?= $prodi['ruangan'] ?>" class="form-control" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="ruangan" id="ruangan" 
                                                    placeholder="Nomor Ruangan" value="<?= $prodi['ruangan']; ?>">
                                                    <?= form_error('ruangan','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jurusan</label>
                                                <input value="<?= $prodi['jurusan'] ?>" class="form-control" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="jurusan" id="jurusan" 
                                                    placeholder="Jurusan Prodi" value="<?= $prodi['jurusan']; ?>">
                                                    <?= form_error('jurusan','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Akreditasi</label>
                                                <input value="<?= $prodi['akreditasi'] ?>" class="form-control" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="akreditasi" id="akreditasi" 
                                                    placeholder="Akreditasi Prodi"  value="<?= $prodi['akreditasi']; ?>">
                                                    <?= form_error('akreditasi','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Kaprodi</label>
                                                <input value="<?= $prodi['kaprodi'] ?>" class="form-control" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="kaprodi" id="kaprodi" 
                                                    placeholder="Nama Kepala Prodi"  value="<?= $prodi['kaprodi']; ?>">
                                                    <?= form_error('kaprodi','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tahun Berdiri</label>
                                                <input value="<?= $prodi['tahun_berdiri'] ?>" class="form-control" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="tahun_berdiri" id="tahun_berdiri"
                                                     placeholder="Tahun"  value="<?= $prodi['tahun_berdiri']; ?>">
                                                     <?= form_error('tahun_berdiri','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Output Lulusan</label>
                                                <input value="<?= $prodi['output_lulusan'] ?>" class="form-control" type="text" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="output_lulusan" id="output_lulusan" 
                                                    placeholder="Lulusan"  value="<?= $prodi['output_lulusan']; ?>">
                                                    <?= form_error('output_lulusan','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Gambar</label>
                                                <input value="<?= set_value('gambar') ?>" class="form-control" type="file" onfocus="focused(this)"
                                                    onfocusout="defocused(this)" name="gambar" id="gambar" 
                                                    placeholder="Gambar">
                                                    <?= form_error('gambar','<small class="text-danger" pl-3">','</small>'); ?>   
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                        <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Preview</label>
                                                <img src="<?= base_url('assets/img/prodi/').$prodi['gambar']; ?>" style="width: 75px;" class="img-thumbnail" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <a href="<?= base_url('Prodi') ?>" class="btn btn-secondary">Batal</a>
                                    <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>