<?php
  $this->load->view('template/head');
  $this->load->view('template/sidebar');
?>
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Permohonan Pengajuan Sertifikat</h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <a href="<?= base_url(); ?>masyarakat/pengajuan/tambah.html" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
          <?= $this->session->pesan ? $this->session->pesan : '' ; ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Alamat</th>
                  <th scope="col">Bukti Pembayaran</th>
                  <th>Status</th>
                  <th>Surat Ukur</th>
                  <th>Sertifikat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($pengajuan as $key) { ?>
                    <tr>
                      <td><?= $key['alamat']; ?></td>
                      <td>
                        <?php
                          if ($key['status'] == '1') { ?>
                          <?php }
                          if ($key['status'] == '3') { ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Upload Bukti Pembayaran
                            </button>
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form method="post" action="<?= base_url('masyarakat/pengajuan/upload_bukti.html'); ?>" enctype="multipart/form-data">
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <label>Bukti Pembayaran</label>
                                        <input type="file" class="form-control" placeholder="" name="buktiPembayaran">
                                        <input type="hidden" name="id_pengajuan" value="<?= $key['id_pengajuan']; ?>">
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
                          <?php }
                        ?>
                      <td>
                        <?php
                          switch ($key['status']) {
                            case '0': 
                              echo 'Menunggu verifikasi data oleh loket';
                              break;
                            case '1':
                              echo 'Menunggu verifikasi kepala desa';
                              break;
                            case '2':
                              echo 'Menunggu verifikasi oleh loket';
                              break;
                            case '3':
                              echo 'Silakan upload bukti pembayaran';
                              break;
                            case '4':
                              echo 'Melakukan Pengukuran';
                              break;
                            case '5':
                              echo 'Menunggu Verifikasi Admin';
                              break;
                            case '6':
                              echo 'Sertifikat berhasil dibuat';
                              break;
                            
                            default:
                              # code...
                              break;
                          }
                        ?>
                      </td>
                      <td>
                        <?= $key['surat_ukur'] ? '<a href="' . base_url() . 'assets/' . $key['surat_ukur'] . '" class="btn btn-primary" target="_blank">Lihat Surat Ukur</a>' : ''; ?>
                      </td>
                      <td>
                        <?= $key['sertifikat'] ? '<a href="' . base_url() . 'assets/' . $key['sertifikat'] . '" class="btn btn-primary" target="_blank">Lihat Sertifikat</a>' : ''; ?>
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