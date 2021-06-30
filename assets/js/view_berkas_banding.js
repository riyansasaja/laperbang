$(document).ready(function () {
    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/`;

    let url = window.location.href;
    let pecah = url.split('/');
    let id_perkara = pecah[6];
    $('#modalPdfHakim').on('show.bs.modal', function (e) {

        //jalankan modal
        //ambil data-id dan data-judul
        let getdata = $(e.relatedTarget).data('id');
        let getjudul = $(e.relatedTarget).data('judul');
        //embed ke tampilan sebelah kanan
        let tampil = `<embed src="http://localhost/laperbang/assets/files/${getdata}" type="application/pdf" width="100%" height="100%">`;
        $('#tampil').html(tampil);

        //fungsi tampil baru
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
                    let isi = '';
                    $.each(e, function (index, value) {
                        isi += `<p><span class="fw-bolder ps-3">${value.nama}</span> <small class="text-muted">${value.time}</small> <br><small class="ps-3">${value.catatan}</small></p>`;
                        return
                    });
                    console.log(isi);
                    $('#komentar').html(isi);
                }
            });//tutup ajax
            $('#komentar').html('');
            $('#catatan').val('');
            return;

        }//end fungsi tampil baru

        //kosongkan komentar
        $('#komentar').html('');
        // panggil fungsi tampil baru
        tampil_baru();




        //tombol kirim ditekan
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
            });//end ajax
        }); //end tombol kirim ditekan




    })//end modal




});//end doc ready