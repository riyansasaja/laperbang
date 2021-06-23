<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>




<div class="container ">
    <h3 class="mt-4">Dasbor Pengajuan Banding</h3>
    <ol class="breadcrumb mb-4">
        <!-- <li class="breadcrumb-item active">Dashboard</li> -->
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card text-white mb-4 shadow">
                <div class="card-body bg-satu ">
                    <h6> <i class="fas fa-fw fa-book"></i> PERKARA MASUK</h6>
                </div>
                <div class="bg-satu-dark">
                    <h6 class="text-end  mx-2 my-2"><?php echo $data_harian; ?> Perkara</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card text-white mb-4 shadow">
                <div class="card-body  bg-dua">
                    <h6><i class="fas fa-fw fa-gavel"></i>PERKARA PUTUS</h6>
                </div>
                <div class="bg-dua-dark">
                    <h6 class="text-end mx-2 my-2"><?php echo $putus_harian; ?> Perkara</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card text-white mb-4 shadow">
                <div class="card-body  bg-empat">
                    <h6><i class="fas fa-fw fa-balance-scale-left"></i> SISA PERKARA</h6>

                </div>
                <div class=" bg-empat-dark">
                    <h6 class="text-end mx-2 my-2"><?php echo $sisa_harian; ?> Perkara</h6>
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
            <div class="table-responsive">
                <table class="table" id="tablePerkara">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomor Perkara</th>
                            <th>Jenis Perkara</th>
                            <th>Nomor Perkara Banding</th>
                            <th>Tanggal Register</th>
                            <th>Status</th>
                            <th style="width: 10%;">Action</th>
                        </tr>
                    </thead>
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

                                    <a class="text-decoration-none mx-1 col-12 col-lg-4" href="<?= base_url('banding/uploadbundle/') . $lhs['id_perkara'] ?>">
                                        <i class="fas fa-fw fa-upload" style="color: #206A5D ;" title="Unggah Berkas"></i>
                                    </a>
                                    <a class="text-decoration-none mx-1 col-12 col-lg-4" href="" data-bs-toggle="modal" data-bs-target="#modalupdateperkara<?= $lhs['id_perkara'] ?>">
                                        <i class="fas fa-pen-square" style="color: #206A5D ;" title="Edit"></i>
                                    </a>
                                    <a class="text-decoration-none mx-1 col-12 col-lg-4" href="<?= base_url('template_word/surat_pengantar/') . $lhs['id_perkara'] ?>">
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
                                <option value="">-- Pilih --</option>
                                <?php foreach ($perkara as $perk) : ?>
                                    <option value="<?= $perk['jns_kaper'] ?>"><?= $perk['jns_kaper'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="namaPihak" class="col-sm-2 col-form-label">Nama Pihak Penggugat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaPihak" name="nm_pihak_penggugat">
                        </div>
                        <div class="row mb-3">
                            <label for="namaPihak" class="col-sm-2 col-form-label">Nama Pihak Tergugat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaPihak" name="nm_pihak_tergugat">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat Pengantar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomor_surat" name="no_surat_pengantar" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenisPerkara" class="col-sm-2 col-form-label">Pejabat Berwenang</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="jenisPerkara" name="pejabat_berwenang">
                                    <option value="">-- Pilih --</option>

                                    <option value="Panitera"> Panitera</option>
                                    <option value="Panmud Hukum"> Panmud Hukum</option>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="namaPanitera" class="col-sm-2 col-form-label">Nama Pejabat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaPanitera" name="nm_pejabat" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nipPanitera" class="col-sm-2 col-form-label">NIP Pejabat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nipPanitera" name="nip_pejabat" onkeypress="return hanyaAngka(event)" required maxlength="16">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="banyaknya" class="col-sm-2 col-form-label">Banyaknya Berkas</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="banyaknya" name="banyaknya">
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
                            <input type="hidden" class="form-control" id="id_perkara<?= $no ?>" value="<?php echo $lhs['id_perkara']; ?>" name="id_perkara">
                            <div class="row mb-3">
                                <label for="nomorPerkara" class="col-sm-2 col-form-label">Nomor Perkara</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomorPerkara<?= $no ?>" name="no_perkara" value="<?php echo $lhs['no_perkara']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenisPerkara" class="col-sm-2 col-form-label">Jenis Perkara</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="jns_perkara">
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
                                    <input type="text" class="form-control" name="nm_pihak" value="<?php echo $lhs['nm_pihak_penggugat']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_surat_pengantar" class="col-sm-2 col-form-label">Nomor Surat Pengantar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat_pengantar" value="<?php echo $lhs['no_surat_pengantar']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="namaPanitera" class="col-sm-2 col-form-label">Nama Panitera</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nm_panitera" value="<?php echo $lhs['nm_pejabat']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nipPanitera" class="col-sm-2 col-form-label">NIP Panitera</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nip_panitera" value="<?php echo $lhs['nip_pejabat']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="banyaknya" class="col-sm-2 col-form-label">Banyaknya Berkas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="banyaknya" value="<?php echo $lhs['banyaknya']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="keterangan" value="<?php echo $lhs['keterangan']; ?>">
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