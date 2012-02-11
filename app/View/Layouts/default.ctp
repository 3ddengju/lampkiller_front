<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3ddengju</title>
<?php
 echo $this->Html->css('screen');
?>
<!-- jquery -->
<?php
   echo  $this->Html->script('jquery/jquery-1.4.1.min');
?>
<!--  checkbox styling script -->

</head>
<body> 
<!-- Start: page-top-outer -->
<?php
  echo $this->element('header');
?>
<!--  start nav-outer-repeat................................................................................................. START -->
<?php   
   echo $this->element('navibar');
?> 
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<table id="content-table" cellspacing="0" cellpadding="0" border="0" width="100%">
<tbody>
<div class="categories index">
<tr>
<th class="sized" rowspan="3">
<?php echo $this->Html->image("../images/shared/side_shadowleft.jpg",array('alt'=>'logo'));?>
</th>
<th class="topleft"></th>
<td id="tbl-border-top">&nbsp;</td>
<th class="topright"></th>
<th class="sized" rowspan="3">
<?php echo $this->Html->image("../images/shared/side_shadowright.jpg",array('width'=>20,'height'=>300)); ?>
</th>
</tr>
 <tr>
 <td id="tbl-border-left"></td>
 <td>
	
<?php  
   echo $content_for_layout;
?>


</td>

<td id="tbl-border-right"></td>
</tr>
<tr>
<th class="sized bottomleft"></th>
<td id="tbl-border-bottom">&nbsp;</td>
<th class="sized bottomright"></th>
</tr>
</tbody>
</table>
</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->
<div class="clear">&nbsp;</div>
<!-- start footer -->         
<?php echo $this->element('footer');?>
<!-- end footer -->
</body>
</html>
