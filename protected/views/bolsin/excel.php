<?php 
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
					<h3> Bolsin Nro: <?php echo $model->idbolsin; ?> </h3>  <p class="text-right"> <?php echo Factura::dateUpdate($model->fecha,2); ?></p>
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
		</div>

	</div>

</div>

<div class="span12" >
	<legend><h3 class="text-center">Detalle Bolsin</h3></legend>
	<div class="span8" id="fields">
	    <table border="1">
			<caption>Documentos del Bolsin</caption>
			<thead>
				<tr>
				    <th>Nro</th>
				    <th>Destinatario</th>
				    <th>Tipo de Doc</th>
				    <th>Observaci&oacute;n</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$i = 1;				
				foreach ($det as $data ):
			?>
					<tr <?php echo ($i % 2 == 0)? "style='background-color:#CCC'":"";?>>
						<td> <?php echo $i; ?></td>
						<td> <?php echo $data->destinatarioIddestinatario->descripcion; ?> </td>
						<td> <?php echo $data->documentoIddocumento->nombre; ?> </td>
						<td> <?php echo $data->observacion; ?> </td>
				    </tr>
				<?php 
				$i++;
				endforeach; 
				if ($i==1){ ?>
					<tr class="error"><td colspan="4"> <p class="text-center">El Bolsin no posee documentaci&oacute;n</p> </td></tr>
					<?php }?>
			</tbody>
		</table>
		<br>
		<table border="1">
			<caption>Facfturas del Bolsin</caption>
			<thead>
				<tr class="success">
				    <th>Fac Nro</th>
				    <th>Fact Tipo</th>
				    <th>Fecha</th>
				    <th>Monto</th>
				    <th>Proveedor</th>
				    <th>Observaci&oacute;n</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$f = 1;				
				foreach ($fac as $factura ):
			?>
						<tr <?php echo ($f % 2 == 0)? "style='background-color:#CCC'":"";?>>
							<td> <?php echo $factura->facturaIdfactura->numero; ?> </td>
							<td> <?php echo $factura->facturaIdfactura->tipo;?> </td>
							<td> <?php echo Factura::dateUpdate($factura->facturaIdfactura->fecha,2); ?> </td>
							<td> <?php echo '$'.$factura->facturaIdfactura->monto; ?> </td>
							<td> <?php echo $factura->facturaIdfactura->proveedorIdproveedor->nombre; ?></td>
							<td> <?php echo $factura->facturaIdfactura->observacion; ?> </td>
					    </tr>
				<?php 
				$f++;
				endforeach; 
				if ($f==1){ ?>
					<tr class="error"><td colspan="6"> <p class="text-center">El Bolsin no posee facturas</p> </td></tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>

