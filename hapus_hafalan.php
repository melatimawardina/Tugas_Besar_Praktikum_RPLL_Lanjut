<?php
include "koneksi.php";
include "lock.php";
$id = $_GET['id'];

$hapus = mysql_query("DELETE FROM hafalan WHERE nomor_ID = '$id'");

if($hapus){
		echo "<script>
		alert('Data Berhasil di Hapus');
		window.location = 'hafalan.php';
		</script>";
	}else{
		echo "<script>
		alert('Data GAGAL di Hapus');
		window.location = 'hafalan.php';
		</script>";
	}
?>