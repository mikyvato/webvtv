<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	$model->idbolsin,
);

$this->menu=array(
	array('label'=>'List Bolsin', 'url'=>array('index')),
	array('label'=>'Create Bolsin', 'url'=>array('create')),
	array('label'=>'Update Bolsin', 'url'=>array('update', 'id'=>$model->idbolsin)),
	array('label'=>'Delete Bolsin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbolsin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>

<h1>View Bolsin #<?php echo $model->idbolsin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbolsin',
		'fecha',
		'observacion',
		'estado',
		'usuario_idUsuario',
	),
)); ?>
