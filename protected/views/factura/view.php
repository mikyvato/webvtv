<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->idfactura,
);

$this->menu=array(
	//array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'Create Factura', 'url'=>array('create')),
	array('label'=>'/'),
	//array('label'=>'Update Factura', 'url'=>array('update', 'id'=>$model->idfactura)),
	//array('label'=>'Delete Factura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfactura),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Factura', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>View Factura #<?php echo $model->idfactura; ?></h1>

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
