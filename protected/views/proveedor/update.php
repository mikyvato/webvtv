<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->idproveedor=>array('view','id'=>$model->idproveedor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Update Proveedor <?php echo $model->idproveedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>