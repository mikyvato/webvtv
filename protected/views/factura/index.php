<?php
/* @var $this FacturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facturas',
);

$this->menu=array(
	array('label'=>'Crear Factura', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Administrar Factura', 'url'=>array('admin')),
);
?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Facturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
