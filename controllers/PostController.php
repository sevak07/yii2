<?php

namespace app\controllers;
use Yii;
use app\models\TestForm;
use app\models\TestForm2;
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

		// $model = new TestForm();
		$model = new TestForm2();
		// $model->name = 'Hexinak';
		// $model->email = 'hexinak@mail.ru';
		// $model->text = 'barev dzezi';
		// $model->save();

		// $post = TestForm2::findOne(3);
		// $post->email = 'a202@mail.ru';
		// $post->save();

		// $post->delete();

		// TestForm2::deleteAll(['>', 'id', 3]);
		// TestForm2::deleteAll();

		if($model->load(Yii::$app->request->post())){
			if($model->save()){
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

		// $cats = Category::find()->all();
		// $cats = Category::find()->orderBy(['id' => SORT_DESC])->all();
		// $cats = Category::find()->asArray()->orderBy(['id' => SORT_DESC])->all();
		// $cats = Category::find()->asArray()->where('parent=4')->all();
		// $cats = Category::find()->asArray()->where(['parent' => 4])->all();
		// $cats = Category::find()->asArray()->where(['like', 'title', 'ew'])->all();
		// $cats = Category::find()->asArray()->where(['<=', 'id', 3])->all();
		// $cats = Category::find()->asArray()->where('parent=2')->limit(1)->all();
		// $cats = Category::find()->asArray()->where('parent=2')->one();
		// $cats = Category::find()->asArray()->where('parent=2')->count();
		// $cats = Category::find()->asArray()->count();
		// $cats = Category::findOne(['parent' => 2]);
		// $cats = Category::findAll(['parent' => 2]);
		// $query = "SELECT * FROM categories WHERE title LIKE '%ew%'";   sxal a
		// $cats = Category::findBySql($query)->all();
		// $query = "SELECT * FROM categories WHERE title LIKE :search";   
		// $cats = Category::findBySql($query, [':search' => '%ew%'])->all();
		// $cats = Category::findOne(1);
		// $cats = Category::find()->with('products')->where('id=1')->all();
		// $cats = Category::find()->all();  //lenivaya ili otlojennaya
		$cats = Category::find()->with('products')->all();  // jadnaya zagruzka dannix

		return $this->render("show", compact('cats'));
	}
}