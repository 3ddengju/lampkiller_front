<div id="related-activities" style="float:right">
<div id="related-act-top">
<img height="43" width="271" alt="" src="images/forms/header_related_act.gif">
</div>
<div id="related-act-bottom">
<div id="related-act-inner">
<ul>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details'), array('controller' => 'product_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail'), array('controller' => 'product_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Srcs'), array('controller' => 'product_srcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Src'), array('controller' => 'product_srcs', 'action' => 'add')); ?> </li>
	</ul>
<div class="clear"></div>
</div>
</div>
</div>
	<h2><?php echo __('Products');?></h2>
	<table cellpadding="0" cellspacing="0" id="product-table">
	<tr>
	<th class="table-header-check"><?php echo $this->Paginator->sort('id');?></th>
			<th class="table-header-repeat line-left minwidth-1" ><?php echo $this->Paginator->sort('name');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('created');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('store_id');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('category_id');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('order');?></th>
			<th class="table-header-options line-left"><?php echo __('Actions');?></th>
			
	</tr>
	<?php
	foreach ($products as $product): ?>

	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Store']['name'], array('controller' => 'stores', 'action' => 'view', $product['Store']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
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

