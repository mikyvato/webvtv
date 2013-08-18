<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factura-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proveedor_idproveedor'); ?>
		<?php echo $form->textField($model,'proveedor_idproveedor'); ?>
		<?php echo $form->error($model,'proveedor_idproveedor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->