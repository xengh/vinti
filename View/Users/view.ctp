<div class="users view">
<h2><?php  echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RUT'); ?></dt>
		<dd>
			<?php echo h($user['User']['RUT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE'); ?></dt>
		<dd>
			<?php echo h($user['User']['NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('APELLIDO'); ?></dt>
		<dd>
			<?php echo h($user['User']['APELLIDO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DIRECCION'); ?></dt>
		<dd>
			<?php echo h($user['User']['DIRECCION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TELEFONO'); ?></dt>
		<dd>
			<?php echo h($user['User']['TELEFONO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMAIL'); ?></dt>
		<dd>
			<?php echo h($user['User']['EMAIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PASSWORD'); ?></dt>
		<dd>
			<?php echo h($user['User']['PASSWORD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ROL'); ?></dt>
		<dd>
			<?php echo h($user['User']['ROL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones avanzadas'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar usuario'), array('action' => 'delete', $user['User']['ID']), null, __('Are you sure you want to delete # %s?', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuario'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Ventas relacionadas'); ?></h3>
	<?php if (!empty($user['Venta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('DESPACHO ID'); ?></th>
		<th><?php echo __('USER ID'); ?></th>
		<th><?php echo __('ESTADO ID'); ?></th>
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Venta'] as $venta): ?>
		<tr>
			<td><?php echo $venta['ID']; ?></td>
			<td><?php echo $venta['DESPACHO_ID']; ?></td>
			<td><?php echo $venta['USER_ID']; ?></td>
			<td><?php echo $venta['ESTADO_ID']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'ventas', 'action' => 'view', $venta['ID'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'ventas', 'action' => 'edit', $venta['ID'])); ?>
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'ventas', 'action' => 'delete', $venta['ID']), null, __('Are you sure you want to delete # %s?', $venta['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
