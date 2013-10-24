<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="content well">
	<div class="row-fluid">
	    <div class="span4">

			<div class="">
				<?php echo "Desde: "; 
				//echo $form->textField($model,'fecha',array('size'=>60,'maxlength'=>80)); 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					//'model'=>$model, 
					'name'=>'desde',
					'language'=> 'es', 
					'options'=> array(
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=> true,
						'changeYear'=> true,
						'constrainInput' => 'false', 
						'duration'=>'fast', 
						'showAnim'=>'slide',
						),
					)
				); ?>
			</div>

		</div>
		<div class="span1">&nbsp;</div>
		<div class="span4">
			<div class="">
				<?php echo "Hasta: ";
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					//'model'=>$model, 
					'name'=>'hasta', 
					'language'=> 'es', 
					'options'=> array(
						'dateFormat'=>'dd-mm-yy',
						'changeMonth'=> true,
						'changeYear'=> true,
						'constrainInput' => 'false', 
						'duration'=>'fast', 
						'showAnim'=>'slide',
						),
					)
				); ?>
			
				<?php echo CHtml::submitButton('Search',array("class"=>"btn-primary")); ?>
			</div>
		</div>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->