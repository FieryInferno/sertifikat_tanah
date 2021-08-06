<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDaftar extends CI_Model {

	public function daftar()
	{
		$this->db->insert('user', [
			'nama'          => $this->input->post('nama'),
			'username'	    => $this->input->post('username'),
			'password'	    => $this->input->post('password'),
			'level'		      => 'masyarakat',
			'alamat'	      => $this->input->post('alamat'),
			'desa'	        => $this->input->post('desa'),
			'kecamatan'	    => $this->input->post('kecamatan'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
		]);
	}
}
