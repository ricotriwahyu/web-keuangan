<?php
//include('dbconnected.php');
include('koneksi.php');

$tgl_pemasukan = $_GET['tgl_pemasukan'];
$nama = $_GET['nama'];
$jumlah = $_GET['jumlah'];
$sumber = $_GET['sumber'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `pemasukan` (`tgl_pemasukan`, `nama`, `jumlah`, `id_sumber`) VALUES ('$tgl_pemasukan', '$nama', '$jumlah', '$sumber')");

if ($query) {
 # credirect ke page index
 header("location:pendapatan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>