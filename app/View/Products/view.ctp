<div class="products view">
<h2><?php  echo __('Product');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Size'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Power'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_power']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Voltage'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_voltage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Bulbnumber'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_bulbnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Established'); ?></dt>
		<dd>
			<?php echo h($product['Product']['is_established']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Store']['name'], array('controller' => 'stores', 'action' => 'view', $product['Store']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($product['Product']['order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details'), array('controller' => 'product_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail'), array('controller' => 'product_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Srcs'), array('controller' => 'product_srcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Src'), array('controller' => 'product_srcs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Product Details');?></h3>
	<?php if (!empty($product['ProductDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Detail Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductDetail'] as $productDetail): ?>
		<tr>
			<td><?php echo $productDetail['id'];?></td>
			<td><?php echo $productDetail['product_id'];?></td>
			<td><?php echo $productDetail['detail_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_details', 'action' => 'view', $productDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_details', 'action' => 'edit', $productDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_details', 'action' => 'delete', $productDetail['id']), null, __('Are you sure you want to delete # %s?', $productDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Detail'), array('controller' => 'product_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Product Srcs');?></h3>
	<?php if (!empty($product['ProductSrc'])):?>
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
		foreach ($product['ProductSrc'] as $productSrc): ?>
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
