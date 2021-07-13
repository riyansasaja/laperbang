$('.tombol-logout').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Konfirmasi Logout',
        text: 'Klik logout untuk mengakhiri session',
        type: 'danger',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Logout'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire(

        'Success',
        flashData,
        'success'
    );
}

const flashMsg = $('.flash-data2').data('flashdata');
if (flashMsg) {
    Swal.fire(
        'Error',
        flashMsg,
        'error'
    );
}


//aktifkan data table di tablePerkara
$('#tablePerkara').DataTable();

//input hanya angka
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
    return true;
}
