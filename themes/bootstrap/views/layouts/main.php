<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- bootstrap CSS framework -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.min.css" media="screen, projection" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="navbar navbar-static-top navbar-inverse">
	<div class="navbar-inner" >
		<div class="container">
			
	      	<a class="brand"><?php echo CHtml::encode(Yii::app()->name); ?></a>
	      	<div class="nav-collapse collapse pull-right">
	      		<?php 
        //el checkAccess retorna el rol
	    $usuario=false;
		$bolsin=false;
		$destinatario=false;
		$factura=false;
		$proveedor=false;
		$documento=false;
		
		if (yii::app()->user->checkAccess('Operador')){
			$bolsin=true;
			$factura=true;
			$proveedor=true;
			
		}

		if (yii::app()->user->checkAccess('Admin')){
			$usuario=true;
			$bolsin=true;
			$destinatario=true;
			$factura=true;
			$proveedor=true;
			$documento=true;
		}

          $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array("class"=>"nav"),
          'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index')),
            array('label'=>'Usuarios', 'url'=>array('/usuario'),'visible'=>$usuario),
            array('label'=>'Bolsin', 'url'=>array('/bolsin'),'visible'=>$bolsin),
            array('label'=>'Destinatarios', 'url'=>array('/destinatario'),'visible'=>$destinatario),
            array('label'=>'Facturas', 'url'=>array('/factura'),'visible'=>$factura),
            array('label'=>'Proveedores', 'url'=>array('/proveedor'),'visible'=>$proveedor),
            array('label'=>'Documentos', 'url'=>array('/documento'),'visible'=>$documento),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>
	      	</div> 		
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<?php 
			if(isset($this->breadcrumbs)):
				$this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); 
			endif
			?>
		</div>
	</div>
	
	<?php echo $content; ?>
	

	<footer class="span12">
		<div class="row-fluid">
		    <div class="span3">&nbsp;</div>
			<div id="footer" class="span6">
				<p class="lead text-center">
				Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
				All Rights Reserved.<br/>
				<?php echo Yii::powered(); ?>
				</p>
			</div><!-- footer -->
		</div>
	</footer>

</div><!-- page -->

</body>
</html>
