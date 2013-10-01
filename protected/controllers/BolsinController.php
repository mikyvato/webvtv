<?php

class BolsinController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','admin','assign','deleteField'),
				'roles'=>array('Admin','Operador'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'roles'=>array('Admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		if(isset($_POST['DetalleBolsin']))
		{
			$modelDet=new DetalleBolsin;
			$modelDet->attributes=$_POST['DetalleBolsin'];
			if ($modelDet->factura_idfactura > 0){
				$fac = Factura::model()->findByPk($modelDet->factura_idfactura);
				$fac->estado = 0;
				if (!$fac->save())
					throw new CHttpException(404,'Error al guardar los datos de Factura');	
			}
			if(!$modelDet->save())
				throw new CHttpException(404,'Error al guardar los datos del detalle');
		}

		$this->render('view',array(
			'model'=> $this->loadModel($id),
			'det'=> $this->loadDetail($id,1),
			'fac'=> $this->loadDetail($id,3),
			'detForm'=> new DetalleBolsin,
		));
	}

	public function actionEnviar(){
		$model = loadModel($id);
		$model->estado = 2;

		$model->save();

		$dataProvider=new CActiveDataProvider('Bolsin', array('criteria'=>array(
			'condition'=>'estado > 0',
        	'order'=>'estado DESC',
            ),
			));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Bolsin;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bolsin']))
		{
			$model->attributes=$_POST['Bolsin'];
			$model->fecha = Factura::dateUpdate($model->fecha,1);
			if($model->save())
				$this->redirect(array('view','id'=>$model->idbolsin));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Bolsin']))
		{
			$model->attributes=$_POST['Bolsin'];
			$model->fecha = Factura::dateUpdate($model->fecha,1);
			if($model->save())
				$this->redirect(array('view','id'=>$model->idbolsin));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 */
	public function actionDeleteField()
	{
        if(isset($_POST['id']) && isset($_POST['ajax']) && $_POST['ajax']=='delete')
        {                       
        	$detalle = $this->loadDetail($_POST['id'],2);

        	$idBolsin = $detalle->bolsin_idbolsin;

        	if ($detalle->factura_idfactura > 0){
        		$fact = Factura::model()->findByPk($detalle->factura_idfactura);
				$fact->estado = 1;
				$fact->save();
        	}

        	$detalle->delete();

        	$det = $this->loadDetail($idBolsin,1);
			$fac = $this->loadDetail($idBolsin,3);

        	// pass parent Item back into _itemFields, fourth param set to refresh scripts
        	$this->renderPartial('_listDetalle', array('detalle'=>$det, 'fac'=>$fac));

        	Yii::app()->end();
        }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Bolsin', array('criteria'=>array(
			'condition'=>'estado > 0',
        	'order'=>'estado DESC',
            ),
			));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Bolsin('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Bolsin']))
			$model->attributes=$_GET['Bolsin'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Bolsin the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Bolsin::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadDetail($id,$type)
	{
		if ($type == 1)
		    $det=DetalleBolsin::model()->findAll('bolsin_idbolsin=:idBolsin AND documento_iddocumento <> 1',array(':idBolsin'=>$id));
		if ($type == 2)
			$det=DetalleBolsin::model()->findByPk($id);
		if ($type == 3)
			$det=DetalleBolsin::model()->findAll('bolsin_idbolsin=:idBolsin AND documento_iddocumento = 1',array(':idBolsin'=>$id));
		if($det===null)
			$det = new DetalleBolsin; 
		return $det;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Bolsin $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='bolsin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
