<div class="markets view">
<h2><?php  echo __('Market');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($market['Market']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($market['Market']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($market['Market']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Market'), array('action' => 'edit', $market['Market']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Market'), array('action' => 'delete', $market['Market']['id']), null, __('Are you sure you want to delete # %s?', $market['Market']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Markets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Market'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stores');?></h3>
	<?php if (!empty($market['Store'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Market Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Store Url'); ?></th>
		<th><?php echo __('Store Address'); ?></th>
		<th><?php echo __('Store Boss'); ?></th>
		<th><?php echo __('Store Mobile'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Service'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($market['Store'] as $store): ?>
		<tr>
			<td><?php echo $store['id'];?></td>
			<td><?php echo $store['market_id'];?></td>
			<td><?php echo $store['name'];?></td>
			<td><?php echo $store['store_url'];?></td>
			<td><?php echo $store['store_address'];?></td>
			<td><?php echo $store['store_boss'];?></td>
			<td><?php echo $store['store_mobile'];?></td>
			<td><?php echo $store['created'];?></td>
			<td><?php echo $store['modified'];?></td>
			<td><?php echo $store['description'];?></td>
			<td><?php echo $store['service'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stores', 'action' => 'view', $store['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stores', 'action' => 'edit', $store['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stores', 'action' => 'delete', $store['id']), null, __('Are you sure you want to delete # %s?', $store['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
