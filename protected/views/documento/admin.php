<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Documento', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Crear Documento', 'url'=>array('create')),
);

?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Administrar Documentos</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'documento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'iddocumento',
		'nombre',
		array(
                'name'=>'estado',
                'header'=>'Estado',
                'value'=>'Documento::getEstado($data->estado)',
                'filter'=>Documento::getEstado(),
             ),
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
			'template'=>' {update}  {view}',
		),
	),
)); ?>
</div>
