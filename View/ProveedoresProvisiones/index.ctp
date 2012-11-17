<div class="proveedoresProvisiones index">
	<h2><?php echo __('Provisiones Generales'); ?></h2>

	<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Listar Detalle Provisiones'), array('controller' => 'provisiones', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Valorar Provision'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Provisiones Generales'), array('controller' => 'proveedoresprovisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->

		<br><br><br>

		<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>

		<!-- INICIO TABLA DE DATOS -->

	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PROVISION'); ?></th>
			<th><?php echo $this->Paginator->sort('PROVEEDOR'); ?></th>
			<th><?php echo $this->Paginator->sort('VALOR_PROVISION'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
	foreach ($proveedoresProvisiones as $proveedoresProvisione): ?>
	<tr>
		<td><?php echo h($proveedoresProvisione['ProveedoresProvisione']['ID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proveedoresProvisione['Provisione']['PROVISION'], array('controller' => 'provisiones', 'action' => 'view', $proveedoresProvisione['Provisione']['ID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($proveedoresProvisione['Proveedore']['EMPRESA'], array('controller' => 'proveedores', 'action' => 'view', $proveedoresProvisione['Proveedore']['ID'])); ?>
		</td>
		<td><?php echo h($proveedoresProvisione['ProveedoresProvisione']['VALOR_PROVISION']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proveedoresProvisione['ProveedoresProvisione']['ID'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proveedoresProvisione['ProveedoresProvisione']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proveedoresProvisione['ProveedoresProvisione']['ID']), null, __('Estas seguro que deseas eliminar a # %s?', $proveedoresProvisione['ProveedoresProvisione']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<!-- FIN TABLA DE DATOS -->

	<!-- INICIO DE PAGINACIÓN -->

	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, actualmente {:current} de un total de {:count}, partiendo de {:start}, terminando en {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled')); echo "&nbsp";
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

	<!-- FIN DE PAGINACIÓN -->

</div>
