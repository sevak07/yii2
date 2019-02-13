<?php

namespace app\controllers;
use Yii;

class PostController extends AppController{

	public $layout = 'basic';

	public function beforeAction($action){
		// debug($action);
		if( $action->id == "index"){
			$this->enableCsrfValidation = false;
		}
		return parent::beforeAction($action);
	}

	public function actionIndex(){
		if(Yii::$app->request->isAjax) {
			debug(Yii::$app->request->post());
			// debug($_POST);
			return 'test';
		}
		return $this->render("test");
	}

	public function actionShow(){
		// $this->layout = "basic";
		$this->view->title = "One Article";
		return $this->render("show");
	}
}