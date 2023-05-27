<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id'];
$no_kendaraan = $_GET['no_kendaraan'];
$nama = $_GET['nama'];
$no_mesin = $_GET['no_mesin'];
$tipe = $_GET['tipe'];
$tgl = $_GET['tgl'];
$kelas = $_GET['kelas'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `kendaraan` (`id`, `no_kendaraan`, `nama`, `no_mesin`, `tipe`, `tgl`, `kelas`) VALUES (null, '$no_kendaraan', '$nama', '$no_mesin', '$tipe', '$tgl', '$kelas')");

if ($query) {
 # credirect ke page index
 header("location:kendaraan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>