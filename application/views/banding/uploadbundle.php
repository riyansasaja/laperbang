<!-- #ambil data untuk di simpan dalam variabel $folder -->
<?php
$folder = strtr($perkara['no_perkara'], '/', '-');
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-5 mt-3">
            <div class="card">
                <div class="card-header">
                    <h6>Data Perkara</h6>
                </div>
                <div class="card-body">
                    <!-- dataPerkara  -->
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Nomor Perkara</th>
                                <td><?php echo $perkara['no_perkara']; ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Perkara</th>
                                <td><?php echo $perkara['jns_perkara']; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengajuan Banding</th>
                                <td><?php echo $perkara['tgl_register']; ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Perkara Banding</th>
                                <td><?php echo $perkara['no_perkara_banding']; ?></td>
                            </tr>
                            <tr>
                                <th>Status Terakhir</th>
                                <td><?php echo $perkara['status_perkara']; ?></td>
                            </tr>
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
            <div class="accordion accordion-flush" id="accordionExample">

                <!-- upload surat pengantar -->
                <div class="accordion-item">
                    <h2 class="accordion-header garis-bawah" id="headingOne">
                        <button class="accordion-button bg-light" data-bs-toggle="collapse" data-bs-target="#suratPengantar" aria-expanded="true" aria-controls="collapseOne">
                            <span class="text-satu">Surat Pengantar</span>
                        </button>
                    </h2>
                    <div id="suratPengantar" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- start form -->
                            <form method="post" action="<?php echo base_url('banding/pengantar_upload'); ?>" enctype="multipart/form-data">
                                <!-- input hidden -->
                                <input type="text" value="<?= $perkara['id_perkara'] ?>" hidden name="id_perkara"></input>
                                <input type="text" value="<?= $folder ?>" hidden name="folder"></input>
                                <!-- === -->
                                <div class="row justify-content-start mb-3">
                                    <div class="col-1" style="width: 1rem;">1.</div>
                                    <label for="formFileSm" class="col-6 form-label">Surat Pengantar --pdf</label>
                                    <!-- input file -->
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max2" id="formFileSm" type="file" accept="application/pdf" name="surat_pengantar" required>
                                        <small class="text-satu fw-lighter">File PDF | Maximal 2MB | <i class="text-danger">Wajib Upload</i></small>
                                    </div>
                                    <!-- ====== -->
                                    <div class="col-1 <?= $perkara['sp_perkara'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/' . $perkara['sp_perkara'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <button type="submit" class="btn text-white bg-satu" value="upload">Kirim</button>
                            </form>
                            <!-- end Form -->
                        </div>
                    </div>
                </div>
                <!-- end upload surat pengantar -->

                <!-- upload bundle A -->
                <div class="accordion-item">
                    <h2 class="accordion-header garis-bawah" id="headingOne">
                        <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#bundleA" aria-expanded="true" aria-controls="collapseOne">
                            <span class="text-satu">Bundle A</span>
                        </button>
                    </h2>
                    <div id="bundleA" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?= form_open_multipart('banding/uploadbundelA'); ?>
                            <!-- hidden input -->
                            <input type="text" value="<?= $perkara['id_perkara'] ?>" hidden name="id_perkara"></input>
                            <input type="text" value="<?= $folder ?>" hidden name="folder"></input>
                            <!-- end hidden input -->
                            <div class="row justify-content-start mb-3">
                                <div class="col-1" style="width: 1rem;">1.</div>
                                <label for="formFileSm" class="col-4 form-label">Surat Gugatan</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file1" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['surat_gugatan'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['surat_gugatan'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>

                            </div>
                            <hr>
                            <div class=" row mb-3">
                                <div class="col-1" style="width: 1rem;">2.</div>
                                <label for="formFileSm" class="col-4 form-label">Surat Kuasa dari Kedua Belah Pihak (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file2">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB | <i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['sk_bundelA'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['sk_bundelA'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">3.</div>
                                <label for="formFileSm" class="col-4 form-label">Bukti Pembayaran Panjar Biaya Perkara (SKUM)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file3" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['bukti_pemb_panjar'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['bukti_pemb_panjar'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">4.</div>
                                <label for="formFileSm" class="col-4 form-label">Penetapan Majelis Hakim</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file4" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['majelis_hakim'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['majelis_hakim'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">5.</div>
                                <label for="formFileSm" class="col-4 form-label">Penunjukan Panitera Pengganti</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file5" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['penunjukan_pp'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['penunjukan_pp'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">6.</div>
                                <label for="formFileSm" class="col-4 form-label">Penunjukan Jurusita/Jurusita Pengganti</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file6" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['penunjukan_js'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['penunjukan_js'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">7.</div>
                                <label for="formFileSm" class="col-4 form-label">Penetapan Hari Sidang</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file7" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['penetapan_hari_sidang'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['penetapan_hari_sidang'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">8.</div>
                                <label for="formFileSm" class="col-4 form-label">Relaas-relaas Panggilan</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file8" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['relaas_panggilan'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['relaas_panggilan'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">9.</div>
                                <label for="formFileSm" class="col-4 form-label">Berita Acara Sidang</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max80" id="formFileSm" type="file" accept="application/pdf" name="file9" required>
                                    <small class="text-satu fw-lighter">PDF|Maksimal 80MB|<i class="text-danger">Wajib</i></small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['ba_sidang'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['ba_sidang'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">10.</div>
                                <label for="formFileSm" class="col-4 form-label">Penetapan Sita Conservatoir/Revindicatoir (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file10">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['penetapan_sita'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['penetapan_sita'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">11.</div>
                                <label for="formFileSm" class="col-4 form-label">Berita Acara Sita Conservatoir/Revindicatoir (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file11">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB|</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['ba_sita'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['ba_sita'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">12.</div>
                                <label for="formFileSm" class=" col-4 col-label form-label">Lampiran-lampiran surat yang diajukan oleh kedua belah pihak (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file12">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['lampiran_surat'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['lampiran_surat'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">13.</div>
                                <label for="formFileSm" class="col-4 form-label">Surat-surat bukti penggugat (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file13">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20 mb</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['surat_bukti_penggugat'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['surat_bukti_penggugat'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">14.</div>
                                <label for="formFileSm" class="col-4 form-label">surat-surat bukti tergugat (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file14">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['surat_bukti_tergugat'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['surat_bukti_tergugat'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">15.</div>
                                <label for="formFileSm" class="col-4 form-label">Tanggapan bukti-bukti tergugat dari penggugat (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file15">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['tanggapan_bukti_tergugat'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['tanggapan_bukti_tergugat'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">16.</div>
                                <label for="formFileSm" class="col-4 form-label">Tanggapan bukti-bukti penggugat dari tergugat (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file16">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['tanggapan_bukti_penggugat'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['tanggapan_bukti_penggugat'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">17.</div>
                                <label for="formFileSm" class="col-4 form-label">Gambar situasi (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file17">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['gambar_situasi'] ? '' : 'd-none' ?> ">
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['gambar_situasi'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row mb-3">
                                <div class="col-1" style="width: 1rem;">18.</div>
                                <label for="formFileSm" class="col-4 form-label">Surat-surat lain (bila ada)</label>
                                <div class="col-4">
                                    <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file18">
                                    <small class="text-satu fw-lighter">PDF|Maksimal 20MB</small>
                                </div>
                                <div class="col-3 my-auto <?= $perkara['surat_lain'] ? '' : 'd-none' ?> ">
                                    <span class="text-satu"> <i class="fas fa-fw fa-file-contract"></i></span>
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-a' . '/' . $perkara['surat_lain'] ?>" class="text-decoration-none text-reset">
                                        <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                    </a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary" name="submit">Kirim</button>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>

                <!-- upload Bundle B -->
                <div class="accordion-item">
                    <h2 class="accordion-header garis-bawah" id="headingTwo">
                        <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#bundleB" aria-expanded="true" aria-controls="collapseOne">
                            <span class="text-satu">Bundle B</span>
                        </button>
                    </h2>
                    <div id="bundleB" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- form Start -->
                            <form method="post" action="<?php echo base_url('banding/multiple_uploadB'); ?>" enctype="multipart/form-data">

                                <!-- hide input -->
                                <input type="text" value="<?= $perkara['id_perkara'] ?>" hidden name="id_perkara"></input>
                                <input type="text" value="<?= $folder; ?>" hidden name="folder"></input>
                                <!-- End hideinput -->

                                <div class="row justify-content-start mb-3">
                                    <div class="col-1" style="width: 1rem;">1.</div>
                                    <label for="formFileSm" class="col-4 form-label">Salinan Putusan Pengadilan Agama /Mahkamah Syari'yah</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max20" id="formFileSm" type="file" accept="application/pdf" name="file1" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 20MB|<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['salinan_putusan_pa'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['salinan_putusan_pa'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row justify-content-start mb-3">
                                    <div class="col-1" style="width: 1rem;"></div>
                                    <label for="formFileSm" class="col-4 form-label"></label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max80" id="formFileSm" type="file" accept="application/rtf" name="file16" required>
                                        <small class="text-satu fw-lighter">RTF|Maksimal 80MB|<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['salinan_putusan_pa'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['salinan_putusan_pa_rtf'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">2.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Kuasa dari Kedua Belah Pihak (bila ada)</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file2">
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['sk_bundelb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['sk_bundelb'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">3.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Banding</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file3" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB|<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['akta_banding'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['akta_banding'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">4.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Penerimaan Memori Banding</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file4" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB|<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['akta_penerimaan_mb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['akta_penerimaan_mb'] ?>" class="text-decoration-none text-reset"><span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">5.</div>
                                    <label for="formFileSm" class="col-4 form-label">Memori Banding (bila ada)</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file5">
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['memori_banding'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['memori_banding'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <!-- bulum bekeng depe backend -->
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;"></div>
                                    <label for="formFileSm" class="col-4 form-label"></label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max80" id="formFileSm" type="file" accept="application/rtf" name="file17">
                                        <small class="text-satu fw-lighter">RTF|Maksimal 80MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['memori_banding'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['memori_banding_rtf'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- end -->

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">6.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Pemberitahuan Banding</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file6" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB|<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['akta_pemberitahuan_banding'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/' . '/' . $perkara['akta_pemberitahuan_banding'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">7.</div>
                                    <label for="formFileSm" class="col-4 form-label">Pemberitahuan Penyerahan Memori Banding</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file7" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB|<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['pemberitahuan_penyerahan_mb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['pemberitahuan_penyerahan_mb'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">8.</div>
                                    <label for="formFileSm" class="col-4 form-label">Akta Penerimaan Kontra Memori Banding (bila ada)</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file8">
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['akta_penerimaankontra_mb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['akta_penerimaankontra_mb'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">9.</div>
                                    <label for="formFileSm" class="col-4 form-label">Kontra Memori Banding (bila ada)</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file9">
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['kontra_mb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="bundle_b/<?= $perkara['kontra_mb'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>


                                <!-- bulum bekeng depe backend -->
                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;"></div>
                                    <label for="formFileSm" class="col-4 form-label"></label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max80" id="formFileSm" type="file" accept="application/rtf" name="file18">
                                        <small class="text-satu fw-lighter">RTF|Maksimal 80MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['kontra_mb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['kontra_mb_rtf'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- end -->

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">10.</div>
                                    <label for="formFileSm" class="col-4 form-label">Pemberitahuan Penyerahan Kotra Memori Banding (bila ada)</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file10">
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['pemberitahuan_penyerahankontra_mb'] ? '' : 'd-none' ?> ">
                                        <span class="text-satu"> <i class="fas fa-fw fa-file-contract"></i></span>
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['pemberitahuan_penyerahankontra_mb'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">11.</div>
                                    <label for="formFileSm" class=" col-4 col-label form-label">Relaas Pemberitahuan untuk memeriksa (Inzage) Berkas Perkara Banding</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file11" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['relaas_periksa_berkas_pb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['relaas_periksa_berkas_pb'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">12.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Kuasa Khusus (bila ada)</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file12">
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['sk_khusus'] ? '' : 'd-none' ?> ">
                                        <span class="text-satu"> <i class="fas fa-fw fa-file-contract"></i></span>
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['sk_khusus'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">13.</div>
                                    <label for="formFileSm" class="col-4 form-label">Bukti Penerimaan Biaya Perkara Banding</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file13" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['bukt_pengiriman_bpb'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['bukt_pengiriman_bpb'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">14.</div>
                                    <label for="formFileSm" class="col-4 form-label">Bukti Setor Biaya Pendaftaran Ke Kas Negara</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file14" required>
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB|<i class="text-danger">Wajib</i></small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['bukti_setor_bp_kasnegara'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="bundle_b/<?= $perkara['bukti_setor_bp_kasnegara'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-1" style="width: 1rem;">15.</div>
                                    <label for="formFileSm" class="col-4 form-label">Surat Lainnya (Bila ada)</label>
                                    <div class="col-4">
                                        <input class="form-control form-control-sm max10" id="formFileSm" type="file" accept="application/pdf" name="file15">
                                        <small class="text-satu fw-lighter">PDF|Maksimal 10MB</small>
                                    </div>
                                    <div class="col-3 my-auto <?= $perkara['surat_lainnya_b'] ? '' : 'd-none' ?> ">
                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $folder . '/bundel-b' . '/' . $perkara['surat_lainnya_b'] ?>" class="text-decoration-none text-reset">
                                            <span class="text-satu"> <i class="fas fa-fw fa-eye"></i></span>
                                        </a>
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
                            <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/banding/download_putusan/<?= $perkara['id_perkara'] ?>">Download Putusan</a>
                        </div>
                    </div>
                </div>
                <!-- </ div> -->
                <!-- end accordion -->
            </div>
        </div>



    </div>


    <!-- //modal tampil pdf -->

    <div class="modal fade" id="modalPdf">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Berkas Perkara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="tampil">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mx-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <!-- end modal tampil pdf -->