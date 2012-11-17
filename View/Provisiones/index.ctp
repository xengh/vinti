<div class="provisiones index">
	<h2><?php echo __('Detalles Provisiones'); ?></h2>	


	<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><a tabindex="-1"> <li><?php echo $this->Html->link(__('Nueva Provision'), array('action' => 'add')); ?></li> </a></li>						
					<li><?php echo $this->Html->link(__('Listar Tipos de provisión'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Tipo de provisión'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Suministros'), array('controller' => 'suministros', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Suministro'), array('controller' => 'suministros', 'action' => 'add')); ?> </li>				

								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->

		<!-- SEPARADOR DE LOS DOS BOTONES -->

		<ul>
									        				        
			<li class="divider-vertical pull-right">&nbsp;&nbsp;</li>	

		</ul>

		<!-- BOTON PARA GENERAL -->

		<a class="btn btn-primary pull-right" href="/vinti/proveedoresprovisiones">Provisiones generales </a>

		<br><br><br>

		<!-- INICIO TABLA DE DATOS -->


	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('TIPO'); ?></th>
			<th><?php echo $this->Paginator->sort('PROVISION'); ?></th>
			<th><?php echo $this->Paginator->sort('DESCRIPCION'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
	foreach ($provisiones as $provisione): ?>
	<tr>
		<td><?php echo h($provisione['Provisione']['ID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($provisione['Tipo']['TIPO'], array('controller' => 'tipos', 'action' => 'view', $provisione['Tipo']['ID'])); ?>
		</td>
		<td><?php echo h($provisione['Provisione']['PROVISION']); ?>&nbsp;</td>
		<td><?php echo h($provisione['Provisione']['DESCRIPCION']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $provisione['Provisione']['ID'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $provisione['Provisione']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $provisione['Provisione']['ID']), null, __('Estas seguro que deseas eliminar a # %s?', $provisione['Provisione']['ID'])); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled')); echo "&nbsp;";
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

	<!-- FIN DE PAGINACIÓN -->
	
</div>

