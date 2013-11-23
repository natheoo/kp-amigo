<div class="jumbotron">
	<h1>Amigo Database Synchronization</h1>
	<p>Amigo database synchronization is a project designed for synchronizing Amigo's databases.</p>
	<p>Just enter the database name and click on this button.</p>
	<p>
		<?php echo $this->Form->create(false, array('action' => 'sync_dump')); ?>
		<div class="row">
		  	<div class="col-lg-6">
		    	<div class="input-group input-group-lg">
		      		<?php
		      		echo $this->Form->input('database',array(
		      			'label' => false,
		      			'placeholder' => 'database name',
		      			'class' => 'form-control',
		      			'div' => false
		      		));
		      		?>
		      		<span class="input-group-btn">
		        		<?php
		        		echo $this->Form->end(array(
							'name' => 'submit',
							'label' => 'Synchronize!',
							'class' => 'btn btn-lg btn-primary',
							'div' => false
						));
		        		?>
		      		</span>
		    	</div><!-- /input-group -->
		  	</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</p>
</div>