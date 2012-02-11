<div class="storeSrcs index">
	<h2><?php echo __('Store Srcs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('store_id');?></th>
			<th><?php echo $this->Paginator->sort('position_id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($storeSrcs as $storeSrc): ?>
	<tr>
		<td><?php echo h($storeSrc['StoreSrc']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storeSrc['Store']['name'], array('controller' => 'stores', 'action' => 'view', $storeSrc['Store']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storeSrc['Position']['name'], array('controller' => 'positions', 'action' => 'view', $storeSrc['Position']['id'])); ?>
		</td>
		<td><?php echo h($storeSrc['StoreSrc']['src']); ?>&nbsp;</td>
		<td><?php echo h($storeSrc['StoreSrc']['created']); ?>&nbsp;</td>
		<td><?php echo h($storeSrc['StoreSrc']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $storeSrc['StoreSrc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $storeSrc['StoreSrc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $storeSrc['StoreSrc']['id']), null, __('Are you sure you want to delete # %s?', $storeSrc['StoreSrc']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Store Src'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
