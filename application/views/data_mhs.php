<!doctype html>
<html lang="en">
  <head>
  	<title>Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Tabel Mahasiswa</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">Data Mahasiswa</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
						<tr>
							<th colspan="6">DAFTAR MAHASISWA JURUSAN TEKNOLOGI INFORMASI</th>
							<th><input type="button" onclick="location.href='<?=base_url('mahasiswa/form_input')?>'" Value="Tambah Data"></th>
						</tr>
					      <tr>
					        <th>Nama Lengkap</th>
					        <th>Nim</th>
					        <th>Prodi</th>
					        <th>Alamat</th>
					        <th>Nama User</th>
					        <th>Password</th>
                            <th>Aksi</th>
					      </tr>
					    </thead>
					    <tbody>
                        <?php
                            foreach ($mahasiswa as $mhs){ ?>
                            <tr>
                                <td><?=$mhs->nama?></td>
                                <td><?=$mhs->nim?></td>
                                <td><?=$mhs->prodi?></td>
                                <td><?=$mhs->alamat?></td>
                                <td><?=$mhs->username?></td>
                                <td><?=$mhs->password?></td>
                                <td>
									<input type="button" value="Edit" onclick="location.href='<?=base_url('mahasiswa/form_edit/'.$mhs->nim.'')?>'">
									<input type="button" value="Hapus" onclick="location.href='<?=base_url('mahasiswa/hapus/'.$mhs->nim.'')?>'">
								</td>
                            </tr>
                            <?php }
                        ?>   
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

