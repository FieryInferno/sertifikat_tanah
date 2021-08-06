<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'Autor/loginPengguna';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
$route['login.html']            = 'Autor/loginPengguna';
$route['daftar.html']           = 'Daftar';

$route['admin.html']                    = 'Admin';
$route['admin/user.html']               = 'Admin/user';
$route['admin/user/tambah']             = 'Admin/tambah';
$route['admin/user/edit/(:any)']        = 'Admin/edit/$1';
$route['admin/user/hapus/(:any)']       = 'Admin/hapus/$1';
$route['admin/permohonan.html']         = 'Admin/permohonan';
$route['admin/buat_sertifikat/(:any)']  = 'Admin/buatSertifikat/$1';

$route['masyarakat/pengajuan.html']               = 'Pengajuan';
$route['masyarakat/pengajuan/tambah.html']        = 'Pengajuan/tambah';
$route['masyarakat/pengajuan/upload_bukti.html']  = 'Pengajuan/uploadBukti';
$route['masyarakat/data_masyarakat']              = 'Masyarakat/dataMasyarakat';
$route['masyarakat/upload_data_untuk_admin']      = 'Masyarakat/uploadUntukAdmin';
$route['masyarakat/data_masyarakat/edit']         = 'Masyarakat/editData';
$route['masyarakat/data_masyarakat/hapus']        = 'Masyarakat/hapusData';
$route['masyarakat/keluhan']                      = 'Masyarakat/keluhan';

$route['pengukur.html']           = 'Pengukur';
$route['pengukur/pengajuan.html'] = 'Pengukur/pengajuan';


$route['kepala_desa']                   = 'KepalaDesa';
$route['kepala_desa/permohonan']        = 'KepalaDesa/permohonan';
$route['kepala_desa/verifikasi/(:any)'] = 'KepalaDesa/verifikasi/$1';

$route['loket/input_pembayaran/(:any)'] = 'loket/inputPembayaran/$1';