<div class="productDetails view">
<h2><?php  echo __('Product Detail');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productDetail['Product']['name'], array('controller' => 'products', 'action' => 'view', $productDetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productDetail['Detail']['name'], array('controller' => 'details', 'action' => 'view', $productDetail['Detail']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Detail'), array('action' => 'edit', $productDetail['ProductDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Detail'), array('action' => 'delete', $productDetail['ProductDetail']['id']), null, __('Are you sure you want to delete # %s?', $productDetail['ProductDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
