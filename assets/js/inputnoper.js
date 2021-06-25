$(document).ready(function () {

    //data table
    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/viewhakim/`;
    console.log(path);
    //---Tampil data table kegiatan
    let list_perkara = $('#listperkara').DataTable({
        "ajax": `${path}get_data_banding/`,
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
                <a href="javascript:;" id='view_doc' class="text-satu item_input"'><i class="fas fa-fw fa-pen-alt" title='Input Nomor Banding'></i>
                `
            }
        ]
    });
    //======

    // ambil parameter klik nama per item
    $('#listperkara').on('click', '.item_input', function () {
        let data = list_perkara.row($(this).parents('tr')).data();
        let id_perkara = data['id_perkara'];
        $('#modal_input_perkara').modal('show');
        $('#simpan').on('click', function () {
            console.log('tombol simpan di klik');

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

                    Swal.fire('Nomor Perkara berhasil diinput!', '', 'success')
                    $('#modal_input_perkara').modal('hide');
                } else if (result.isDenied) {
                    Swal.fire('Nomor Perkara tidak diinput!!', '', 'info')
                }
            })


        });

    });
    // ------

});