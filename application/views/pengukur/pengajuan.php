<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3"></div>
        <div class="card-body">
          <?php
            if ($this->session->pesan) {
              echo $this->session->pesan;
            }
          ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach ($pengajuan as $key) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $key['nama']; ?></td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong<?= $key['id_pengajuan']; ?>">
                          Input Pengukuran
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong<?= $key['id_pengajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Input Pengukuran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="<?= base_url(); ?>pengukur/pengajuan.html" enctype="multipart/form-data">
                                  <input type="hidden" name="id_pengajuan" value="<?= $key['id_pengajuan']; ?>">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukan Nomor dan Jenis Hak" name="no_jenis_hak">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukan Identitas Bidang" name="nib">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukan Keadaan Tanah" name="keadaan_tanah">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukan Tanda - Tanda Batas" name="batas">
                                  </div>
                                  <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Masukan Luas" name="luas">
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukan Penunjukan dan Penetapan Batas" name="penunjukan_batas">
                                  </div>
                                  <button type="submit" class="btn btn-primary">kirim</button>
                                </form>
                              </div>
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