<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Bolsin', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span5">
<legend> <h1>Crear Bolsin</h1> </legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>