<?php
/* @var $this DocumentoController */
/* @var $data Documento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddocumento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddocumento), array('view', 'id'=>$data->iddocumento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>