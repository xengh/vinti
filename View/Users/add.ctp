<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Registro '); ?></legend>
	<?php
		echo $this->Form->input('RUT');
		echo $this->Form->input('NOMBRE');
		echo $this->Form->input('APELLIDO');
		echo $this->Form->input('DIRECCION');
		echo $this->Form->input('TELEFONO');
		echo $this->Form->input('username', array('label' => 'EMAIL'));
		echo $this->Form->input('password', array('type' => 'password', 'label' => 'CONTRASEÑA'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>

