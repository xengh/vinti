<div class="provisiones form">
<?php echo $this->Form->create('Provisione'); ?>
	<fieldset>
		<legend><?php echo __('Editar Provision'); ?></legend>

		<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						
					
					<li><?php echo $this->Html->link(__('Listar Provisiones Detalladas'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Provisiones Generales'), array('controller' => 'proveedoresProvisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Tipos de provisiones'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Suministros'), array('controller' => 'suministros', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Suministro'), array('controller' => 'suministros', 'action' => 'add')); ?> </li>					

								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->

		
		<div class="input">
    	<label for="TIPO_ID">TIPO</label>
    	<select name="data[Provisione][TIPO_ID]" id="ProvisioneTIPO_ID">

    		<?php foreach($tipos as $tipo): ?>

        <option value= "<?php echo h($tipo["Tipo"]["ID"]); ?>" >
        	<?php echo h($tipo["Tipo"]["TIPO"]); ?>
        </option>

       		<?php endforeach; ?>
      
   		</select>
		</div>
	<?php
		echo $this->Form->input('PROVISION');
		echo $this->Form->input('DESCRIPCION');
		echo $this->Form->input('Suministro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar')); ?>
</div>

