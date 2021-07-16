<div class="container-fluid px4">


    <div class="row">
        <div class="col">
            <div class="text-center">
                <img src="<?= base_url('assets/') ?>img/user_logo.png" alt="">
                <p>Pengadilan Agama Amurang</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 align-self-center">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="width: 6rem;">Username</td>
                                <td>Pengadilan Agama Amurang</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>paamurang@gmail.com</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#Modal_update_user">Ubah Data</a>
                                    <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#Modal_update_password">Ubah Password</a>
                                </td>
                            </tr>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- modal update user -->
<div class="modal fade" id="Modal_update_user" tabindex="-1" aria-labelledby="modalUpdateUser" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputusername" value="Pengadilan Agama Amurang">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputemail" value="paamurang@gmail.com">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Update Data</button>
            </div>
        </div>
    </div>
</div>

<!-- modal ubah Password -->
<div class="modal fade" id="Modal_update_password" tabindex="-1" aria-labelledby="modalUpdatePassword" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mb-3">
                        <label for="password_lama" class="col-sm-2 col-form-label">Input Password Lama</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_lama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password_baru" class="col-sm-2 col-form-label">Input Password Baru</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_baru">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password_baru_verif" class="col-sm-2 col-form-label">Input Password Baru</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_baru_verif">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Update Password</button>
            </div>
        </div>
    </div>
</div>