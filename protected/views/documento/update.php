<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->iddocumento=>array('view','id'=>$model->iddocumento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Documento', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Documento', 'url'=>array('admin')),
);
?>

<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Update Documento <?php echo $model->iddocumento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>