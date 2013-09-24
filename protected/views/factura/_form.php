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

	<?php echo $form->errorSummary($model,null,null,array('class'=>'alert alert-error')); ?>

<div class="content well">
	<div class="row-fluid">
	    <div class="span4">
			<div class="">
				<?php echo $form->labelEx($model,'numero'); ?>
				<?php echo $form->textField($model,'numero',array('size'=>60,'maxlength'=>80)); ?>
				<?php echo $form->error($model,'numero'); ?>
			</div>

			<div class="">
				<?php echo $form->labelEx($model,'fecha'); 
				
		     		if($model->fecha !='')
			     		$model->fecha = date('d-m-Y',strtotime($model->fecha));
		     		
		     		$this->widget('zii.widgets.jui.CJuiDatePicker', array('model'=>$model, 'attribute'=>'fecha', 'language'=> 'es', 'options'=> array('dateFormat'=>'dd-mm-yy','changeMonth'=> true,
									'changeYear'=> true,'constrainInput' => 'false', 'duration'=>'fast', 'showAnim'=>'slide',),)); 
					echo $form->error($model,'fecha'); 
				?>
			</div>

			<div class="">
				<?php echo $form->labelEx($model,'monto'); ?>
				<?php echo $form->textField($model,'monto',array('size'=>12,'maxlength'=>12,'pattern'=>'^\d*(\.\d{2}$)?','title'=>'Ingrese un valor Válido -> 999.99 <-')); ?>
				<?php //$this->widget('CMaskedTextField', array( 'model' => $model, 'attribute' => 'monto','mask' => '99999,99', 'htmlOptions' => array('size' => 9) )); ?>
				<?php echo $form->error($model,'monto'); ?>
			</div>

			<div class="">
				<?php echo $form->labelEx($model,'proveedor_idproveedor'); ?>
				<?php echo $form->dropDownList($model,'proveedor_idproveedor',Proveedor::getListProveedor()); ?>
				<?php echo $form->error($model,'proveedor_idproveedor'); ?>
			</div>
		</div>
		<div class="span1">&nbsp;</div>
		<div class="span4">
			
			<div class="">
				<?php echo $form->labelEx($model,'tipo'); ?>
				<?php echo $form->dropDownList($model,'tipo',array('A'=>'Tipo A','B'=>'Tipo B','C'=>'Tipo C','D'=>'Tipo D','E'=>'Tipo E','F'=>'Tipo F')); ?>
				<?php echo $form->error($model,'tipo'); ?>
			</div>

			<div class="">
				<?php echo $form->labelEx($model,'observacion'); ?>
				<?php echo $form->textArea($model,'observacion',array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'observacion'); ?>
			</div>

			<div class="">
				<?php echo $form->labelEx($model,'estado'); ?>
				<?php echo $form->dropDownList($model,'estado',array('0'=>'Dasactivado','1'=>'Habilitado')); ?>
				<?php echo $form->error($model,'estado'); ?>
			</div>

			<div class="buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn-primary btn-large")); ?>
			</div>
		</div>
	</div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->