<?php
/* @var $this BolsinController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bolsines',
);
?>
<div class="span2">&nbsp;</div>
<div class="span8">
	<h1>Bolsines</h1>

<?php 

$this->menu=array(
	array('label'=>'Crear Bolsin', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Administrar Bolsin', 'url'=>array('admin')),
);
?>

<div class="span12">
<div class="span6">

<?php
$this->widget('zii.widgets.CListView', array(
	'htmlOptions'=>array('class'=>'dropdown'),
	'dataProvider'=>$enviado,
	'itemView'=>'_view',
)); ?>
</div>

<div class="span6">

<?php
$this->widget('zii.widgets.CListView', array(
	'htmlOptions'=>array('class'=>'dropdown'),
	'dataProvider'=>$activo,
	'itemView'=>'_view',
)); ?>
</div>
</div>

</div>
