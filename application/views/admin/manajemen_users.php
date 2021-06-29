<main>

    <div class="container-fluid px-4">
        <div class="row ">
            <div class="col-lg-5 col-md-12 mt-4">
                <!-- tampilkan semua user -->
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Pengguna</h4>
                        <small class="text-satu">Silahkan klik di nama pengguna untuk mengedit</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <?php foreach ($users as $u) : ?>
                                <li class="list-group-item clickable-row" data-id="<?= $u->id ?>"><?= $u->nama ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 mt-4">
                <!-- tampilkan semua user -->
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="Password" class="form-control" id="password">
                                    <div class="form-text">Kosongkan jika tidak merubah password</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="password_r" class="form-label">Repeat Password</label>
                                    <input type="password" class="form-control" id="password_r">
                                    <div class="form-text">Kosongkan jika tidak merubah password</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" aria-label="Default select example" id="role">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                    <option value="3">Hakim</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" checked type="checkbox" value="" id="aktif">
                                    <label class="aktif" for="flexCheckDefault">
                                        Aktif
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="tidak_aktif">
                                    <label class="tidak_aktif" for="flexCheckDefault">
                                        Tidak Aktif
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" id="save_user">Tambah</button>
                            <button type="button" class="btn btn-primary" id="save_user">Edit</button>
                            <button type="button" class="btn btn-primary" id="delete_user">Hapus</button>
                            <button type="button" class="btn btn-primary" id="reset_user">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>