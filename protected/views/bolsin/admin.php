<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Bolsin', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Crear Bolsin', 'url'=>array('create')),
);

?>

<script>
    function mostrarDetalles(){
        var idbolsin = $.fn.yiiGridView.getSelection('bolsin');
        var parametro = { 'idbolsin' : idbolsin};  
        $.ajax({
  			type: "POST",
  			url: jQuery(this).attr('href'),
  			data: parametro ,
  			success:  function (response) {
                        $("#fields").html(response);
                }
		});
    }
</script>

<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Administrar Bolsines</h1>

<?php
	echo "<div class='pull-right'>";
	if(isset($_GET['Bolsin'])){
		$Bolsin=$_GET['Bolsin'];
		echo CHtml::link('Exportar',"#", array("submit"=>array('bolsin/exportEx', 'Bolsin'=>$Bolsin), 'confirm' => 'Se exportarán los datos, Continuar?', 'class'=>'btn btn-success'));
	}
	else
		echo CHtml::link('Exportar',"#", array("submit"=>array('bolsin/exportEx'), 'confirm' => 'Se exportarán los datos, Continuar?', 'class'=>'btn btn-success'));
	echo "</div><br>";

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bolsin',
	'selectableRows'=>1,
	'selectionChanged'=>'mostrarDetalles',
	'dataProvider'=>$dataProvider2->search(),
	'enableSorting' => true,
    'ajaxUpdate'=>false,
	'filter'=>$dataProvider2,
	'rowHtmlOptionsExpression' => 'array("id"=>"bolsin")',
	'columns'=>array(
		'idbolsin',
		array(
			'header'=>'Fecha',
			'name'=>'fecha',
			'value'=>'Yii::app()->dateFormatter->format("dd/MM/y", strtotime($data->fecha))',
			),
		'observacion',
		array(
			'name'=>'usuario_idUsuario',
			'header'=>'Usuario Responsable',
			'value'=>'Usuario::getUserName($data->usuario_idUsuario)',
			'filter'=>Usuario::getListUsuario(),
			),
		

		array(
                'name'=>'estado',
                'header'=>'Estado',
                'value'=>'Bolsin::getEstado($data->estado)',
                'filter'=>Bolsin::getEstado(),
                ),
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acciones',
			'template'=>' {update}  {view}',
		),
	)
)); 
?>
</div>
<div class="span12">
	<div class="span2">&nbsp;</div>
	<div class="span8 well well-small" id="fields">
	    <?php 
	   /* if (isset($det) && isset($fac))
	    	echo $this->renderPartial('_listDetalle', array('detalle'=>$det, 'fac'=>$fac)); */
	    ?>
	</div>
</div>