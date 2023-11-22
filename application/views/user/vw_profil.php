        <div class="card shadow-lg mx-4 card-profile-bottom">
            <div class="card-body p-3">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                <?= $user['nama']; ?>
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                User
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="container-fluid py-4">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header pb-0">
                                                </div>
                                                <div class="card-body">
                                                    <p class="text-uppercase text-lg">Profil</p>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <p class="card-text text-md">Nama</p>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <p class="card-text text-md">:</p>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <p class="card-text text-md"><?= $user['nama']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <p class="card-text text-md">Email</p>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <p class="card-text text-md">:</p>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <p class="card-text text-md"><?= $user['email']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <p class="card-text text-md">Anggota Sejak</p>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <p class="card-text text-md">:</p>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <p class="card-text text-md"><?= date('d F Y', strtotime($user['date_created'])); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <img src="<?= base_url('assets/img/bg-pcr.jpg') ?>" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <a href="javascript:;">
                                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="rounded-circle img-fluid border border-2 border-white">
                                    </a>
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
                            <div class="text-center mt-4">
                                <h5>
                                    <?= $user['nama']; ?><span class="font-weight-light"></span>
                                </h5>
                                <div class="h6 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Prodi
                                </div>
                                <div class="h6 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>Mahasiswa
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>Politeknik Caltex Riau
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>