<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dinas Perumahan, kawasan Pemukiman & Pertanahan Kota Sungai Penuh</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.ico" type="image/x-icon">

    <style>
        .logospn {
            display: inline-block;
            max-width: 4rem;
            margin-right: 4rem;
        }

        .bg-hijau {
            background-color: #243763;

        }
    </style>
</head>


<body style="background-color:#FFD56F;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-hijau shadow-lg pb-3 pt-3 font-weight-bold">
        <div>
            <a class="navbar-brand " style="font-weight: 900; color: #FFEBB7; " href="<?= base_url('') ?>"><img src="<?= base_url('assets/') ?>img/logo-kota-sungai-penuh.png" class="logospn"> Dinas Perumahan, kawasan Pemukiman & Pertanahan Kota Sungai Penuh</a>
        </div>
    </nav>

    <div class="container">
        <!-- Outer Row -->
        <div class="row d-plex justify-content-between mt-5">
            <div class="col-xl-6 col-lg-6 col-md-6 mt-5">
                <div class="card bg-none o-hidden border-0 my-5 text-white" style="background: none;">
                    <div class="text-justify card-body p-0">
                        <h4 style="font-weight: 800;">Dinas Perumahan, kawasan Pemukiman & Pertanahan Kota Sungai Penuh</h4>
                        <h5>Dinas Perumahan Rakyat dan Kawasan Permukiman Kota Sungai Penuh sebelumnya merupakan Dinas Tata Ruang dan Perumahan Kota Sungai Penuh, pada tanggal 27 Desember 2016 terbentuklah peraturan Daerah Nomor 40 Tahun 2016 dan Dinas Tata Ruang dan Perumahan Kota Sungai Penuh berubah Nomenklatur menjadi Dinas Perumahan Rakyat dan Kawasan Permukiman Kota Sungai Penuh. </h5>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.2408651469327!2d101.38718061475504!3d-2.0595863984985954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2da1dff7685d49%3A0xb820064c503afb37!2sDinas%20Perumahan%2C%20kawasan%20Pemukiman%20%26%20Pertanahan%20Kota%20Sungai%20Penuh!5e0!3m2!1sid!2sid!4v1672912010590!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 mt-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Account</h1>

                                    </div>
                                    <?php $error = $this->session->flashdata('message');
                                    if ($error) { ?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <?php echo $error; ?>
                                        </div>
                                    <?php } ?>

                                    <form class="user" action="<?php echo site_url('Login/login'); ?>" method="post">
                                        <div class="form-group">
                                            <input required autocomplete="off" type="text" class="form-control form-control-user" id="exampleInputUser" placeholder="Username" name="username" />
                                        </div>
                                        <div class="form-group">
                                            <input required autocomplete="off" type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" />
                                        </div>



                                        <button name="submit" type="submit" class="btn  btn-user btn-block" style="background-color:#FFD56F ; margin-top: 10px;"><i class="fas fa-fw fa-sign-in-alt mr-1"></i> Masuk</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="text-align: center; position: absolute; bottom: 0; left: 0; width: 100%; background-color:#243763; padding: 20px; color: #FFEBB7;">
        &copy; <a href="https://www.instagram.com/ladyka_fo" target="_blank" style="color: #FFEBB7;">Ladyka Febby Olivia_19101152610252 </a>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
</body>

</html>