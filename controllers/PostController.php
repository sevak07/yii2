<?php

namespace app\controllers;
use Yii;
use app\models\TestForm;

class PostController extends AppController{

	public $layout = 'basic';

	public function beforeAction($action){
		if( $action->id == "index"){
			$this->enableCsrfValidation = false;
		}
		return parent::beforeAction($action);
	}

	public function actionIndex(){
		if(Yii::$app->request->isAjax) {
			debug(Yii::$app->request->post());
			return 'test';
		}

		$model = new TestForm();

		return $this->render("test", compact('model') );
	}

	public function actionShow(){
		// $this->layout = "basic";
		$this->view->title = "One Article";
		return $this->render("show");
	}
}