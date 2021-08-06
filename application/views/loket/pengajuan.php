<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Permohonan Pengajuan Sertifikat</h1>
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
                  <th scope="col">Nama</th>
                  <th scope="col">KTP</th>
                  <th scope="col">PBB</th>
                  <th scope="col">KK</th>
                  <th scope="col">NPWP</th>
                  <th scope="col">IMB</th>
                  <th scope="col">AJB</th>
                  <th scope="col">PPH</th>
                  <th scope="col">BPHTB</th>
                  <th scope="col">Akta Hibah</th>
                  <th scope="col">Bukti Penguasaan Tanah</th>
                  <th scope="col">Surat Keterangan Belum Bersertifikat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($pengajuan as $key) { ?>
                    <tr>
                      <td><?= $key['nama']; ?></td>
                      <td><a href="<?= base_url('assets/' . $key['ktp']); ?>" class="btn btn-primary" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['pbb']); ?>" class="btn btn-primary" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>" class="btn btn-primary" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['npwp']); ?>" class="btn btn-primary" target="_blank">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['imb']); ?>" class="btn btn-primary" target="_blank">Lihat File</a></td>
                      <td>
                        <?php
                          if ($key['jenis'] == 'jual_beli') { ?>
                            <a href="<?= base_url('assets/' . $key['ajb']); ?>" class="btn btn-primary" target="_blank">Lihat File</a>
                          <?php }
                        ?>
                      </td>
                      <td>
                        <?php
                          if ($key['jenis'] == 'jual_beli') { ?>
                            <a href="<?= base_url('assets/' . $key['pph']); ?>" class="btn btn-primary" target="_blank">Lihat File</a>
                          <?php }
                        ?>
                      </td>
                      <td>
                        <?php
                          if ($key['jenis'] == 'jual_beli') { ?>
                            <a href="<?= base_url('assets/' . $key['bphtb']); ?>" class="btn btn-primary" target="_blank">Lihat File</a>
                          <?php }
                        ?>
                      </td>
                      <td>
                        <?php
                          if ($key['jenis'] == 'hibah_waris') { ?>
                            <a href="<?= base_url('assets/' . $key['akta_hibah']); ?>" class="btn btn-primary" target="_blank">Lihat File</a>
                          <?php }
                        ?>
                      </td>
                      <td>
                        <?php
                          if ($key['jenis'] == 'hibah_waris') { ?>
                            <a href="<?= base_url('assets/' . $key['bukti_penguasaan_tanah']); ?>" class="btn btn-primary" target="_blank">Lihat File</a>
                          <?php }
                        ?>
                      </td>
                      <td>
                        <?php
                          if ($key['jenis'] == 'hibah_waris') { ?>
                            <a href="<?= base_url('assets/' . $key['skbb']); ?>" class="btn btn-primary" target="_blank">Lihat File</a>
                          <?php }
                        ?>
                      </td>
                      <td>
                        <?php 
                          switch ($key['status']) {
                            case '0':
                              if ($key['jenis'] == 'jual_beli') { ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verifikasi<?= $key['id_pengajuan']; ?>">Verifikasi Jual Beli</button>
                                <?php } else { ?>
                                  <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verifikasi<?= $key['id_pengajuan']; ?>">Verifikasi Hibah Waris</button>
                                <?php }
                              ?>
    
                              <!-- Modal -->
                              <div class="modal fade" id="verifikasi<?= $key['id_pengajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Apakah anda yakin akan verifikasi data?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="<?= base_url('loket/verifikasiPembayaran/' . $key['id_pengajuan']); ?>" class="btn btn-success">Verifikasi</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php break;

                            case '2': ?>
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inputPembayaran<?= $key['id_pengajuan']; ?>">Input Pembayaran</button>
    
                              <!-- Modal -->
                              <div class="modal fade" id="inputPembayaran<?= $key['id_pengajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Input Pembayaran</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form action="<?= base_url('loket/input_pembayaran/' . $key['id_pengajuan']); ?>" method="post">
                                      <div class="modal-body">
                                        <div class="form-group">
                                          <label>Pembayaran</label>
                                          <input type="text" class="form-control" placeholder="" name="pembayaran">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Input</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <?php break;
                            
                            default:
                              # code...
                              break;
                          }
                        ?>
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