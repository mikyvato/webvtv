<?php
/* @var $this DetalleBolsinController */
/* @var $model DetalleBolsin */

$this->breadcrumbs=array(
	'Detalle Bolsins'=>array('index'),
	$model->iddetalleBolsin=>array('view','id'=>$model->iddetalleBolsin),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetalleBolsin', 'url'=>array('index')),
	array('label'=>'Create DetalleBolsin', 'url'=>array('create')),
	array('label'=>'View DetalleBolsin', 'url'=>array('view', 'id'=>$model->iddetalleBolsin)),
	array('label'=>'Manage DetalleBolsin', 'url'=>array('admin')),
);
?>

<h1>Update DetalleBolsin <?php echo $model->iddetalleBolsin; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>