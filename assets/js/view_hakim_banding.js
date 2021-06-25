$(document).ready(function () {

    //data table
    // $('#tablePerkaraHakim').DataTable();
    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/viewhakim/`;
    console.log(path);
    //---Tampil data table kegiatan
    let tablePerkaraHakim = $('#tablePerkaraHakim').DataTable({
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
            { "data": "status_perkara" },
            {
                "data": null,
                "defaultContent": `<a href="javascript:;" id='view_doc' class="text-satu item_view"'><i class="fas fa-fw fa-eye"></i>`
            }
        ]
    });
    //======

    //ambil parameter klik nama per item
    $('#tablePerkaraHakim').on('click', '.item_view', function () {
        let data = tablePerkaraHakim.row($(this).parents('tr')).data();
        let id_perkara = data['id_perkara'];
        window.location.href = `${path}view_berkas_banding/${id_perkara}/`;

    });
    // ------

});