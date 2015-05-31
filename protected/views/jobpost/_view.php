<?php
/* @var $this JobpostController */
/* @var $data Jobpost */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	<?php echo CHtml::link(CHtml::encode("view job post"), array('view', 'id'=>$data->id)); ?>
</div>