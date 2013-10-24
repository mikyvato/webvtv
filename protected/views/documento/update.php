<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->iddocumento=>array('view','id'=>$model->iddocumento),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Documentos', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Adminstrar Documento', 'url'=>array('admin')),
);
?>

<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Modificar Documento Nro: <?php echo $model->iddocumento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>