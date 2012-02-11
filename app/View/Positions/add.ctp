<div class="positions form">
<?php echo $this->Form->create('Position');?>
	<fieldset>
		<legend><?php echo __('Add Position'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Product Srcs'), array('controller' => 'product_srcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Src'), array('controller' => 'product_srcs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Srcs'), array('controller' => 'store_srcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Src'), array('controller' => 'store_srcs', 'action' => 'add')); ?> </li>
	</ul>
</div>
