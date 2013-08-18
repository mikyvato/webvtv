<?php
/* @var $this DestinatarioController */
/* @var $model Destinatario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'destinatario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recFactura'); ?>
		<?php echo $form->textField($model,'recFactura'); ?>
		<?php echo $form->error($model,'recFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->