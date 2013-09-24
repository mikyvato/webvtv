
<?php
/* @var $this DocumentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documentos',
);
?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Documentos</h1>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</div>
<div class="span7">
	<?php
	$this->menu=array(
		array('label'=>'Create Documento', 'url'=>array('create')),
		array('label'=>'/',null,array('class'=>'divider')),
		array('label'=>'Manage Documento', 'url'=>array('admin')),
	);
	?>
</div>

