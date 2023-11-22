
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
                            <p class="text-uppercase text-sm">Informasi Peminjaman</p>
                            <div class="row">
                                <form action="<?= base_url('Perpustakaan/update'); ?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $perpustakaan['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama
                                                    Buku</label>
                                                <input class="form-control" value="<?= $perpustakaan['nama_buku']; ?>"
                                                    type="text" onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="nama_buku" id="nama_buku" required placeholder="Nama Buku">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Genre
                                                    Buku</label>
                                                <input class="form-control" value="<?= $perpustakaan['genre_buku']; ?>"
                                                    type="text" onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="genre_buku" id="genre_buku" required placeholder="Genre Buku">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal
                                                    Peminjaman</label>
                                                <input class="form-control"
                                                    value="<?= $perpustakaan['tanggal_peminjaman']; ?>" type="date"
                                                    onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="tanggal_peminjaman" id="tanggal_peminjaman" required
                                                    placeholder="Tanggal Peminjaman">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal
                                                    Pengembalian</label>
                                                <input class="form-control"
                                                    value="<?= $perpustakaan['tanggal_pengembalian']; ?>" type="date"
                                                    onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="tanggal_pengembalian" id="tanggal_pengembalian"
                                                    placeholder="Tanggal Pengembalian (optional)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor
                                                    Anggota</label>
                                                <input class="form-control"
                                                    value="<?= $perpustakaan['nomor_anggota']; ?>" type="text"
                                                    onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="nomor_anggota" id="nomor_anggota" required
                                                    placeholder="Nomor Anggota">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama
                                                    Peminjam</label>
                                                <input class="form-control"
                                                    value="<?= $perpustakaan['nama_peminjam']; ?>" type="text"
                                                    onfocus="focused(this)" onfocusout="defocused(this)"
                                                    name="nama_peminjam" id="nama_peminjam" required
                                                    placeholder="Nama Peminjam">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?= base_url('Perpustakaan') ?>" class="btn btn-secondary">Batal</a>
                                    <button type="submit" name="simpan" class="btn btn-primary float-right">Simpan
                                        Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>