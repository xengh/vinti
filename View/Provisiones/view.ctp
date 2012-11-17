<div class="provisiones view">
	
		<h2><?php  echo __('Provision'); ?></h2>

		<!-- INICIO BOTON DE OPCIONES -->

	<div class="btn-group  pull-right">
	  		<a class="btn dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#">
	    		Opciones
	  	  		<span class="caret"></span>
	  		</a>
	  			<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">						

	  				<li><?php echo $this->Html->link(__('Editar Provisione'), array('action' => 'edit', $provisione['Provisione']['ID'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Eliminar Provision'), array('action' => 'delete', $provisione['Provisione']['ID']), null, __('Estas seguro que quieres eliminar a # %s?', $provisione['Provisione']['ID'])); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Provisiones'), array('action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Provision'), array('action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Tipos de provisiones'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Tipo de provisión'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Suministros'), array('controller' => 'suministros', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Suministro'), array('controller' => 'suministros', 'action' => 'add')); ?> </li>
					
								
				</ul>
		</div> 

		<!-- FIN BOTON DE OPCIONES -->


	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($provisione['Provisione']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($provisione['Tipo']['ID'], array('controller' => 'tipos', 'action' => 'view', $provisione['Tipo']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PROVISION'); ?></dt>
		<dd>
			<?php echo h($provisione['Provisione']['PROVISION']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DESCRIPCION'); ?></dt>
		<dd>
			<?php echo h($provisione['Provisione']['DESCRIPCION']); ?>
			&nbsp;
		</dd>
	</dl>

</div>

	<div class="related">
		<h3><?php echo __('Compras relacionadas'); ?></h3>
	<?php if (!empty($provisione['Compra'])): ?>
		<dl>
			<dt><?php echo __('ID'); ?></dt>
		<dd>
	<?php echo $provisione['Compra']['ID']; ?>
&nbsp;</dd>
		<dt><?php echo __('PROVISIONE ID'); ?></dt>
		<dd>
	<?php echo $provisione['Compra']['PROVISIONE_ID']; ?>
&nbsp;</dd>
		<dt><?php echo __('USER ID'); ?></dt>
		<dd>
	<?php echo $provisione['Compra']['USER_ID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CANTIDAD'); ?></dt>
		<dd>
	<?php echo $provisione['Compra']['CANTIDAD']; ?>
&nbsp;</dd>
		<dt><?php echo __('FECHA DIA'); ?></dt>
		<dd>
	<?php echo $provisione['Compra']['FECHA_DIA']; ?>
&nbsp;</dd>
		<dt><?php echo __('FECHA MES'); ?></dt>
		<dd>
	<?php echo $provisione['Compra']['FECHA_MES']; ?>
&nbsp;</dd>
		<dt><?php echo __('FECHA ANO'); ?></dt>
		<dd>
	<?php echo $provisione['Compra']['FECHA_ANO']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar Compra'), array('controller' => 'compras', 'action' => 'edit', $provisione['Compra']['ID'])); ?></li>
			</ul>
		</div>
	</div>
	
<div class="related">
	<h3><?php echo __('Suministros relacionados'); ?></h3>
	<?php if (!empty($provisione['Suministro'])): ?>
	<table class="table">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('STOCK SUM'); ?></th>
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($provisione['Suministro'] as $suministro): ?>
		<tr>
			<td><?php echo $suministro['ID']; ?></td>
			<td><?php echo $suministro['STOCK_SUM']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'suministros', 'action' => 'view', $suministro['ID'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'suministros', 'action' => 'edit', $suministro['ID'])); ?>
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'suministros', 'action' => 'delete', $suministro['ID']), null, __('Estas seguro que deseas eliminar a # %s?', $suministro['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	
</div>
