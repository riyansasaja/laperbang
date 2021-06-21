<div class="container">
    <div class="row">
        <div class="col-12 col-lg-5 mt-3">
            <div class="card bg-light">
                <div class="card-header">
                    <h6>Data Perkara</h6>
                </div>
                <div class="card-body">
                    <!-- dataPerkara  -->
                    <table class="table table-hover">
                        <tbody>
                            <?php foreach ($perkara as $lhs) : ?>
                                <tr>
                                    <th>Nomor Perkara</th>
                                    <td><?php echo $lhs['no_perkara']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Perkara</th>
                                    <td><?php echo $lhs['jns_perkara']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pengajuan Banding</th>
                                    <td><?php echo $lhs['tgl_register']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nomor Perkara Banding</th>
                                    <td><?php echo $lhs['no_perkara_banding']; ?></td>
                                </tr>
                                <tr>
                                    <th>Status Terakhir</th>
                                    <td><?php echo $lhs['status_perkara']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- end dataPerkara -->
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 mt-3">
            <div class="card h-100">
                <div class="card-header">
                    <h6>Upload File</h6>
                </div>
                <div class="card-body">
                    <form action="/file-upload" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-2">
        <div class="col">
            <!-- accordion -->
            <div class="accordion" id="accordionExample">

                <!-- upload surat pengantar -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#suratPengantar" aria-expanded="true" aria-controls="collapseOne">
                            Surat Pengantar
                        </button>
                    </h2>
                    <div id="suratPengantar" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form method="post" action="<?php echo base_url('banding/pengantar_upload'); ?>" enctype="multipart/form-data">
                                <input type="text" value="<?= $perkara[0]['id_perkara'] ?>" hidden name="id_perkara"></input>
                                <div class="row justify-content-start mb-3">
                                    <div class="col-1" style="width: 1rem;">1.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Pengantar --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file1">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary" value="upload">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- end upload surat pengantar -->
                <!-- upload bundle A -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#bundleA" aria-expanded="true" aria-controls="collapseOne">
                            Bundle A
                        </button>
                    </h2>
                    <div id="bundleA" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form method="post" action="<?php echo base_url('banding/multiple_upload'); ?>" enctype="multipart/form-data">
                                <input type="text" value="<?= $perkara[0]['id_perkara'] ?>" hidden name="id_perkara"></input>
                                <div class="row justify-content-start mb-3">
                                    <div class="col-1" style="width: 1rem;">1.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Gugatan --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file1">

                                    </div>
                                </div>
                                <div class=" row mb-3">
                                    <div class="col-1" style="width: 1rem;">2.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Kuasa dari Kedua Belah Pihak (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">3.</div>
                                    <label for="formFileSm" class="col-4 form-label">Bukti Pembayaran Panjar Biaya Perkara (SKUM) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file3">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">4.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penetapan Majelis Hakim --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file4">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">5.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penunjukan Panitera Pengganti --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file5">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">6.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penunjukan Jurusita/Jurusita Pengganti --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file6">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">7.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penetapan Hari Sidang --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file7">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">8.</div>
                                    <label for="formFileSm" class="col-4 form-label">Relaas-relaas Panggilan --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file8">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">9.</div>
                                    <label for="formFileSm" class="col-4 form-label">Berita Acara Sidang --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file9">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">10.</div>
                                    <label for="formFileSm" class="col-4 form-label">Penetapan Sita Conservatoir/Revindicatoir (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file10">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">11.</div>
                                    <label for="formFileSm" class="col-4 form-label">Berita Acara Sita Conservatoir/Revindicatoir (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file11">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">12.</div>
                                    <label for="formFileSm" class=" col-4 col-label form-label">Lampiran-lampiran surat yang diajukan oleh kedua belah pihak (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file12">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">13.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat-surat bukti penggugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file13">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">14.</div>
                                    <label for="formFileSm" class="col-4 form-label">surat-surat bukti tergugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file14">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">15.</div>
                                    <label for="formFileSm" class="col-4 form-label">Tanggapan bukti-bukti tergugat dari penggugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file15">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">16.</div>
                                    <label for="formFileSm" class="col-4 form-label">Tanggapan bukti-bukti penggugat dari tergugat (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file16">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">17.</div>
                                    <label for="formFileSm" class="col-4 form-label">Gambar situasi (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file17">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">18.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat-surat lain (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file18">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block btn-primary" value="upload">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- upload Bundle B -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#bundleB" aria-expanded="true" aria-controls="collapseOne">
                            Bundle B
                        </button>
                    </h2>
                    <div id="bundleB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form method="post" action="<?php echo base_url('banding/multiple_uploadB'); ?>" enctype="multipart/form-data">
                                <input type="text" value="<?= $perkara[0]['id_perkara'] ?>" hidden name="id_perkara"></input>
                                <div class="row justify-content-start mb-3">
                                    <div class="col-1" style="width: 1rem;">1.</div>
                                    <label for="formFileSm" class="col-4 form-label">Salinan Putusan Pengadilan Agama /Mahkamah Syari'yah --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file1">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">2.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Kuasa dari Kedua Belah Pihak (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file2">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">3.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Banding --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file3">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">4.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Penerimaan Memori Banding --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file4">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">5.</div>
                                    <label for="formFileSm" class="col-4 form-label">Memori Banding (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file5">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">6.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Pemberitahuan Banding --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file6">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">7.</div>
                                    <label for="formFileSm" class="col-4 form-label">Pemberitahuan Penyerahan Memori Banding --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file7">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">8.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Penerimaan Kontra Memori Banding (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file8">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">9.</div>
                                    <label for="formFileSm" class="col-4 form-label">Kontra Memori Banding (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file9">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">10.</div>
                                    <label for="formFileSm" class="col-4 form-label">Pemberitahuan Penyerahan Kotra Memori Banding (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file10">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">11.</div>
                                    <label for="formFileSm" class=" col-4 col-label form-label">Relaas Pemberitahuan untuk memeriksa (Inzage) Berkas Perkara Banding --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file11">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">12.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Kuasa Khusus (bila ada) --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file12">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">13.</div>
                                    <label for="formFileSm" class="col-4 form-label">Bukti Penerimaan Biaya Perkara Banding --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file13">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">14.</div>
                                    <label for="formFileSm" class="col-4 form-label">Bukti Setor Biaya Pendaftaran Ke Kas Negara --pdf</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" name="file14">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- upload putusan -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#putusan" aria-expanded="false" aria-controls="collapseTwo">
                            Putusan
                        </button>
                    </h2>
                    <div id="putusan" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a class="btn btn-primary" href="">Download Putusan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end accordion -->
        </div>
    </div>



</div>