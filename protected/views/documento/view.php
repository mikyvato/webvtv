<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->iddocumento,
);

$this->menu=array(
	array('label'=>'List Documento', 'url'=>array('index')),
	array('label'=>'Create Documento', 'url'=>array('create')),
	array('label'=>'Update Documento', 'url'=>array('update', 'id'=>$model->iddocumento)),
	array('label'=>'Delete Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddocumento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Documento', 'url'=>array('admin')),
);
?>

<h1>View Documento #<?php echo $model->iddocumento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddocumento',
		'nombre',
		'estado',
	),
)); ?>
