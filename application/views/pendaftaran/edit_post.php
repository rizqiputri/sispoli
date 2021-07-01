<?php
include "../../conf/database.php";

if($_POST)
{
	$id = $_POST['id'];
	$nik = $_POST['nik'];
$nama = $_POST['nama'];
$poli = $_POST['poli'];
$jeniskelamin = $_POST['jeniskelamin'];
$tanggal_lahir = $_POST['tanggallahir'];
$jeniskelamin = $_POST['alamat'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$query = ("UPDATE pendaftaran SET id='$id',nik='nik',nama='$nama',poli='$poli',jeniskelamin='$jenis_kelamin', kelurahan='$kelurahan', kecamatan='$kecamatan', kabupaten='$kabupaten', provinsi='$provinsi',  WHERE id ='$id'");
if(!mysql_query($query)){
die(mysql_error);
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=Pendaftaranpasien"</script>';
}
}
?>
