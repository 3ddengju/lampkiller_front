<div class="productSrcs view">
<h2><?php  echo __('Product Src');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productSrc['ProductSrc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productSrc['Product']['name'], array('controller' => 'products', 'action' => 'view', $productSrc['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productSrc['Position']['name'], array('controller' => 'positions', 'action' => 'view', $productSrc['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($productSrc['ProductSrc']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productSrc['ProductSrc']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productSrc['ProductSrc']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Src'), array('action' => 'edit', $productSrc['ProductSrc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Src'), array('action' => 'delete', $productSrc['ProductSrc']['id']), null, __('Are you sure you want to delete # %s?', $productSrc['ProductSrc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Srcs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Src'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
