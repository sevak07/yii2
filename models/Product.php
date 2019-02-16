<?php  

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord {

	public static function tableName(){
		return 'products';
	}

	public function getCategories(){
		return $this->hasOne(Category::classname(), ['product_id' => 'id']);
	}


}