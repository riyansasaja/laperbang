<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col">
            <?php foreach ($detail_berkas as $db) : ?>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Bundel A
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- isi di disini bundel A -->
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>Surat Gugatan</td>

                                            <td>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdfHakim" data-id="bundle_a/<?= $db->surat_gugatan; ?>" data-judul="c_surat_gugatan" class="text-decoration-none text-reset">
                                                    <?= $db->surat_gugatan; ?>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Surat Kuasa dari Kedua Belah Pihak</td>
                                            <td>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdfHakim" data-id="bundle_a/<?= $db->sk_bundelA; ?>" data-judul="c_sk_bundelA" class="text-decoration-none text-reset">
                                                    <?= $db->sk_bundelA; ?>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bukti Pembayaran Panjar Biaya Perkara (SKUM)</td>
                                            <td><?= $db->bukti_pemb_panjar; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Penetapan Majelis Hakim</td>
                                            <td><?= $db->majelis_hakim; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Penunjukan Panitera Pengganti</td>
                                            <td><?= $db->penunjukan_pp; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Penunjukan Jurusita/Jurusita Pengganti</td>
                                            <td><?= $db->penunjukan_js; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Penetapan Hari Sidang</td>
                                            <td><?= $db->penetapan_hari_sidang; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Relaas-relaas Panggilan</td>
                                            <td><?= $db->relaas_panggilan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Berita Acara Sidang</td>
                                            <td><?= $db->ba_sidang; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Penetapan Sita Conservatoir/Revindicatoir</td>
                                            <td><?= $db->penetapan_sita; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Berita Acara Sita Conservatoir/Revindicatoir</td>
                                            <td><?= $db->ba_sita; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Lampiran-lampiran surat yang diajukan oleh kedua belah pihak</td>
                                            <td><?= $db->lampiran_surat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Surat-surat bukti penggugat</td>
                                            <td><?= $db->surat_bukti_penggugat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>surat-surat bukti tergugat</td>
                                            <td><?= $db->surat_bukti_tergugat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggapan bukti-bukti tergugat dari penggugat</td>
                                            <td><?= $db->tanggapan_bukti_tergugat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggapan bukti-bukti penggugat dari tergugat</td>
                                            <td><?= $db->tanggapan_bukti_penggugat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gambar situasi</td>
                                            <td><?= $db->gambar_situasi; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Surat-surat lain</td>
                                            <td><?= $db->surat_lain; ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Bundel B
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- isi di sini bundel B -->
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>Salinan Putusan Pengadilan Agama</td>
                                            <td><?= $db->salinan_putusan_pa; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Kuasa dari Kedua Belah Pihak</td>
                                            <td><?= $db->sk_bundelb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Akta Banding</td>
                                            <td><?= $db->akta_banding; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Akta Penerimaan Memori Banding</td>
                                            <td><?= $db->akta_penerimaan_mb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Memori Banding</td>
                                            <td><?= $db->memori_banding; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Akta Pemberitahuan Banding</td>
                                            <td><?= $db->akta_pemberitahuan_banding; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pemberitahuan Penyerahan Memori Banding</td>
                                            <td><?= $db->pemberitahuan_penyerahan_mb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Akta Penerimaan Kontra Memori Banding</td>
                                            <td><?= $db->akta_penerimaankontra_mb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kontra Memori Banding</td>
                                            <td><?= $db->kontra_mb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pemberitahuan Penyerahan Kotra Memori Banding</td>
                                            <td><?= $db->pemberitahuan_penyerahankontra_mb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Relaas Pemberitahuan untuk memeriksa (Inzage) Berkas Perkara Banding</td>
                                            <td><?= $db->relaas_periksa_berkas_pb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Kuasa Khusus </td>
                                            <td><?= $db->sk_khusus; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bukti Penerimaan Biaya Perkara Banding</td>
                                            <td><?= $db->bukt_pengiriman_bpb; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Bukti Setor Biaya Pendaftaran Ke Kas Negara</td>
                                            <td><?= $db->bukti_setor_bp_kasnegara; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Surat Lainnya</td>
                                            <!-- <td>belum ada </td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>


<!-- //modal tampil pdf hakim -->

<div class="modal fade" id="modalPdfHakim">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">

            <div class="modal-body row">

                <div class="col-8" style="height: 100%;">
                    <div class="card" id="tampil" style="height: 100%;">

                    </div>

                </div>
                <div class="col-4" style="height: 100%;">
                    <div class="card overflow-auto mb-2 p-2" id="komentar" style="height: 80%;">


                    </div>
                    <div class="card border-light" id="tampil" style="height: 20%;">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tulis catatan di sini</label>
                            <textarea class="form-control" id="catatan" rows="3" name="catatan"></textarea>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mx-auto" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn bg-dua text-white mx-auto" id="kirim">Kirim Catatan</button>
            </div>
        </div>
    </div>
</div>





<!-- end modal tampil pdf -->