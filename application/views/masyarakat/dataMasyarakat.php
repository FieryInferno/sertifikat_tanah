<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Data Masyarakat</h1>
      <div class="card shadow mb-4">
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <?php
            if ($sppt) { ?>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>SPPT</th>
                      <th>KTP</th>
                      <th>AJB</th>
                      <th>KK</th>
                      <th>NPWP</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="<?= base_url('assets/' . $sppt); ?>" class="btn btn-info" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $ktp); ?>" class="btn btn-info" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $ajb); ?>" class="btn btn-info" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $kk); ?>" class="btn btn-info" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $npwp); ?>" class="btn btn-info" target="_blank">Lihat File</a></td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button>

                        <!-- Modal -->
                        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Masyarakat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="<?= base_url(); ?>masyarakat/data_masyarakat/edit" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label>Scan SPPT PBB</label>
                                    <input type="file" class="form-control" placeholder="" name="sppt">
                                    <input type="hidden" name="sppt_lama" value="<?= $sppt; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Scan KTP</label>
                                    <input type="file" class="form-control" placeholder="" name="ktp">
                                    <input type="hidden" name="ktp_lama" value="<?= $ktp; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Scan KK</label>
                                    <input type="file" class="form-control" placeholder="" name="kk">
                                    <input type="hidden" name="kk_lama" value="<?= $kk; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Scan NPWP</label>
                                    <input type="file" class="form-control" placeholder="" name="npwp">
                                    <input type="hidden" name="npwp_lama" value="<?= $npwp; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Scan AJB</label>
                                    <input type="file" class="form-control" placeholder="" name="ajb">
                                    <input type="hidden" name="ajb_lama" value="<?= $ajb; ?>">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-info">Kirim</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus">
                          Hapus
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Anda yakin akan menghapus data?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= base_url(); ?>masyarakat/data_masyarakat/hapus" class="btn btn-danger">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            <?php } else { ?>
              <div class="alert alert-warning">Anda belum mengupload data</div>
              <form action="<?= base_url(); ?>masyarakat/upload_data" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Scan SPPT PBB</label>
                  <input type="file" class="form-control" placeholder="" name="sppt" required>
                </div>
                <div class="form-group">
                  <label>Scan KTP</label>
                  <input type="file" class="form-control" placeholder="" name="ktp" required>
                </div>
                <div class="form-group">
                  <label>Scan KK</label>
                  <input type="file" class="form-control" placeholder="" name="kk" required>
                </div>
                <div class="form-group">
                  <label>Scan NPWP</label>
                  <input type="file" class="form-control" placeholder="" name="npwp" required>
                </div>
                <div class="form-group">
                  <label>Scan AJB</label>
                  <input type="file" class="form-control" placeholder="" name="ajb" required>
                </div>
                <button type="submit" class="btn btn-info">Kirim</button>
              </form>
            <?php }
          ?>
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