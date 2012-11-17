<div class="tipos view">
<h2><?php  echo __('Tipo de provisión'); ?></h2>

	<!-- INICIO BOTON OPCIONES -->

		<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

					<li><?php echo $this->Html->link(__('Editar Tipo de provisión'), array('action' => 'edit', $tipo['Tipo']['ID'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Eliminar Tipo de provisión'), array('action' => 'delete', $tipo['Tipo']['ID']), null, __('Are you sure you want to delete # %s?', $tipo['Tipo']['ID'])); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Tipos de provisión'), array('action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Tipo de provisión'), array('action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Provisiones'), array('controller' => 'provisiones', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provisión'), array('controller' => 'provisiones', 'action' => 'add')); ?> </li>

								
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
			<?php echo h($tipo['Tipo']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIPO'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['TIPO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DESCRIPCION'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['DESCRIPCION']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Provisiones relacionadas'); ?></h3>
	<?php if (!empty($tipo['Provisione'])): ?>
	<table class="table">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('TIPO ID'); ?></th>
		<th><?php echo __('PROVISION'); ?></th>
		<th><?php echo __('DESCRIPCION'); ?></th>
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipo['Provisione'] as $provisione): ?>
		<tr>
			<td><?php echo $provisione['ID']; ?></td>
			<td><?php echo $provisione['TIPO_ID']; ?></td>
			<td><?php echo $provisione['PROVISION']; ?></td>
			<td><?php echo $provisione['DESCRIPCION']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'provisiones', 'action' => 'view', $provisione['ID'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'provisiones', 'action' => 'edit', $provisione['ID'])); ?>
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'provisiones', 'action' => 'delete', $provisione['ID']), null, __('Are you sure you want to delete # %s?', $provisione['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
