//untuk chart

$(document).ready(function () {

    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    let ctx = document.getElementById("myAreaChart");

    let dataBanding = {
        label: "Banding",
        lineTension: 0.3,
        borderColor: "#1d5f53",
        pointRadius: 5,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "#1d5f53",
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984]
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
        data: [10000, 10162, 46263, 10394, 10287, 38682, 11274, 13259, 15049, 31159, 31651, 21984, 28451]
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
        data: [30000, 20162, 26263, 20394, 20287, 28682, 21274, 23259, 25049]
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
