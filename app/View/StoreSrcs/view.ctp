<div class="storeSrcs view">
<h2><?php  echo __('Store Src');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($storeSrc['StoreSrc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeSrc['Store']['name'], array('controller' => 'stores', 'action' => 'view', $storeSrc['Store']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($storeSrc['Position']['name'], array('controller' => 'positions', 'action' => 'view', $storeSrc['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Src'); ?></dt>
		<dd>
			<?php echo h($storeSrc['StoreSrc']['src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($storeSrc['StoreSrc']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($storeSrc['StoreSrc']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Src'), array('action' => 'edit', $storeSrc['StoreSrc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store Src'), array('action' => 'delete', $storeSrc['StoreSrc']['id']), null, __('Are you sure you want to delete # %s?', $storeSrc['StoreSrc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Srcs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Src'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
