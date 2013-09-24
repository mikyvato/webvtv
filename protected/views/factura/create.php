<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Factura', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<legend> <h1>Create Factura</h1> </legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>