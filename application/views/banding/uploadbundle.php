<div class="container-fluid px-4">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <?php echo $this->session->flashdata('msg'); ?>
    <?php if (validation_errors()) { ?>
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">x</a>
            <strong><?php echo strip_tags(validation_errors()); ?></strong>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col mt-3">
            <div class="card bg-light">
                <div class="card-body">
                    <!-- dataPerkara  -->
                    <table class="table table-borderless">
                        <tbody>
                            <?php foreach ($perkara as $lhs) : ?>
                                <tr>
                                    <td>Nomor Perkara</td>
                                    <td><?php echo $lhs['no_perkara']; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Perkara</td>
                                    <td><?php echo $lhs['jns_perkara']; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pengajuan Banding</td>
                                    <td><?php echo $lhs['tgl_register']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Perkara Banding</td>
                                    <td><?php echo $lhs['no_perkara_banding']; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Terakhir</td>
                                    <td><?php echo $lhs['status_perkara']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- end dataPerkara -->
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-2">
        <div class="col">
            <!-- accordion -->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bundleA" aria-expanded="true" aria-controls="collapseOne">
                            Bundle A
                        </button>
                    </h2>
                    <div id="bundleA" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form method="post" action="<?php echo base_url('banding/uploadbundle_a'); ?>" enctype="multipart/form-data">
                                <input type="text" value="<?= $perkara[0]['id_perkara'] ?>" hidden name="id_perkara"></input>
                                <div class="row justify-content-start mb-3">
                                    <div class="col-1" style="width: 1rem;">1.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Gugatan --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file_upload">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">2.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Kuasa dari Kedua Belah Pihak (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file_upload">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">3.</div>
                                    <label for="formFileSm" class="col-4 form-label">Bukti Pembayaran Panjar Biaya Perkara (SKUM) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">4.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penetapan Majelis Hakim --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">5.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penunjukan Panitera Pengganti --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">6.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penetapan Hari Sidang --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">7.</div>
                                    <label for="formFileSm" class="col-4 form-label">Relaas-relaas Panggilan --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">8.</div>
                                    <label for="formFileSm" class="col-4 form-label">Berita Acara Sidang --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">9.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penetapan Sita Conservatoir/Revindicatoir (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">10.</div>
                                    <label for="formFileSm" class="col-4 form-label">Berita Acara Sita Conservatoir/Revindicatoir (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">11.</div>
                                    <label for="formFileSm" class=" col-4 col-label form-label">Lampiran-lampiran surat yang diajukan oleh kedua belah pihak (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">12.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat-surat bukti penggugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">13.</div>
                                    <label for="formFileSm" class="col-4 form-label">surat-surat bukti tergugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">14.</div>
                                    <label for="formFileSm" class="col-4 form-label">Tanggapan bukti-bukti tergugat dari penggugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">15.</div>
                                    <label for="formFileSm" class="col-4 form-label">Tanggapan bukti-bukti penggugat dari tergugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">16.</div>
                                    <label for="formFileSm" class="col-4 form-label">Gambar situasi (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">17.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat-surat lain (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" placeholder="tes" name="file">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block btn-primary" value="upload">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bundleB" aria-expanded="false" aria-controls="collapseTwo">
                            Bundle B
                        </button>
                    </h2>
                    <div id="bundleB" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
            <!-- end accordion -->
        </div>
    </div>



</div>