<div class="proveedoresProvisiones view">
<h2><?php  echo __('Provisiones'); ?></h2>

	<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Editar Provision valorada'), array('action' => 'edit', $proveedoresProvisione['ProveedoresProvisione']['ID'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Eliminar valor'), array('action' => 'delete', $proveedoresProvisione['ProveedoresProvisione']['ID']), null, __('Estas seguro que deseas eliminar a # %s?', $proveedoresProvisione['ProveedoresProvisione']['ID'])); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Provisiones valoradas'), array('action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Valorar provision'), array('action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Provisiones'), array('controller' => 'provisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->


	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($proveedoresProvisione['ProveedoresProvisione']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provisione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proveedoresProvisione['Provisione']['PROVISION'], array('controller' => 'provisiones', 'action' => 'view', $proveedoresProvisione['Provisione']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proveedoresProvisione['Proveedore']['EMPRESA'], array('controller' => 'proveedores', 'action' => 'view', $proveedoresProvisione['Proveedore']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('VALOR PROVISION'); ?></dt>
		<dd>
			<?php echo h($proveedoresProvisione['ProveedoresProvisione']['VALOR_PROVISION']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

