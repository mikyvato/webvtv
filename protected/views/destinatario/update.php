<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */

$this->breadcrumbs=array(
	'Destinatarios'=>array('index'),
	$model->iddestinatario=>array('view','id'=>$model->iddestinatario),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Destinatario', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Administrar Destinatario', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Modificar Destinatario <?php echo $model->iddestinatario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>