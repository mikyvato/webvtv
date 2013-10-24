<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */

$this->breadcrumbs=array(
	'Destinatarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Destinatarios', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Crear Destinatario', 'url'=>array('create')),
);


?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Administrar Destinatarios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'destinatario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'iddestinatario',
		'descripcion',
		array(
			'name'=>'recFactura',
			'header'=>'Recibe Factura',
			'value'=>'Destinatario::getRecFactura($data->recFactura)',
			'filter'=>Destinatario::getRecFactura(),
			),
		array(
                'name'=>'estado',
                'header'=>'Estado',
                'value'=>'Destinatario::getEstado($data->estado)',
                'filter'=>Destinatario::getEstado(),
                ),
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
			'template'=>' {update}  {view}',
		),
	),
)); ?>
</div>
