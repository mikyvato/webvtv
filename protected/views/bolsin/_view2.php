<?php
/* @var $this BolsinController */
/* @var $data Bolsin */
?>

<tr>
	<td> <?php echo $i; ?></td>
	<td> <?php echo $model->destinatario_iddestinatario; ?> </td>
	<td> <?php echo $model->documento_iddocumento;?> </td>
	<td> <?php echo $model->factura_idfactura; ?> </td>
	<td> <?php echo $model->observacion; ?> </td>
	<td> <?php echo CHtml::link( "Desactivar",array("bolsin/delete","id"=>$model->iddetalleBolsin),array("class"=>"btn btn-danger")); ?> </td>							
</tr>