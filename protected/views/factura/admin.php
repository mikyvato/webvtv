<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Factura', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Crear Factura', 'url'=>array('create')),
);

?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Administrar Facturas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'factura-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'numero',
		array(
			'header'=>'Fecha',
			'name'=>'fecha',
			'value'=> 'Yii::app()->dateFormatter->format("dd/MM/y", strtotime($data->fecha))',
			),
		array(
			'header'=>'Monto',
			'name'=>'monto',
			'value'=>'"$ ".$data->monto',
			),
		array(
			'header'=>'Proveedor',
			'name'=>'proveedor_idproveedor',
			'value'=>'$data->proveedorIdproveedor->nombre',
			'filter'=>Proveedor::getListProveedor(),
			),
		'observacion',
		array(
			'name'=>'bolsin_idbolsin',
			'header'=>'Bolsin Nro',
			'type'=>'html',
			'value'=>'($data->bolsin_idbolsin <> null) ? $data->bolsin_idbolsin : ""',
			),
		array(
			'header'=>'Estado',
			'name'=>'estado',
			'value'=>'Factura::getEstado($data->estado)',
			'filter'=>Factura::getEstado(),
			),
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
			'template'=>'{bolsin}  {edit}  {views}',
		    'buttons'=>array
		    (
		        'bolsin' => array
		        (
		            'label'=>'<i class="icon-bold"></i>&nbsp;',
		            'url'=>'($data->bolsin_idbolsin > 0) ? Yii::app()->createUrl("bolsin/view", array("id"=>$data->bolsin_idbolsin)) : "#" ',
		            'options'=>array('title'=>'Bolsin'),
		        ),
		        'edit' => array
		        (
		            'label'=>'<i class="icon-pencil"></i>&nbsp;',
		            'url'=>'Yii::app()->createUrl("factura/update", array("id"=>$data->idfactura))',
		            'options'=>array('title'=>'Editar'),
		        ),
		        'views' => array
		        (
		            'label'=>'<i class="icon-search"></i>&nbsp;',
		            'url'=>'Yii::app()->createUrl("factura/view", array("id"=>$data->idfactura))',
		            'options'=>array('title'=>'Ver'),
		        ),
		    ),
			//'viewButtonUrl'=>'Yii:app()->createUrl("bolsin/view",array("id"=>"$data->bolsin_idbolsin"))',
			//'value'=>'<i class="icon-search"></i>',
		),
	),
)); 



?>
</div>