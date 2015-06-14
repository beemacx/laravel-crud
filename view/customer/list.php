<html>
<head>
	<title>Latihan Menggunakan Laravel 5</title>
	<style type="text/css">
		th{ width: 33%; text-align: center; background-color: #333; color: #fff;}
		a{ padding: 3px 5px; background-color: gray; text-decoration: none;color:#fff;}
		a:hover{background-color: #000000;}
	</style>
</head>
<body>
	<h1>Daftar Customer</h1>
	<p><a href="<?php echo url('/customers/create'); ?>">Tambah customer</a></p>
	<table style="width: 500px;">
		<tr><th>Nama customer</th><th>Email</th><th>Option</th></tr>
		<?php
			// Memastikan bahwa ada data customer
			if(count($daftar_customer) == 0){
				echo '<tr><td colspan="3">Belum Ada Data customer</td></tr>';
			}else{
				// Menampilkan data untuk semua customer yang ada
				foreach ($daftar_customer as $usr) {
					echo '<tr><td>'.$usr->name.'</td><td>'.$usr->email.'</td>';

					echo '<td><a href="'. url('/customers/'.$usr->id) .'" >Detail</a> | <a href="'. url('/customers/'.$usr->id.'/edit') .'" >Edit</a> | ';
					echo '<a href="'.url('/hapus_customer/'.$usr->id).'">Hapus</a></td></tr>';
				}
			}
		?>
	</table>
</body>
</html>