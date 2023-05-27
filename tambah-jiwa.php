<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id'];
$nama = $_GET['nama'];
$nik = $_GET['nik'];
$alamat = $_GET['alamat'];
$tgl = $_GET['tgl'];
$kelas = $_GET['kelas'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `jiwa` (`id`, `nama`, `nik`, `alamat`, `tgl`, `kelas`) VALUES (null, '$nama', '$nik', '$alamat', '$tgl', '$kelas')");

if ($query) {
 # credirect ke page index
 header("location:jiwa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>