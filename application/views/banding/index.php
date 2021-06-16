<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script> -->
</head>

<body>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <?php echo $this->session->flashdata('msg'); ?>
    <!-- <?php if (validation_errors()) { ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <?php } ?> -->

    <div class="container-fluid px-4">
        <h3 class="mt-4">Dasbor Pengajuan Banding</h3>
        <ol class="breadcrumb mb-4">
            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
        </ol>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Perkara Masuk</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <small><?php echo $data_harian; ?></small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Perkara Putus</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <small><?php echo $putus_harian; ?></small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-success text-white mb-4">
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
                            <div class=" row mb-3">
                                <label for="namaPihak" class="col-sm-2 col-form-label">Surat Pengantar</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="file1">
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
</body>

</html>