<?php
/* @var $this ApplicantController */
/* @var $data Applicant */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colver_letter')); ?>:</b>
	<?php echo CHtml::encode($data->colver_letter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobpost_id')); ?>:</b>
	<?php echo CHtml::encode($data->jobpost_id); ?>
	<br />


</div>