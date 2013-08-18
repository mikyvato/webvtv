<?php
/* @var $this DestinatarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Destinatarios',
);

$this->menu=array(
	array('label'=>'Create Destinatario', 'url'=>array('create')),
	array('label'=>'Manage Destinatario', 'url'=>array('admin')),
);
?>

<h1>Destinatarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
