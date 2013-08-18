<?php
/* @var $this DetalleBolsinController */
/* @var $data DetalleBolsin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddetalleBolsin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddetalleBolsin), array('view', 'id'=>$data->iddetalleBolsin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bolsin_idbolsin')); ?>:</b>
	<?php echo CHtml::encode($data->bolsin_idbolsin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destinatario_iddestinatario')); ?>:</b>
	<?php echo CHtml::encode($data->destinatario_iddestinatario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documento_iddocumento')); ?>:</b>
	<?php echo CHtml::encode($data->documento_iddocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factura_idfactura')); ?>:</b>
	<?php echo CHtml::encode($data->factura_idfactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />


</div>