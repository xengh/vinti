<div class="categorias view">
<h2><?php  echo __('Categoria'); ?></h2>

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Editar Categoria'), array('action' => 'edit', $categoria['Categoria']['ID'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Borrar Categoria'), array('action' => 'delete', $categoria['Categoria']['ID']), null, __('Estas seguro que quieres borrarlo # %s?', $categoria['Categoria']['ID'])); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Categoria'), array('action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Añadir Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>

								
				</ul>
		</div> 

		<br><br><br>

		<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>

		<!-- FIN BOTON DE OPCIONES -->


	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CATEGORIA PRODUCTO'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['CATEGORIA_PRODUCTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DESCRIPCION'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['DESCRIPCION']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Productos Relacionados'); ?></h3>
	<?php if (!empty($categoria['FK_REFERENCE_19'])): ?>
	<table class="table">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('CATEGORIA ID'); ?></th>
		<th><?php echo __('PRODUCCIONE ID'); ?></th>
		<th><?php echo __('NOMBRE'); ?></th>
		<th><?php echo __('DESCRIPCION'); ?></th>
		<th><?php echo __('PRECIO'); ?></th>
		<th><?php echo __('STOCK PRODUCTO'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($categoria['FK_REFERENCE_19'] as $fKREFERENCE19): ?>
		<tr>
			<td><?php echo $fKREFERENCE19['ID']; ?></td>
			<td><?php echo $fKREFERENCE19['CATEGORIA_ID']; ?></td>
			<td><?php echo $fKREFERENCE19['PRODUCCIONE_ID']; ?></td>
			<td><?php echo $fKREFERENCE19['NOMBRE']; ?></td>
			<td><?php echo $fKREFERENCE19['DESCRIPCION']; ?></td>
			<td><?php echo $fKREFERENCE19['PRECIO']; ?></td>
			<td><?php echo $fKREFERENCE19['STOCK_PRODUCTO']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'productos', 'action' => 'view', $fKREFERENCE19['ID'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'productos', 'action' => 'edit', $fKREFERENCE19['ID'])); ?>
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'productos', 'action' => 'delete', $fKREFERENCE19['ID']), null, __('Estas seguro que quieres eliminar a # %s?', $fKREFERENCE19['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
