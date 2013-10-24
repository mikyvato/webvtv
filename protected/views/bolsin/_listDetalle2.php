<table class="table table-bordered table-hover table-condensed">
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
		foreach ($detalle as $data ):
	?>
			<tr class="success">
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

<table class="table table-bordered table-hover table-condensed">
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
				<tr class="success">
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