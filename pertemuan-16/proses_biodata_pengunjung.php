<?php
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
}

#ambil dan bersihkan nilai dari form
$nim  = bersihkan($_POST['txtnNim']  ?? '');
$nama = bersihkan($_POST['txtNmLengkap'] ?? '');
$tempat = bersihkan($_POST['txtT4lhr'] ?? '');
$tanggal = bersihkan($_POST['txtTgllht'] ?? '');
$hobi= bersihkan($_POST['txtHobi'] ?? '');
$pasangan = bersihkan($_POST['txtPasangan'] ?? '');
$pekerjaan = bersihkan($_POST['txtKerja'] ?? '');
$ortu = bersihkan($_POST['txtNmOrtu'] ?? '');
$kakak= bersihkan($_POST['txtNmKakak'] ?? '');
$adik= bersihkan($_POST['txtNmAdik'] ?? '');


#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada


if ($kode === '') { $errors[] = 'kode wajib diisi.';}
if ($nama=== '' )     { $errors[] = 'Nama lengkap wajib diisi.'; }
if ($tempat === '')     { $errors[] = 'Tempat lahir wajib diisi.'; }
if ($alamat === '')  {$rrors[] = 'Tanggal lahir wajib diisi.'; }
if ($tanggal === '')       { $errors[] = 'Hobi wajib diisi.'; }
if ($hobi === '')  {$errors[] = 'Pekerjaan wajib diisi.'; }
if ($asal === '')       { $errors[] = 'Nama orang tua wajib diisi.'; }
if ($namaortu === '')       { $errors[] = 'Nama orang tua wajib diisi.'; }
if ($namapacar === '')       { $errors[] = 'Nama orang tua wajib diisi.'; }
if ($namamantan === '')       { $errors[] = 'Nama orang tua wajib diisi.'; }


if (mb_strlen($nim) < 5) {
  $errors[] = 'kode minimal 5 karakter.';
}

if (mb_strlen($nama) < 10) {
  $errors[] = 'nama minimal 10 karakter.';
}

/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'kode'  => $kode,
    'nama' => $nama,
    'alamat' => $alamat,
    'tanggal'    => $tanggal,
    'hobi'       => $hobi,
    'asal'   => $asal,
    'pekerjaan'  => $pekerjaan,
    'ortu'       => $ortu,
    'pasangan' => $pasangan,
    'mantan' => $adik,
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#biodata');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_biodata_mahasiswa_pengunjung
        (ckode_pengenal, cnama_pengunjung, calamat_rumah, ctanggal_kunjungan, chobi,
 casal_sma, cpekerjaan, cnama_orangtua, cnama_pacar, cnama_mantan)
 VALUES (?, ?, ?)";
 
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'kesalahan sistem (prepare gagal).';
  redirect_ke('index.php#biodata');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param(
    $stmt,
    "ssssssssss",
    $kode,
    $nama,
    $alamat,
    $tanggal,
    $hobi,
    $asal,
    $pekerjaan,
    $ortu,
    $pacar,
    $mantan,
);

if (mysqli_stmt_execute($stmt)) {
    unset($_SESSION['old_biodata']);
    $_SESSION['flash_sukses'] = 'Biodata berhasil disimpan.';
} else {
    $_SESSION['flash_error'] = 'Data gagal disimpan.' . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
redirect_ke('index.php#biodata');

