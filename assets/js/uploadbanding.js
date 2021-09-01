$(document).ready(function () {
    const path = `../../`;
    $('#modalPdf').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        let tampil = `<embed src="${path}/fileuploads/${getdata}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })
});