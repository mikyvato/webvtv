<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */

$this->breadcrumbs=array(
	'Destinatarios'=>array('index'),
	$model->iddestinatario,
);

$this->menu=array(
	array('label'=>'Listar Destinatario', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Modificar Destinatario', 'url'=>array('update', 'id'=>$model->iddestinatario)),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Destinatario Nro: <?php echo $model->iddestinatario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddestinatario',
		'descripcion',
		array(
			'label'=>'Recibe Factura',
			'value'=>Destinatario::getRecFactura($model->recFactura),
			),
		array(
			'label'=>'Estado',
			'value'=>Destinatario::getEstado($model->estado),
			),
	),
)); ?>
