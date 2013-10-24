<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Proveedores', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Administrar Proveedores', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<legend> <h1>Crear Proveedores</h1> </legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>