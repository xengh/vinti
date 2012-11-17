<div class="tipos form">
<?php echo $this->Form->create('Tipo'); ?>
	<fieldset>
		<legend><?php echo __('Añadir nuevo Tipo'); ?></legend>

		<!-- INICIO BOTON OPCIONES -->

		<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Provisiones'), array('controller' => 'provisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>

								
				</ul>
		</div> 

		<br><br><br>

		<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>

		<!-- FIN BOTON DE OPCIONES -->


	<?php
		echo $this->Form->input('TIPO');
		echo $this->Form->input('DESCRIPCION');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>

