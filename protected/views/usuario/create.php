<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span5">
<legend><h1>Crear Usuario</h1></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>