<?php
/* @var $this JobpostController */
/* @var $model Jobpost */

$this->breadcrumbs=array(
	'Jobposts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Jobpost', 'url'=>array('index')),
	array('label'=>'Create Jobpost', 'url'=>array('create')),
	array('label'=>'Update Jobpost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Jobpost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jobpost', 'url'=>array('admin')),
);
?>

<h1>View Jobpost #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
	),
)); ?>
  <?php echo CHtml::link('Apply on this job',array('applicant/create',
                                     'jobpost'=> $model->id
                                     )); ?>
