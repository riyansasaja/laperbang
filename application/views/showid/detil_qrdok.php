<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>LAPERBANG | Pengadilan Tinggi Agama Manado</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/css/showdoc/bootstrap.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url(); ?>assets/css/showdoc/custom.css" rel="stylesheet">
</head>

<body>
  <div class="container body">
    <div class="main_container">
      <div class="x_panel ui-ribbon-container ui-ribbon-primary">
        <div class="ui-ribbon-wrapper">
          <div class="ui-ribbon">
            Sah
          </div>
        </div>
        <div class="x_title">
          <h3 class="name_title">Deskripsi Dokumen</h3>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div style="text-align: center; margin-bottom: 17px">
            <span class="chart" data-percent="86">
              <span>
                <img width="80px" src="<?php echo base_url('resources/qrcode/' . $dok_id . '.jpg') ?>">
              </span>
            </span>
          </div>
          <div class="divider"></div>
          <p>Ini adalah detil dokumen dari pengajuan perkara banding yang benar diterbikan oleh aplikasi LAPERBANG Pengadilan Tinggi Agama Manado.</p>

          <div class="divider"></div>
          <h5>Satker</h5>
          <p><?php echo $nama; ?></p>
          <div class="divider"></div>
          <h5>Nomor Perkara</h5>
          <p><?php echo $no_perkara; ?></p>
          <div class="divider"></div>
          <h5>Nomor Surat Pengantar</h5>
          <p><?php echo $no_surat_pengantar; ?></p>
          <div class="divider"></div>
          <h5>Pejabat Berwenang</h5>
          <p><?php echo $pejabat_berwenang; ?></p>
          <div class="divider"></div>
          <h5>Nama</h5>
          <p><?php echo $nm_pejabat; ?></p>
          <div class="divider"></div>
          <h5>NIP</h5>
          <p><?php echo $nip_pejabat; ?></p>
          <!-- <div class="divider"></div> 
              <h5>Tanggal Register</h5>
              <p><?php echo indonesian_date($tglinput); ?></p> -->
          <div class="divider"></div>
          <br><br><br><br><br><br>
        </div>
      </div>
    </div>

</body>