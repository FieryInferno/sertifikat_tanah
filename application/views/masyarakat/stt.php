<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>STT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
</body>
  <img src="<?= base_url(); ?>assets/kop_kantor_bpn.png" alt="" width="100%">
  <div class="text-center"><strong>TANDA TERIMA DOKUMEN</strong></div>
  <p>Telah diterima permohonan dari : </p>
  <table width="100%">
    <tr>
      <td width="30%">Nama Pemohon</td>
      <td width="5%">:</td>
      <td width="65%"><?= $pemohon['nama']; ?></td>
    </tr>
    <tr>
      <td width="30%">Alamat</td>
      <td width="5%">:</td>
      <td width="65%"></td>
    </tr>
    <tr>
      <td width="30%">Desa/Kelurahan</td>
      <td width="5%">:</td>
      <td width="65%"></td>
    </tr>
    <tr>
      <td width="30%">Kecamatan</td>
      <td width="5%">:</td>
      <td width="65%"></td>
    </tr>
    <tr>
      <td width="30%">Kegiatan</td>
      <td width="5%">:</td>
      <td width="65%"></td>
    </tr>
  </table>
  <br>
  <p>Beserta dokumen yang dilampirkan seperti tersebut dibawah ini : </p>
  <table width="100%">
    <tr>
      <th width="5%">No</th>
      <th width="95%" class="text-center">Dokumen</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Scan SPPT</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Scan KTP</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Scan KK</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Scan NPWP</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Scan AJB</td>
    </tr>
  </table>
  <br>
  <table width="100%">
    <tr>
      <td width="50%"></td>
      <?php
        function tgl_indo($tanggal){
          $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
          );
          $pecahkan = explode('-', $tanggal);
          return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }
      ?>
      <td width="50%" class="text-center">Subang, <?= tgl_indo(date('Y-m-d')); ?></td>
    </tr>
    <tr>
      <td width="50%"></td>
      <td width="50%" class="text-center">Atas Nama Kepala Kantor Pertanahan</td>
    </tr>
    <tr>
      <td width="50%"></td>
      <td width="50%" class="text-center">Kantor Pertanahan Kabupaten Subang</td>
    </tr>
    <tr>
      <td width="50%" class="text-center">Pemohon</td>
      <td width="50%" class="text-center">Satuan Tugas Yuridis</td>
    </tr>
    <tr>
      <td width="50%"><br><br><br></td>
      <td width="50%" class="text-center"></td>
    </tr>
    <tr>
      <td width="50%" class="text-center"><strong><u><?= $pemohon['nama']; ?></u></strong></td>
      <td width="50%" class="text-center"></td>
    </tr>
  </table>

</body>

</html>