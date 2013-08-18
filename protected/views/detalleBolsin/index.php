<?php
/* @var $this DetalleBolsinController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detalle Bolsins',
);

$this->menu=array(
	array('label'=>'Create DetalleBolsin', 'url'=>array('create')),
	array('label'=>'Manage DetalleBolsin', 'url'=>array('admin')),
);
?>

<h1>Detalle Bolsins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
