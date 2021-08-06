<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loket extends CI_Controller {

	public function index()
	{
		$this->load->view('loket/dashboard');
	}

	public function pengajuan()
	{
    $this->db->join('user', 'pengajuan.id_masyarakat = user.user_id');
    $this->db->where_in('status', ['0', '2']);
		$data['pengajuan']	= $this->db->get('pengajuan')->result_array();
		$this->load->view('loket/pengajuan', $data);
	}

	public function verifikasiPembayaran($id_pengajuan)
	{
		$this->ModelPengajuan->verifikasiPembayaran($id_pengajuan);
		$this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Verifikasi pembayaran berhasil dilakukan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		');
		redirect('loket/pengajuan');
	}

  public function inputPembayaran($id_pengajuan)
  {
    $this->db->update('pengajuan', [
      'pembayaran'  => $this->input->post('pembayaran'),
      'status'      => '3'
    ]);
		$this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil Input Pembayaran.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		');
		redirect('loket/pengajuan');
  }
}
