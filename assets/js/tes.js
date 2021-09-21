console.log('ini TES.js');


// const pathdasar = window.origin;
const path = `/profiles/`;
console.log(pathdasar);

$.ajax({
    type: "POST",
    url: `${path}get_profile`,
    dataType: "JSON",
    async: true,
    success: function (response) {
        console.log(response);
    }
});

//function tampil data
// function tampil_data() {
//     $.ajax({
//         type: "GET",
//         url: `${path}get_profile`,
//         dataType: "json",
//         success: function (response) {
//             $.each(response, function (index, value) {
//                 console.log(value);
//                 //Tampilkan di tampilan user profile
//                 $('#profile-id').val(value.id)
//                 $('#profile-name').val(value.nama)
//                 $('#profile-email').val(value.email)
//                 $('#profile-username').val(value.username)
//                 $('#profile-since').val(value.data_created)

//             });
//         }
//     });
// }
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
    let id = $('#profile-id').val()
    let oldPassword = $('#old-password').val();
    let newPassword = $('#new-password').val();
    let repeatPassword = $('#repeat-password').val();

    //panggil ajax
    $.ajax({
        type: "POST",
        url: `${path}check_password_error`,
        data: {
            id: id,
            oldPassword: oldPassword,
            newPassword: newPassword,
            repeatPassword: repeatPassword
        },
        dataType: "json",
        success: function (response) {
            if (response.status == true) {
                //panggil fungsi update_password
                update_password(id, oldPassword, newPassword);
            } else {
                $('#old-passwordHelp').html(response.oldPassword);
                $('#new-passwordHelp').html(response.newPassword);
                $('#repeat-passwordHelp').html(response.repeatPassword);
            }

        }
    });
});
//--- end tombol ubah password klik


//fungsi update_password
function update_password(id, oldpass, newpass) {
    $.ajax({
        type: "POST",
        url: `${path}update_password`,
        data: {
            id: id,
            oldpass: oldpass,
            newpass: newpass
        },
        dataType: "json",
        success: function (response) {
            console.log(response);
            if (response.status == true) {
                //jalankan swal
                Swal.fire({
                    icon: 'success',
                    title: 'Password Terupdate',
                });
                //kosongkan form
                $('#old-password').val('');
                $('#new-password').val('');
                $('#repeat-password').val('');
                $('#old-passwordHelp').html('');
                $('#new-passwordHelp').html('');
                $('#repeat-passwordHelp').html('');

            } else {
                //jalankan swal
                Swal.fire({
                    icon: 'error',
                    title: 'Password Lama Salah!!',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    });
}
    //--- end update_password

