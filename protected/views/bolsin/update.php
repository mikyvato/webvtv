<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	$model->idbolsin=>array('view','id'=>$model->idbolsin),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bolsin', 'url'=>array('index')),
	array('label'=>'Create Bolsin', 'url'=>array('create')),
	array('label'=>'View Bolsin', 'url'=>array('view', 'id'=>$model->idbolsin)),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>

<h1>Update Bolsin <?php echo $model->idbolsin; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>