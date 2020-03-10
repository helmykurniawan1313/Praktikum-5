<html>
	<head>
	
	</head>
	<body>
<?php 
if (empty($_POST['nama'])) {
	header("Location:KOSONG.php");
}
elseif (empty($_POST['email'])) {
	header("Location:KOSONG.php");
	}
else {
	 include "../Tugas 1 dan 2/TAMPIL.php";
	include "../Tugas 1 dan 2/WAKTU.php";
	
}
?>
		<a href="../Tugas 3/tugas3_input.php">
		<input type="button" name="biodata" value="Buat Biodata"></a>
	</body>
	</html>