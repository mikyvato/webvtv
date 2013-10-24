<?php
/* @var $this DocumentoController */
/* @var $model Documento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

	<div class="well">

		<?php echo $form->labelEx($model,'nombre'); ?>
		<div class="push-right">
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>150)); ?>
		</div>
		<?php echo $form->error($model,'nombre'); ?>
		
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado',array('0'=>'Dasactivado','1'=>'Habilitado')); ?>
		<?php echo $form->error($model,'estado'); ?>
		<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->