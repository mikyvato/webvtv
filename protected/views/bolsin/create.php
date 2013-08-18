<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bolsin', 'url'=>array('index')),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>

<h1>Create Bolsin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>