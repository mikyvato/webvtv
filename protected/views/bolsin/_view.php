<?php
/* @var $this BolsinController */
/* @var $data Bolsin */
?>

<div class="well well-small">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbolsin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbolsin), array('view', 'id'=>$data->idbolsin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode(Factura::dateUpdate($data->fecha,2)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode(Usuario::getUserName($data->usuario_idUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode(Factura::getEstado($data->estado)); ?>
	<br />

	


</div>