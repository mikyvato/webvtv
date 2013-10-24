<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->idfactura=>array('view','id'=>$model->idfactura),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Factura', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Administrar Factura', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Modificar Factura Nro: <?php echo $model->idfactura; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>