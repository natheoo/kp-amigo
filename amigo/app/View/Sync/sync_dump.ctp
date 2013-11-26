<?php
if (isset($success)) {
	?>
	<div class="jumbotron">
		<h1>Amigo Database Synchronization</h1>
		<p><?php echo $success; ?></p>
		<p>
			<a href="/amigo/" class="btn btn-lg btn-primary">Back to home page</a>
		</p>
	</div>
	<?php
} elseif (isset($error)) {
	?>
	<div class="jumbotron">
		<h1>Amigo Database Synchronization</h1>
		<p><span class="label label-danger"><?php echo $error; ?></span></p>
		<p>
			<a href="/amigo/" class="btn btn-lg btn-primary">Back to home page</a>
		</p>
	</div>
	<?php
} elseif (isset($info)) {
	?>
	<div class="jumbotron">
		<h1>Amigo Database Synchronization</h1>
		<p><span class="label label-info"><?php echo $info; ?></span></p>
		<p>
			<a href="/amigo/" class="btn btn-lg btn-primary">Back to home page</a>
		</p>
	</div>
	<?php
}else{
	/* redirect to home page at /amigo/index */
	header("location: /amigo/");
	exit();
}
?>