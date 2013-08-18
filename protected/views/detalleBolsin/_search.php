<?php
/* @var $this DetalleBolsinController */
/* @var $model DetalleBolsin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iddetalleBolsin'); ?>
		<?php echo $form->textField($model,'iddetalleBolsin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bolsin_idbolsin'); ?>
		<?php echo $form->textField($model,'bolsin_idbolsin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destinatario_iddestinatario'); ?>
		<?php echo $form->textField($model,'destinatario_iddestinatario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documento_iddocumento'); ?>
		<?php echo $form->textField($model,'documento_iddocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factura_idfactura'); ?>
		<?php echo $form->textField($model,'factura_idfactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>220)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->