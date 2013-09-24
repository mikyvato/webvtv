<h1>View Usuario #<?php echo $model->idUsuario; ?></h1>

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
		'password',
	),
)); ?>

<div class="row-fluid">
<div class="span6">	

<?php 
echo "<h1>Create Role</h1>";
   
$form=$this->beginWidget("CActiveForm"); 

echo $form->labelEx($role,"name"); 
echo $form->textField($role,"name");
echo $form->error($role,"name"); 

echo $form->labelEx($role,"description");
echo $form->textArea($role,"description");
echo $form->error($role,"description")."<br>";

echo CHtml::submitButton("Create",array("class"=>"btn btn-primary"));

$this->endWidget(); 

?>
</div>

<div class="span6">
	<ul class="nav nav-tabs nav-stacked">
		<?php
		foreach (Yii::app()->authManager->getAuthItems() as $data ):
		    $enabled = Yii::app()->authManager->checkAccess($data->name,$model->idUsuario); ?>
			<li>
				<a href="#">
				<span class="label label-important">
					<?php if ($data->type == 0) echo "Role";?>
					<?php if ($data->type == 1) echo "Tarea";?>
					<?php if ($data->type == 2) echo "Rol    "; echo $enabled ? '<span class="label label-success">Activo</span>' : '';?>
				</span>
				<h4><?php echo $data->name; ?>
				</h4>
		    	<?php 
		       		echo CHtml::link( $enabled ? "Off" : "On",array("usuario/assign","id"=>$model->idUsuario,"item"=>$data->name),array("class"=>$enabled ? "btn btn-primary" : "btn"));
		       		echo $enabled ? "<span>Enabled</span>" : ""; 
		       		echo '<p>'.$data->description.'</p>'; ?>
		   		</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
</div>