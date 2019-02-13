<?php


use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<div class="wrap">
		<div class="container">
			<ul class="nav nav-tabs">
			    <li role="presentation" class="active"><?= Html::a('Main', '/web/') ?></li>
			    <li role="presentation"><?= Html::a('Articles', ['post/index']) ?></li>
			    <li role="presentation"><?= Html::a('Article', ['post/show']) ?></li>
			</ul>
		</div>
		<div class="container">        
	        <?= $content ?>
	    </div>
	</div>
	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>