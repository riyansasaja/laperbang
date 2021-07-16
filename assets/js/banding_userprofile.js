$(document).ready(function () {

    const pathdasar = window.origin
    const path = `${pathdasar}/laperbang/profiles/`

    //panggil function tampil data
    tampil_data();

    //function tampil data
    function tampil_data() {
        $.ajax({
            type: "GET",
            url: `${path}get_profile`,
            dataType: "json",
            success: function (response) {
                $.each(response, function (index, value) {
                    //Tampilkan di tampilan user profile
                    $('#profile-id').val(value.id)
                    $('#profile-name').val(value.nama)
                    $('#profile-email').val(value.email)
                    $('#profile-username').val(value.username)
                    $('#profile-since').val(value.data_created)

                });
            }
        });
    }
    //--- end function tampil data

    //tombol save data di klik
    $('#profile-save').on('click', function () {
        console.log('tombol di klik')

        //ambil data
        let id = $('#profile-id').val()
        let nama = $('#profile-name').val()
        let email = $('#profile-email').val()
        //kirim data via ajax
        $.ajax({
            type: "POST",
            url: `${path}update_data`,
            data: {
                id: id,
                nama: nama,
                email: email,
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                Swal.fire({
                    icon: 'success',
                    title: 'Data Terupdate',
                    showConfirmButton: false,
                    timer: 1500
                });
                tampil_data();

            }
        });

    });
    //--- end Tombol save data

    //tombol ubah password di klik
    $('#change-password').on('click', function () {
        //ambil data dari inputan
        let oldPassword = $('#old-password').val();
        let newPassword = $('#new-password').val();
        let repeatPassword = $('#repeat-password').val();

        //panggil ajax
        $.ajax({
            type: "POST",
            url: `${path}update_password`,
            data: {
                oldPassword: oldPassword,
                newPassword: newPassword,
                repeatPassword: repeatPassword
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
            }
        });
    });
    //--- end tombol ubah password klik


});