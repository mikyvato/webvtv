<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	$model->idbolsin,
);

$this->menu=array(
	array('label'=>'Crear Bolsin', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Administar Bolsin', 'url'=>array('admin')),
);

if ($model->estado == 1){
	$alert = 'info';
}
if ($model->estado == 2){
	$alert = 'success';
}
if ($model->estado == 0){
	$alert = 'warning';
}
?>
<div class="span12">
	<div class="span2">&nbsp;</div>
	<div class="span8">
		<div class="span12">
			<legend>
				<div class="span8">
					<h3> Bolsin Nro: <?php echo $model->idbolsin; ?> </h3>  
				</div>
				<div class="span3">
					<p class="text-right"> <?php echo Yii::app()->dateFormatter->format("dd/MM/y", strtotime($model->fecha)); ?></p>
				</div>
			</legend>
		</div>

		<div class="span11">
		<div class="span7 well well-small">
			<span class="label label-success"> <i class="icon-hand-right"></i> Observaci&oacute;n </span> <span class="label label-<?php echo $alert; ?>"><?php echo Bolsin::getEstado($model->estado); ?> </span> 
			<p class="muted">
				<small><?php echo $model->observacion; ?></small>
			</p>
		</div>
		<div class="span5">
			<p class="text-right">
		    <?php 
		    	if ($model->estado == 2){
		    		echo CHtml::link('<i class="icon-share-alt icon-white"></i> Enviar', array('bolsin/estado','id'=>$model->idbolsin, 'estado'=>'1'), array('class'=>'btn btn-success','title'=>'Enviar Bolsin')); 
		    	}
		    	else if ($model->estado == 0)
		    		echo CHtml::link('<i class="icon-ok icon-white"></i> Activar', array('bolsin/estado','id'=>$model->idbolsin, 'estado'=>'2'), array('class'=>'btn btn-primary','title'=>'Activar Bolsin')); 
			?>
			&nbsp;
			<?php
		    	if (($model->estado == 1) || ($model->estado == 2)){
		    		echo CHtml::link('<i class="icon-remove icon-white"></i> Anular', array('bolsin/estado','id'=>$model->idbolsin, 'estado'=>'0'), array('class'=>'btn btn-danger','title'=>'Anular Bolsin')); 
		    	}
		    	?> 
		    	&nbsp;
		    	<?php echo CHtml::link('<i class="icon-share icon-white"></i> Exportar', array('bolsin/export','id'=>$model->idbolsin, 'estado'=>'1'), array('class'=>'btn btn-success','title'=>'Exportar Excel')); ?>
		    </p>
		    <p class="text-right">
		    	<?php echo CHtml::link('<i class="icon-print"></i> Imprimir', array('bolsin/print','id'=>$model->idbolsin, 'estado'=>'1'), array('class'=>'btn','title'=>'Imprimir','target'=>'_blank')); ?>
		    </p>
		</div>
		</div>

	</div>

</div>

<div class="span12" >
	<legend><h3 class="text-center">Detalle Bolsin</h3></legend>
	<div class='well span3' >
		<?php
  			$form=$this->beginWidget("CActiveForm");
   			
   			echo $form->labelEx($detForm,"destinatario_iddestinatario"); 
   			echo $form->dropDownList($detForm,'destinatario_iddestinatario',Destinatario::getListDestinatario(),array('empty' => 'Seleccione una Opcion', 'options' => array(0 => array('selected' => 'selected')))); 
   			echo $form->error($detForm,"destinatario_iddestinatario"); 

   			echo $form->labelEx($detForm,"documento_iddocumento");
   			echo $form->dropDownList($detForm,'documento_iddocumento', Documento::getListDocumento(),array('class'=>'docid','empty' => 'Seleccione una Opcion', 'options' => array(0 => array('selected' => 'selected')))); 
   			echo $form->error($detForm,"documento_iddocumento");
                
            echo "<div id='nFactura' style='display:none;'>";	
   			echo $form->labelEx($detForm,"factura_idfactura"); 
   			echo $form->dropDownList($detForm,"factura_idfactura", Factura::getListFactura(),array('empty' => 'Seleccione una Opcion', 'options' => array(0 => array('selected' => 'selected'))));
   			echo $form->error($detForm,"factura_idfactura"); 
   			echo "</div>";

   			echo $form->labelEx($detForm,"observacion"); 
   			echo $form->textArea($detForm,"observacion");
   			echo $form->error($detForm,"observacion"); 

			echo $form->hiddenField($detForm,'bolsin_idbolsin',array('value'=>$model->idbolsin)); 
			if ($model->estado == 2){
				echo CHtml::submitButton("Agregar",array("class"=>"btn btn-primary"));
			}

			$this->endWidget(); 
		?>
	</div>
	<div class="span8 well" id="fields">
	    <?php echo $this->renderPartial('_listDetalle', array('detalle'=>$det, 'fac'=>$fac)); ?>
	</div>
</div>

<?php 
Yii::app()->clientScript->registerScript('hidem', "
$('.docid').change(function(){
	var valorCambiado =$(this).val();
    if(valorCambiado == '1'){
       $('#nFactura').css('display','block');
     }
    else{
       $('#nFactura').css('display','none');	
    }
	return false;
});
");


?>

