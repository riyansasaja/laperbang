<div class="container-fluid bg-vektor">
    <div class="container">

        <div class="row mt-3">
            <div class="">
                <!-- <div class="card border-light"> -->
                <div class="row d-flex justify-content-center py-4">
                    <div class="col-5 mx-1 px-3">
                        <div class="card shadow rounded animate__animated animate__fadeIn animate__fast">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/') ?>user.svg" alt="" class="img-fluid" style="width: 30%;">
                                    <h5>My Profile</h5>
                                </div>

                                <form>
                                    <input type="text" id="profile-id" hidden='true'>
                                    <div class="mb-1">
                                        <small class="text-success">
                                            <label for="profile-name" class="form-label">Nama</label>
                                        </small>
                                        <input type="text" class="form-control" id="profile-name">
                                    </div>
                                    <div class="mb-1">
                                        <small class="text-success">
                                            <label for="profile-email" class="form-label">email</label>
                                        </small>
                                        <input type="email" class="form-control" id="profile-email">
                                    </div>
                                    <div class="mb-1">
                                        <small class="text-success">
                                            <label for="profile-username" class="form-label">Username</label>
                                        </small>
                                        <input type="text" class="form-control text-secondary" id="profile-username" disabled>
                                    </div>
                                    <div class="mb-1">
                                        <small class="text-success">
                                            <label for="profile-since" class="form-label">Aktif Sejak</label>
                                        </small>
                                        <input type="text" class="form-control text-secondary" id="profile-since" disabled>
                                    </div>


                                    <div class="d-grid gap-2 col-3 mx-auto">
                                        <button class="btn btn-success mt-3" type="button" id="profile-save">Simpan</button>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="col-4 mx-1 px-3">
                        <div class="card shadow rounded animate__animated animate__fadeIn animate__slower">
                            <div class="card-body">
                                <u>
                                    <h5>Update Password</h5>
                                </u>
                                <form>
                                    <div class="mb-1">
                                        <small class="text-success">
                                            <label for="old-password" class="form-label">Password Lama</label>
                                        </small>
                                        <input type="password" class="form-control" name="oldPassword" id="old-password">
                                        <div id="old-passwordHelp" class="form-text text-danger"></div>
                                    </div>
                                    <div class="mb-1">
                                        <small class="text-success">
                                            <label for="new-password" class="form-label">Password Baru</label>
                                        </small>
                                        <input type="password" class="form-control" name="newPassword" id="new-password">
                                        <div id="new-passwordHelp" class="form-text text-danger"></div>
                                    </div>
                                    <div class="mb-1">
                                        <small class="text-success">
                                            <label for="repeat-password" class="form-label">Ulangi Password Baru</label>
                                        </small>
                                        <input type="password" class="form-control" id="repeat-password" name="repeatPassword">
                                        <div id="repeat-passwordHelp" class="form-text text-danger"></div>
                                    </div>

                                    <div class="d-grid gap-2 col-8 mx-auto">
                                        <button class="btn btn-success mt-3" type="button" id="change-password">Ubah Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- </div> -->
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