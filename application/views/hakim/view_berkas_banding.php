<div class="container">
    <div class="row mb-3">
        <div class="col">
            <table class="table">
                <tbody>
                    <?php foreach ($detail_berkas as $db) : ?>
                        <tr>
                            <th>Berkas Bundel A</th>
                        </tr>
                        <tr>
                            <td><?= $db->surat_gugatan; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->sk_bundelA; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->bukti_pemb_panjar; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->majelis_hakim; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->penunjukan_pp; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->penunjukan_js; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->penetapan_hari_sidang; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->relaas_panggilan; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->ba_sidang; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->penetapan_sita; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->ba_sita; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->lampiran_surat; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->surat_bukti_penggugat; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->surat_bukti_tergugat; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->tanggapan_bukti_tergugat; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->tanggapan_bukti_penggugat; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->gambar_situasi; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->surat_lain; ?></td>
                        </tr>
                        <tr>
                            <td><?= $db->salinan_putusan_pa; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>