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
	array('label'=>'Create Bolsin', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>


<div class="span11">

<?php
$this->widget('zii.widgets.CListView', array(
	'htmlOptions'=>array('class'=>'dropdown'),
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
</div>
