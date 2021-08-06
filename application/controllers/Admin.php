<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    if ($this->session->level) {
      switch ($this->session->level) {
        case 'loket':
          redirect('loket');
          break;
        case 'pengukur':
          redirect('pengukur.html');
          break;
        case 'masyarakat':
          redirect('masyarakat');
          break;
        case 'kepala_desa':
          redirect('kepala_desa');
          break;
      }
    } else {
      redirect('login');
    }
  }
  
  
	public function index()
	{
		$this->load->view('Admin/dashboard');
	}

  public function user()
  {
		$data['user'] = $this->db->get('user')->result_array();
		$this->load->view('Admin/user', $data);
  }

  public function permohonan()
  {
    $this->db->join('user', 'pengajuan.id_masyarakat = user.user_id');
    $this->db->join('pengukuran', 'pengajuan.pengukuran = pengukuran.id_pengukuran', 'left');
    $this->db->select('pengajuan.*, user.nama, pengukuran.*');
		$data['permohonan'] = $this->db->get('pengajuan')->result_array();
		$this->load->view('Admin/permohonan', $data);
  }

  public function tambah()
  {
    if ($this->input->post()) {
      $this->db->insert('user', [
        'nama'      => $this->input->post('nama'),
        'username'  => $this->input->post('username'),
        'password'  => $this->input->post('password'),
        'level'     => $this->input->post('role')
      ]);
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil tambah user
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('admin/user.html');
    }
		$this->load->view('Admin/tambahUser');
  }

  public function edit($id_user)
  {
    if ($this->input->post()) {
      $this->db->update('user', [
        'nama'      => $this->input->post('nama'),
        'username'  => $this->input->post('username'),
        'password'  => $this->input->post('password'),
        'level'     => $this->input->post('role')
      ], ['user_id' => $id_user]);
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sukses!</strong> Berhasil edit user
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('admin/user.html');
    }
    $data = $this->db->get_where('user', ['user_id' => $id_user])->row_array();
		$this->load->view('Admin/editUser', $data);
  }

  public function hapus($id_user)
  {
    $this->db->delete('user', ['user_id'  => $id_user]);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil hapus user
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('admin/user.html');
  }

  public function buatSertifikat($id_pengajuan)
  {
    $this->ModelPengajuan->buatSertifikat($id_pengajuan);
		$this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil membuat sertifikat.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		');
		redirect('admin/permohonan.html');
  }

  public function verifikasi_data_admin($id_pengajuan)
  {
    $this->db->update('pengajuan', ['status'  => '5'], ['id_pengajuan'  => $id_pengajuan]);
		$this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil membuat sertifikat.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		');
		redirect('admin/permohonan.html');
  }

  public function keluhan()
  {
    $data['keluhan']  = $this->db->get('keluhan')->result_array();
		$this->load->view('admin/keluhan', $data);
  }

  public function verifikasiKeluhan($id_keluhan)
  {
    $this->db->update('keluhan', ['status'  => 'verifikasi'], ['id_keluhan' => $id_keluhan]);
		$this->session->set_flashdata('pesan', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Berhasil verifikasi.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		');
		redirect('admin/keluhan');
  }
}
