<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
    <title>
        Lucky 2 TI C
    </title>
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/') ?>../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url('assets/') ?>../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="<?= base_url('assets/') ?>../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/') ?>../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-10 bg-gradient-success position-absolute w-100"></div>
    <main class="main-content position-relative border-radius-lg ">
        <!-- End Navbar -->
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="min-height-200 bg-gradient-primary  w-100">
                    <br><br>
                        <div class="h1 text-white text-center me-2 d-flex align-items-center justify-content-center ">Form<u>ulir Pendaftaran</u></div>
                    </div>
                </div>
                <div class="row">
                    <a href="<?= base_url('Quiz/pendaftaran') ?>" class="btn btn-info">List Pendaftaran</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?= base_url('Quiz') ?>" style="" class="btn btn-primary<?php if ($active != "Semua") {
                                                                                                    echo "-outline";
                                                                                                } ?>">Semua</a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= base_url('Quiz/reguler') ?>" style="" class="btn btn-primary<?php if ($active != "Reguler") {
                                                                                                            echo "-outline";
                                                                                                        } ?> ">Reguler D4</a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= base_url('Quiz/magister') ?>" style="" class="btn btn-primary<?php if ($active != "Magister") {
                                                                                                            echo "-outline";
                                                                                                        } ?>">Magister</a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= base_url('Quiz/d4') ?>" style="" class="btn btn-primary<?php if ($active != "D4") {
                                                                                                    echo "-outline";
                                                                                                } ?>">Alih Jenjang D4</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>