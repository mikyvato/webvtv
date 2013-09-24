<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<legend> <h1>Create Proveedor</h1> </legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>