<html>
<head>
	<title>Latihan Menggunakan Laravel 4.0</title>
	<style type="text/css">
		th{ width: 33%; text-align: center; background-color: #333; color: #fff;}
		a{ padding: 3px 5px; background-color: gray; text-decoration: none;color:#fff;}
		a:hover{background-color: #000000;}
	</style>
</head>
<body>
	<h1>Tambah Customer</h1>
	<form method="post" action="<?php echo url('/customers'); ?>">
		<table style="width: 500px;">
			<tr><td>Nama</td><td><input type="text" name="name" /></td></tr>
			<tr><td>Email</td><td><input type="text" name="email" /></td></tr>
			<tr><td>Phone</td><td><input type="text" name="phone" /></td></tr>
			<tr><td>Address</td><td><textarea name="address"></textarea></td></tr>
		</table>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" name="submit" value="Simpan" />
	</form>
	<p><a href="<?php echo url('/customers'); ?>">Kembali</a></p>
</body>
</html>