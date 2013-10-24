<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- bootstrap CSS framework -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.min.css" media="screen, projection" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background-color:#E6E6E6;">

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner" >
		<div class="container">
			<!--a class="brand" href="#"><img border="1" align="center" height="10" width="40" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/index.jpg"></a-->
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
		$home=true;
		
		if (yii::app()->user->checkAccess('Operador')){
			$bolsin=true;
			$factura=true;
			$proveedor=true;
			$home=false;
			
		}

		if (yii::app()->user->checkAccess('Admin')){
			$usuario=true;
			$bolsin=true;
			$destinatario=true;
			$factura=true;
			$proveedor=true;
			$documento=true;
			$home=false;
		}

          $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array('class'=>'nav pull-right'),
		  'encodeLabel'=>false,
          'items'=>array(
            array('label'=>'<i class="icon-home"></i> Home', 'url'=>array('/site/index'),'visible'=>$home),
            array('label'=>'<i class="icon-user"></i> Usuarios', 'url'=>array('/usuario/index'),'visible'=>$usuario),
            array('label'=>'<i class="icon-envelope"></i> Bolsin', 'url'=>array('/bolsin/index'),'visible'=>$bolsin),
            array('label'=>'<i class="icon-list-alt"></i> Facturas', 'url'=>array('/factura/index'),'visible'=>$factura),
            array('label'=>'<i class="icon-share"></i> Destinatarios', 'url'=>array('/destinatario/index'),'visible'=>$destinatario),
            array('label'=>'<i class="icon-shopping-cart"></i> Proveedores', 'url'=>array('/proveedor/index'),'visible'=>$proveedor),
            array('label'=>'<i class="icon-folder-open"></i> Documentos', 'url'=>array('/documento/index'),'visible'=>$documento),
            array('label'=>'<i class="icon-hand-right"></i> Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'<i class="icon-off"></i> Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>
	      	</div> 		
		</div>
	</div>
</div>
<br><br>
<div class="row-fluid" style="background-color:#82e222;height:8px">&nbsp;</div>
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
	
	<br>
	<br>
	<footer class="span12" >
		<div class="row-fluid well">
		    <div class="span3">&nbsp;</div>
			<div id="footer" class="span6">
				<p class="lead text-center">
				VTV - &copy; <?php echo date('Y'); ?> Verificaci&oacute;n T&eacute;cnica Vehicular.<br/>
				All Rights Reserved.<br/>
				
				</p>
			</div><!-- footer -->
		</div>
	</footer>

</div><!-- page -->
<!--script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script-->
</body>
</html>
