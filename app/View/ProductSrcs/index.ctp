<div class="productSrcs index">
	<h2><?php echo __('Product Srcs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('product_id');?></th>
			<th><?php echo $this->Paginator->sort('position_id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($productSrcs as $productSrc): ?>
	<tr>
		<td><?php echo h($productSrc['ProductSrc']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productSrc['Product']['name'], array('controller' => 'products', 'action' => 'view', $productSrc['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productSrc['Position']['name'], array('controller' => 'positions', 'action' => 'view', $productSrc['Position']['id'])); ?>
		</td>
		<td><?php echo h($productSrc['ProductSrc']['src']); ?>&nbsp;</td>
		<td><?php echo h($productSrc['ProductSrc']['created']); ?>&nbsp;</td>
		<td><?php echo h($productSrc['ProductSrc']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productSrc['ProductSrc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productSrc['ProductSrc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productSrc['ProductSrc']['id']), null, __('Are you sure you want to delete # %s?', $productSrc['ProductSrc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Product Src'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
