<main class="mt-5">
    <div class="container-fluid px-4 ">
        <div class="row">
            <div class="col">

                <div class="table-responsive">
                    <table class="table" id="listperkara">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Satker</th>
                                <th>Nomor Perkara</th>
                                <th>Jenis Perkara</th>
                                <th>Nomor Perkara Banding</th>
                                <th>Tanggal Register</th>
                                <th>Pihak Penggungat</th>
                                <th>Pihak Tergugat</th>
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
                    <input type="text" class="form-control" name="nomor_perkara_banding" id="nomor_perkara_banding">
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
                <form action="">

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Silahkan Upload File Putusan Perkara</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>