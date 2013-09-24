<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->idfactura=>array('view','id'=>$model->idfactura),
	'Update',
);

$this->menu=array(
	array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'Create Factura', 'url'=>array('create')),
	array('label'=>'View Factura', 'url'=>array('view', 'id'=>$model->idfactura)),
	array('label'=>'Manage Factura', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Update Factura <?php echo $model->idfactura; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>