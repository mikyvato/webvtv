<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */

$this->breadcrumbs=array(
	'Destinatarios'=>array('index'),
	$model->iddestinatario=>array('view','id'=>$model->iddestinatario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Destinatario', 'url'=>array('index')),
	array('label'=>'Create Destinatario', 'url'=>array('create')),
	array('label'=>'View Destinatario', 'url'=>array('view', 'id'=>$model->iddestinatario)),
	array('label'=>'Manage Destinatario', 'url'=>array('admin')),
);
?>

<h1>Update Destinatario <?php echo $model->iddestinatario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>