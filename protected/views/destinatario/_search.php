<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="">
		<?php echo $form->label($model,'iddestinatario'); ?>
		<?php echo $form->textField($model,'iddestinatario'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'recFactura'); ?>
		<?php echo $form->textField($model,'recFactura'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Search',array("class"=>"btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->