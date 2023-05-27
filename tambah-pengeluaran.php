<?php
//include('dbconnected.php');
include('koneksi.php');

$tgl_pengeluaran = $_GET['tgl_pengeluaran'];
$nama = $_GET['nama'];
$jumlah = $_GET['jumlah'];
$sumber = $_GET['sumber'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `pengeluaran` (`tgl_pengeluaran`, `nama`, `jumlah`, `id_sumber`) VALUES ('$tgl_pengeluaran', '$nama', '$jumlah', '$sumber')");

if ($query) {
 # credirect ke page index
 header("location:pengeluaran.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>