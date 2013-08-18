<?php
/* @var $this BolsinController */
/* @var $data Bolsin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbolsin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbolsin), array('view', 'id'=>$data->idbolsin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_idUsuario); ?>
	<br />


</div>