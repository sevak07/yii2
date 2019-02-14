<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h2>Show Article</h2>

<?php
// debug($model);
?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
	<?= $form->field($model, 'name')->label('Name')->passwordInput(); ?>
	<?= $form->field($model, 'email')->input('email') ?>
	<?= $form->field($model, 'text')->textarea(["rows" => 5]) ?>
	<?= $form->field($model, 'checkbox')->checkbox() ?>
	<?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>