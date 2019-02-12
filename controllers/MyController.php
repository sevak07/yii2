<?php

namespace app\controllers;



class MyController extends AppController{

	public function actionIndex($id = null) {
		$hi = "Hello World";
		$names = ["Ivanov", "Petrov", "Sidorov"];
		if(!$id){
			$id = "vsbsbsbs";
		}
		return $this->render("index", compact("hi", "names", "id"));
		// return "Action Index";
	}

	public function actionBlogPost(){
		return "Blog Post";
	}

}