<?php
/* @var $this JobpostController */
/* @var $model Jobpost */

$this->breadcrumbs=array(
	'Jobposts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jobpost', 'url'=>array('index')),
	array('label'=>'Manage Jobpost', 'url'=>array('admin')),
);
?>

<h1>Create Jobpost</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>