$(document).ready(function () {
    const prapath = window.location.origin;
    const path = `${prapath}/`;

    let url = window.location.href;
    let pecah = url.split('/');
    $('#modalPdfHakim').on('show.bs.modal', function (e) {

        //jalankan modal
        //ambil data-id dan data-judul
        let getdata = $(e.relatedTarget).data('id');
        let getjudul = $(e.relatedTarget).data('judul');
        let id_perkara = pecah[3];
        console.log(getdata);
        console.log(getjudul);
        console.log(id_perkara);
        //embed ke tampilan sebelah kanan
        let tampil = `<embed src="${path}assets/files/${getdata}" type="application/pdf" width="100%" height="100%">`;
        $('#tampil').html(tampil);

        //panggil fungsi tampil baru
        let isi = '';
        tampil_baru(getjudul, id_perkara);
        setInterval(function () {
            isi = '';
            tampil_baru(getjudul, id_perkara)
        }, 4000);

        //tombol kirim ditekan
        $('#kirim').on('click', function () {
            isi = '';
            tambah_komentar(getjudul, id_perkara);
            $('#catatan').val('');

        }); //end tombol kirim ditekan

        //tombol tutup ditekan
        $('#tutup').on('click', function () {
            console.log('tombol tutup');
            location.reload()
            $('#modalPdfHakim').on('hide.bs.modal', function (e) {
            })
        })

        //fungsi tampil baru
        function tampil_baru(xxx, yyy) {

            $.ajax({
                type: "POST",
                url: `${path}ViewHakim/get_catatan`,
                data: {
                    id_perkara: yyy,
                    nm_berkas: xxx
                },
                dataType: "json",
                success: function (e) {

                    $.each(e, function (index, value) {
                        isi += `<p><span class="fw-bolder ps-3">${value.nama}</span> <small class="text-muted">${value.time}</small> <br><small class="ps-3">${value.catatan}</small></p>`;
                    });
                    $('#komentar').html(isi);
                    return
                }
            });//tutup ajax 

        }//end fungsi tampil baru

        //function tambah komentar
        function tambah_komentar(aaa, bbb) {
            let catatan = $('#catatan').val();
            $.ajax({
                type: "POST",
                url: `${path}ViewHakim/set_catatan`,
                data: {
                    id_perkara: bbb,
                    nm_berkas: aaa,
                    catatan: catatan
                },
                dataType: "json",
                success: function (response) {
                    if (response) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $(".textarea[name='catatan']").val("");
                        tampil_baru(getjudul, id_perkara);
                        return
                    }
                }
            });//end ajax

        }//end function






    })//end modal




});//end doc ready