<table class="table table-bordered table-hover table-condensed">
	<caption>Bolsines</caption>
	<thead>
		<tr>
		    <th>Nro</th>
		    <th>Fecha</th>
		    <th>Observaci&oacute;n</th>
		    <th>Us Responsable</th>
		    <th>Estado</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$i=1;
		foreach ($det as $data ):
	?>
			<tr class="success">
				<td> <?php echo $data['idbolsin']; ?></td>
				<td> <?php echo $data['fecha']; ?> </td>
				<td> <?php echo $data['observacion']; ?> </td>
				<td> <?php echo $data['usuario_idUsuario']; ?> </td>
				<td> <?php echo $data['estado']; ?> </td>							
		    </tr>
		<?php
		$i++; 
		endforeach; 
		if ($i==1){ ?>
			<tr class="error"><td colspan="5"> <p class="text-center">El Bolsin no posee documentaci&oacute;n</p> </td></tr>
			<?php }?>
	</tbody>
</table>