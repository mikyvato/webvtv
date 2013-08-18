<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */

$this->breadcrumbs=array(
	'Destinatarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Destinatario', 'url'=>array('index')),
	array('label'=>'Manage Destinatario', 'url'=>array('admin')),
);
?>

<h1>Create Destinatario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>