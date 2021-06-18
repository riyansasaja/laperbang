<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- datatables css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <!-- sweet alert css -->
    <link rel="stylesheet" href="<?= base_url('assets/');  ?>dist/sweetalert2.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f8c43fa68d.js" crossorigin="anonymous"></script>
    <!-- css sandiri -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/dashboard_banding.css">

    <title>Hello, world!</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-satu">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/img/') ?>logoapp.png" alt="" width="100" class="drop-shadow">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> User
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"> Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <?php echo $this->session->flashdata('msg'); ?>
    <!-- <?php if (validation_errors()) { ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <?php } ?> -->



    <div class="container ">
        <h3 class="mt-4">Dasbor Pengajuan Banding</h3>
        <ol class="breadcrumb mb-4">
            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
        </ol>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-satu text-white mb-4 shadow">
                    <div class="card-body">Perkara Masuk</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <small><?php echo $data_harian; ?></small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-dua text-white mb-4 shadow">
                    <div class="card-body">Perkara Putus</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <small><?php echo $putus_harian; ?></small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-empat text-white mb-4 shadow">
                    <div class="card-body">Sisa Perkara</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <small><?php echo $sisa_harian; ?></small>
                    </div>
                </div>
            </div>

        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Perkara
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn bg-dasar mb-3 text-white" data-bs-toggle="modal" data-bs-target="#modalAddperkara">
                    Tambah Perkara
                </button>
                <!-- button tambah perkara -->
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomor Perkara</th>
                            <th>Jenis Perkara</th>
                            <th>Nomor Perkara Banding</th>
                            <th>Tanggal Register</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nomor Perkara</th>
                            <th>Jenis Perkara</th>
                            <th>Nomor Perkara Banding</th>
                            <th>Tanggal Register</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($perkara_banding as $lhs) : ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $lhs['no_perkara']; ?></td>
                                <td><?php echo $lhs['jns_perkara']; ?></td>
                                <td><?php echo $lhs['no_perkara_banding']; ?></td>
                                <td><?php echo $lhs['tgl_register']; ?></td>
                                <td><?php echo $lhs['status_perkara']; ?></td>
                                <td>
                                    <a class="" href="<?= base_url('banding/uploadbundle/') . $lhs['id_perkara'] ?>">
                                        <span class="badge rounded-pill bg-primary">Unggah Berkas</span>
                                    </a> <br>
                                    <!-- <button type="button" class="badge badge-primary" data-bs-toggle="modal" data-bs-target="#modalupdateperkara<?= $lhs['id_perkara'] ?>" data-id="<?= $lhs['id_perkara']; ?>">
                                        Edit
                                    </button> -->
                                    <a href="" data-bs-toggle="modal" data-bs-target="#modalupdateperkara<?= $lhs['id_perkara'] ?>">
                                        <span class="badge rounded-pill bg-warning">Edit</span>
                                    </a>
                                    <a class="" href="<?= base_url('template_word/surat_pengantar/') . $lhs['id_perkara'] ?>">
                                        <span class="badge rounded-pill bg-primary">Template</span>
                                    </a> <br>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- ==modalAddperkara -->
    <div class="modal fade" id="modalAddperkara" tabindex="-1" aria-labelledby="modalAddperkara" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perkara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form addBerkas -->
                    <form method="post" action="<?php echo base_url('banding/tambah_perkara'); ?>" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="tanggalregister" name="tgl_register" value="<?php echo date('Y-m-d'); ?>">
                        <div class="row mb-3">
                            <label for="nomorPerkara" class="col-sm-2 col-form-label">Nomor Perkara</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomorPerkara" name="no_perkara" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenisPerkara" class="col-sm-2 col-form-label">Jenis Perkara</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="jenisPerkara" name="jns_perkara">
                                    <option value="">--Pilih Jenis Perkara--</option>
                                    <?php foreach ($perkara as $perk) : ?>
                                        <option value="<?= $perk['jns_kaper'] ?>"><?= $perk['jns_kaper'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="namaPihak" class="col-sm-2 col-form-label">Nama Pihak</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaPihak" name="nm_pihak">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat Pengantar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_surat" name="no_surat_pengantar" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="namaPanitera" class="col-sm-2 col-form-label">Nama Panitera</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaPanitera" name="nm_panitera" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nipPanitera" class="col-sm-2 col-form-label">NIP Panitera</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nipPanitera" name="nip_panitera" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="banyaknya" class="col-sm-2 col-form-label">Banyaknya Berkas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="banyaknya" name="banyaknya">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="keterangan" name="keterangan"></textarea>
                            </div>
                        </div>


                        <!-- end form addBerkas -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" value="upload">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modalAddperkara -->

    <!-- ==modalupdateperkara -->
    <?php $no = 0;
    foreach ($perkara_banding as $lhs) : $no++; ?>
        <div class="modal fade" id="modalupdateperkara<?= $lhs['id_perkara'] ?>" tabindex="-1" aria-labelledby="modalupdateperkara" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Perkara</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form editBerkas -->
                        <form method="post" action="<?php echo base_url('banding/edit_perkara'); ?>" enctype="multipart/form-data">
                            <!-- <input type="hidden" class="form-control" id="tanggalregister" name="tgl_register" value="<?php echo date('Y/m/d'); ?>"> -->
                            <input type="hidden" class="form-control" id="id_perkara" value="<?php echo $lhs['id_perkara']; ?>" name="id_perkara">
                            <div class="row mb-3">
                                <label for="nomorPerkara" class="col-sm-2 col-form-label">Nomor Perkara</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomorPerkara" name="no_perkara" value="<?php echo $lhs['no_perkara']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenisPerkara" class="col-sm-2 col-form-label">Jenis Perkara</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="jenisPerkara" name="jns_perkara">
                                        <option value="">--Pilih Jenis Perkara--</option>
                                        <?php foreach ($perkara as $perk) : ?>
                                            <option value="<?= $perk['jns_kaper'] ?>" <?= $perk['jns_kaper'] == $lhs['jns_perkara'] ? 'selected' : '' ?>> <?= $perk['jns_kaper'] ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaPihak" class="col-sm-2 col-form-label">Nama Pihak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaPihak" name="nm_pihak" value="<?php echo $lhs['nm_pihak']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_surat_pengantar" class="col-sm-2 col-form-label">Nomor Surat Pengantar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_surat_pengantar" name="no_surat_pengantar" value="<?php echo $lhs['no_surat_pengantar']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaPanitera" class="col-sm-2 col-form-label">Nama Panitera</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaPanitera" name="nm_panitera" value="<?php echo $lhs['nm_panitera']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nipPanitera" class="col-sm-2 col-form-label">NIP Panitera</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nipPanitera" name="nip_panitera" value="<?php echo $lhs['nip_panitera']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="banyaknya" class="col-sm-2 col-form-label">Banyaknya Berkas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="banyaknya" name="banyaknya" value="<?php echo $lhs['banyaknya']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $lhs['keterangan']; ?>">
                                </div>
                            </div>

                            <!-- end form editBerkas -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" value="upload">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- end modalupdateperkara -->








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- datatables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <!-- sweet alert -->
    <script src="<?= base_url('assets/');  ?>dist/sweetalert2.all.min.js"></script>
    <!-- jspribadi -->
    <script src="<?= base_url('assets/dist/') ?>myscript.js"></script>


</body>

</html>