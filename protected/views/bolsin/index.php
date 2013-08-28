<?php
/* @var $this BolsinController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bolsines',
);

$this->menu=array(
	array('label'=>'Create Bolsin', 'url'=>array('create')),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>

<h1>Bolsins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
