<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Create Factura', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#factura-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Manage Facturas</h1>

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
	'id'=>'factura-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idfactura',
		'numero',
		array(
			'header'=>'Fecha',
			'name'=>'fecha',
			'value'=>'Factura::dateUpdate($data->fecha,2)',
			//'filter'=>$this->widget('zii.widgets.jui.CJuiDatePicker', array('model'=>$model, 'attribute'=>'fecha', 'language'=> 'es', 'options'=> array('dateFormat'=>'dd-mm-yy','changeMonth'=> true,'changeYear'=> true,'constrainInput' => 'false', 'duration'=>'fast', 'showAnim'=>'slide',),)); 
			),
		'monto',
		'observacion',
		array(
			'header'=>'Estado',
			'name'=>'estado',
			'value'=>'Factura::getEStado($data->estado)',
			'filter'=>Factura::getEstado(),
			),
		/*
		'proveedor_idproveedor',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>