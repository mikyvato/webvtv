<?php
/* @var $this ProveedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proveedores',
);

$this->menu=array(
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<div class="span2">&nbsp;</div>
<div class="span8">

<h1>Proveedors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>