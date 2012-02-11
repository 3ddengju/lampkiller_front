<div class="markets form">
<?php echo $this->Form->create('Market');?>
	<fieldset>
		<legend><?php echo __('Edit Market'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Market.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Market.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Markets'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
