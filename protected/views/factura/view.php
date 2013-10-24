<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->idfactura,
);

$this->menu=array(
	array('label'=>'Crear Factura', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Administrar Factura', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Factura Nro: <?php echo $model->idfactura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfactura',
		'numero',
		array(
			'label'=>'Fecha',
			'value'=>Factura::dateUpdate($model->fecha,2),
			),
		array(
			'label'=>'Monto',
			'value'=>'$ '.$model->monto,
			),
		'observacion',
		array(
			'label'=>'Proveedor',
			'value'=>Proveedor::getProveedor($model->proveedor_idproveedor)
			),
		array(
			'label'=>'Estado',
			'value'=>Factura::getEstado($model->estado),
			),
	),
)); ?>
</div>
