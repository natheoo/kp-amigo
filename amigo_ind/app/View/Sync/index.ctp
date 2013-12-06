<div class="jumbotron">
	<h1>Sinkronisasi Database Amigo</h1>
	<p>Sinkronisasi Database Amigo adalah sebuah sistem yang dikhususkan untuk mengsinkronisasi database milik Amigo Group.</p>
	<p>Untuk memulai sinkronisasi, klik tombol di bawah ini.</p>
	<p>
		<?php echo $this->Form->create(false, array('action' => 'sync_dump')); ?>
		<div class="row">
		  	<div class="col-lg-5">
		    	<div class="btn-group btn-group-lg">
	        		<?php
	        		echo $this->Form->end(array(
						'name' => 'submit',
						'label' => 'Sinkronisasi!',
						'class' => 'btn btn-lg btn-primary',
						'div' => false
					));
	        		?>
		    	</div><!-- /input-group -->
		  	</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</p>
</div>