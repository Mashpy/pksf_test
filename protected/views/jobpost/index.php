<?php
/* @var $this JobpostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobposts',
);

$this->menu=array(
	array('label'=>'Create Jobpost', 'url'=>array('create')),
	array('label'=>'Manage Jobpost', 'url'=>array('admin')),
);
?>

<h1>Jobposts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
