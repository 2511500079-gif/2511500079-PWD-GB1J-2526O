<?php
require 'koneksi.php';
require_ONCE 'fungsi.php';

$fieldConfig = [
  "nim" => ["label" => "NIM:", "suffix" => ""],
  "nama" => ["label" => "Nama Lengkap:", "suffix" => ""],
  "tempat" => ["label" => "Tempat Lahir:", "suffix" => ""],
  "tanggal" => ["label" => "Tanggal Lahir:", "suffix" => ""],
  "hobi" => ["label" => "Hobi:", "suffix" => ""],
  "pasangan" => ["label" => "Pasangan:", "suffix" => " &hearts;"],
  "pekerjaan" => ["label" => "Pekerjaan:", "suffix" => ""],
  "ortu" => ["label" => "Nama Orang Tua:", "suffix" => ""],
  "kakak" => ["label" => "Nama Kakak:", "suffix" => ""],
  "adik" => ["label" => "Nama Adik:", "suffix" => ""],
];

$sql = "SELECT * FROM tbl_biodata_mahasiswa_sederhana ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);
if (!$q) {
  echo "<p>Gagal membaca data tamu: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data tamu yang tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {
    $arrContact = [
      "nim"  => $row["cnim"]  ?? "",
      "nama" => $row["cnama_lengkap"] ?? "",
      "tempat" => $row["ctempat_lahir"] ?? "",
      "tanggal" => $row["ctangga_lahir"] ?? "",
      "hobi" => $row["chobi"] ?? "",
      "pasangan" => $row["cpasangan"] ?? "",
      "pekerjaan" => $row["cpekerjaan"] ?? "",
      "ortu" => $row["cnama_orangtua"] ?? "",
      "kakak" => $row["cnama_kakak"] ?? "",
      "adik" => $row["cnama_adik"] ?? "",

    ];
    echo tampilkanBiodata($fieldConfig, $arrBiodata);
  }
}
?>