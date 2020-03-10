<?php 
if (empty($_POST['nama'])) {
	header("Location:tugas3_kosong.php");
}
elseif (empty($_POST['email'])) {
	header("Location:tugas3_kosong.php");
	}
elseif (empty($_POST['tempatlahir'])) {
	header("Location:tugas3_kosong.php");
	}
elseif (empty($_POST['tanggallahir'])) {
	header("Location:tugas3_kosong.php");
	}
elseif (empty($_POST['jeniskelamin'])) {
	header("Location:tugas3_kosong.php");
	}
elseif (empty($_POST['agama'])) {
	header("Location:tugas3_kosong.php");
	}
elseif (empty($_POST['notelpon'])) {
	header("Location:tugas3_kosong.php");
	}
elseif (empty($_POST['alamat'])) {
	header("Location:tugas3_kosong.php");
	}
else {
	 include "tugas3_tampil.php";
	include "tugas3_waktu.php";
}
?>