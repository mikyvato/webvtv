<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->idproveedor,
);

$this->menu=array(
	array('label'=>'Listar Proveedores', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Modificar Proveedores', 'url'=>array('update', 'id'=>$model->idproveedor)),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1> Proveedor Nro: <?php echo $model->idproveedor; ?></h1>

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
