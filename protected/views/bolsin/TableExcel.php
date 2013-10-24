
	    <table border="1">
			<caption>Documentos del Bolsin</caption>
			<thead>
				<tr>
				    <th>Bolsin Nro</th>
				    <th>Fecha</th>
				    <th>Observaci&oacute;n</th>
				    <th>US Responsable</th>
				    <th>Estado</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$i = 1;				
				foreach ($det as $data ):
			?>
					<tr <?php echo ($i % 2 == 0)? "style='background-color:#CCC'":"";?>>
						<td> <?php echo $data->idbolsin; ?></td>
						<td> <?php echo $data->fecha; ?> </td>
						<td> <?php echo $data->observacion; ?> </td>
						<td> <?php echo $data->usuario_idUsuario; ?> </td>
						<td> <?php echo $data->estado; ?></td>
				    </tr>
				<?php 
				$i++;
				endforeach; 
				if ($i==1){ ?>
					<tr class="error"><td colspan="4"> <p class="text-center">El Bolsin no posee documentaci&oacute;n</p> </td></tr>
					<?php }?>
			</tbody>
		</table>
		