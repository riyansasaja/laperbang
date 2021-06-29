$(document).ready(function () {
    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/`;

    let url = window.location.href;
    let pecah = url.split('/');
    let id_perkara = pecah[6];
    $('#modalPdfHakim').on('show.bs.modal', function (e) {
        let getdata = $(e.relatedTarget).data('id');
        let getjudul = $(e.relatedTarget).data('judul');
        console.log(getdata);
        let tampil = `<embed src="http://localhost/laperbang/assets/files/${getdata}" type="application/pdf" width="100%" height="100%">`

        $('#tampil').html(tampil);
        $('#komentar').html('');
        tampil_baru();


        $('#kirim').on('click', function () {
            var catatan = $('textarea[name="catatan"]').val();


            $.ajax({
                type: "POST",
                url: `${path}ViewHakim/set_catatan`,
                data: {
                    id_perkara: id_perkara,
                    nm_berkas: getjudul,
                    catatan: catatan

                },
                dataType: "json",
                success: function (response) {
                    tampil_baru();

                }
            });
        });

        function tampil_baru() {
            $.ajax({
                type: "POST",
                url: `${path}ViewHakim/get_catatan`,
                data: {
                    id_perkara: id_perkara,
                    nm_berkas: getjudul
                },
                dataType: "json",
                success: function (e) {

                    $.each(e, function (i, v) {
                        console.log(v);
                        let isi = `<p><span class="fw-bolder ps-3">${v.nama}</span> <small class="text-muted">${v.time}</small> <br><small class="ps-3">${v.catatan}</small></p>`

                        $('#komentar').append(isi);



                    });


                }
            });
            $('#komentar').html('');
            $('#catatan').val('');



        }
    })


});