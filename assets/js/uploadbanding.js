$(document).ready(function () {
    $('#modalPdf').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        console.log(getdata);
        let baru = getdata.trim();
        let tampil = `<embed src="http://localhost/laperbang/assets/files/SuratPengantar/${baru}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })
});