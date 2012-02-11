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
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('market_id');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('name');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('store_url');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('store_boss');?></th>
			<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('created');?></th>
			<th class="table-header-options line-left"><?php echo __('Actions');?></th>
			
	</tr>
	<?php
	foreach ($stores as $store): ?>
	<tr>
		<td><?php echo h($store['Store']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($store['Market']['name'], array('controller' => 'markets', 'action' => 'view', $store['Market']['id'])); ?>
		</td>
		<td><?php echo h($store['Store']['name']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['store_url']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['store_boss']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $store['Store']['id']), null, __('Are you sure you want to delete # %s?', $store['Store']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>	</table>

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

