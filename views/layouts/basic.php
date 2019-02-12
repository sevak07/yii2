<?php


use app\assets\AppAsset;

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
	<h1>Hello, Basic</h1>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>