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
    Swal.fire({
        icon: 'Success',
        title: 'Success',
        text: 'Data ' + flashData,
        type: 'Success'
    });
}

const flashMsg = $('.flash-data2').data('flashdata');
if (flashMsg) {
    Swal.fire({
        icon: 'error',
        title: 'Failed',
        text: flashMsg,
    });
}


//aktifkan data table di tablePerkara
$('#tablePerkara').DataTable();