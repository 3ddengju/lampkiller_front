<div class="storeSrcs form">
<?php echo $this->Form->create('StoreSrc');?>
	<fieldset>
		<legend><?php echo __('Edit Store Src'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('store_id');
		echo $this->Form->input('position_id');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StoreSrc.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StoreSrc.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Store Srcs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
