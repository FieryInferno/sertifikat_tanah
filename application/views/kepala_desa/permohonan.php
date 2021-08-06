<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Permohonan Pengajuan Sertifikat</h1>
      <div class="card shadow mb-4">
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($permohonan as $key) { ?>
                    <tr>
                      <td><?= $key['nama']; ?></td>
                      <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $key['id_pengajuan']; ?>">Upload Data</button>
                        
                        <div class="modal fade" id="exampleModal<?= $key['id_pengajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Upload Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method="post" action="<?= base_url('kepala_desa/verifikasi/' . $key['id_pengajuan']); ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label>FC KTP</label>
                                    <input type="file" class="form-control" placeholder="" name="ktp">
                                  </div>
                                  <div class="form-group">
                                    <label>Berita Acara</label>
                                    <input type="file" class="form-control" placeholder="" name="berita_acara">
                                  </div>
                                  <div class="form-group">
                                    <label>Tanda Batas Tanah</label>
                                    <input type="file" class="form-control" placeholder="" name="tanda_batas_tanah">
                                  </div>
                                  <div class="form-group">
                                    <label>Surat Keterangan Tidak Sengketa</label>
                                    <input type="file" class="form-control" placeholder="" name="surat_keterangan_tidak_sengketa">
                                  </div>
                                  <div class="form-group">
                                    <label>Masukan Alamat yang Diukur</label>
                                    <textarea name="alamt" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php }
                ?>
              </tbody>
            </table>
          </div>
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