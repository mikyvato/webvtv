<?php
/* @var $this FacturaController */
/* @var $data Factura */
if ($data->estado == 1){
	$alert = 'success';
}
if ($data->estado == 0){
	$alert = '';
}
?>

<div class="well well-small">
  <div class="container">
    <div class="row-fluid">
      <div class="span2 ">

		<b><?php echo CHtml::encode($data->getAttributeLabel('idfactura')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->idfactura), array('view', 'id'=>$data->idfactura)); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
		<?php echo CHtml::encode($data->numero); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
		<?php echo CHtml::encode( Yii::app()->dateFormatter->format("dd/MM/y", strtotime($data->fecha))); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
		<?php echo CHtml::encode('$ '.$data->monto); ?>
		<br />
	  </div>
	  
	  <div class="span1">&nbsp;</div>

	  <div class="span5">
		<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
		<?php echo CHtml::encode($data->observacion); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('proveedor_idproveedor')); ?>:</b>
		<?php echo CHtml::encode(Proveedor::getProveedor($data->proveedor_idproveedor)); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
		<span class="label label-<?php echo $alert; ?>">
		<?php echo CHtml::encode(Factura::getEstado($data->estado)); ?>
		</span>
		<br />
	</div>

	</div>
  </div>
</div>