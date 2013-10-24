<?php
/* @var $this ProveedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proveedores',
);

$this->menu=array(
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Administrar Proveedores', 'url'=>array('admin')),
);
?>

<div class="span2">&nbsp;</div>
<div class="span8">

<h1>Proveedores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>