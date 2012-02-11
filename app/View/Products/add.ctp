
<h1>发布新品</h1>
<br>
<div class="products form">
<div id="step-holder">
<div class="step-no">1</div>
<div class="step-dark-left">
<a href="">Add product details</a>
</div>
<div class="step-dark-right">&nbsp;</div>
<div class="step-no-off">2</div>
<div class="step-light-left">Select related products</div>
<div class="step-light-right">&nbsp;</div>
<div class="step-no-off">3</div>
<div class="step-light-left">Preview</div>
<div class="step-light-round">&nbsp;</div>
<div class="clear"></div>
</div>
<?php echo $this->Form->create('Product');?>
	<?php
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'产品名称：'));
		echo $this->Form->input('product_size',array('class'=>'inp-form','label'=>"产品尺寸："));
		echo $this->Form->input('product_power',array('class'=>'inp-form','label'=>"功率："));
		echo $this->Form->input('product_voltage',array('class'=>'inp-form','label'=>"电压："));
		echo $this->Form->input('product_bulbnumber',array('class'=>'inp-form','label'=>"灯泡个数："));
//echo $this->Form->input('is_established');
		echo $this->Form->input('store_id',array('class'=>'styledselect_form_1','label'=>"商店："));
		echo $this->Form->input('category_id',array('class'=>'styledselect_form_1','label'=>"产品目录："));
		echo $this->Form->input('order',array('class'=>'inp-form','label'=>"商店："));
	?>
	<input type="submit"  class="form-submit" value="下一步"/>
</div>
<!---
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index'));?></li>
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
---!>