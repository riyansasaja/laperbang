$(document).ready(function () {
    $('#modalPdf').on('show.bs.modal', function (e) {
        var getdata = $(e.relatedTarget).data('id');
        console.log(getdata);
        var baru = getdata.trim();
        var tampil = `<embed src="http://localhost/laperbang/assets/files/SuratPengantar/${baru}" type="application/pdf" width="100%" height="100%">`
        $('#tampil').html(tampil);
    })
});