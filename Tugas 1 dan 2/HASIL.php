<?php 
if (empty($_POST['nama'])) {
	header("Location:KOSONG.php");
}
elseif (empty($_POST['email'])) {
	header("Location:KOSONG.php");
	}
else {
	 include "TAMPIL.php";
	include "WAKTU.php";
}
?>