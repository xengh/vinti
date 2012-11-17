<div class="proveedoresProvisiones form">
<?php echo $this->Form->create('ProveedoresProvisione'); ?>
	<fieldset>
		<legend><?php echo __('Editar Provisión valorada'); ?></legend>

		<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">					

					
					<li><?php echo $this->Html->link(__('Listar Provisiones Generales'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Provisiones Detalladas'), array('controller' => 'provisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->


		<div class="input">
    	<label for="PROVISIONE_ID">PROVISION</label>
    	<select name="data[ProveedoresProvisione][PROVISIONE_ID]" id="ProveedoresProvisionePROVISIONE_ID">

    		<?php foreach($provisiones as $provisione): ?>

        <option value= "<?php echo h($provisione["Provisione"]["ID"]); ?>" >
        	<?php echo h($provisione["Provisione"]["PROVISION"]); ?>
        </option>

       		<?php endforeach; ?>
      
   		</select>
		</div>

		<div class="input">
    	<label for="PROVEEDORE_ID">PROVEEDOR</label>
    	<select name="data[ProveedoresProvisione][PROVEEDORE_ID]" id="ProveedoresProvisionePROVEEDORE_ID">

    		<?php foreach($proveedores as $proveedore): ?>

        <option value= "<?php echo h($proveedore["Proveedore"]["ID"]); ?>" >
        	<?php echo h($proveedore["Proveedore"]["EMPRESA"]); ?>
        </option>

       		<?php endforeach; ?>
      
   		</select>
		</div>



	<?php		
		echo $this->Form->input('VALOR_PROVISION');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones avanzadas'); ?></h3>
	<ul>

		
	</ul>
</div>
