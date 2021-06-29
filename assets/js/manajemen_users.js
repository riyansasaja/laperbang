$(document).ready(function () {

    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/`;
    console.log(path);


    $(".clickable-row").on('click', function () {
        // window.location = $(this).data("href");
        let id = $(this).data('id')
        $.ajax({
            type: "POST",
            url: `${path}/admin/get_data_user`,
            data: {
                id: id,
                // email: email,
                // username: username,
                // role: role_id,
                // is_active: is_active
            },
            dataType: "json",
            success: function (response) {

                $.each(response, function (i, val) {
                    $('#id').val(val.id);
                    $('#nama').val(val.nama);
                    $('#email').val(val.email);
                    $('#username').val(val.username);
                    $('#role_id').val(val.role_id);
                    $('#is_active').val(val.is_active);
                });
            }
        });
    });


    $('#delete_user').on('click', function () {
        Swal.fire({
            title: 'Yakin Mau Menghapus?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Yakin`,
            cancelButtonText: `Kembali`,
            denyButtonText: `Tidak Yakin`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    });



    $('#reset_user').on('click', function () {
        $('#nama').val('');
        $('#email').val('');
        $('#username').val('');
    });

    $('#save_user').on('click', function () {
        //ambil data
        // let id = $(this).data('id');
        // let nama = $('#nama').val();

        var nama = $('input[name="nama"]').val();
        var email = $('input[name="email"]').val();
        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();
        var password_r = $('input[name="password_r"]').val();
        var role_id = $('select[name="role_id"]').val();
        var is_active = $('select[name="is_active"]').val();
        var id = $('input[name="id"]').val();

        $.ajax({
            type: "POST",
            url: `${path}/admin/updateUser`,
            data: {
                id: id,
                nama: nama,
                email: email,
                username: username,
                password: password,
                password_r: password_r,
                role_id: role_id,
                is_active: is_active
            },
            dataType: "json",
            success: function (e) {
                console.log(e);

                $('#password_error').html(e.password_error);
                $('#nama').val('');
                $('#email').val('');
                $('#username').val('');
                $('#password').val('');
                $('#password_r').val('');
                $('#role_id').val('');
                $('#is_active').val('');
                if (!e.password_error) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Data Tersimpan',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            }
        });



    });



});