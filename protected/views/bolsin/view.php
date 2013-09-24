<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	$model->idbolsin,
);

$this->menu=array(
	array('label'=>'Create Bolsin', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>View Bolsin #<?php echo $model->idbolsin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbolsin',
		array(
			'label'=>'Fecha',
			'value'=>Factura::dateUpdate($model->fecha,2),
			),

		'observacion',
		array(
			'label'=>'Usuario Responsable',
			'value'=>Usuario::getUserName($model->usuario_idUsuario),
			),
		array(
			'label'=>'Estado',
			'value'=>Bolsin::getEstado($model->estado),
			),
	),
)); ?>
</div>
