<div class="classifications view">
<h2><?php  echo __('Classification');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($classification['Classification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($classification['Classification']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Classification'), array('action' => 'edit', $classification['Classification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Classification'), array('action' => 'delete', $classification['Classification']['id']), null, __('Are you sure you want to delete # %s?', $classification['Classification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Classifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classification'), array('action' => 'add')); ?> </li>
	</ul>
</div>
