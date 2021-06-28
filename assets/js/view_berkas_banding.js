$(document).ready(function () {
    $('#modalPdfHakim').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        console.log(getdata);
        let tampil = `<embed src="http://localhost/laperbang/assets/files/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })
});