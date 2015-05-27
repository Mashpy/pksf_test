<?php
/* @var $this JobpostController */
/* @var $model Jobpost */

$this->breadcrumbs=array(
	'Jobposts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jobpost', 'url'=>array('index')),
	array('label'=>'Create Jobpost', 'url'=>array('create')),
	array('label'=>'View Jobpost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Jobpost', 'url'=>array('admin')),
);
?>

<h1>Update Jobpost <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>