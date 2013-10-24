<?php
/* @var $this DestinatarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Destinatarios',
);
?>
<div class="span2">&nbsp;</div>
<div class="span8">
	<h1>Destinatarios</h1>
</div>
<div class="span2">&nbsp;</div>

<div class="span11">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>

<?php
$this->menu=array(
	array('label'=>'Crear Destinatario', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Administrar Destinatario', 'url'=>array('admin')),
); ?>
