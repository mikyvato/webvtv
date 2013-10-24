<table class="table table-bordered table-hover table-condensed">
	<caption>Documentos del Bolsin</caption>
	<thead>
		<tr>
		    <th>Nro</th>
		    <th>Destinatario</th>
		    <th>Tipo de Doc</th>
		    <th>Observaci&oacute;n</th>
		    <th>Acci&oacute;n</th>
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
				<td> 
	            <?php 
					echo CHtml::ajaxLink('<i class="icon-remove"></i>',
                				Yii::app()->createUrl('/bolsin/deletefield'),
                				array('type'=>'POST',
                                	  'data' => array('id'=>$data->iddetalleBolsin,'ajax'=>'delete'),
                                	  'update'=>'#fields'),
                                array('confirm'=>'Are you sure you want to Delete this Field?',
                            		  'class'=>'ajaxDelete',
                            		  'id'=>'delete-'.$data->iddetalleBolsin, // set a unique id
                            		  'live'=>false,) // directly bind event handler to this unique link                               
                            		);
					$i++;
				?>
		        </td>							
		    </tr>
		<?php 
		endforeach; 
		if ($i==1){ ?>
			<tr class="error"><td colspan="5"> <p class="text-center">El Bolsin no posee documentaci&oacute;n</p> </td></tr>
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
		    <th>Acci&oacute;n</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$f = 1;				
		foreach ($fac as $factura ):
			//$facDet = Factura::getFactura();
	?>
				<tr class="success">
					<td> <?php echo $factura->facturaIdfactura->numero; ?> </td>
					<td> <?php echo $factura->facturaIdfactura->tipo;?> </td>
					<td> <?php echo Factura::dateUpdate($factura->facturaIdfactura->fecha,2); ?> </td>
					<td> <?php echo '$'.$factura->facturaIdfactura->monto; ?> </td>
					<td> <?php echo $factura->facturaIdfactura->proveedorIdproveedor->nombre; ?></td>
					<td> <?php echo $factura->facturaIdfactura->observacion; ?> </td>
					<td> 
		            <?php						                
                        // delete link
                        echo CHtml::ajaxLink('<i class="icon-remove"></i>',
                        	Yii::app()->createUrl('bolsin/deletefield'),
                            array(
                            	'type'=>'POST',
                            	'data'=>array('id'=>$factura->iddetalleBolsin,'ajax'=>'delete'),
                            	'update'=>'#fields'),
                            array('confirm'=>'Are you sure you want to Delete this Field?',
                            	'class'=>'ajaxDelete',
                            	'id'=>'delete-'.$factura->iddetalleBolsin, // set a unique id
                            	'live'=>false, // directly bind event handler to this unique link                               
                            ));
						$f++;
					?>
			        </td>							
			    </tr>
		<?php 
		endforeach; 
		if ($f==1){ ?>
			<tr class="error"><td colspan="7"> <p class="text-center">El Bolsin no posee facturas</p> </td></tr>
		<?php }?>
	</tbody>
</table>