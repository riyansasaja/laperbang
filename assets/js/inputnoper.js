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
        let noperband = data['no_perkara_banding'];
        $('#nomor_perkara_banding').val('');

        if (noperband !== null) {
            let explode = noperband.split('/');
            let cuma_nomor = explode[0];
            $('#nomor_perkara_banding').val(cuma_nomor);

        }


        $('#modal_input_perkara').modal('show');
        $('#simpan').on('click', function () {
            //ambil data
            let nomor_perkara_banding = $('#nomor_perkara_banding').val();
            let tahun_perkara_banding = $('#tahun_perkara_banding').val();
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
                            nomor_perkara_banding: nomor_perkara_banding,
                            tahun_perkara_banding: tahun_perkara_banding
                        },
                        dataType: "json",
                        success: function (e) {
                            console.log(e);
                        }
                    });

                    Swal.fire('Nomor Perkara berhasil diinput!', '', 'success')
                    $('#nomor_perkara_banding').val('');
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
        // let status_perkara = $('select[name="status_perkara"]').val();

        //tampilkan pilihan jenis perkara lewat SWAL2
        const { value: staper } = Swal.fire({
            title: 'Pilih status perkara',
            input: 'select',
            inputOptions: {
                'Pendaftaran Perkara': 'Pendaftaran Perkara',
                'Penunjukan Majelis Hakim': 'Penunjukan Majelis Hakim',
                'Penunjukkan Panitera Pengganti': 'Penunjukkan Panitera Pengganti',
                'Pembuatan PHS1': 'Pembuatan PHS 1',
                'Pembuatan PHS Lanjutan': 'Pembuatan PHS Lanjutan',
                'Sidang Pertama': 'Sidang Pertama',
                'Sidang Lanjutan': 'Sidang Lanjutan',
                'Sidang Lanjutan 1': 'Sidang Lanjutan 1',
                'Sidang Lanjutan 2': 'Sidang Lanjutan 2',
                'Sidang Lanjutan 3': 'Sidang Lanjutan 3',
                'Sidang Lanjutan 4': 'Sidang Lanjutan 4',
                'Sidang Lanjutan 5': 'Sidang Lanjutan 5',
                'Penetapan Putusan': 'Penetapan Putusan',
                'Pembacaan Putusan': 'Pembacaan Putusan',
                'Minutasi': 'Minutasi',
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
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Status Perkara Berhasil Dirubah', '', 'success')
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
                title: 'Select File',
                input: 'file',
                inputAttributes: {
                    'accept': 'pdf/*',
                    'aria-label': 'Upload your profile picture'
                }
            })

            if (file) {
                const reader = new FileReader()

                reader.onload = (e) => {
                    const fileupload = file;
                    let nama_file = file.name;
                    if (nama_file != "" && fileupload != "") {
                        let formData = new FormData();
                        formData.append('fileupload', fileupload);
                        formData.append('nama_file', nama_file);

                        $.ajax({
                            type: 'POST',
                            url: `${path}/admin/uploadPutusan`,
                            data: formData,
                            cache: false,
                            processData: false,
                            contentType: false,
                            success: function (msg) {
                                console.log(msg);
                                Swal.fire('Salinan putusan berhasil di upload', '', 'success')
                            },
                            error: function () {
                                alert("Data Gagal Diupload");
                            }
                        });
                    }
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