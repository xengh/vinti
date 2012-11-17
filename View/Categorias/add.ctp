<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Categoria'); ?></legend>

		<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Añadir producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>

								
				</ul>
		</div> 

		<br><br><br>

		<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>

		<!-- FIN BOTON DE OPCIONES -->


	<?php
		echo $this->Form->input('CATEGORIA_PRODUCTO');
		echo $this->Form->input('DESCRIPCION');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>

