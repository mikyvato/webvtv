<?php
/* @var $this BolsinController */
/* @var $data Bolsin */
if ($data->estado == 1){
	$alert = 'info';
}
if ($data->estado == 2){
	$alert = 'success';
}
if ($data->estado == 0){
	$alert = 'warning';
}
?>

<div class="well well-small">
	<div class="container">
		<div class="row-fluid">
			
				<div class="span5">
				<b><?php echo CHtml::encode($data->getAttributeLabel('idbolsin')); ?>:</b>
				<?php echo CHtml::link(CHtml::encode($data->idbolsin), array('view', 'id'=>$data->idbolsin)); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
				<?php echo CHtml::encode(Factura::dateUpdate($data->fecha,2)); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
				<?php echo CHtml::encode($data->observacion); ?>
				<br />
				<!--/div>

				<div class="span3"-->
				<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idUsuario')); ?>:</b>
				<?php echo CHtml::encode(Usuario::getUserName($data->usuario_idUsuario)); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
				<span class="label label-<?php echo $alert; ?>">
				<?php echo CHtml::encode(Bolsin::getEstado($data->estado)); ?>
				</span>
				</div>
			
		</div>
	</div>
</div>