<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
?>

<h2>Show Article</h2>

<?php
// debug($model);
?>

<?php if(Yii::$app->session->hasFlash('success')): ?>	
	<div class="alert alert-success alert-dismissible" role="alert">
	  	<?php  echo Yii::$app->session->getFlash('success') ?>
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  	</button>
	</div>
<?php endif; ?>
<?php if(Yii::$app->session->hasFlash('error')): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	  	<?php  echo Yii::$app->session->getFlash('error') ?>
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  	</button>
	</div>
<?php endif; ?>



<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
	<?= $form->field($model, 'name')->label('Name'); ?>
	<?= $form->field($model, 'email')->input('email') ?>
	<?= $form->field($model, 'text')->textarea(["rows" => 5]) ?>
	<?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
	<?php 
		echo $form->field($model, 'text')->widget(CKEditor::className(),[
		    'editorOptions' => [
		        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
		        'inline' => false, //по умолчанию false
		    ],
		]);
	 ?>
<?php ActiveForm::end() ?>
