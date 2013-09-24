<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuario=>array('view','id'=>$model->idUsuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<div class="span3">&nbsp;</div>
<div class="span7">
<h1>Update Usuario <?php echo $model->idUsuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>