<?php
/* @var $this DestinatarioController */
/* @var $data Destinatario */
?>

<div class="well well-small span3">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddestinatario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddestinatario), array('view', 'id'=>$data->iddestinatario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recFactura')); ?>:</b>
	<?php echo CHtml::encode(Destinatario::getRecFactura($data->recFactura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode(Destinatario::getEstado($data->estado)); ?>
	<br />


</div>