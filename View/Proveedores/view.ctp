<div class="proveedores view">
<h2><?php  echo __('Proveedor'); ?></h2>

		<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

	  				<li><?php echo $this->Html->link(__('Editar Proveedore'), array('action' => 'edit', $proveedore['Proveedore']['ID'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Borrar Proveedor'), array('action' => 'delete', $proveedore['Proveedore']['ID']), null, __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['ID'])); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Provisiones'), array('controller' => 'provisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>

								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->


	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMPRESA'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['EMPRESA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMAIL'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['EMAIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIRECCION'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['DIRECCION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TELEFONO'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['TELEFONO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

