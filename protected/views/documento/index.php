
<?php
/* @var $this DocumentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documentos',
);
?>

<div class="span2">&nbsp;</div>
<div class="span8">
	<h1>Lista de Documentos</h1>
</div>
<div class="span2">&nbsp;</div>
	
	<div class="span11">
	
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
	</div>
	


<div class="span3">
	<?php
	$this->menu=array(
		array('label'=>'Crear Documento', 'url'=>array('create')),
		array('label'=>'/',null,array('class'=>'divider')),
		array('label'=>'Administrar Documentos', 'url'=>array('admin')),
	);
	?>
</div>


