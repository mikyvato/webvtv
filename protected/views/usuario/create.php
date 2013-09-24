<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>
<div class="span3">&nbsp;</div>
<div class="span5">
<legend><h1>Create Usuario</h1></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>