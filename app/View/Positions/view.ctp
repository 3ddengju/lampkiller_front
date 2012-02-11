<div class="positions view">
<h2><?php  echo __('Position');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($position['Position']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($position['Position']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Position'), array('action' => 'delete', $position['Position']['id']), null, __('Are you sure you want to delete # %s?', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Srcs'), array('controller' => 'product_srcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Src'), array('controller' => 'product_srcs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Srcs'), array('controller' => 'store_srcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Src'), array('controller' => 'store_srcs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Product Srcs');?></h3>
	<?php if (!empty($position['ProductSrc'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['ProductSrc'] as $productSrc): ?>
		<tr>
			<td><?php echo $productSrc['id'];?></td>
			<td><?php echo $productSrc['product_id'];?></td>
			<td><?php echo $productSrc['position_id'];?></td>
			<td><?php echo $productSrc['src'];?></td>
			<td><?php echo $productSrc['created'];?></td>
			<td><?php echo $productSrc['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_srcs', 'action' => 'view', $productSrc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_srcs', 'action' => 'edit', $productSrc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_srcs', 'action' => 'delete', $productSrc['id']), null, __('Are you sure you want to delete # %s?', $productSrc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Src'), array('controller' => 'product_srcs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Store Srcs');?></h3>
	<?php if (!empty($position['StoreSrc'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Store Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Src'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['StoreSrc'] as $storeSrc): ?>
		<tr>
			<td><?php echo $storeSrc['id'];?></td>
			<td><?php echo $storeSrc['store_id'];?></td>
			<td><?php echo $storeSrc['position_id'];?></td>
			<td><?php echo $storeSrc['src'];?></td>
			<td><?php echo $storeSrc['created'];?></td>
			<td><?php echo $storeSrc['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'store_srcs', 'action' => 'view', $storeSrc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'store_srcs', 'action' => 'edit', $storeSrc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'store_srcs', 'action' => 'delete', $storeSrc['id']), null, __('Are you sure you want to delete # %s?', $storeSrc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store Src'), array('controller' => 'store_srcs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
