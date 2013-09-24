<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuario,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'/'),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->idUsuario)),
);
?>
<div class="content">
	<div class="row-fluid">
    	<div class="span2">&nbsp;</div>
		<div class="span8">
			<legend><h1>View Usuario #<?php echo $model->idUsuario; ?></h1></legend>

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'idUsuario',
					'nombre',
					'apellido',
					'email',
					'created_at',
					'last_login',
					'username',
				),
			)); ?>
		</div>
		<div class="span2">&nbsp;</div>

	    <div class="span12">
	    	<div class="span1">&nbsp;</div>
	        <div class="span3">	
				<?php 
				echo "<legend><h1>Create Role</h1></legend>";

				echo "<div class='well'>";
   				$form=$this->beginWidget("CActiveForm"); 
   				echo $form->labelEx($role,"name"); 
   				echo $form->textField($role,"name");
   				echo $form->error($role,"name"); 
   				echo $form->labelEx($role,"description");
   				echo $form->textArea($role,"description");
   				echo $form->error($role,"description")."<br>";

				echo CHtml::submitButton("Create",array("class"=>"btn btn-primary"));

				$this->endWidget(); 
				echo "</div>";
				?>
			</div>

			<div class="span1">&nbsp;</div>

			<div class="span5">
			<div class="span5"><br><br><br><br></div>
				<table class="table table-condensed table-hover">
					<tr class="success">
				    	<td>#</td>
				    	<td> Nombre del Rol </td>
				    	<td> Estado </td>
				    	<td> Descripcion </td>
				    	<td> Acción  </td>
					</tr>
					<?php
					$i = 1;
					foreach (Yii::app()->authManager->getAuthItems() as $data ):
		    			$enabled = Yii::app()->authManager->checkAccess($data->name,$model->idUsuario); ?>
						<tr>
							<td> <?php echo $i; ?></td>
							<td> <?php echo $data->name; ?> </td>
							<td> <?php echo $enabled ? '<span class="label label-success">Activo</span>' : '';?> </td>
							<td> <?php echo $data->description; ?> </td>
							<td>
		    				<?php 
		       					echo CHtml::link( $enabled ? "Desactivar" : "Activar",array("usuario/assign","id"=>$model->idUsuario,"item"=>$data->name),array("class"=>$enabled ? "btn btn-primary" : "btn"));
		       					$i++;
		       				?>
		       				</td>							
		       				
		   				
						</tr>

					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>