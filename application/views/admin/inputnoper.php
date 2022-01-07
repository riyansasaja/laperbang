<main class="mt-5">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>

    <div class="container-fluid px-4 ">
        <div class="row">
            <div class="col">

                <div class="table-responsive">
                    <table class="table" id="listperkara">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Satker</th>
                                <th>Tanggal Upload</th>
                                <th>Pihak Penggugat</th>
                                <th>Pihak Tergugat</th>
                                <th>Nomor Perkara Tk.I</th>
                                <th>Jenis Perkara</th>
                                <th>Tanggal Register Banding</th>
                                <th>Nomor Perkara Banding</th>
                                <th>Status</th>
                                <th style="width: 5%;">Lihat</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


</main>


<!-- Modal -->
<div class="modal fade" id="modal_input_perkara" tabindex="-1" aria-labelledby="inputperkaramodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Nomor Perkara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="hidden" class="form-control" id="tgl_reg_banding" name="tgl_reg_banding" value="<?php echo date('Y-m-d'); ?>">
                    <input type="text" class="form -control" name="nomor_perkara_banding" id="nomor_perkara_banding">
                    <span class="input-group-text">/Pdt.G/</span>
                    <input type="text" class="form-control" name="tahun_perkara_banding" id="tahun_perkara_banding" value="<?= date('Y'); ?>">
                    <span class="input-group-text">/PTA.Mdo</span>
                </div>
                <small class="text-danger fw-lighter">Pastikan nomor yang diinput sama dengan nomor perkara SIPP Banding !!!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- //modal upload file -->
<div class="modal fade" id="uploadFileModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadPutusan'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_perkara" name="id_perkara" hidden>
                    <input type="text" id="no_perkara" name="no_perkara" hidden>
                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File Putusan Perkara</label>
                        <input class="form-control" type="file" id="input1" name="file_putusan" required>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- //modal upload file PP -->

<div class="modal fade" id="uploadFilePP" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Panitera Pengganti</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo base_url('admin/upload_pp'); ?>" enctype="multipart/form-data">

                    <input type="text" id="id_perkarapp" name="id_perkara" hidden>
                    <input type="text" id="no_perkarapp" name="no_perkara" hidden>


                    <div class="mb-3">
                        <!-- <label for="user_pp" class="form-label">Panitera Pengganti</label> -->
                        <select class="form-select" id="user_pp" name="id_user_pp">
                            <option value="" selected>-- Pilih --</option>
                            <?php foreach ($panitera as $perk) : ?>
                                <option value="<?= $perk['id'] ?>"><?= $perk['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload dokumen Penunjukkan Panitera Pengganti</label>
                        <input class="form-control" type="file" id="input1" name="file_putusan">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- //modal pilih majelis hakim -->

<div class="modal fade" id="uploadMH" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Majelis Hakim</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/pilih_mh'); ?>" enctype="multipart/form-data">

                    <input type="text" id="id_perkaramh" name="id_perkara" hidden>
                    <input type="text" id="no_perkaramh" name="no_perkara" hidden>

                    <div class="mb-3">
                        <!-- <label for="user_pp" class="form-label">Panitera Pengganti</label> -->
                        <select class="form-select" id="user_pp" name="majelis_hakim">
                            <option value="" selected>-- Pilih --</option>

                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>

                        </select>

                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload dokumen PMH</label>
                        <input class="form-control" type="file" id="formFile" name="file_putusan">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- //modal upload file -->
<div class="modal fade" id="Modalupload" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadphs'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_st" name="id_perkara" hidden>
                    <input type="text" id="no_perkaraphs" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_phs1"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadphslanj" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadphslanj'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stphslanj" name="id_perkara" hidden>
                    <input type="text" id="no_perkaraphslanj" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_phslanj"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadsidper" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadsidper'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stsidper" name="id_perkara" hidden>
                    <input type="text" id="no_perkarasidper" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_sidper"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadsidlanj" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadsidlanj'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stsidlanj" name="id_perkara" hidden>
                    <input type="text" id="no_perkarasidlanj" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_sidlanj"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadsidlanj1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadsidlanj1'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stsidlanj1" name="id_perkara" hidden>
                    <input type="text" id="no_perkarasidlanj1" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_sidlanj1"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadsidlanj2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadsidlanj2'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stsidlanj2" name="id_perkara" hidden>
                    <input type="text" id="no_perkarasidlanj2" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_sidlanj2"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadsidlanj3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadsidlanj3'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stsidlanj3" name="id_perkara" hidden>
                    <input type="text" id="no_perkarasidlanj3" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_sidlanj3"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadsidlanj4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadsidlanj4'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stsidlanj4" name="id_perkara" hidden>
                    <input type="text" id="no_perkarasidlanj4" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_sidlanj4"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->

<!-- //modal upload file -->
<div class="modal fade" id="Modaluploadsidlanj5" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/uploadsidlanj5'); ?>" enctype="multipart/form-data">
                    <input type="text" id="id_stsidlanj5" name="id_perkara" hidden>
                    <input type="text" id="no_perkarasidlanj5" name="no_perkara" hidden>

                    <div class="mb-3" id="box">
                        <label for="formFile" class="form-label" id="label_text">Silahkan Upload File (Optional)</label>
                        <input class="form-control" type="file" id="inp" name="file_sidlanj5"></input>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- //end modal upload -->