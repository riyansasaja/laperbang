<div class="container-fluid">
    <div class="row">
        <div class="col-10 bg-dua border-satu">
            <p class="text-satu text-center mt-3" style="margin-left: 30%;">LAYANAN ADMINISTRASI PERKARA BANDING <br>PENGADILAN TINGGI AGAMA MANADO</p>
        </div>
        <div class="col-2 bg-dua border-satu">

            <nav class="navbar navbar-expand-lg navbar-dark">

                <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                User
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?= base_url('banding/userProfile'); ?>">Profile</a>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a>
                            </div>
                        </li>
                    </ul>
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