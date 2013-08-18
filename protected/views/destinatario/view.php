<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */

$this->breadcrumbs=array(
	'Destinatarios'=>array('index'),
	$model->iddestinatario,
);

$this->menu=array(
	array('label'=>'List Destinatario', 'url'=>array('index')),
	array('label'=>'Create Destinatario', 'url'=>array('create')),
	array('label'=>'Update Destinatario', 'url'=>array('update', 'id'=>$model->iddestinatario)),
	array('label'=>'Delete Destinatario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddestinatario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Destinatario', 'url'=>array('admin')),
);
?>

<h1>View Destinatario #<?php echo $model->iddestinatario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddestinatario',
		'descripcion',
		'recFactura',
		'estado',
	),
)); ?>
