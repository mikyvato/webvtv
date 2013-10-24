
<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">

    <div class="well">
      <div class="row-fluid">
        <div class="span2">
          <img height="40" width="100" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/index.jpg" class="img-circle">
        </div>
        <div class="span10">
          <p class="text-center">
            <h1 align="center">Verificaci&oacute;n T&eacute;cnica Vehicular</h1>
            <h2 align="center"><?php echo CHtml::encode(Yii::app()->name); ?></h2>
          </p>
        </div>
      </div>

    <div class="row-fluid">
            <div class="span4" style="text-align:center;">
              <div><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gest_doc.png" class="img-polaroid"></div>
              <h3>1. Gestion</h3>
              <!--p>Gesti&oacute;n de documentos, facturas y env&iacute;os. </p-->
          </div>
            <div class="span4" style="text-align:center;">
              <div><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/consulta.jpg" class="img-polaroid"></div>
              <h3>2. Consulta</h3>
              <!--p>Maximice su tiempo, realizando consultas r&aacute;pidas y eficientes.</p-->
          </div>
            <div class="span4" style="text-align:center;">
              <div><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/administracion.jpg" class="img-polaroid"></div>
              <h3>3. Administración</h3>
              <!--p>R&aacute;pida, a un click de didstancia. Control administrativo simple</p-->
          </div>
      </div>
    </div>
</div><!-- /.span4 -->

<div class="span4">
  <div class="well">
  <?php 
  
      
      $form=$this->beginWidget('CActiveForm', array(
      	'id'=>'login-form',
      	'action'=>$this->createUrl("site/login"),
      	'htmlOptions'=>array("style"=>"text-align: left"),
      	'enableClientValidation'=>true,
      	'clientOptions'=>array(
        'validateOnSubmit'=>true,
         ),
      )); 

  ?>
  <?php    
     
     echo $form->labelEx($model,'username'); 
     echo $form->textField($model,'username',array("class"=>"input-block-level","placeholder"=>"Username")); 
     echo $form->error($model,'username'); 

     echo $form->labelEx($model,'password'); 
     echo $form->passwordField($model,'password',array("class"=>"input-block-level","placeholder"=>"Password")); 
     echo $form->error($model,'password'); ?>
  <br>
    <?php 
     echo $form->checkBox($model,'rememberMe'); 
     echo $form->label($model,'rememberMe'); 
     echo $form->error($model,'rememberMe'); 

     echo CHtml::submitButton('Login',array("class"=>"btn btn-primary pull-right")); 
     $this->endWidget(); 
    ?>

  </div>

  <!--div class="well">
    <form class="form-signin" style="text-align: left" id="login-form" action="#" method="post">
     
      <label class="required">Nombres <span class="required">*</span></label>   
        <input class="input-block-level" placeholder="Nombres" type="text">
      <label class="required">Email <span class="required">*</span></label>   
        <input class="input-block-level" placeholder="Email" type="text">
     
      <label class="control-label required">Contraseña <span class="required">*</span></label>   
        <input class="input-block-level" placeholder="Password" type="password">
      
      <input class="btn btn-primary pull-right" type="submit" value="Registrarme"> 
    </form>
  </div>

    </div><!-- /.span4 >
  </div--><!-- /.row -->
</div>
</section>

