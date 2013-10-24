<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->idproveedor=>array('view','id'=>$model->idproveedor),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Proveedores', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Administrar Proveedores', 'url'=>array('admin')),
);
?>

<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Modificar Proveedor Nro: <?php echo $model->idproveedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>