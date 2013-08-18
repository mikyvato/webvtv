<?php
/* @var $this DetalleBolsinController */
/* @var $model DetalleBolsin */

$this->breadcrumbs=array(
	'Detalle Bolsins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetalleBolsin', 'url'=>array('index')),
	array('label'=>'Manage DetalleBolsin', 'url'=>array('admin')),
);
?>

<h1>Create DetalleBolsin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>