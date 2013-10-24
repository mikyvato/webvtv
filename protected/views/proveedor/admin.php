<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Proveedor', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
);

?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Administrar Proveedores</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idproveedor',
		'nombre',
		'telefono',
		'email',
		'observacion',
		array(
              'name'=>'estado',
              'header'=>'Estado',
              'value'=>'Proveedor::getEstado($data->estado)',
              'filter'=>Proveedor::getEstado(),
			),
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
			'template'=>' {update}  {view}',
		),
	),
)); ?>
</div>