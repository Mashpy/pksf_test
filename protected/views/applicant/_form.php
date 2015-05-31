<?php
/* @var $this ApplicantController */
/* @var $model Applicant */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'applicant-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'colver_letter'); ?>
		<?php echo $form->textArea($model,'colver_letter',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'colver_letter'); ?>
	</div>

	<div class="row">
<?php echo $form->hiddenField($model,'user_id', array('value'=>$id=Yii::app()->user->id, 'readonly' => 'true')); ?>
	</div>

	<div class="row">
    <?php echo $form->hiddenField($model,'jobpost_id', array('value'=>Yii::app()->request->getParam('jobpost'), 'readonly' => 'true')); ?>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->