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

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

	<div class="well">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	

	
		<?php echo $form->labelEx($model,'recFactura'); ?>
		<?php echo $form->dropDownList($model,'recFactura',array('0'=>'No','1'=>'SI')); ?>
		<?php echo $form->error($model,'recFactura'); ?>
	

	
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado',array('0'=>'Dasactivado','1'=>'Habilitado')); ?>
		<?php echo $form->error($model,'estado'); ?>
	

	<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn-primary btn-large")); ?>
	
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->