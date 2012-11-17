<div class="categorias index">
	<h2><?php echo __('Categorias'); ?></h2>

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Nueva Categoria'), array('action' => 'add')); ?></li>
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


	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CATEGORIA_PRODUCTO'); ?></th>
			<th><?php echo $this->Paginator->sort('DESCRIPCION'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo h($categoria['Categoria']['ID']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['CATEGORIA_PRODUCTO']); ?>&nbsp;</td>
		<td><?php echo h($categoria['Categoria']['DESCRIPCION']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $categoria['Categoria']['ID'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $categoria['Categoria']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $categoria['Categoria']['ID']), null, __('Estas seguro que quieres borrar a # %s?', $categoria['Categoria']['ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
</div>
