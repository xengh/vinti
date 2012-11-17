<div class="proveedores form">
<?php echo $this->Form->create('Proveedore'); ?>
	<fieldset>
		<legend><?php echo __('Edit Proveedore'); ?></legend>

		<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					
				<li><?php echo $this->Html->link(__('Listar Proveedores'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Listar Provisiones generales'), array('controller' => 'proveedores_provisiones', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Valorar Provisión'), array('controller' => 'proveedores_provisiones', 'action' => 'add')); ?> </li>

								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->

	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('EMPRESA');
		echo $this->Form->input('EMAIL');
		echo $this->Form->input('DIRECCION');
		echo $this->Form->input('TELEFONO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>
</div>
