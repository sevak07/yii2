<?php

namespace app\controllers;
use Yii;
use app\models\TestForm;
use app\models\Category;

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
		if($model->load(Yii::$app->request->post())){
			if($model->validate()){
				Yii::$app->session->setFlash('success', 'Data accepted');
				return $this->refresh();
			} else {
				Yii::$app->session->setFlash('error', 'Validation error');
				// debug(Yii::$app->session->getFlash('success'));die;
			}
		}

		return $this->render("test", compact('model') );
	}

	public function actionShow(){
		// $this->layout = "basic";
		$this->view->title = "One Article";

		$cats = Category::find()->all();

		return $this->render("show", compact('cats'));
	}
}