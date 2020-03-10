<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Biodata</title>
</head>

<body>
<form method="post" action="tugas3_hasil.php" >
	<table width="500" align="center" cellpadding="5" cellspacing = "2">
		<tr>
			<td width="200"> Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="200">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td width="200">Tempat Lahir</td>
			<td><input type="text" name="tempatlahir"></td>
		</tr>
		<tr> 
			<td width="200">Tanggal Lahir</td>
			<td><input type="date" name="tanggallahir"></td>
		</tr>
		<tr>
			<td width="200">Jenis Kelamin</td>
			<td><input type="radio" name="jeniskelamin" value="Laki - Laki"/> Laki - laki
			<input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan </td>
		</tr>
		<tr>
			<td width="200">Agama</td>
			<td><select name="agama">Agama
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
				<option value="Katholik">Katholik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select></td>
		</tr>
		<tr>
			<td width="200">Nomer Telpon</td>
			<td><input type="number" name="notelpon" maxlength="13"></td>
		</tr>
		<tr>
			<td width="200">Alamat</td>
			<td><textarea name="alamat" rows="5" cols="50"></textarea> </td>
		</tr>
		<tr>
			<td>
				<td>
				<input type="submit" name="btnLogin" value="Kirim">
				<input type="reset" name="reset" value="Reset">
			</td>
		</td>
		</tr>
	</table>
	</form>
</body>
</html>	