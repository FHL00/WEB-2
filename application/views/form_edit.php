<!doctype html>
<html lang="en">
  <head>
  	<title>Form Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

	</head>
	<body>
        <form action="<?= base_url(). 'mahasiswa/aksi_simpan'; ?>" method="post">
            <table border="0" align="center">
                <tr>
                    <th colspan='2'>FORM INPUT DATA MAHASISWA</th>
                </tr>
                <tr>
                    <td>NIM</td><td>: <input type="text" name="nim" value=""></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td><td>: <input type="text" name="namamhs" value=""></td>
                </tr>
                <tr>
                    <td>Program Studi</td><td>: 
                        <select name="prodi">
                            <option value="Teknik Informatika"> Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td><td>: <textarea name="alamat" cols="10" rows="2"></textarea></td>
                </tr>
                <tr>
                    <td>Nama User</td><td>: <input type="text" name="namauser" value=""></td>
                </tr>
                <tr>
                    <td>Password</td><td>: <input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" value="Simpan">
                        <input type="button" onclick="location.href='<?=base_url('mahasiswa/tampilkan_data')?>'" value="Kembali">
                    </td>
                </tr>
            </table>
        </form>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

