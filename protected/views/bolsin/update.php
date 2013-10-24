<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	$model->idbolsin=>array('view','id'=>$model->idbolsin),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Bolsin', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Administrar Bolsin', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span5">
<legend><h1>Modificar Bolsin <?php echo $model->idbolsin; ?></h1></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>