$(document).ready(function () {

    //data table
    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/`;
    console.log(path);
    //---Tampil data table kegiatan
    let list_perkara = $('#listperkara').DataTable({
        "ajax": `${path}viewhakim/get_data_banding/`,
        "columns": [
            {
                "data": null, "sortable": false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "nama" },
            { "data": "no_perkara" },
            { "data": "jns_perkara" },
            { "data": "no_perkara_banding" },
            { "data": "tgl_register" },
            { "data": "nm_pihak_penggugat" },
            { "data": "nm_pihak_tergugat" },
            {
                "data": null,
                "defaultContent": `<a href="javascript:;" id='view_doc' class="text-satu item_view"'><i class="fas fa-fw fa-eye" title= 'Lihat Berkas'></i> <br>
                <a href="javascript:;" id='view_doc' class="text-satu item_input"'><i class="fas fa-fw fa-pen-alt" title='Input Nomor Banding'></i> <br>
                <a href="javascript:;" id='view_doc' class="text-satu item_staper"'><i class="fas fa-fw fa-tasks" title='Input Status Perkara'></i>
                `
            }
        ]
    });
    //======

    // input nomor perkara
    // ambil parameter klik nama per item
    $('#listperkara').on('click', '.item_input', function () {
        let data = list_perkara.row($(this).parents('tr')).data();
        let id_perkara = data['id_perkara'];
        $('#modal_input_perkara').modal('show');
        $('#simpan').on('click', function () {
            console.log('tombol simpan di klik');
            //ambil data
            let nomor_surat = $('#nomor_surat').val();
            let tahun_surat_pengantar = $('#tahun_surat_pengantar').val();
            //swal notification

            Swal.fire({
                title: 'Yakin sudah benar?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: `Simpan`,
                denyButtonText: `Jangan Simpan`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {

                    //kalo jadi simpan baru kase ba jalang ajax
                    $.ajax({
                        type: "POST",
                        url: `${path}/admin/updatenoper`,
                        data: {
                            id_perkara: id_perkara,
                            nomor_surat: nomor_surat,
                            tahun_surat_pengantar: tahun_surat_pengantar
                        },
                        dataType: "json",
                        success: function (e) {
                            console.log(e);
                        }
                    });

                    Swal.fire('Nomor Perkara berhasil diinput!', '', 'success')
                    $('#nomor_surat').val('');
                    $('#modal_input_perkara').modal('hide');
                    list_perkara.ajax.reload();
                } else if (result.isDenied) {
                    Swal.fire('Nomor Perkara tidak diinput!!', '', 'info')
                }
            })


        });

    });
    // ------


    //input status perkara
    $('#listperkara').on('click', '.item_staper', function () {
        let data = list_perkara.row($(this).parents('tr')).data();
        let id_perkara = data['id_perkara'];

        //tampilkan pilihan jenis perkara lewat SWAL2
        const { value: staper } = Swal.fire({
            title: 'Pilih status perkara',
            input: 'select',
            inputOptions: {
                pendaftaranPerkara: 'Pendaftaran Perkara',
                penunjukanMajelisHakim: 'Penunjukan Majelis Hakim',
                penunjukkanPaniteraPengganti: 'Penunjukkan Panitera Pengganti',
                pembuatanPHS1: 'Pembuatan PHS 1',
                pembuatanPHSLanjutan: 'Pembuatan PHS Lanjutan',
                sidangPertama: 'Sidang Pertama',
                sidangLanjutan: 'Sidang Lanjutan',
                sidangLanjutan1: 'Sidang Lanjutan 1',
                sidangLanjutan2: 'Sidang Lanjutan 2',
                sidangLanjutan3: 'Sidang Lanjutan 3',
                sidangLanjutan4: 'Sidang Lanjutan 4',
                sidangLanjutan5: 'Sidang Lanjutan 5',
                penetapanPutusan: 'Penetapan Putusan',
                pembacaanPutusan: 'Pembacaan Putusan',
                minutasi: 'Minutasi',
                pengirimansalinanputusan: 'Pengiriman Salinan Putusan',

            },
            inputPlaceholder: 'Pilih Status Terbaru',

            showCancelButton: true,
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    if (value === 'pengirimansalinanputusan') {
                        uploadSalinanPutusan()
                    } else {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                status_perkara: staper,
                            },
                            dataType: "json",
                            success: function (e) {
                                $('#staper').val('');
                                console.log(e);
                            }
                        });
                        Swal.fire('Status Perkara berhasil dirubah!', '', 'success')
                    }
                })
            }
        });

        //end swal2


    });
    //=====

    function uploadSalinanPutusan() {
        (async () => {

            const { value: file } = await Swal.fire({
                title: 'Select image',
                input: 'file',
                inputAttributes: {
                    'accept': 'image/*',
                    'aria-label': 'Upload your profile picture'
                }
            })

            if (file) {
                const reader = new FileReader()
                reader.onload = (e) => {
                    Swal.fire({
                        title: 'Your uploaded picture',
                        imageUrl: e.target.result,
                        imageAlt: 'The uploaded picture'
                    })
                }
                reader.readAsDataURL(file)
            }
        })()

    }




    //tombol view di klik,
    $('#listperkara').on('click', '.item_view', function () {
        let data = list_perkara.row($(this).parents('tr')).data();
        let id_perkara = data['id_perkara'];
        window.location.href = `${path}admin/view_berkas_admin/${id_perkara}/`;

    });


});