<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('CATEGORIA_ID');
		echo $this->Form->input('PRODUCCIONE_ID');
		echo $this->Form->input('NOMBRE');
		echo $this->Form->input('DESCRIPCION');
		echo $this->Form->input('PRECIO');
		echo $this->Form->input('STOCK_PRODUCTO');
		echo $this->Form->input('Venta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
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
