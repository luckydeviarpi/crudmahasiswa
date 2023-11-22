<div class="card card-profile border-radius-lg shadow-sm">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-4 col-lg-4 order-lg-2">
            <div class="card-header mb-lg-0">
                <img src="<?= base_url('assets/img/profile/') . 'default.jpg'; ?>" class="max-width-400 max-height-300 border border-2 border-white">
            </div>
        </div>
    </div>
    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
    </div>
    <div class="card-body pt-0">
        <div class="row">
            <div class="col">
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class=" text-sm">
                <h1>Pendaftaran</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>NISN</th>
                            <th>NIK</th>
                            <th>Email</th>
                            <th>nohp</th>
                            <th>lahir</th>
                            <th>tgl_lahir</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php if (!empty($Quiz)) { ?>
                            <?php foreach ($Quiz as $key => $m) { ?>
                                <tr>
                                    <td> <?= $i; ?></td>
                                    <td><?php echo $m['nama']; ?></td>
                                    <td><?php echo $m['nisn']; ?></td>
                                    <td><?php echo $m['nik']; ?></td>
                                    <td><?php echo $m['email']; ?></td>
                                    <td><?php echo $m['nohp']; ?></td>
                                    <td><?php echo $m['lahir']; ?></td>
                                    <td><?php echo $m['tgl_lahir']; ?></td>
                                    <td>
                                        <!-- <a href="<?php echo base_url('Quiz$Quiz/edit/' . $key); ?>">Edit</a> -->
                                        <a href="<?php echo base_url('Quiz$Quiz/delete/' . $key); ?>">Delete</a>
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
    </div>
</div>