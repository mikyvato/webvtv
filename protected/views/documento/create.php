<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Documento', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Administrar Documento', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span7">
<legend> <h1> Crear Documento </h1> </legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>