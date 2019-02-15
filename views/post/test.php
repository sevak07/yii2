<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
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
	<?= $form->field($model, 'checkbox')->checkbox() ?>
	<?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
