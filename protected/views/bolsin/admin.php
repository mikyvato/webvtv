<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bolsin', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Create Bolsin', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bolsin-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Manage Bolsins</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bolsin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idbolsin',
		array(
			'header'=>'Fecha',
			'name'=>'fecha',
			'value'=>'Factura::dateUpdate($data->fecha,2)',
			),
		'observacion',
		array(
			'name'=>'usuario_idUsuario',
			'header'=>'Usuario Responsable',
			'value'=>'Usuario::getUserName($data->usuario_idUsuario)',
			),
		array(
                'name'=>'estado',
                'header'=>'Estado',
                'value'=>'Bolsin::getEstado($data->estado)',
                'filter'=>Bolsin::getEstado(),
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>