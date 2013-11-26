<?php
if (isset($success)) {
	?>
	<div class="jumbotron">
		<h1>Sinkronisasi Database Amigo</h1>
		<p><?php echo $success; ?></p>
		<p>
			<a href="/amigo_ind/" class="btn btn-lg btn-primary">Kembali ke halaman utama</a>
		</p>
	</div>
	<?php
} elseif (isset($error)) {
	?>
	<div class="jumbotron">
		<h1>Sinkronisasi Database Amigo</h1>
		<p><span class="label label-danger"><?php echo $error; ?></span></p>
		<p>
			<a href="/amigo_ind/" class="btn btn-lg btn-primary">Kembali ke halaman utama</a>
		</p>
	</div>
	<?php
} elseif (isset($info)) {
	?>
	<div class="jumbotron">
		<h1>Sinkronisasi Database Amigo</h1>
		<p><span class="label label-info"><?php echo $info; ?></span></p>
		<p>
			<a href="/amigo_ind/" class="btn btn-lg btn-primary">Kembali ke halaman utama</a>
		</p>
	</div>
	<?php
}else{
	/* redirect ke halaman utama: /amigo/index */
	header("location: /amigo_ind/");
	exit();
	// print_r($test);
}
?>