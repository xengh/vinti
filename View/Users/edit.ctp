<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('RUT');
		echo $this->Form->input('NOMBRE');
		echo $this->Form->input('APELLIDO');
		echo $this->Form->input('DIRECCION');
		echo $this->Form->input('TELEFONO');
		echo $this->Form->input('EMAIL');
		echo $this->Form->input('PASSWORD');
		echo $this->Form->input('ROL', array('options' => array(    'Cliente'=>'Cliente',    'Usuario'=>'Usuario',    'Administrador'=>'Administrador' )));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones avanzadas'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('User.ID')), null, __('Estas seguro que deseas borrar a # %s?', $this->Form->value('User.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
