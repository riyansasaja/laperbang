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
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
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
                <div class="card-body">

                    <h4> <i class="fas fa-fw fa-book"></i> PERKARA MASUK</h4>
                </div>
                <div class="card-footer">
                    <h5 class="text-end"><?php echo $data_harian; ?> Perkara</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-dua text-white mb-4 shadow">
                <div class="card-body">
                    <h4><i class="fas fa-fw fa-gavel"></i>PERKARA PUTUS</h4>
                </div>
                <div class="card-footer">
                    <h5 class="text-end"><?php echo $putus_harian; ?> Perkara</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-empat text-white mb-4 shadow">
                <div class="card-body">
                    <h4><i class="fas fa-fw fa-balance-scale-left"></i> SISA PERKARA</h4>

                </div>
                <div class="card-footer">
                    <h5 class="text-end"><?php echo $sisa_harian; ?> Perkara</h5>
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
            <button type="button" class="btn bg-satu     mb-3 text-white" data-bs-toggle="modal" data-bs-target="#modalAddperkara">
                Tambah Perkara
            </button>
            <!-- button tambah perkara -->
            <table id="tablePerkara">
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
                                <a class="text-decoration-none mx-1" href="<?= base_url('banding/uploadbundle/') . $lhs['id_perkara'] ?>">
                                    <i class="fas fa-fw fa-upload" style="color: #206A5D ;" title="Unggah Berkas"></i>
                                </a>
                                <a class="text-decoration-none mx-1" href="" data-bs-toggle="modal" data-bs-target="#modalupdateperkara<?= $lhs['id_perkara'] ?>">
                                    <i class="fas fa-pen-square" style="color: #206A5D ;" title="Edit"></i>
                                </a>
                                <a class="text-decoration-none mx-1" href="<?= base_url('template_word/surat_pengantar/') . $lhs['id_perkara'] ?>">
                                    <i class="fas fa-fw fa-file-download" style="color: #206A5D ;" title="Download Surat Pengantar"></i>
                                </a>
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
                <button type="submit" class="btn bg-satu text-white" value="upload">Simpan</button>
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
                    <button type="submit" class="btn bg-satu text-white" value="upload">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- end modalupdateperkara -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik tombol "Keluar" jika ingin keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Keluar</a>
            </div>
        </div>
    </div>
</div>