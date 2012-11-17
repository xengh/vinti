<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>

	<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Nuevo Producto'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Producciones'), array('controller' => 'producciones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Produccion'), array('controller' => 'producciones', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Imageness'), array('controller' => 'images', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Imagen'), array('controller' => 'images', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>

								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->

		<!-- SEPARADOR DE LOS DOS BOTONES -->

		<ul>
									        				        
			<li class="divider-vertical pull-right">&nbsp;&nbsp;</li>	

		</ul>
		

		<br><br><br>

		<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>



	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORIA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PRODUCCIONE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOMBRE'); ?></th>
			<th><?php echo $this->Paginator->sort('DESCRIPCION'); ?></th>
			<th><?php echo $this->Paginator->sort('PRECIO'); ?></th>
			<th><?php echo $this->Paginator->sort('STOCK_PRODUCTO'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
	foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['ID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Categoria']['ID'], array('controller' => 'categorias', 'action' => 'view', $producto['Categoria']['ID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($producto['Produccione']['ID'], array('controller' => 'producciones', 'action' => 'view', $producto['Produccione']['ID'])); ?>
		</td>
		<td><?php echo h($producto['Producto']['NOMBRE']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['DESCRIPCION']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['PRECIO']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['STOCK_PRODUCTO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $producto['Producto']['ID'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $producto['Producto']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $producto['Producto']['ID']), null, __('Estas seguro que quieres eliminar a # %s?', $producto['Producto']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>


	<!-- INICIO DE PAGINACIÓN -->

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

	<!-- FIN DE PAGINACIÓN -->
</div>

