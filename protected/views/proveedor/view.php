<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->idproveedor,
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Update Proveedor', 'url'=>array('update', 'id'=>$model->idproveedor)),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>View Proveedor #<?php echo $model->idproveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproveedor',
		'nombre',
		'telefono',
		'email',
		'observacion',
		array(
			'label'=>'Estado',
			'value'=>Proveedor::getEstado($model->estado),
			),
	),
)); ?>
</div>
