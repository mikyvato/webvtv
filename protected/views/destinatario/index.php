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

<?php
$this->menu=array(
	array('label'=>'Create Destinatario', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Manage Destinatario', 'url'=>array('admin')),
); ?>
</div>
<div class="span7">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
