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
  <table width="100%">
    <tr>
      <td width="60%">
        <table width="100%">
          <tr>
            <?php
              $no  = str_split($no_jenis_hak);
              for ($i=0; $i < 19; $i++) { 
                if (isset($no[$i])) { ?>
                  <td width="5%" style="border: 1px solid #000;"><?= $no[$i]; ?></td>
                <?php } else { ?>
                  <td width="5%" style="border: 1px solid #000;"></td>
                <?php }
              }
            ?>
          </tr>
        </table>
      </td>
      <td width="10%"></td>
      <td width="30%"><strong>NIB : <?= $nib; ?></strong></td>
    </tr>
  </table>
  <br>
  <div class="text-center"><strong>SURAT UKUR</strong></div>
  <div class="text-center">Nomor : <?= $nomor; ?></div>
  <br><br>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>SEBIDANG TANAH TERLETAK DALAM : </strong></p>
  <table width="100%">
    <tr>
      <td width="30%">Provinsi</td>
      <td width="5%">:</td>
      <td width="65%">Jawa Barat</td>
    </tr>
    <tr>
      <td width="30%">Kabupaten/Kota</td>
      <td width="5%">:</td>
      <td width="65%">Subang</td>
    </tr>
    <tr>
      <td width="30%">Kecamatan</td>
      <td width="5%">:</td>
      <td width="65%"><?= $kecamatan; ?></td>
    </tr>
    <tr>
      <td width="30%">Desa/Kelurahan</td>
      <td width="5%">:</td>
      <td width="65%"><?= $desa; ?></td>
    </tr>
    <tr>
      <td width="30%">Keadaan Tanah</td>
      <td width="5%">:</td>
      <td width="65%"><?= $keadaan_tanah; ?></td>
    </tr>
    <tr>
      <td width="30%">Tanda - Tanda Batas</td>
      <td width="5%">:</td>
      <td width="65%"><?= $batas; ?></td>
    </tr>
    <tr>
      <td width="30%">Luas</td>
      <td width="5%">:</td>
      <?php
        function penyebut($nilai) {
          $nilai = abs($nilai);
          $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
          $temp = "";
          if ($nilai < 12) {
            $temp = " ". $huruf[$nilai];
          } else if ($nilai <20) {
            $temp = penyebut($nilai - 10). " belas";
          } else if ($nilai < 100) {
            $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
          } else if ($nilai < 200) {
            $temp = " seratus" . penyebut($nilai - 100);
          } else if ($nilai < 1000) {
            $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
          } else if ($nilai < 2000) {
            $temp = " seribu" . penyebut($nilai - 1000);
          } else if ($nilai < 1000000) {
            $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
          } else if ($nilai < 1000000000) {
            $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
          } else if ($nilai < 1000000000000) {
            $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
          } else if ($nilai < 1000000000000000) {
            $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
          }     
          return $temp;
        }
        
        function terbilang($nilai) {
          if($nilai<0) {
            $hasil = "minus ". trim(penyebut($nilai));
          } else {
            $hasil = trim(penyebut($nilai));
          }     		
          return $hasil;
        }
      ?>
      <td width="65%"><?= $luas . ' m2 ' . '(' . terbilang($luas) . ')'; ?> meter persegi</td>
    </tr>
  </table>
</html>