<div class="tipos index">
	<h2><?php echo __('Tipos de provisiones'); ?></h2>

	<!-- INICIO BOTON OPCIONES -->

		<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Nuevo Tipo'), array('action' => 'add')); ?></li>
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


	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('TIPO'); ?></th>
			<th><?php echo $this->Paginator->sort('DESCRIPCION'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
	foreach ($tipos as $tipo): ?>
	<tr>
		<td><?php echo h($tipo['Tipo']['ID']); ?>&nbsp;</td>
		<td><?php echo h($tipo['Tipo']['TIPO']); ?>&nbsp;</td>
		<td><?php echo h($tipo['Tipo']['DESCRIPCION']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipo['Tipo']['ID'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipo['Tipo']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $tipo['Tipo']['ID']), null, __('Estas seguro que desea eliminar a # %s?', $tipo['Tipo']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, actualmente {:current} de un total de {:count}, partiendo de {:start}, terminando en {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));echo "&nbsp";
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

