<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
);


?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Administrar Usuarios</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idUsuario',
		'nombre',
		'apellido',
		'email',
		'created_at',
		'last_login',
		/*
		'username',
		'password',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
