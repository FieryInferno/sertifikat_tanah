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
  <div class="text-center"><strong>TANDA PERINTAH SETOR</strong></div>
  <p>Sesuai dengan permohonan saudara : </p>
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
  </table>
  <br>
  <p>Maka kepada saudara diminta untuk segera membayar biaya pekerjaan dengan rincian sbb : </p>
  <table width="100%">
    <tr>
      <th width="5%">No</th>
      <th width="65%" class="text-center">Uraian Pekerjaan</th>
      <th width="30%" class="text-center">Biaya</th>
    </tr>
    <tr>
      <td>1</td>
      <td></td>
    </tr>
  </table>
  <br>
  <p>Demikian untuk dilaksanakan.</p>
  <table width="100%">
    <tr>
      <td width="50%"></td>
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
      <td width="50%" class="text-center"></td>
      <td width="50%" class="text-center">Petugas Loket</td>
    </tr>
    <tr>
      <td width="50%"><br><br><br></td>
      <td width="50%" class="text-center"></td>
    </tr>
    <tr>
      <td width="50%" class="text-center"></td>
      <td width="50%" class="text-center"></td>
    </tr>
  </table>

</body>

</html>