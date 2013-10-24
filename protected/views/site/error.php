<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="span12">
	<div class="span3">&nbsp;</div>
	<div class="span6">
		<p class="text-center">
			<h2 align="center">Error <?php echo $code; ?></h2>
		</p>
	</div>
<div class="span3">&nbsp;</div>
</div>



<div class="span12">
	<div class="span3">&nbsp;</div>
	<div class="span6 alert alert-error">
	 	<p class="text-center">
			<?php echo CHtml::encode($message); ?>
	 	</p>
 	</div>
</div>