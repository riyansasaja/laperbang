<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="konten" id="konten">
                <div class="table-responsive">
                    <table class="table" id="tablePerkaraHakim">
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
                                <th>Status</th>
                                <th style="width: 5%;">Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($perkara_banding as $lhs) : ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $lhs['nama']; ?></td>
                                    <td><?php echo $lhs['no_perkara']; ?></td>
                                    <td><?php echo $lhs['jns_perkara']; ?></td>
                                    <td><?php echo $lhs['no_perkara_banding']; ?></td>
                                    <td><?php echo $lhs['tgl_register']; ?></td>
                                    <td><?php echo $lhs['nm_pihak_penggugat']; ?></td>
                                    <td><?php echo $lhs['nm_pihak_tergugat']; ?></td>
                                    <td><?php echo $lhs['status_perkara']; ?></td>
                                    <td>
                                        <a class="text-decoration-none mx-1 col-12 col-lg-4" href="<?= base_url('banding/uploadbundle/') . $lhs['id_perkara'] ?>">
                                            <i class="fas fa-fw fa-upload" style="color: #206A5D ;" title="Unggah Berkas"></i>
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
    <div class="row">
        <div class="col">
            <div id="judul"></div>
        </div>
    </div>
</div>