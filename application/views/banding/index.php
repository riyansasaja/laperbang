<div class="container-fluid px-4">
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
                    <tr>
                        <td>1</td>
                        <td>1500/PDT.Y/2021/PA.Ktg</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <a class="" href="<?= base_url('banding/uploadbundle') ?>">
                                <span class="badge rounded-pill bg-primary">Unggah Berkas</span>
                            </a> <br>
                            <a href="">
                                <span class="badge rounded-pill bg-warning">Edit</span>
                            </a>
                        </td>
                    </tr>



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
                <form>
                    <div class="row mb-3">
                        <label for="nomorPerkara" class="col-sm-2 col-form-label">Nomor Perkara</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomorPerkara">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jenisPerkara" class="col-sm-2 col-form-label">Jenis Perkara</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="jenisPerkara">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="namaPihak" class="col-sm-2 col-form-label">Nama Pihak</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaPihak">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="namaPihak" class="col-sm-2 col-form-label">Surat Pengantar</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </form>
                <!-- end form addBerkas -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modalAddperkara -->