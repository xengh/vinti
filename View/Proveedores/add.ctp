<div class="proveedores form">
<?php echo $this->Form->create('Proveedore'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Proveedores'); ?></legend>

		<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Provisiones'), array('controller' => 'provisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Valorar Provision'), array('controller' => 'proveedoresProvisiones', 'action' => 'index')); ?> </li>

								
				</ul>
		</div> 

		<br><br><br>

		<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>

		<!-- FIN BOTON DE OPCIONES -->

	<?php
		echo $this->Form->input('EMPRESA');
		echo $this->Form->input('EMAIL');
		echo $this->Form->input('DIRECCION');
		echo $this->Form->input('TELEFONO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Añadir proveedor')); ?>
</div>

