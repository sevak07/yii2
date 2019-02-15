<?php 

namespace app\models;
use yii\base\Model;

class TestForm extends Model {

	public $name;
	public $email;
	public $text;
	public $checkbox;

	public function attributeLabels(){
		return [
			'name' => 'Name',
			'email' => 'E-mail',
			'text' => 'Text Message'
		];
	}

	public function rules(){
		return [
			[['name', 'email'], 'required', 'message' => 'Dashty partadir piti lracvi'],
			['email', 'email'],
			// ['name' ,'string', 'min' => 2, 'tooShort' => '2 taric pakas chpiti lini'],
			// ['name' ,'string', 'max' => 10, 'tooLong' => '10 taric avel chpiti lini']
			['name', 'string', 'length' => [2,5]],
			['name', 'myRule'],
			['text', 'safe']
		];
	}

	public function myRule($attr){
		if( !in_array($this->$attr, ['Web', 'USA']) ){
			$this->addError($attr, 'Name must be Web or USA');
		}
	}

}