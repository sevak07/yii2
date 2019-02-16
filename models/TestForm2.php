<?php 

namespace app\models;
use yii\db\ActiveRecord;

class TestForm2 extends ActiveRecord {

	public static function tableName(){
		return 'posts';
	}

	public function attributeLabels(){
		return [
			'name' => 'Name',
			'email' => 'E-mail',
			'text' => 'Text Message'
		];
	}

	public function rules(){
		return [
			[['name', 'text'], 'required', 'message' => 'Dashty partadir piti lracvi'],
			['email', 'safe'],
		];
	}

}