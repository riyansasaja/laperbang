$(document).ready(function () {

    //data table
    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/`;

    //---Tampil data table kegiatan
    let list_perkara = $('#listperkara').DataTable({
        "ajax": `${path}Admin/get_data_banding/`,
        "columns": [
            {
                "data": null, "sortable": false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "nama" },
            { "data": "tgl_register" },
            { "data": "nm_pihak_penggugat" },
            { "data": "nm_pihak_tergugat" },
            { "data": "no_perkara" },
            { "data": "jns_perkara" },
            { "data": "tgl_reg_banding" },
            { "data": "no_perkara_banding" },
            { "data": "status_perkara" },
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
            let tgl_reg_banding = $('#tgl_reg_banding').val();
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
                        url: `${path}admin/updatenoper`,
                        data: {
                            id_perkara: id_perkara,
                            tgl_reg_banding: tgl_reg_banding,
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
        let no_perkara = data['no_perkara'];


        //tampilkan pilihan jenis perkara lewat SWAL2
        const { value: staper } = Swal.fire({
            title: 'Pilih status perkara',
            input: 'select',
            inputOptions: {
                'Pendaftaran Perkara': 'Pendaftaran Perkara',
                'Penunjukan Majelis Hakim': 'Penunjukan Majelis Hakim',
                'Penunjukkan Panitera Pengganti': 'Penunjukkan Panitera Pengganti',
                'Pembuatan PHS 1': 'Pembuatan PHS 1',
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
                'Pengiriman Salinan Putusan': 'Pengiriman Salinan Putusan',

            },
            inputPlaceholder: 'Pilih Status Terbaru',

            showCancelButton: true,
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    if (value === 'Penunjukan Majelis Hakim') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        pilihMH(id_perkara, no_perkara)
                        return false;
                    }
                    else if (value === 'Penunjukkan Panitera Pengganti') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadPenunjukkanPP(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Pembuatan PHS 1') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadPHS1(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Pembuatan PHS Lanjutan') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadPHS_lanj(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Sidang Pertama') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSidang_pertama(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Sidang Lanjutan') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSidang_lanj(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Sidang Lanjutan 1') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSidang_lanj1(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Sidang Lanjutan 2') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSidang_lanj2(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Sidang Lanjutan 3') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSidang_lanj3(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Sidang Lanjutan 4') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSidang_lanj4(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Sidang Lanjutan 5') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSidang_lanj5(id_perkara, no_perkara)
                        return false;
                    } else if (value === 'Pengiriman Salinan Putusan') {
                        $.ajax({
                            type: "POST",
                            url: `${path}/admin/updateStatus`,
                            data: {
                                id_perkara: id_perkara,
                                no_perkara: no_perkara,
                                status_perkara: value,
                            },
                            dataType: "json",
                            success: function (e) {

                            }
                        });
                        Swal.fire('Silahkan Upload Berkas', '', 'warning')
                        uploadSalinanPutusan(id_perkara, no_perkara)
                        return false;
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
        });//end swal2


    });//=====

    //function pilih majelis hakim
    function pilihMH(id_perkara, no_perkara) {
        $('#uploadMH').modal('show');
        $('#id_perkaramh').val(id_perkara);
        $('#no_perkaramh').val(no_perkara);

    }//end function pilih majelis hakim

    //function upload penunjukkan pp
    function uploadPenunjukkanPP(id_perkara, no_perkara) {
        $('#uploadFilePP').modal('show');
        $('#id_perkarapp').val(id_perkara);
        $('#no_perkarapp').val(no_perkara);


    }//end function upload penunjukkan pp

    //function upload file
    function uploadPHS1(id_perkara, no_perkara) {
        $('#Modalupload').modal('show');
        $('#id_st').val(id_perkara);
        $('#no_perkaraphs').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadPHS_lanj(id_perkara, no_perkara) {
        $('#Modaluploadphslanj').modal('show');
        $('#id_stphslanj').val(id_perkara);
        $('#no_perkaraphslanj').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadSidang_pertama(id_perkara, no_perkara) {
        $('#Modaluploadsidper').modal('show');
        $('#id_stsidper').val(id_perkara);
        $('#no_perkarasidper').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadSidang_lanj(id_perkara, no_perkara) {
        $('#Modaluploadsidlanj').modal('show');
        $('#id_stsidlanj').val(id_perkara);
        $('#no_perkarasidlanj').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadSidang_lanj1(id_perkara, no_perkara) {
        $('#Modaluploadsidlanj1').modal('show');
        $('#id_stsidlanj1').val(id_perkara);
        $('#no_perkarasidlanj1').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadSidang_lanj2(id_perkara, no_perkara) {
        $('#Modaluploadsidlanj2').modal('show');
        $('#id_stsidlanj2').val(id_perkara);
        $('#no_perkarasidlanj2').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadSidang_lanj3(id_perkara, no_perkara) {
        $('#Modaluploadsidlanj3').modal('show');
        $('#id_stsidlanj3').val(id_perkara);
        $('#no_perkarasidlanj3').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadSidang_lanj4(id_perkara, no_perkara) {
        $('#Modaluploadsidlanj4').modal('show');
        $('#id_stsidlanj4').val(id_perkara);
        $('#no_perkarasidlanj4').val(no_perkara);

    }//end function upload file

    //function upload file
    function uploadSidang_lanj5(id_perkara, no_perkara) {
        $('#Modaluploadsidlanj5').modal('show');
        $('#id_stsidlanj5').val(id_perkara);
        $('#no_perkarasidlanj5').val(no_perkara);

    }//end function upload file


    //function upload salinan putusans
    function uploadSalinanPutusan(id_perkara, no_perkara) {
        $('#uploadFileModal').modal('show');
        $('#id_perkara').val(id_perkara);
        $('#no_perkara').val(no_perkara);

    }//end function upload salinan putusan


    //tombol view di klik,
    $('#listperkara').on('click', '.item_view', function () {
        let data = list_perkara.row($(this).parents('tr')).data();
        let id_perkara = data['id_perkara'];
        window.location.href = `${path}admin/view_berkas_admin/${id_perkara}/`;

    });

    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire(

            'Success',
            flashData,
            'success'
        );
    }

    const flashMsg = $('.flash-data2').data('flashdata');
    if (flashMsg) {
        Swal.fire(
            'Info',
            flashMsg,
            'info'
        );
    }


});