<div class="productos view">
<h2><?php  echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Categoria']['ID'], array('controller' => 'categorias', 'action' => 'view', $producto['Categoria']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produccione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Produccione']['ID'], array('controller' => 'producciones', 'action' => 'view', $producto['Produccione']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOMBRE'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['NOMBRE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DESCRIPCION'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['DESCRIPCION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PRECIO'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['PRECIO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('STOCK PRODUCTO'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['STOCK_PRODUCTO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['ID']), null, __('Are you sure you want to delete # %s?', $producto['Producto']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Producciones'), array('controller' => 'producciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produccione'), array('controller' => 'producciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Images'); ?></h3>
	<?php if (!empty($producto['Images'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('PRODUCTO ID'); ?></th>
		<th><?php echo __('FILENAME'); ?></th>
		<th><?php echo __('DIR'); ?></th>
		<th><?php echo __('MIMETYPE'); ?></th>
		<th><?php echo __('FILESIZE'); ?></th>
		<th><?php echo __('CREATED'); ?></th>
		<th><?php echo __('MODIFIED'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($producto['Images'] as $images): ?>
		<tr>
			<td><?php echo $images['ID']; ?></td>
			<td><?php echo $images['PRODUCTO_ID']; ?></td>
			<td><?php echo $images['FILENAME']; ?></td>
			<td><?php echo $images['DIR']; ?></td>
			<td><?php echo $images['MIMETYPE']; ?></td>
			<td><?php echo $images['FILESIZE']; ?></td>
			<td><?php echo $images['CREATED']; ?></td>
			<td><?php echo $images['MODIFIED']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'images', 'action' => 'view', $images['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'images', 'action' => 'edit', $images['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'images', 'action' => 'delete', $images['id']), null, __('Are you sure you want to delete # %s?', $images['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Images'), array('controller' => 'images', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ventas'); ?></h3>
	<?php if (!empty($producto['Venta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('DESPACHO ID'); ?></th>
		<th><?php echo __('USER ID'); ?></th>
		<th><?php echo __('ESTADO ID'); ?></th>
		<th><?php echo __('FECHA DIA'); ?></th>
		<th><?php echo __('FECHA MES'); ?></th>
		<th><?php echo __('FECHA ANO'); ?></th>
		<th><?php echo __('TOTAL'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($producto['Venta'] as $venta): ?>
		<tr>
			<td><?php echo $venta['ID']; ?></td>
			<td><?php echo $venta['DESPACHO_ID']; ?></td>
			<td><?php echo $venta['USER_ID']; ?></td>
			<td><?php echo $venta['ESTADO_ID']; ?></td>
			<td><?php echo $venta['FECHA_DIA']; ?></td>
			<td><?php echo $venta['FECHA_MES']; ?></td>
			<td><?php echo $venta['FECHA_ANO']; ?></td>
			<td><?php echo $venta['TOTAL']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ventas', 'action' => 'view', $venta['ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ventas', 'action' => 'edit', $venta['ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ventas', 'action' => 'delete', $venta['ID']), null, __('Are you sure you want to delete # %s?', $venta['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
