<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

<div class="content">
<div class="row-fluid">
	<div class="well">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'email'); ?>
	
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'username'); ?>
	
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'password'); ?>
	<div class="pull-right">

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn-primary btn-large")); ?>
	</div>
	</div>
</div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->