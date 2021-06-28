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
                id: id
            },
            dataType: "json",
            success: function (response) {

                $.each(response, function (i, val) {
                    $('#nama').val(val.nama);
                    $('#email').val(val.email);
                    $('#username').val(val.username);
                    $('#role').val(val.role_id);
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
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Data Tersimpan',
            showConfirmButton: false,
            timer: 1500
        })
    });



});