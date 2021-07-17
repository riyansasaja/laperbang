//untuk chart

$(document).ready(function () {

    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';
    const prapath = window.location.origin;
    const path = `${prapath}/laperbang/`;
    let ctx = document.getElementById("myAreaChart");


    let dataBanding = {
        "ajax": `${path}ViewHakim/getData/`,
        label: "Banding",
        lineTension: 0.3,
        borderColor: "#1d5f53",
        pointRadius: 5,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "#1d5f53",
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [$perkara_januari, "perkara_februari", "perkara_maret", "perkara_maret", "perkara_april", "perkara_may", "perkara_juni", "perkara_juli"]
    };

    let dataExaminasi = {
        label: "Examinasi",
        lineTension: 0.3,
        borderColor: "#719e0f",
        pointRadius: 5,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "#719e0f",
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: []
    };

    let dataLaporanPerkara = {
        label: "Laporan Perkara",
        lineTension: 0.3,
        borderColor: "#be9a21",
        pointRadius: 5,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "#be9a21",
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: []
    };

    let tampungData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agus", "Sept", "Okt", "Nov", "Desember"],
        datasets: [dataBanding, dataExaminasi, dataLaporanPerkara]
    };

    let linceChart = new Chart(ctx, {
        type: 'line',
        data: tampungData
    });


    // akhir chart


});
