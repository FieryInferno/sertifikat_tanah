<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Permohonan Pengajuan Sertifikat</h1>
      <div class="card shadow mb-4">
        <div class="card-body">
          <form method="post" action="<?= base_url(); ?>pengajuan/tambahPengajuanJualBeli" enctype="multipart/form-data">
            <h1>Jual Beli</h1>
            <div class="form-group">
              <label>FC KTP</label>
              <input type="file" name="ktp" class="form-control">
            </div>
            <div class="form-group">
              <label>FC Bukti Pembayaran PBB</label>
              <input type="file" name="pbb" class="form-control">
            </div>
            <div class="form-group">
              <label>FC KK</label>
              <input type="file" name="kk" class="form-control">
            </div>
            <div class="form-group">
              <label>FC NPWP</label>
              <input type="file" name="npwp" class="form-control">
            </div>
            <div class="form-group">
              <label>IMB</label>
              <input type="file" name="imb" class="form-control">
            </div>
            <div class="form-group">
              <label>AJB</label>
              <input type="file" name="ajb" class="form-control">
            </div>
            <div class="form-group">
              <label>PPH</label>
              <input type="file" name="pph" class="form-control">
            </div>
            <div class="form-group">
              <label>BPHTB</label>
              <input type="file" name="phtb" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Ajukan</button>
          </form>
          <form method="post" action="<?= base_url(); ?>pengajuan/tambahPengajuanHibahWaris" enctype="multipart/form-data">
            <h1>Hibah Waris</h1>
            <div class="form-group">
              <label>FC KTP</label>
              <input type="file" name="ktp" class="form-control">
            </div>
            <div class="form-group">
              <label>FC Kartu Keluarga</label>
              <input type="file" name="ktp" class="form-control">
            </div>
            <div class="form-group">
              <label>Akta Hibah</label>
              <input type="file" name="akta_hibah" class="form-control">
            </div>
            <div class="form-group">
              <label>Bukti Penguasaan Tanah</label>
              <input type="file" name="bukti_penguasaan_tanah" class="form-control">
            </div>
            <div class="form-group">
              <label>PBB</label>
              <input type="file" name="pbb" class="form-control">
            </div>
            <div class="form-group">
              <label>IMB</label>
              <input type="file" name="imb" class="form-control">
            </div>
            <div class="form-group">
              <label>NPWP</label>
              <input type="file" name="npwp" class="form-control">
            </div>
            <div class="form-group">
              <label>Surat Keterangan Belum Bersertifikat</label>
              <input type="file" name="skbb" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Ajukan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2019</span>
      </div>
    </div>
  </footer>
</div>
<?php $this->load->view('template/footer'); ?>