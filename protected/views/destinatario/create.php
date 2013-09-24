<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */

$this->breadcrumbs=array(
	'Destinatarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Destinatario', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Destinatario', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span5">
<legend> <h1>Create Destinatario</h1> </legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>