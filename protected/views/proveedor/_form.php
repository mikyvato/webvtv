<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

<div class="content well">
    <div class="row-fluid">
	<div class="span4">
		<div class="">
			<?php echo $form->labelEx($model,'nombre'); ?>
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>220)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>

		<div class="">
			<?php echo $form->labelEx($model,'telefono'); ?>
			<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>80)); ?>
			<?php echo $form->error($model,'telefono'); ?>
		</div>

		<div class="">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="span1">&nbsp;</div>

	<div class="span4">
		<div class="">
			<?php echo $form->labelEx($model,'observacion'); ?>
			<?php echo $form->textArea($model,'observacion',array('size'=>60,'maxlength'=>220)); ?>
			<?php echo $form->error($model,'observacion'); ?>
		</div>

		<div class="">
			<?php echo $form->labelEx($model,'estado'); ?>
			<?php echo $form->dropDownList($model,'estado',array('0'=>'Dasactivado','1'=>'Habilitado')); ?>
			<?php echo $form->error($model,'estado'); ?>
		</div>
	
		<div class="">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn-primary btn-large")); ?>
		</div>
	</div>


	</div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->