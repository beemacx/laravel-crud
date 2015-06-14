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
	<h1>Edit Data Customer</h1>
		<?php
		echo Form::open(array('action' => array('CustomerController@update', $data_customer->id), 'method' => 'put',
		 'class' => 'form-horizontal', 'enctype' => "multipart/form-data"));
		?>
		<table style="width: 500px;">
			<tr><td>Nama</td><td><input type="text" name="name" value="<?php echo $data_customer->name; ?>" /></td></tr>
			<tr><td>Email</td><td><input type="text" name="email" value="<?php echo $data_customer->email; ?>" /></td></tr>
			<tr><td>Phone</td><td><input type="text" name="phone" value="<?php echo $data_customer->phone; ?>" /></td></tr>
			<tr><td>Address</td><td><textarea name="address"><?php echo $data_customer->address; ?></textarea></td></tr>
		</table>
		<input type="submit" name="submit" value="Simpan" />
	</form>
	<p><a href="<?php echo url('/customers'); ?>">Kembali</a></p>
</body>
</html>