<?php
/* @var $this BolsinController */
/* @var $model Bolsin */

$this->breadcrumbs=array(
	'Bolsins'=>array('index'),
	$model->idbolsin,
);

$this->menu=array(
	array('label'=>'Create Bolsin', 'url'=>array('create')),
	array('label'=>'/'),
	array('label'=>'Manage Bolsin', 'url'=>array('admin')),
);
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
					<p class="text-right"> <?php echo Factura::dateUpdate($model->fecha,2); ?></p>
				</div>
			</legend>
		</div>

		<div class="span11 well well-small">
		<div class="span8">
			<span class="label label-success"> <i class="icon-hand-right"></i> Observaci&oacute;n</span> 
			<p class="muted">
				<small><?php echo $model->observacion; ?></small>
			</p>
		</div>
		<div class="span3">
			<p class="text-right">
		    <?php echo CHtml::link('Enviar', array('bolsin/estado','id'=>$model->idbolsin, 'estado'=>'1'), array('class'=>'btn btn-success')); ?>
		    <br>
		    <?php echo CHtml::link('Anular', array('bolsin/estado','id'=>$model->idbolsin, 'estado'=>'0'), array('class'=>'btn btn-danger')); ?>
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

			echo CHtml::submitButton("Agregar",array("class"=>"btn btn-primary"));

			$this->endWidget(); 
		?>
	</div>
	<div class="span8" id="fields">
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


/*
 * The followings are the available columns in table 'detalleBolsin':
 * @property integer $iddetalleBolsin
 * @property integer $bolsin_idbolsin
 * @property integer $destinatario_iddestinatario
 * @property integer $documento_iddocumento
 * @property integer $factura_idfactura
 * @property string $observacion
 *
 * The followings are the available model relations:
 * @property Bolsin $bolsinIdbolsin
 * @property Destinatario $destinatarioIddestinatario
 * @property Documento $documentoIddocumento
 * @property Factura $facturaIdfactura
 */


/*
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbolsin',
		array(
			'label'=>'Fecha',
			'value'=>Factura::dateUpdate($model->fecha,2),
			),

		'observacion',
		array(
			'label'=>'Usuario Responsable',
			'value'=>Usuario::getUserName($model->usuario_idUsuario),
			),
		array(
			'label'=>'Estado',
			'value'=>Bolsin::getEstado($model->estado),
			),
	),
)); */
?>

