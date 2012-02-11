<div class="markets form">

		<h2><?php echo __('Add Market'); ?></h2>

<?php echo $this->Form->create('Market');?>
	<?php
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'市场名称:'));
		echo $this->Form->input('address',array('class'=>'inp-form','label'=>'地址:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Markets'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
