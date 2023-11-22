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
                    <a href="<?php echo base_url('Tuition/create'); ?>">Tambah Mahasiswa</a>
                        <p class="text-uppercase text-sm">Informasi Mahasiswa</p>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-responsive table-striped table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php if (!empty($Tuition)) { ?>
                                        <?php foreach ($Tuition as $key => $m) { ?>
                                            <tr>
                                                <td> <?= $i; ?></td>
                                                <td><?php echo $m['nama']; ?></td>
                                                <td><?php echo $m['nim']; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('Tuition/edit/' . $key); ?>">Edit</a>
                                                    <a href="<?php echo base_url('Tuition/delete/' . $key); ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php } ?>
                                    <?php  } else { ?>
                                        <tr>
                                            <td colspan="4">Tidak ada data Mahasiswa.</td>
                                        </tr>
                                    <?php } ?>
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