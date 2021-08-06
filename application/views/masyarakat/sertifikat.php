<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Surat Ukur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
</body>
</body>
  <div class="text-center">PENDAFTARAN - PERTAMA</div>
  <p>Halaman : </p>
  <table border="1" width="100%">
    <tr>
      <td width="40%">
        <table width="100%" border="1">
          <tr>
            <td width="10%" class="text-center">a)</td>
            <td width="90%">Hak : Milik</td>
          </tr>
          <tr>
            <td></td>
            <td>No. : <?= $nomor; ?></td>
          </tr>
          <tr>
            <td></td>
            <td>Desa/Kel : <?= $desa; ?></td>
          </tr>
          <tr>
            <td><br></td>
            <td></td>
          </tr>
        </table>
        <table width="100%" border="1">
          <tr>
            <td width="10%" class="text-center">b)</td>
            <td width="90%">NIB : <?= $nib; ?></td>
          </tr>
          <tr>
            <td></td>
            <td>Letak Tanah : 3185</td>
          </tr>
          <tr>
            <td><br></td>
            <td></td>
          </tr>
        </table>
        <table width="100%" border="1">
          <tr>
            <td width="10%" class="text-center">c)</td>
            <td width="90%">ASAL HAK</td>
          </tr>
          <tr>
            <td class="text-center">1.</td>
            <td>Pengakuan hak berdasarkan</td>
          </tr>
          <tr>
            <td><br><br><br><br></td>
            <td></td>
          </tr>
        </table>
        <table width="100%" border="1">
          <tr>
            <td width="10%" class="text-center">d)</td>
            <td width="90%">DASAR PENDAFTARAN</td>
          </tr>
          <tr>
            <td class="text-center">1.</td>
            <td>Daftar Isian</td>
          </tr>
          <tr>
            <td></td>
            <td>Tgl.</td>
          </tr>
          <tr>
            <td></td>
            <td>No.</td>
          </tr>
          <tr>
            <td><br><br><br><br><br><br><br></td>
            <td></td>
          </tr>
        </table>
        <table width="100%" border="1">
          <tr>
            <td width="10%" class="text-center">e)</td>
            <td width="90%">SURAT UKUR</td>
          </tr>
          <tr>
            <td class="text-center"></td>
            <td>Tgl. <?= date('now'); ?></td>
          </tr>
          <tr>
            <td></td>
            <td>No.</td>
          </tr>
          <tr>
            <td></td>
            <td>Luas <?= $luas . 'm2' . '(' . terbilang($luas) . ')'; ?> meter persegi</td>
          </tr>
          <tr>
            <td><br></td>
            <td></td>
          </tr>
        </table>
      </td>
      <td width="60%">
        <table width="100%" border="1">
          <tr>
            <td>
              <div>f) NAMA PEMEGANG HAK</div>
              <br>
              <div class="text-center"><strong><?= $pemegang; ?></strong></div>
              <br>
              <div>Tanggal Lahir : <?= $tanggal_lahir; ?></div>
              <br><br>
            </td>
          </tr>
        </table>
        <table width="100%" border="1">
          <tr>
            <td>
              <div>f) PEMBUKUAN</div>
              <div class="text-center">Subang, 21 April 2021</div>
              <div class="text-center">Kepala Kantor Pertanahan</div>
              <div class="text-center">Kabupaten</div>
              <div class="text-center">Subang</div>
              <br><br><br><br><br>
              <div class="text-center"><strong>M. IRAWAN SUKARJA</strong></div>
              <div class="text-center">NIP. </div>
            </td>
          </tr>
        </table>
        <table width="100%" border="1">
          <tr>
            <td>
              <div>f) PENERBITAN SERTIFIKAT</div>
              <div class="text-center">Subang, 21 April 2021</div>
              <div class="text-center">Kepala Kantor Pertanahan</div>
              <div class="text-center">Kabupaten</div>
              <div class="text-center">Subang</div>
              <br><br><br><br><br>
              <div class="text-center"><strong>M. IRAWAN SUKARJA</strong></div>
              <div class="text-center">NIP. </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table width="100%" border="1">
          <tr>
            <td width="10%" class="text-center">i)</td>
            <td width="90%">PENUNJUK</td>
          </tr>
          <tr>
            <td></td>
            <td>1. Berdasarkan keputusan pengakuan hak tanggal</td>
          </tr>
          <tr>
            <td></td>
            <td>2. </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</html>