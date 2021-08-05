<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-dua border-satu">

            <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-satu">
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url('home'); ?>">
                        <img src="<?= base_url('assets/img/') ?>logoapp.png" alt="" width="100" class="drop-shadow">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link <?= $judul == 'Dashboard Banding' ? 'active' : '' ?>" aria-current="page" href="<?= base_url('banding/'); ?>"> <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> User
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?= base_url('banding/userProfile'); ?>"> Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- <p class="text-satu text-center mt-3">LAYANAN ADMINISTRASI PERKARA BANDING <br>PENGADILAN TINGGI AGAMA MANADO</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-12 bg-home" style="height: 600px;">
            <div class="row align-items-center text-center" style="height: 550px;">
                <div class="col-lg-4 col-md-12 mt-2 mb-2">
                    <div class="card tengah abu">
                        <div class="card-body">
                            <h5 class="mt-4">EKSAMINASI <br> </h5>
                            <img class="mt-1" src="<?= base_url('assets/img/') ?>exa_logo.png" alt="" style="width: 8rem;">
                            <p>Pengunggahan perkara yang akan dieksaminasi oleh HATIWASDA</p>
                            <a href="" class="btn btn-block text-white bg-dua disabled" role="button" aria-disabled="true">MASUK</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-2 mb-2">
                    <div class="card tengah abu">
                        <div class="card-body">
                            <h5>PENGAJUAN <br>BANDING</h5>
                            <img src="<?= base_url('assets/img/') ?>banding_logo.png" alt="" style="width: 8rem;">
                            <p>Pengunggahan dokumen perkara yang akan dilakukan upaya banding</p>
                            <a href="<?php echo base_url('banding/') ?>" class="btn btn-block text-white bg-dua">MASUK</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-2 mb-2">
                    <div class="card tengah abu">
                        <div class="card-body">
                            <h5>PELAPORAN <br>PERKARA</h5>
                            <img src="<?= base_url('assets/img/') ?>perkara_logo.png" alt="" style="width: 8rem;">
                            <p>Pengunggahan dokumen keadaan <br>perkara</p>
                            <a href="" class="btn btn-block text-white bg-dua disabled" role="button" aria-disabled="true">MASUK</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
</div>