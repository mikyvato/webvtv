<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->iddocumento,
);

$this->menu=array(
	array('label'=>'List Documento', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Update Documento', 'url'=>array('update', 'id'=>$model->iddocumento)),	
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>View Documento #<?php echo $model->iddocumento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddocumento',
		'nombre',
		array(
			'label' => 'Estado',
			'value' => Documento::getEstado($model->estado)
		),
		
	),
)); ?>
</div>
