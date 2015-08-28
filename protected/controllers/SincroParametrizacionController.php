<?php

class SincroParametrizacionController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'cargartabla', 'obtenercolumnas'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SincroParametrizacion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SincroParametrizacion']))
		{
			$sNombreTabla = $_POST['SincroParametrizacion']['nombre_tabla'];
			$sCampDet = implode("|", $_POST['SincroParametrizacion']['campos_det']);
			$model->nombre_tabla = $sNombreTabla;
			$model->campos_det = $sCampDet;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['SincroParametrizacion']))
		{
			$sNombreTabla = $_POST['SincroParametrizacion']['nombre_tabla'];
			$sCampDet = implode("|", $_POST['SincroParametrizacion']['campos_det']);
			$model->nombre_tabla = $sNombreTabla;
			$model->campos_det = $sCampDet;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */			
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Solicitud Inválida. Por favor no repita la solicitud nuevamente.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SincroParametrizacion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SincroParametrizacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SincroParametrizacion']))
			$model->attributes=$_GET['SincroParametrizacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	* Permite obtener las columnas de la tabla seleccionada
	*/
	public function actionObtenerColumnas()
	{
		$sTablaId = $_POST['nombre_tabla'];
		$aryExtra = array('todo'=>'todo', 'dia'=>'dia', 'fecha'=>'inversa', 'inversa'=>'inversa');
		$aTablas = Yii::app()->db->schema->getTableNames();
		$sNombretabla = $aTablas[$sTablaId];
		$aColumnas = Yii::app()->db->schema->getTable($sNombretabla)->columns;
		$ary=array();
		$iCount = 0;
		foreach ($aryExtra as $key => $value) {
			$ary[$iCount]['id'] = $key;
			$ary[$iCount]['name'] = $key;
			$iCount++;
		}
		foreach($aColumnas as $key => $obj)
		{
			$ary[$iCount]['id'] = $key;
			$ary[$iCount]['name'] = $key;            
			$iCount++;
		}
		echo json_encode($ary);
	}

	public function actionMenuSincron(){
		$sNombreModelo = (array_key_exists('modelo', $_GET))?$_GET['modelo']:'';
		if ($sNombreModelo != '') {
			// Obtenemos el nombre de la tabla
			// Hacemos una consulta para verificar si la tabla como tal tiene una configuracion de sincronizacion
			// Si existe la configuracion la devolvemos en un Json
		}
	}

	/**
	* Permite obtener las columnas de la tabla seleccionada
	*/
	public function getColumnas($sTablaId)
	{
		$aryExtra = array('todo'=>'todo', 'dia'=>'dia', 'fecha'=>'inversa', 'inversa'=>'inversa');
		$aTablas = Yii::app()->db->schema->getTableNames();
		$sNombretabla = $aTablas[$sTablaId];
		$aColumnas = Yii::app()->db->schema->getTable($sNombretabla)->columns;
		$ary=array();
		$iCount = 0;
		foreach ($aryExtra as $key => $value) {
			$ary[$iCount]['id'] = $key;
			$ary[$iCount]['name'] = $key;
			$iCount++;
		}
		foreach($aColumnas as $key => $obj)
		{
			$ary[$iCount]['id'] = $key;
			$ary[$iCount]['name'] = $key;            
			$iCount++;
		}
		return $ary;
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=SincroParametrizacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sincro-parametrizacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
