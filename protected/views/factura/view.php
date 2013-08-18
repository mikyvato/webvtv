<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->idfactura,
);

$this->menu=array(
	array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'Create Factura', 'url'=>array('create')),
	array('label'=>'Update Factura', 'url'=>array('update', 'id'=>$model->idfactura)),
	array('label'=>'Delete Factura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfactura),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Factura', 'url'=>array('admin')),
);
?>

<h1>View Factura #<?php echo $model->idfactura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfactura',
		'numero',
		'fecha',
		'monto',
		'observacion',
		'estado',
		'proveedor_idproveedor',
	),
)); ?>
