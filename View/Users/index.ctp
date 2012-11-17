<div class="users index">
	<h2><?php echo __('Usuarios del sistema'); ?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('RUT'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('APELLIDO'); ?></th>
			<th><?php echo $this->Paginator->sort('DIRECCION'); ?></th>
			<th><?php echo $this->Paginator->sort('TELEFONO'); ?></th>
			<th><?php echo $this->Paginator->sort('USERNAME'); ?></th>
			<th><?php echo $this->Paginator->sort('ROLE'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['ID']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['RUT']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['APELLIDO']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['DIRECCION']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['TELEFONO']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['USERNAME']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ROLE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['ID'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['ID']), null, __('Estas seguro que deseas eliminar a # %s?', $user['User']['ID'])); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones avanzadas'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
