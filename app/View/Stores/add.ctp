
<div class="stores form">
<div id="related-activities" style="float:right">
<div id="related-act-top">
<img height="43" width="271" alt="" src="../images/forms/header_related_act.gif">
</div>
<div id="related-act-bottom">
<div id="related-act-inner">
<ul>

		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Markets'), array('controller' => 'markets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Market'), array('controller' => 'markets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Srcs'), array('controller' => 'store_srcs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Src'), array('controller' => 'store_srcs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
<div class="clear"></div>
</div>
</div>
</div>
<?php echo $this->Form->create('Store');?>
	<?php
		echo $this->Form->input('market_id',array('label'=>'市场:'));
		echo $this->Form->input('name',array('class'=>'inp-form','label'=>'商铺名称:'));
		echo $this->Form->input('store_url',array('class'=>'inp-form','label'=>'商铺URL:'));
		echo $this->Form->input('store_address',array('class'=>'inp-form','label'=>'商铺地址:'));
		echo $this->Form->input('store_boss',array('class'=>'inp-form','label'=>'商铺老板:'));
		echo $this->Form->input('store_mobile',array('class'=>'inp-form','label'=>'联系方式:'));
		echo $this->Form->input('description',array('class'=>'inp-form','label'=>'描述:'));
		echo $this->Form->input('service',array('class'=>'inp-form','label'=>'商铺服务:'));
		echo $this->Form->input('src',array('id'=>'file_upload','label'=>'商家图片:','type'=>'file'));
    ?>
    	
	
<?php echo $this->Form->end(__('Submit'));?>
</div>
<?php
    echo $this->Html->Script("uploadify/swfobject");
    echo $this->Html->Script("uploadify/jquery.uploadify.v2.1.4.min");
?>
<script type="text/javascript">
var count=1;
$(document).ready(function(){ 
 	  $('#file_upload').uploadify({
	    'uploader' :'<?php echo $this->Html->url('/app/webroot/uploadify/uploadify.swf');?>',
	    'script'   :'<?php echo $this->Html->url('/app/webroot/uploadify/uploadify.php');?>',
	    'cancelImg':'<?php echo $this->Html->url('/app/webroot/uploadify/cancel.png');?>',
	    'folder'   :'<?php //echo $this->Html->url("/app/webroot/$dir/");?>',
		'multi'    :true,
		'auto'     :false,
		'onSelect' :function(e, queueId, fileObj){
	
		$child=$("<input type='hidden' value="+fileObj.name+" name=data[ProductSrc][src1]["+count+"]/>")
		$parent=$("#file_upload");
		$parent.append($child);
		count++;
		}
		
	  });
	});
	function uploadify()
	{
	$('#file_upload').uploadifyUpload();

	
	}
</script>