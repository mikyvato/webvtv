<?php
/* @var $this DetalleBolsinController */
/* @var $model DetalleBolsin */

$this->breadcrumbs=array(
	'Detalle Bolsins'=>array('index'),
	$model->iddetalleBolsin,
);

$this->menu=array(
	array('label'=>'List DetalleBolsin', 'url'=>array('index')),
	array('label'=>'Create DetalleBolsin', 'url'=>array('create')),
	array('label'=>'Update DetalleBolsin', 'url'=>array('update', 'id'=>$model->iddetalleBolsin)),
	array('label'=>'Delete DetalleBolsin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddetalleBolsin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleBolsin', 'url'=>array('admin')),
);
?>

<h1>View DetalleBolsin #<?php echo $model->iddetalleBolsin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddetalleBolsin',
		'bolsin_idbolsin',
		'destinatario_iddestinatario',
		'documento_iddocumento',
		'factura_idfactura',
		'observacion',
	),
)); ?>
