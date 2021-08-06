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
                  <th>Alamat</th>
                  <th>Kartu Keluarga</th>
                  <th>NPWP</th>
                  <th>Izin Mendirikan Bangunan</th>
                  <th>AJB</th>
                  <th>PPH</th>
                  <th>BPHTB</th>
                  <th>Akta Hibah</th>
                  <th>Bukti Penguasaan Tanah</th>
                  <th>PBB</th>
                  <th>Surat Keterangan Belum Bersetifikat</th>
                  <th>Surat Keterangan Riwayat Tanah</th>
                  <th>Status</th>
                  <th>Surat Ukur</th>
                  <th>Sertifikat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($permohonan as $key) { ?>
                    <tr>
                      <td><?= $key['nama']; ?></td>
                      <td><?= $key['alamat']; ?></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
                      <td><a href="<?= base_url('assets/' . $key['kk']); ?>">Lihat File</a></td>
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
                              echo 'Menuggu upload bukti pembayaran';
                              break;
                            case '4':
                              echo 'Sedang dilakukan pengukuran';
                              break;
                            case '5': ?>
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#buat<?= $key['id_pengajuan']; ?>">Buat Sertifikat</button>

                              <!-- Modal -->
                              <div class="modal fade" id="buat<?= $key['id_pengajuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembuatan Sertifikat</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Apakah anda yakin akan membuat sertifikat?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="<?= base_url('admin/buat_sertifikat/' . $key['id_pengajuan']); ?>" class="btn btn-info">Buat Sertifikat</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php break;
                            case '6' :
                              echo 'Sertifikat Berhasil dibuat';
                              break;
                            
                            default:
                              # code...
                              break;
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if ($key['surat_ukur']  !== NULL) { ?>
                            <a href="<?= base_url('assets/' . $key['surat_ukur']); ?>" class="btn btn-primary" target="_blank">Lihat File</a></td>
                          <?php }
                        ?>
                      </td>
                      <td>
                        <?php
                          if ($key['sertifikat']  !== NULL) { ?>
                            <a href="<?= base_url('assets/' . $key['sertifikat']); ?>" class="btn btn-primary" target="_blank">Lihat File</a></td>
                          <?php }
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