<?php
/* @var $this BolsinController */
/* @var $model Bolsin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bolsin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'usuario_idUsuario'); ?>
		<?php echo $form->error($model,'usuario_idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->