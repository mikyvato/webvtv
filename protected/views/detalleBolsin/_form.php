<?php
/* @var $this DetalleBolsinController */
/* @var $model DetalleBolsin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-bolsin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bolsin_idbolsin'); ?>
		<?php echo $form->textField($model,'bolsin_idbolsin'); ?>
		<?php echo $form->error($model,'bolsin_idbolsin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destinatario_iddestinatario'); ?>
		<?php echo $form->textField($model,'destinatario_iddestinatario'); ?>
		<?php echo $form->error($model,'destinatario_iddestinatario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documento_iddocumento'); ?>
		<?php echo $form->textField($model,'documento_iddocumento'); ?>
		<?php echo $form->error($model,'documento_iddocumento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factura_idfactura'); ?>
		<?php echo $form->textField($model,'factura_idfactura'); ?>
		<?php echo $form->error($model,'factura_idfactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>220)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->