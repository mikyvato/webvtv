<?php
/* @var $this BolsinController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bolsines',
);
?>
<div class="span2">&nbsp;</div>
<div class="span8">
<h1>Bolsines</h1>

<?php 

$this->menu=array(
	array('label'=>'Create Bolsin', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
?>
</div>
<div class="span7">
<div class="dropdown">
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
  <li><a tabindex="-1" href="#">Action</a></li>
  <li><a tabindex="-1" href="#">Another action</a></li>
  <li><a tabindex="-1" href="#">Something else here</a></li>
  <li class="divider"></li>
  <li><a tabindex="-1" href="#">Separated link</a></li>
</ul>
</div>

<?php
$this->widget('zii.widgets.CListView', array(
	'htmlOptions'=>array('class'=>'dropdown'),
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('.dropdown-toggle').dropdown()
</script>
