<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KepalaDesa extends CI_Controller {

  public function index()
  {
		$this->load->view('kepala_desa/dashboard');
  }

  public function permohonan()
  {
    $this->db->join('user', 'pengajuan.id_masyarakat = user.user_id');
    $this->db->select('pengajuan.*, user.nama');
		$data['permohonan'] = $this->db->get_where('pengajuan', ['status' => '1'])->result_array();
		$this->load->view('kepala_desa/permohonan', $data);
  }

  public function verifikasi($id_pengajuan)
  {
    $this->db->update('pengajuan', [
      'berita_acara'                    => uploadFile('berita_acara'),
      'tanda_batas_tanah'               => uploadFile('tanda_batas_tanah'),
      'surat_keterangan_tidak_sengketa' => uploadFile('surat_keterangan_tidak_sengketa'),
      'alamat'                          => $this->input->post('alamat'),
      'status'                          => '2'
    ], ['id_pengajuan'  => $id_pengajuan]);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil input data
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('kepala_desa/permohonan');
  }
}
