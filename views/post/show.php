<?php 
// $this->title = "One Article" 
?>

<?php $this->beginBlock('block1') ?>
<h1>Heading</h1>
<?php $this->endBlock() ?>

<h1>Show Articles</h1>

<?php /* foreach ($cats as $cat) {
	echo $cat->title.'<br>';
} */ ?>

<?php
debug($cats);
?>

<button class="btn btn-success" id="btn">Click Me</button>


<?php 
// $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']); 
?>
<?php 
// $this->registerJs('$(".container").append("<p>SHOW!!!</p>")', \yii\web\View::POS_LOAD);
?>

<?php 
// $this->registerCss(".container{background:red}") 
?>

<?php 
// $this->registerCssFile('@web/css/style.css', ['depends' => 'yii\bootstrap\BootstrapAsset'])
?>
<?php

$js = <<<JS
	$(".btn").on("click", function(){
		$.ajax({
			url:'index.php?r=post/index',
			data:{test: "123"},
			type:"POST",
			success:function(res){
				console.log(res);
			}
		})
	})
JS;

$this->registerJs($js);


?>