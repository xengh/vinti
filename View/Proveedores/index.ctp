<div class="proveedores index">
	<h2><?php echo __('Proveedores'); ?></h2>

	


	<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Provisiones'), array('controller' => 'provisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Valorar Provision'), array('controller' => 'proveedoresProvisiones', 'action' => 'index')); ?> </li>

								
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

		<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>

		

		<!-- INICIO TABLA DE DATOS -->

	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('EMPRESA'); ?></th>
			<th><?php echo $this->Paginator->sort('EMAIL'); ?></th>
			<th><?php echo $this->Paginator->sort('DIRECCION'); ?></th>
			<th><?php echo $this->Paginator->sort('TELEFONO'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
	foreach ($proveedores as $proveedore): ?>
	<tr>
		<td><?php echo h($proveedore['Proveedore']['ID']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['EMPRESA']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['EMAIL']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['DIRECCION']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['TELEFONO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proveedore['Proveedore']['ID'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proveedore['Proveedore']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $proveedore['Proveedore']['ID']), null, __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

	<!-- FIN TABLA DE DATOS -->
	

	<!-- INICIO DE PAGINACIÓN -->

	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, actualmente {:current} de un total de {:count}, partiendo de {:start}, terminando en {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

	<!-- FIN DE PAGINACIÓN -->

</div>

