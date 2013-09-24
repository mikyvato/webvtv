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

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

	<div class="well">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php 
			
			if($model->fecha !='')
			     		$model->fecha = date('d-m-Y',strtotime($model->fecha));
			$this->widget('zii.widgets.jui.CJuiDatePicker', array('model'=>$model, 'attribute'=>'fecha', 'language'=> 'es', 'options'=> array('dateFormat'=>'dd-mm-yy','changeMonth'=> true,
				'changeYear'=> true,'constrainInput' => 'false', 'duration'=>'fast', 'showAnim'=>'slide',),)); 
		?>

		<?php echo $form->error($model,'fecha'); ?>
	
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado',array('1'=>'Activo')); ?>
		<?php echo $form->error($model,'estado'); ?>
	
		<?php echo $form->hiddenField($model,'usuario_idUsuario',array('value'=>Yii::app()->user->id)); ?>

	<div class="pull-right">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn-primary btn-large")); ?>
	</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->