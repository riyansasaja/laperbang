<div class="container-fluid px-4">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <?php echo $this->session->flashdata('msg'); ?>
    <?php if (validation_errors()) { ?>
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">x</a>
            <strong><?php echo strip_tags(validation_errors()); ?></strong>
        </div>
    <?php } ?>
    <h3 class="mt-4">Dasbor Pengajuan Banding</h3>
    <ol class="breadcrumb mb-4">
        <!-- <li class="breadcrumb-item active">Dashboard</li> -->
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Perkara Masuk</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <small>1550</small>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Perkara Putus</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <small>1500</small>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Sisa Perkara</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <small>50</small>
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

            <button class="btn text-white btn-warning mb-3">Download Template Surat</button>
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
                                <a href="">
                                    <span class="badge rounded-pill bg-warning">Edit</span>
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
                    <input type="hidden" class="form-control" id="tanggalregister" name="tgl_register" value="<?php echo date('Y/m/d'); ?>">
                    <div class="row mb-3">
                        <label for="nomorPerkara" class="col-sm-2 col-form-label">Nomor Perkara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomorPerkara" name="no_perkara">
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
                        <label for="namaPihak" class="col-sm-2 col-form-label">Surat Pengantar</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile" name="file_upload">
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