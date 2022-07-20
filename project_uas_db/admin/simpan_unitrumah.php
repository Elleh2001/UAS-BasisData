<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama = $_POST['id_lokasi'];
$Harga = $_POST['ukuran'];
$Stok = $_POST['no_rumah'];
$insert_data = mysqli_query($koneksi, "INSERT INTO unit_rumah
(id_lokasi,ukuran,no_rumah) values('$nama','$Harga','$Stok')");
if ($insert_data) {
header('location:data_rumah.php?pesan=Data Berasil Di simpan');
} else {
// header('location:data_jns_ekskul.php?pesan=Data Gagal Di simpan');
echo ('ERROR' . mysqli_error($koneksi));
}